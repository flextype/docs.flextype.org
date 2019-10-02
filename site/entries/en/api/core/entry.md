---
title: Core API
---

- [\Flextype\FrontmatterParser](#class-flextypefrontmatterparser)
- [\Flextype\Parser](#class-flextypeparser)
- [\Flextype\YamlParser](#class-flextypeyamlparser)
- [\Flextype\JsonParser](#class-flextypejsonparser)
- [\Flextype\Entries](#class-flextypeentries)
- [\Flextype\Snippets](#class-flextypesnippets)
- [\Flextype\Controller](#class-flextypecontroller)
- [\Flextype\Themes](#class-flextypethemes)
- [\Flextype\Cache](#class-flextypecache)
- [\Flextype\Fieldsets](#class-flextypefieldsets)
- [\Flextype\Plugins](#class-flextypeplugins)
- [\Flextype\Middleware](#class-flextypemiddleware)
- [\Flextype\Forms](#class-flextypeforms)
- [\Flextype\AuthMiddleware](#class-flextypeauthmiddleware)
- [\Flextype\EmitterTwigExtension](#class-flextypeemittertwigextension)
- [\Flextype\MarkdownTwigExtension](#class-flextypemarkdowntwigextension)
- [\Flextype\SnippetsTwigExtension](#class-flextypesnippetstwigextension)
- [\Flextype\I18nTwigExtension](#class-flextypei18ntwigextension)
- [\Flextype\AssetsTwigExtension](#class-flextypeassetstwigextension)
- [\Flextype\FlashTwigExtension](#class-flextypeflashtwigextension)
- [\Flextype\JsonTwigExtension](#class-flextypejsontwigextension)
- [\Flextype\CsrfTwigExtension](#class-flextypecsrftwigextension)
- [\Flextype\EntriesTwigExtension](#class-flextypeentriestwigextension)
- [\Flextype\FilesystemTwigExtension](#class-flextypefilesystemtwigextension)
- [\Flextype\ShortcodesTwigExtension](#class-flextypeshortcodestwigextension)
- [\Flextype\YamlTwigExtension](#class-flextypeyamltwigextension)
- [\Flextype\GlobalVarsTwigExtension](#class-flextypeglobalvarstwigextension)

<hr /><a id="class-flextypefrontmatterparser"></a>
### Class: \Flextype\FrontmatterParser

| Visibility | Function |
|:-----------|:---------|
| public static | <strong>decode(</strong><em>\string</em> <strong>$input</strong>)</strong> : <em>void</em> |
| public static | <strong>encode(</strong><em>mixed</em> <strong>$input</strong>)</strong> : <em>void</em> |
| public static | <strong>parser(</strong><em>\string</em> <strong>$content</strong>)</strong> : <em>array</em><br /><em>Front matter parser</em> |

<hr /><a id="class-flextypeparser"></a>
### Class: \Flextype\Parser

| Visibility | Function |
|:-----------|:---------|
| public static | <strong>decode(</strong><em>\string</em> <strong>$input</strong>, <em>\string</em> <strong>$parser</strong>)</strong> : <em>void</em> |
| public static | <strong>encode(</strong><em>mixed</em> <strong>$input</strong>, <em>\string</em> <strong>$parser</strong>)</strong> : <em>void</em> |

<hr /><a id="class-flextypeyamlparser"></a>
### Class: \Flextype\YamlParser

| Visibility | Function |
|:-----------|:---------|
| public static | <strong>decode(</strong><em>\string</em> <strong>$input</strong>, <em>int/\integer</em> <strong>$flags</strong>)</strong> : <em>mixed The YAML converted to a PHP value</em><br /><em>Parses YAML into a PHP value. $array = YamlParser::decode($yaml_file_content);</em> |
| public static | <strong>encode(</strong><em>mixed</em> <strong>$input</strong>, <em>\integer</em> <strong>$inline=5</strong>, <em>\integer</em> <strong>$indent=2</strong>, <em>\integer</em> <strong>$flags=16</strong>)</strong> : <em>string A YAML string representing the original PHP value</em><br /><em>Dumps a PHP value to a YAML string. The dump method, when supplied with an array, will do its best to convert the array into friendly YAML.</em> |

<hr /><a id="class-flextypejsonparser"></a>
### Class: \Flextype\JsonParser

| Visibility | Function |
|:-----------|:---------|
| public static | <strong>decode(</strong><em>\string</em> <strong>$input</strong>, <em>\boolean</em> <strong>$decode_assoc=true</strong>, <em>\integer</em> <strong>$decode_depth=512</strong>, <em>int/\integer</em> <strong>$decode_options</strong>)</strong> : <em>mixed The JSON converted to a PHP value</em><br /><em>Takes a JSON encoded string and converts it into a PHP variable. $array = JsonParser::decode($json_file_content);</em> |
| public static | <strong>encode(</strong><em>mixed</em> <strong>$input</strong>, <em>int/\integer</em> <strong>$encode_options</strong>, <em>\integer</em> <strong>$encode_depth=512</strong>)</strong> : <em>mixed The JSON converted to a PHP value</em><br /><em>Returns the JSON representation of a value $result = JsonParser::encode($json_content);</em> |

<hr /><a id="class-flextypeentries"></a>
### Class: \Flextype\Entries

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>mixed</em> <strong>$flextype</strong>)</strong> : <em>void</em><br /><em>Constructor</em> |
| public | <strong>copy(</strong><em>\string</em> <strong>$id</strong>, <em>\string</em> <strong>$new_id</strong>, <em>\boolean</em> <strong>$recursive=false</strong>)</strong> : <em>bool/null True on success, false on failure.</em><br /><em>Copy entry(s)</em> |
| public | <strong>create(</strong><em>\string</em> <strong>$id</strong>, <em>array</em> <strong>$data</strong>)</strong> : <em>bool True on success, false on failure.</em><br /><em>Create entry</em> |
| public | <strong>delete(</strong><em>\string</em> <strong>$id</strong>)</strong> : <em>bool True on success, false on failure.</em><br /><em>Delete entry</em> |
| public | <strong>fetch(</strong><em>\string</em> <strong>$id</strong>)</strong> : <em>array/false The entry array data or false on failure.</em><br /><em>Fetch single entry</em> |
| public | <strong>fetchAll(</strong><em>\string</em> <strong>$id</strong>, <em>array</em> <strong>$args=array()</strong>)</strong> : <em>array The entries array data</em><br /><em>Fetch entries collection</em> |
| public | <strong>getDirLocation(</strong><em>\string</em> <strong>$id</strong>)</strong> : <em>string entry directory location</em><br /><em>Get entry directory location</em> |
| public | <strong>getFileLocation(</strong><em>\string</em> <strong>$id</strong>)</strong> : <em>string entry file location</em><br /><em>Get entry file location</em> |
| public | <strong>has(</strong><em>\string</em> <strong>$id</strong>)</strong> : <em>bool True on success, false on failure.</em><br /><em>Check whether entry exists</em> |
| public | <strong>rename(</strong><em>\string</em> <strong>$id</strong>, <em>\string</em> <strong>$new_id</strong>)</strong> : <em>bool True on success, false on failure.</em><br /><em>Rename entry</em> |
| public | <strong>update(</strong><em>\string</em> <strong>$id</strong>, <em>array</em> <strong>$data</strong>)</strong> : <em>bool True on success, false on failure.</em><br /><em>Update entry</em> |

<hr /><a id="class-flextypesnippets"></a>
### Class: \Flextype\Snippets

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>mixed</em> <strong>$flextype</strong>, <em>mixed</em> <strong>$app</strong>)</strong> : <em>void</em><br /><em>Constructor</em> |
| public | <strong>copy(</strong><em>\string</em> <strong>$id</strong>, <em>\string</em> <strong>$new_id</strong>)</strong> : <em>bool True on success, false on failure.</em><br /><em>Copy snippet</em> |
| public | <strong>create(</strong><em>\string</em> <strong>$id</strong>, <em>\string</em> <strong>$data=`''`</strong>)</strong> : <em>bool True on success, false on failure.</em><br /><em>Create snippet</em> |
| public | <strong>delete(</strong><em>\string</em> <strong>$id</strong>)</strong> : <em>bool True on success, false on failure.</em><br /><em>Delete snippet</em> |
| public | <strong>exec(</strong><em>\string</em> <strong>$id</strong>)</strong> : <em>string/bool Returns the contents of the output buffer and end output buffering. If output buffering isn't active then FALSE is returned.</em><br /><em>Exec snippet</em> |
| public | <strong>fetch(</strong><em>\string</em> <strong>$id</strong>)</strong> : <em>string/false The snippet contents or false on failure.</em><br /><em>Fetch snippet</em> |
| public | <strong>fetchAll()</strong> : <em>array</em><br /><em>Fetch Snippets</em> |
| public | <strong>getDirLocation()</strong> : <em>string Snippet dir path</em><br /><em>Helper method getDirLocation</em> |
| public | <strong>getFileLocation(</strong><em>\string</em> <strong>$id</strong>)</strong> : <em>string Snippet file path</em><br /><em>Helper method getFileLocation</em> |
| public | <strong>has(</strong><em>\string</em> <strong>$id</strong>)</strong> : <em>bool True on success, false on failure.</em><br /><em>Check whether snippet exists.</em> |
| public | <strong>rename(</strong><em>\string</em> <strong>$id</strong>, <em>\string</em> <strong>$new_id</strong>)</strong> : <em>bool True on success, false on failure.</em><br /><em>Rename snippet</em> |
| public | <strong>update(</strong><em>\string</em> <strong>$id</strong>, <em>\string</em> <strong>$data</strong>)</strong> : <em>bool True on success, false on failure.</em><br /><em>Update Snippet</em> |

<hr /><a id="class-flextypecontroller"></a>
### Class: \Flextype\Controller

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>mixed</em> <strong>$container</strong>)</strong> : <em>void</em><br /><em>__construct</em> |
| public | <strong>__get(</strong><em>mixed</em> <strong>$property</strong>)</strong> : <em>void</em><br /><em>__get</em> |

<hr /><a id="class-flextypethemes"></a>
### Class: \Flextype\Themes

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>mixed</em> <strong>$flextype</strong>)</strong> : <em>void</em><br /><em>Private construct method to enforce singleton behavior.</em> |
| public | <strong>getPartials(</strong><em>\string</em> <strong>$theme</strong>)</strong> : <em>array</em><br /><em>Get partials for theme</em> |
| public | <strong>getTemplates(</strong><em>\string</em> <strong>$theme</strong>)</strong> : <em>array</em><br /><em>Get templates for theme</em> |
| public | <strong>getThemes()</strong> : <em>array</em><br /><em>Get list of themes</em> |
| public | <strong>init(</strong><em>mixed</em> <strong>$flextype</strong>, <em>mixed</em> <strong>$app</strong>)</strong> : <em>void</em><br /><em>Init themes</em> |

<hr /><a id="class-flextypecache"></a>
### Class: \Flextype\Cache

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>mixed</em> <strong>$flextype</strong>)</strong> : <em>void</em><br /><em>Constructor</em> |
| public | <strong>clear(</strong><em>\string</em> <strong>$id</strong>)</strong> : <em>void</em><br /><em>Clear Cache</em> |
| public | <strong>clearAll()</strong> : <em>void</em><br /><em>Clear ALL Cache</em> |
| public | <strong>contains(</strong><em>\string</em> <strong>$id</strong>)</strong> : <em>bool true if the cached items exists</em><br /><em>Returns a boolean state of whether or not the item exists in the cache based on id key</em> |
| public | <strong>driver()</strong> : <em>void</em><br /><em>Returns driver variable</em> |
| public | <strong>fetch(</strong><em>\string</em> <strong>$id</strong>)</strong> : <em>mixed The cached data or FALSE, if no cache entry exists for the given id.</em><br /><em>Fetches an entry from the cache.</em> |
| public | <strong>getCacheDriver()</strong> : <em>mixed</em><br /><em>Get Cache Driver</em> |
| public | <strong>getKey()</strong> : <em>mixed</em><br /><em>Get cache key.</em> |
| public | <strong>getLifetime()</strong> : <em>mixed</em><br /><em>Retrieve the cache lifetime (in seconds)</em> |
| public | <strong>save(</strong><em>\string</em> <strong>$id</strong>, <em>mixed</em> <strong>$data</strong>, <em>\integer</em> <strong>$lifetime=null</strong>)</strong> : <em>void</em><br /><em>Puts data into the cache. If zero (the default), the entry never expires (although it may be deleted from the cache to make place for other entries).</em> |
| public | <strong>setLifetime(</strong><em>int/\integer</em> <strong>$future</strong>)</strong> : <em>void</em><br /><em>Set the cache lifetime.</em> |
| protected | <strong>setApcuCacheDriver()</strong> : <em>void</em><br /><em>The ApcuCache driver uses the apcu_fetch, apcu_exists, etc. functions that come with PHP so no additional setup is required in order to use it.</em> |
| protected | <strong>setArrayCacheDriver()</strong> : <em>void</em><br /><em>The ArrayCache driver stores the cache data in PHPs memory and is not persisted anywhere. This can be useful for caching things in memory for a single process when you don't need the cache to be persistent across processes.</em> |
| protected | <strong>setCacheDriver(</strong><em>\string</em> <strong>$driver_name</strong>)</strong> : <em>void</em> |
| protected | <strong>setDefaultCacheDriverName(</strong><em>\string</em> <strong>$driver_name</strong>)</strong> : <em>void</em><br /><em>Set Default Cache Driver Name</em> |
| protected | <strong>setFilesystemCacheDriver()</strong> : <em>void</em><br /><em>Filesystem cache Driver</em> |
| protected | <strong>setMemcachedCacheDriver()</strong> : <em>void</em><br /><em>The MemcachedCache drivers stores the cache data in Memcached.</em> |
| protected | <strong>setRedisCacheDriver()</strong> : <em>void</em><br /><em>The RedisCache driver stores the cache data in Redis and depends on the phpredis extension https://github.com/phpredis/phpredis</em> |
| protected | <strong>setSQLite3CacheDriver()</strong> : <em>void</em><br /><em>The SQLite3Cache driver stores the cache data in a SQLite database and depends on the sqlite3 extension http://php.net/manual/en/book.sqlite3.php</em> |
| protected | <strong>setWinCacheDriver()</strong> : <em>void</em><br /><em>The WinCacheCache driver uses the wincache_ucache_get, wincache_ucache_exists, etc. functions that come with the wincache extension http://php.net/manual/en/book.wincache.php</em> |
| protected | <strong>setZendDataCacheDriver()</strong> : <em>void</em><br /><em>The ZendDataCache driver uses the Zend Data Cache API available in the Zend Platform.</em> |

<hr /><a id="class-flextypefieldsets"></a>
### Class: \Flextype\Fieldsets

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>mixed</em> <strong>$flextype</strong>)</strong> : <em>void</em><br /><em>Constructor</em> |
| public | <strong>copy(</strong><em>\string</em> <strong>$id</strong>, <em>\string</em> <strong>$new_id</strong>)</strong> : <em>bool True on success, false on failure.</em><br /><em>Copy fieldset</em> |
| public | <strong>create(</strong><em>\string</em> <strong>$id</strong>, <em>array</em> <strong>$data</strong>)</strong> : <em>bool True on success, false on failure.</em><br /><em>Create fieldset</em> |
| public | <strong>delete(</strong><em>\string</em> <strong>$id</strong>)</strong> : <em>bool True on success, false on failure.</em><br /><em>Delete fieldset</em> |
| public | <strong>fetch(</strong><em>\string</em> <strong>$id</strong>)</strong> : <em>array/false The entry contents or false on failure.</em><br /><em>Fetch fieldset</em> |
| public | <strong>fetchAll()</strong> : <em>array</em><br /><em>Fetch all fieldsets</em> |
| public | <strong>getDirLocation()</strong> : <em>mixed</em><br /><em>Helper method getDirLocation</em> |
| public | <strong>getFileLocation(</strong><em>\string</em> <strong>$id</strong>)</strong> : <em>mixed</em><br /><em>Helper method getFileLocation</em> |
| public | <strong>has(</strong><em>\string</em> <strong>$id</strong>)</strong> : <em>bool True on success, false on failure.</em><br /><em>Check whether fieldset exists.</em> |
| public | <strong>rename(</strong><em>\string</em> <strong>$id</strong>, <em>\string</em> <strong>$new_id</strong>)</strong> : <em>bool True on success, false on failure.</em><br /><em>Rename fieldset</em> |
| public | <strong>update(</strong><em>\string</em> <strong>$id</strong>, <em>array</em> <strong>$data</strong>)</strong> : <em>bool True on success, false on failure.</em><br /><em>Update fieldset</em> |

<hr /><a id="class-flextypeplugins"></a>
### Class: \Flextype\Plugins

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>mixed</em> <strong>$flextype</strong>, <em>mixed</em> <strong>$app</strong>)</strong> : <em>void</em><br /><em>Constructor</em> |
| public | <strong>getLocales()</strong> : <em>array</em><br /><em>Get locales</em> |
| public | <strong>init(</strong><em>mixed</em> <strong>$flextype</strong>, <em>mixed</em> <strong>$app</strong>)</strong> : <em>void</em><br /><em>Init Plugins</em> |

<hr /><a id="class-flextypemiddleware"></a>
### Class: \Flextype\Middleware

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>mixed</em> <strong>$container</strong>)</strong> : <em>void</em><br /><em>__construct</em> |
| public | <strong>__get(</strong><em>mixed</em> <strong>$property</strong>)</strong> : <em>void</em><br /><em>__get</em> |

<hr /><a id="class-flextypeforms"></a>
### Class: \Flextype\Forms

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>mixed</em> <strong>$flextype</strong>)</strong> : <em>void</em><br /><em>Constructor</em> |
| public | <strong>render(</strong><em>array</em> <strong>$fieldset</strong>, <em>array</em> <strong>$values=array()</strong>, <em>\Flextype\Request/\Psr\Http\Message\ServerRequestInterface</em> <strong>$request</strong>, <em>\Flextype\Response/\Psr\Http\Message\ResponseInterface</em> <strong>$response</strong>)</strong> : <em>string Returns form based on fieldsets</em><br /><em>Render form</em> |
| protected | <strong>_actionHiddenField()</strong> : <em>string Returns field</em><br /><em>_actionHiddenField</em> |
| protected | <strong>_csrfHiddenField()</strong> : <em>string Returns field</em><br /><em>_csrfHiddenField</em> |
| protected | <strong>dateField(</strong><em>\string</em> <strong>$name</strong>, <em>\string</em> <strong>$value</strong>)</strong> : <em>string Returns field</em><br /><em>Date field</em> |
| protected | <strong>getElementName(</strong><em>\string</em> <strong>$element</strong>)</strong> : <em>string Returns form element name</em><br /><em>Get element name</em> |
| protected | <strong>hiddenField(</strong><em>\string</em> <strong>$name</strong>, <em>\string</em> <strong>$value</strong>, <em>array</em> <strong>$property</strong>)</strong> : <em>string Returns field</em><br /><em>Hidden field</em> |
| protected | <strong>htmlField(</strong><em>\string</em> <strong>$name</strong>, <em>\string</em> <strong>$value</strong>, <em>array</em> <strong>$property</strong>)</strong> : <em>string Returns field</em><br /><em>Html field</em> |
| protected | <strong>mediaSelectField(</strong><em>\string</em> <strong>$name</strong>, <em>array</em> <strong>$options</strong>, <em>\string</em> <strong>$value</strong>, <em>array</em> <strong>$property</strong>)</strong> : <em>string Returns field</em><br /><em>Media select field</em> |
| protected | <strong>selectField(</strong><em>\string</em> <strong>$name</strong>, <em>array</em> <strong>$options</strong>, <em>\string</em> <strong>$value</strong>, <em>array</em> <strong>$property</strong>)</strong> : <em>string Returns field</em><br /><em>Select field</em> |
| protected | <strong>tagsField(</strong><em>\string</em> <strong>$name</strong>, <em>\string</em> <strong>$value</strong>)</strong> : <em>string Returns field</em><br /><em>Tags field</em> |
| protected | <strong>templateSelectField(</strong><em>\string</em> <strong>$name</strong>, <em>\string</em> <strong>$value</strong>, <em>array</em> <strong>$property</strong>)</strong> : <em>string Returns field</em><br /><em>Template select field</em> |
| protected | <strong>textField(</strong><em>\string</em> <strong>$name</strong>, <em>\string</em> <strong>$value</strong>, <em>array</em> <strong>$property</strong>)</strong> : <em>string Returns field</em><br /><em>Text field</em> |
| protected | <strong>textareaField(</strong><em>\string</em> <strong>$name</strong>, <em>\string</em> <strong>$value</strong>, <em>array</em> <strong>$property</strong>)</strong> : <em>string Returns field</em><br /><em>Textarea field</em> |
| protected | <strong>visibilitySelectField(</strong><em>\string</em> <strong>$name</strong>, <em>array</em> <strong>$options</strong>, <em>\string</em> <strong>$value</strong>, <em>array</em> <strong>$property</strong>)</strong> : <em>string Returns field</em><br /><em>Visibility field</em> |

<hr /><a id="class-flextypeauthmiddleware"></a>
### Class: \Flextype\AuthMiddleware

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__invoke(</strong><em>\Flextype\Request/\Psr\Http\Message\ServerRequestInterface</em> <strong>$request</strong>, <em>\Flextype\Response/\Psr\Http\Message\ResponseInterface</em> <strong>$response</strong>, <em>\callable</em> <strong>$next</strong>)</strong> : <em>void</em><br /><em>__invoke</em> |

*This class extends [\Flextype\Middleware](#class-flextypemiddleware)*

<hr /><a id="class-flextypeemittertwigextension"></a>
### Class: \Flextype\EmitterTwigExtension

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>mixed</em> <strong>$flextype</strong>)</strong> : <em>void</em><br /><em>Constructor</em> |
| public | <strong>getGlobals()</strong> : <em>mixed</em><br /><em>Register Global variables in an extension</em> |

*This class extends \Twig\Extension\AbstractExtension*

*This class implements \Twig\Extension\ExtensionInterface, \Twig\Extension\GlobalsInterface*

<hr /><a id="class-flextypemarkdowntwigextension"></a>
### Class: \Flextype\MarkdownTwigExtension

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>mixed</em> <strong>$flextype</strong>)</strong> : <em>void</em><br /><em>Constructor</em> |
| public | <strong>getFilters()</strong> : <em>array</em><br /><em>Returns a list of filters to add to the existing list.</em> |
| public | <strong>markdown(</strong><em>mixed</em> <strong>$value</strong>)</strong> : <em>void</em><br /><em>Markdown process</em> |

*This class extends \Twig\Extension\AbstractExtension*

*This class implements \Twig\Extension\ExtensionInterface*

<hr /><a id="class-flextypesnippetstwigextension"></a>
### Class: \Flextype\SnippetsTwigExtension

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>mixed</em> <strong>$flextype</strong>)</strong> : <em>void</em><br /><em>Constructor</em> |
| public | <strong>getGlobals()</strong> : <em>mixed</em><br /><em>Register Global variables in an extension</em> |

*This class extends \Twig\Extension\AbstractExtension*

*This class implements \Twig\Extension\ExtensionInterface, \Twig\Extension\GlobalsInterface*

<hr /><a id="class-flextypei18ntwigextension"></a>
### Class: \Flextype\I18nTwigExtension

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getFilters()</strong> : <em>array</em><br /><em>Returns a list of filters to add to the existing list.</em> |
| public | <strong>getFunctions()</strong> : <em>array</em><br /><em>Returns a list of functions to add to the existing list.</em> |
| public | <strong>tr(</strong><em>\string</em> <strong>$translate</strong>, <em>\string</em> <strong>$locale=null</strong>, <em>array</em> <strong>$values=array()</strong>)</strong> : <em>void</em><br /><em>Translate string</em> |

*This class extends \Twig\Extension\AbstractExtension*

*This class implements \Twig\Extension\ExtensionInterface*

<hr /><a id="class-flextypeassetstwigextension"></a>
### Class: \Flextype\AssetsTwigExtension

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getGlobals()</strong> : <em>mixed</em><br /><em>Register Global variables in an extension</em> |

*This class extends \Twig\Extension\AbstractExtension*

*This class implements \Twig\Extension\ExtensionInterface, \Twig\Extension\GlobalsInterface*

<hr /><a id="class-flextypeflashtwigextension"></a>
### Class: \Flextype\FlashTwigExtension

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>mixed</em> <strong>$flextype</strong>)</strong> : <em>void</em><br /><em>Constructor</em> |
| public | <strong>getFunctions()</strong> : <em>array</em><br /><em>Returns a list of functions to add to the existing list.</em> |
| public | <strong>getMessages(</strong><em>\string</em> <strong>$key=null</strong>)</strong> : <em>array</em><br /><em>Returns Flash messages; If key is provided then returns messages for that key.</em> |

*This class extends \Twig\Extension\AbstractExtension*

*This class implements \Twig\Extension\ExtensionInterface*

<hr /><a id="class-flextypejsontwigextension"></a>
### Class: \Flextype\JsonTwigExtension

| Visibility | Function |
|:-----------|:---------|
| public | <strong>decode(</strong><em>\string</em> <strong>$input</strong>, <em>\boolean</em> <strong>$decode_assoc=true</strong>, <em>\integer</em> <strong>$decode_depth=512</strong>, <em>\integer</em> <strong>$decode_options</strong>)</strong> : <em>void</em><br /><em>Decode JSON</em> |
| public | <strong>encode(</strong><em>mixed</em> <strong>$input</strong>, <em>\integer</em> <strong>$encode_options</strong>, <em>\integer</em> <strong>$encode_depth=512</strong>)</strong> : <em>void</em><br /><em>Encode JSON</em> |
| public | <strong>getFunctions()</strong> : <em>array</em><br /><em>Returns a list of functions to add to the existing list.</em> |

*This class extends \Twig\Extension\AbstractExtension*

*This class implements \Twig\Extension\ExtensionInterface*

<hr /><a id="class-flextypecsrftwigextension"></a>
### Class: \Flextype\CsrfTwigExtension

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>\Slim\Csrf\Guard</em> <strong>$csrf</strong>)</strong> : <em>void</em><br /><em>Constructor</em> |
| public | <strong>csrf()</strong> : <em>void</em><br /><em>CSRF</em> |
| public | <strong>getFunctions()</strong> : <em>array</em><br /><em>Returns a list of functions to add to the existing list.</em> |
| public | <strong>getGlobals()</strong> : <em>mixed</em><br /><em>Register Global variables in an extension</em> |
| public | <strong>getName()</strong> : <em>mixed</em> |

*This class extends \Twig\Extension\AbstractExtension*

*This class implements \Twig\Extension\ExtensionInterface, \Twig\Extension\GlobalsInterface*

<hr /><a id="class-flextypeentriestwigextension"></a>
### Class: \Flextype\EntriesTwigExtension

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>mixed</em> <strong>$flextype</strong>)</strong> : <em>void</em><br /><em>Constructor</em> |
| public | <strong>getGlobals()</strong> : <em>mixed</em><br /><em>Register Global variables in an extension</em> |

*This class extends \Twig\Extension\AbstractExtension*

*This class implements \Twig\Extension\ExtensionInterface, \Twig\Extension\GlobalsInterface*

<hr /><a id="class-flextypefilesystemtwigextension"></a>
### Class: \Flextype\FilesystemTwigExtension

| Visibility | Function |
|:-----------|:---------|
| public | <strong>basename(</strong><em>mixed</em> <strong>$value</strong>, <em>string</em> <strong>$suffix=`''`</strong>)</strong> : <em>void</em> |
| public | <strong>ext(</strong><em>mixed</em> <strong>$file</strong>)</strong> : <em>void</em> |
| public | <strong>getFunctions()</strong> : <em>array</em><br /><em>Callback for twig.</em> |
| public | <strong>has(</strong><em>mixed</em> <strong>$path</strong>)</strong> : <em>bool</em> |
| public | <strong>list_contents(</strong><em>\string</em> <strong>$directory=`''`</strong>, <em>\boolean</em> <strong>$recursive=false</strong>)</strong> : <em>void</em> |
| public | <strong>read(</strong><em>mixed</em> <strong>$path</strong>)</strong> : <em>void</em> |

*This class extends \Twig\Extension\AbstractExtension*

*This class implements \Twig\Extension\ExtensionInterface*

<hr /><a id="class-flextypeshortcodestwigextension"></a>
### Class: \Flextype\ShortcodesTwigExtension

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>mixed</em> <strong>$flextype</strong>)</strong> : <em>void</em><br /><em>Constructor</em> |
| public | <strong>getFilters()</strong> : <em>array</em><br /><em>Returns a list of filters to add to the existing list.</em> |
| public | <strong>shortcode(</strong><em>mixed</em> <strong>$value</strong>)</strong> : <em>void</em><br /><em>Shorcode process</em> |

*This class extends \Twig\Extension\AbstractExtension*

*This class implements \Twig\Extension\ExtensionInterface*

<hr /><a id="class-flextypeyamltwigextension"></a>
### Class: \Flextype\YamlTwigExtension

| Visibility | Function |
|:-----------|:---------|
| public | <strong>decode(</strong><em>\string</em> <strong>$input</strong>, <em>\integer</em> <strong>$flags</strong>)</strong> : <em>void</em><br /><em>Decode YAML</em> |
| public | <strong>encode(</strong><em>mixed</em> <strong>$input</strong>, <em>\integer</em> <strong>$inline=5</strong>, <em>\integer</em> <strong>$indent=2</strong>, <em>\integer</em> <strong>$flags=16</strong>)</strong> : <em>void</em><br /><em>Encode YAML</em> |
| public | <strong>getFunctions()</strong> : <em>array</em><br /><em>Returns a list of functions to add to the existing list.</em> |

*This class extends \Twig\Extension\AbstractExtension*

*This class implements \Twig\Extension\ExtensionInterface*

<hr /><a id="class-flextypeglobalvarstwigextension"></a>
### Class: \Flextype\GlobalVarsTwigExtension

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>mixed</em> <strong>$flextype</strong>)</strong> : <em>void</em><br /><em>Constructor</em> |
| public | <strong>getGlobals()</strong> : <em>mixed</em><br /><em>Register Global variables in an extension</em> |

*This class extends \Twig\Extension\AbstractExtension*

*This class implements \Twig\Extension\ExtensionInterface, \Twig\Extension\GlobalsInterface*
