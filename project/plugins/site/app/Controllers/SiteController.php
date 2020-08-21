<?php

declare(strict_types=1);

/**
 * @link https://flextype.org
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Flextype\Plugin\Site\Controllers;

use Slim\Http\Environment;
use Slim\Http\Uri;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use function ltrim;
use Flextype\Component\Filesystem\Filesystem;

class SiteController
{
    /**
     * Current entry data array
     *
     * @var array
     * @access private
     */
    public $entry = [];

    /**
     * Flextype
     */
    protected $flextype;

    /**
     * __construct
     */
    public function __construct($flextype)
    {
        $this->flextype = $flextype;
    }

    /**
     * Index page
     *
     * @param Request  $request  PSR7 request
     * @param Response $response PSR7 response
     * @param array    $args     Args
     */
    public function index(Request $request, Response $response, array $args) : Response
    {
        // Get Query Params
        $query = $request->getQueryParams();

        // Get uri
        $uri = $args['uri'];

        // Is JSON Format
        $is_json = isset($query['format']) && $query['format'] === 'json';

        // If uri is empty then it is main entry else use entry uri
        if ($uri === '/') {
            $entry_uri = $this->flextype->container('registry')->get('plugins.site.settings.entries.main');
        } else {
            $entry_uri = ltrim($uri, '/');
        }

        // Get entry body
        $entry_body = $this->flextype->container('entries')->fetch($entry_uri);

        // is entry not found
        $is_entry_not_found = false;

        // If entry body is not false
        if ($entry_body) {
            // Get 404 page if entry visibility is draft or hidden and if routable is false
            if ((isset($entry_body['visibility']) && ($entry_body['visibility'] === 'draft' || $entry_body['visibility'] === 'hidden')) ||
                (isset($entry_body['routable']) && ($entry_body['routable'] === false))) {
                $entry              = $this->error404();
                $is_entry_not_found = true;
            } else {
                $entry = $entry_body;
            }
        } else {
            $entry              = $this->error404();
            $is_entry_not_found = true;
        }

        // Set entry
        $this->entry = $entry;

        // Run event onSiteEntryAfterInitialized
        $this->flextype->container('emitter')->emit('onSiteEntryAfterInitialized');

        // Return in JSON Format
        if ($is_json) {
            if ($is_entry_not_found) {
                return $response->withJson($this->entry, 404);
            }

            return $response->withJson($this->entry);
        }

        // Set template path for current entry
        $path = 'themes/' . $this->flextype->container('registry')->get('plugins.site.settings.theme') . '/' . (empty($this->entry['template']) ? 'templates/default' : 'templates/' . $this->entry['template']) . '.html';

        self::includeCurrentThemeBootstrap($this->flextype);

        if (! Filesystem::has(PATH['project'] . '/' . $path)) {
            return $response->write("Template {$this->entry['template']} not found");
        }

        if ($uri === '/') {
            return $response->withRedirect('./en');
        }

        if ($is_entry_not_found) {
            return $this->flextype->container('twig')->render($response->withStatus(404), $path, ['locale' => explode('/',$uri)[1], 'entry' => $this->entry, 'query' => $query, 'uri' => $uri]);
        }

        return $this->flextype->container('twig')->render($response, $path, ['locale' => explode('/',$uri)[1], 'entry' => $this->entry, 'query' => $query, 'uri' => $uri]);
    }

    private static function includeCurrentThemeBootstrap($flextype)
    {
        $bootstrap_path = 'themes/' . $flextype->container('registry')->get('plugins.site.settings.theme') . '/bootstrap.php';

        if (Filesystem::has(PATH['project'] . '/' . $bootstrap_path)) {
            include_once PATH['project'] . '/' . $bootstrap_path;
        }
    }

    /**
     * Error404 page
     *
     * @return array The 404 error entry array data.
     *
     * @access public
     */
    public function error404() : array
    {
        return [
            'title'       => $this->flextype->container('registry')->get('plugins.site.settings.entries.error404.title'),
            'description' => $this->flextype->container('registry')->get('plugins.site.settings.entries.error404.description'),
            'content'     => $this->flextype->container('registry')->get('plugins.site.settings.entries.error404.content'),
            'template'    => $this->flextype->container('registry')->get('plugins.site.settings.entries.error404.template'),
        ];
    }
}
