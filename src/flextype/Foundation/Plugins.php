<?php

declare(strict_types=1);

/**
 * Flextype (https://flextype.org)
 * Founded by Sergey Romanenko and maintained by Flextype Community.
 */

namespace Flextype\Foundation;

use Atomastic\Macroable\Macroable;
use Composer\Semver\Semver;
use Flextype\Component\I18n\I18n;
use RuntimeException;

use function array_diff_key;
use function array_replace_recursive;
use function arrays;
use function count;
use function filemtime;
use function filesystem;
use function flextype;
use function is_array;
use function md5;
use function trim;

class Plugins
{
    use Macroable;
    
    /**
     * Locales array
     *
     * @var array
     */
    private $locales = [];

    /**
     * Constructor
     *
     * @access public
     */
    public function __construct()
    {
        $this->locales = flextype('yaml')->decode(filesystem()->file(ROOT_DIR . '/src/flextype/locales.yaml')->get());
    }

    /**
     * Get locales
     *
     * @return array
     *
     * @access public
     */
    public function getLocales(): array
    {
        return $this->locales;
    }

    /**
     * Init Plugins
     *
     * @access public
     */
    public function init(): void
    {
        // Set empty plugins item
        flextype('registry')->set('plugins', []);

        // Set locale
        $locale = flextype('registry')->get('flextype.settings.locale');

        // Get plugins list
        $plugins_list = $this->getPluginsList();

        // Get plugins Cache ID
        $plugins_cache_id = $this->getPluginsCacheID($plugins_list);

        // If Plugins List isnt empty then continue
        if (count($plugins_list) <= 0) {
            return;
        }

        // Get plugins from cache or scan plugins folder and create new plugins cache item
        if (flextype('cache')->has($plugins_cache_id)) {
            flextype('registry')->set('plugins', flextype('cache')->get($plugins_cache_id));

            if (flextype('cache')->has($locale)) {
                I18n::add(flextype('cache')->get($locale), $locale);
            } else {
                // Save plugins dictionary
                $dictionary = $this->getPluginsDictionary($plugins_list, $locale);
                flextype('cache')->set($locale, $dictionary[$locale]);
            }
        } else {
            // Init plugin configs
            $plugins                 = [];
            $default_plugin_settings = [];
            $project_plugin_settings = [];
            $default_plugin_manifest = [];

            // Go through...
            foreach ($plugins_list as $plugin) {
                // Set plugin settings directory
                $project_plugin_settings_dir = PATH['project'] . '/config/plugins/' . $plugin['dirname'];

                // Set default plugin settings and manifest files
                $default_plugin_settings_file = PATH['project'] . '/plugins/' . $plugin['dirname'] . '/settings.yaml';
                $default_plugin_manifest_file = PATH['project'] . '/plugins/' . $plugin['dirname'] . '/plugin.yaml';

                // Set project plugin settings file
                $project_plugin_settings_file = PATH['project'] . '/config/plugins/' . $plugin['dirname'] . '/settings.yaml';

                // Create project plugin settings directory
                ! filesystem()->directory($project_plugin_settings_dir)->exists() and filesystem()->directory($project_plugin_settings_dir)->create(0755, true);

                // Check if default plugin settings file exists
                if (! filesystem()->file($default_plugin_settings_file)->exists()) {
                    throw new RuntimeException('Load ' . $plugin['dirname'] . ' plugin settings - failed!');
                }

                // Get default plugin settings content
                $default_plugin_settings_file_content = filesystem()->file($default_plugin_settings_file)->get();
                $default_plugin_settings              = flextype('yaml')->decode($default_plugin_settings_file_content);

                // Create project plugin settings file
                ! filesystem()->file($project_plugin_settings_file)->exists() and filesystem()->file($project_plugin_settings_file)->put($default_plugin_settings_file_content);

                // Get project plugin settings content
                $project_plugin_settings_file_content = filesystem()->file($project_plugin_settings_file)->get();

                if (trim($project_plugin_settings_file_content) === '') {
                    $project_plugin_settings = [];
                } else {
                    $project_plugin_settings = flextype('yaml')->decode($project_plugin_settings_file_content);
                }

                // Check if default plugin manifest file exists
                if (! filesystem()->file($default_plugin_manifest_file)->exists()) {
                    throw new RuntimeException('Load ' . $plugin['dirname'] . ' plugin manifest - failed!');
                }

                // Get default plugin manifest content
                $default_plugin_manifest_file_content = filesystem()->file($default_plugin_manifest_file)->get();
                $default_plugin_manifest              = flextype('yaml')->decode($default_plugin_manifest_file_content);

                // Merge plugin settings and manifest data
                $plugins[$plugin['dirname']]['manifest'] = $default_plugin_manifest;
                $plugins[$plugin['dirname']]['settings'] = array_replace_recursive($default_plugin_settings, $project_plugin_settings);

                // Check if is not set plugin priority
                if (! isset($plugins[$plugin['dirname']]['settings']['priority'])) {
                    // Set default plugin priority = 1
                    $plugins[$plugin['dirname']]['settings']['priority'] = 100;
                }

                // Set tmp _priority field for sorting
                $plugins[$plugin['dirname']]['_priority'] = $plugins[$plugin['dirname']]['settings']['priority'];
            }

            // Sort plugins list by priority.
            $plugins = arrays($plugins)->sortBy('_priority', 'DESC')->toArray();

            // ... and delete tmp _priority field for sorting
            foreach ($plugins as $plugin_name => $plugin_data) {
                $plugins[$plugin_name] = arrays($plugins)->delete($plugin_name . '._priority')->toArray();
            }

            // Get Valid Plugins Dependencies
            $plugins = $this->getValidPluginsDependencies($plugins);

            // Save plugins list
            flextype('registry')->set('plugins', $plugins);
            flextype('cache')->set($plugins_cache_id, $plugins);

            // Save plugins dictionary
            $dictionary = $this->getPluginsDictionary($plugins_list, $locale);
            flextype('cache')->set($locale, $dictionary[$locale]);
        }

        $this->includeEnabledPlugins();

        flextype('emitter')->emit('onPluginsInitialized');
    }

    /**
     * Get plugins dictionary
     *
     * @param  array $plugins_list Plugins list
     *
     * @access private
     */
    public function getPluginsDictionary(array $plugins_list, string $locale): array
    {
        foreach ($plugins_list as $plugin) {
            $language_file = PATH['project'] . '/plugins/' . $plugin['dirname'] . '/lang/' . $locale . '.yaml';

            if (! filesystem()->file($language_file)->exists()) {
                continue;
            }

            if (($content = filesystem()->file($language_file)->get()) === false) {
                throw new RuntimeException('Load file: ' . $language_file . ' - failed!');
            }

            $translates = flextype('yaml')->decode($content);

            I18n::add($translates, $locale);
        }

        return I18n::$dictionary;
    }

    /**
     * Get plugins Cache ID
     *
     * @param  array $plugins_list Plugins list
     *
     * @access private
     */
    public function getPluginsCacheID(array $plugins_list): string
    {
        // Plugin cache id
        $_plugins_cache_id = '';

        // Go through...
        if (is_array($plugins_list) && count($plugins_list) > 0) {
            foreach ($plugins_list as $plugin) {
                $default_plugin_settings_file = PATH['project'] . '/plugins/' . $plugin['dirname'] . '/settings.yaml';
                $default_plugin_manifest_file = PATH['project'] . '/plugins/' . $plugin['dirname'] . '/plugin.yaml';
                $project_plugin_settings_file = PATH['project'] . '/config/plugins/' . $plugin['dirname'] . '/settings.yaml';

                $f1 = filesystem()->file($default_plugin_settings_file)->exists() ? filemtime($default_plugin_settings_file) : '';
                $f2 = filesystem()->file($default_plugin_manifest_file)->exists() ? filemtime($default_plugin_manifest_file) : '';
                $f3 = filesystem()->file($project_plugin_settings_file)->exists() ? filemtime($project_plugin_settings_file) : '';

                $_plugins_cache_id .= $f1 . $f2 . $f3;
            }
        }

        // Create Unique Cache ID for Plugins
        return md5('plugins' . PATH['project'] . '/plugins/' . $_plugins_cache_id);
    }

    /**
     * Get valid plugins dependencies
     *
     * @param  array $plugins Plugins list
     *
     * @access public
     */
    public function getValidPluginsDependencies(array $plugins): array
    {
        // Set verified plugins array
        $verified_plugins = [];

        // Set non verfied plugins
        $non_verified_plugins = $plugins;

        // Go through plugins list and verify them.
        foreach ($plugins as $plugin_name => &$plugin_data) {
            // Set verified true by default
            $verified = true;

            // If there is any dependencies for this plugin
            if (isset($plugin_data['manifest']['dependencies'])) {
                // Go through plugin dependencies
                foreach ($plugin_data['manifest']['dependencies'] as $dependency => $constraints) {
                    // Verify flextype version
                    if ($dependency === 'flextype') {
                        if (! Semver::satisfies(flextype('registry')->get('flextype.manifest.version'), $constraints)) {
                            $verified = false;

                            // Remove plugin where it is require this dependency
                            foreach ($plugins as $_plugin_name => $_plugin_data) {
                                if (! $_plugin_data['manifest']['dependencies'][$plugin_name]) {
                                    continue;
                                }

                                unset($plugins[$_plugin_name]);
                                unset($verified_plugins[$_plugin_name]);
                            }
                        }
                    } else {
                        // Verify plugin dependencies
                        if (! isset($plugins[$dependency])) {
                            $verified = false;

                            // Remove plugin where it is require this dependency
                            foreach ($plugins as $_plugin_name => $_plugin_data) {
                                if (! $_plugin_data['manifest']['dependencies'][$plugin_name]) {
                                    continue;
                                }

                                unset($plugins[$_plugin_name]);
                                unset($verified_plugins[$_plugin_name]);
                            }
                        } else {
                            $version = $plugins[$dependency]['manifest']['version'];
                            if (! Semver::satisfies($version, $constraints)) {
                                $verified = false;

                                // Remove plugin where it is require this dependency
                                foreach ($plugins as $_plugin_name => $_plugin_data) {
                                    if (! $_plugin_data['manifest']['dependencies'][$plugin_name]) {
                                        continue;
                                    }

                                    unset($plugins[$_plugin_name]);
                                    unset($verified_plugins[$_plugin_name]);
                                }
                            }
                        }
                    }
                }
            }

            // If plugin is verified than include it
            if (! $verified) {
                continue;
            }

            $verified_plugins[$plugin_name] = $plugin_data;
        }

        // Show alert if dependencies are not installed properly
        $diff = array_diff_key($non_verified_plugins, $verified_plugins);
        if (count($diff) > 0) {
            echo '<b>Dependencies need to be installed properly for this plugins:</b>';
            echo '<ul>';
            foreach ($diff as $plugin_name => $plugin_data) {
                echo '<li>' . $plugin_name . '</li>';
            }

            echo '</ul>';
            die;
        }

        // Return verified plugins list
        return $verified_plugins;
    }

    /**
     * Get plugins list
     *
     * @return array
     *
     * @access public
     */
    public function getPluginsList(): array
    {
        // Get Plugins List
        $plugins_list = [];

        if (filesystem()->directory(PATH['project'] . '/plugins/')->exists()) {
            foreach (filesystem()->find()->in(PATH['project'] . '/plugins/')->directories()->depth(0) as $plugin) {
                $plugins_list[$plugin->getBasename()]['dirname']  = $plugin->getBasename();
                $plugins_list[$plugin->getBasename()]['pathname'] = $plugin->getPathname();
            }
        }

        return $plugins_list;
    }

    /**
     * Include enabled plugins
     *
     * @access private
     */
    private function includeEnabledPlugins(): void
    {
        if (! is_array(flextype('registry')->get('plugins')) || count(flextype('registry')->get('plugins')) <= 0) {
            return;
        }

        foreach (flextype('registry')->get('plugins') as $plugin_name => $plugin) {
            if (! flextype('registry')->get('plugins.' . $plugin_name . '.settings.enabled')) {
                continue;
            }

            include_once PATH['project'] . '/plugins/' . $plugin_name . '/bootstrap.php';
        }
    }
}
