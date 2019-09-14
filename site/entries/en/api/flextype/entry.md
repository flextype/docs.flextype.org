---
title: Flextype API
---

## Table of contents

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

* * *

<a id="class-flextypefrontmatterparser"></a>

### Class: \Flextype\FrontmatterParser

| Visibility    | Function                                               |
|:------------- |:------------------------------------------------------ |
| public static | **decode(***\string* **$input**)</strong> : *void*    |
| public static | **encode(***mixed* **$input**)</strong> : *void*       |
| public static | **parser(***\string* **$content**)</strong> : *array* |


*Front matter parser* |

* * *

<a id="class-flextypeparser"></a>

### Class: \Flextype\Parser

| Visibility    | Function                                                                    |
|:------------- |:--------------------------------------------------------------------------- |
| public static | **decode(***\string* **$input**, *\string* **$parser**)</strong> : *void* |
| public static | **encode(***mixed* **$input**, *\string* **$parser**)</strong> : *void*    |


* * *

<a id="class-flextypeyamlparser"></a>

### Class: \Flextype\YamlParser

| Visibility    | Function                                                                                                           |
|:------------- |:------------------------------------------------------------------------------------------------------------------ |
| public static | **decode(***\string* **$input**, *int/\integer* **$flags**)</strong> : *mixed The YAML converted to a PHP value* |


*Parses YAML into a PHP value. $array = YamlParser::decode($yaml_file_content);* | | public static | **encode(***mixed* **$input**, *\integer* **$inline=5**, *\integer* **$indent=2**, *\integer* **$flags=16**)</strong> : *string A YAML string representing the original PHP value*  
*Dumps a PHP value to a YAML string. The dump method, when supplied with an array, will do its best to convert the array into friendly YAML.* |

* * *

<a id="class-flextypejsonparser"></a>

### Class: \Flextype\JsonParser

| Visibility    | Function                                                                                                                                                                                           |
|:------------- |:-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| public static | **decode(***\string* **$input**, *\boolean* **$decode_assoc=true**, *\integer* **$decode_depth=512**, *int/\integer* **$decode_options**)</strong> : *mixed The JSON converted to a PHP value* |


*Takes a JSON encoded string and converts it into a PHP variable. $array = JsonParser::decode($json_file_content);* | | public static | **encode(***mixed* **$input**, *int/\integer* **$encode_options**, *\integer* **$encode_depth=512**)</strong> : *mixed The JSON converted to a PHP value*  
*Returns the JSON representation of a value $result = JsonParser::encode($json_content);* |

* * *

<a id="class-flextypeentries"></a>

### Class: \Flextype\Entries

<table>
  <tr>
    <th align="left">
      Visibility
    </th>
    
    <th align="left">
      Function
    </th>
  </tr>
  
  <tr>
    <td align="left">
      public
    </td>
    
    <td align="left">
      <strong>__construct(***mixed* **$flextype</strong>)</strong> : <em>void</em>
    </td>
  </tr>
</table>

*Constructor* | | public | **copy(***\string* **$id**, *\string* **$new_id**, *\boolean* **$recursive=false**)</strong> : *bool/null True on success, false on failure.*  
*Copy entry(s)* | | public | **create(***\string* **$id**, *array* **$data**)</strong> : *bool True on success, false on failure.*  
*Create entry* | | public | **delete(***\string* **$id**)</strong> : *bool True on success, false on failure.*  
*Delete entry* | | public | **fetch(***\string* **$id**)</strong> : *array/false The entry array data or false on failure.*  
*Fetch single entry* | | public | **fetchAll(***\string* **$id**, *array* **$args=array()**)</strong> : *array The entries array data*  
*Fetch entries collection* | | public | **getDirLocation(***\string* **$id**)</strong> : *string entry directory location*  
*Get entry directory location* | | public | **getFileLocation(***\string* **$id**)</strong> : *string entry file location*  
*Get entry file location* | | public | **has(***\string* **$id**)</strong> : *bool True on success, false on failure.*  
*Check whether entry exists* | | public | **rename(***\string* **$id**, *\string* **$new_id**)</strong> : *bool True on success, false on failure.*  
*Rename entry* | | public | **update(***\string* **$id**, *array* **$data**)</strong> : *bool True on success, false on failure.*  
*Update entry* |

* * *

<a id="class-flextypesnippets"></a>

### Class: \Flextype\Snippets

<table>
  <tr>
    <th align="left">
      Visibility
    </th>
    
    <th align="left">
      Function
    </th>
  </tr>
  
  <tr>
    <td align="left">
      public
    </td>
    
    <td align="left">
      <strong>__construct(***mixed* **$flextype</strong>, <em>mixed</em> <strong>$app</strong>)</strong> : <em>void</em>
    </td>
  </tr>
</table>

*Constructor* | | public | **copy(***\string* **$id**, *\string* **$new_id**)</strong> : *bool True on success, false on failure.*  
*Copy snippet* | | public | **create(***\string* **$id**, *\string* **$data=`''`**)</strong> : *bool True on success, false on failure.*  
*Create snippet* | | public | **delete(***\string* **$id**)</strong> : *bool True on success, false on failure.*  
*Delete snippet* | | public | **exec(***\string* **$id**)</strong> : *string/bool Returns the contents of the output buffer and end output buffering. If output buffering isn't active then FALSE is returned.*  
*Exec snippet* | | public | **fetch(***\string* **$id**)</strong> : *string/false The snippet contents or false on failure.*  
*Fetch snippet* | | public | **fetchAll()** : *array*  
*Fetch Snippets* | | public | **getDirLocation()** : *string Snippet dir path*  
*Helper method getDirLocation* | | public | **getFileLocation(***\string* **$id**)</strong> : *string Snippet file path*  
*Helper method getFileLocation* | | public | **has(***\string* **$id**)</strong> : *bool True on success, false on failure.*  
*Check whether snippet exists.* | | public | **rename(***\string* **$id**, *\string* **$new_id**)</strong> : *bool True on success, false on failure.*  
*Rename snippet* | | public | **update(***\string* **$id**, *\string* **$data**)</strong> : *bool True on success, false on failure.*  
*Update Snippet* |

* * *

<a id="class-flextypecontroller"></a>

### Class: \Flextype\Controller

| Visibility | Function                                                    |
|:---------- |:----------------------------------------------------------- |
| public     | **__construct(***mixed* **$container**)</strong> : *void* |
 *__construct* | | public | **__get(***mixed* **$property**)</strong> : *void* 

*__get* |

* * *

<a id="class-flextypethemes"></a>

### Class: \Flextype\Themes

| Visibility | Function                                                   |
|:---------- |:---------------------------------------------------------- |
| public     | **__construct(***mixed* **$flextype**)</strong> : *void* |


*Private construct method to enforce singleton behavior.* | | public | **getPartials(***\string* **$theme**)</strong> : *array*  
*Get partials for theme* | | public | **getTemplates(***\string* **$theme**)</strong> : *array*  
*Get templates for theme* | | public | **getThemes()** : *array*  
*Get list of themes* | | public | **init(***mixed* **$flextype**, *mixed* **$app**)</strong> : *void*  
*Init themes* |

* * *

<a id="class-flextypecache"></a>

### Class: \Flextype\Cache

<table>
  <tr>
    <th align="left">
      Visibility
    </th>
    
    <th align="left">
      Function
    </th>
  </tr>
  
  <tr>
    <td align="left">
      public
    </td>
    
    <td align="left">
      <strong>__construct(***mixed* **$flextype</strong>)</strong> : <em>void</em>
    </td>
  </tr>
</table>

*Constructor* | | public | **clear(***\string* **$id**)</strong> : *void*  
*Clear Cache* | | public | **clearAll()** : *void*  
*Clear ALL Cache* | | public | **contains(***\string* **$id**)</strong> : *bool true if the cached items exists*  
*Returns a boolean state of whether or not the item exists in the cache based on id key* | | public | **driver()** : *void*  
*Returns driver variable* | | public | **fetch(***\string* **$id**)</strong> : *mixed The cached data or FALSE, if no cache entry exists for the given id.*  
*Fetches an entry from the cache.* | | public | **getCacheDriver()** : *mixed*  
*Get Cache Driver* | | public | **getKey()** : *mixed*  
*Get cache key.* | | public | **getLifetime()** : *mixed*  
*Retrieve the cache lifetime (in seconds)* | | public | **save(***\string* **$id**, *mixed* **$data**, *\integer* **$lifetime=null**)</strong> : *void*  
*Puts data into the cache. If zero (the default), the entry never expires (although it may be deleted from the cache to make place for other entries).* | | public | **setLifetime(***int/\integer* **$future**)</strong> : *void*  
*Set the cache lifetime.* | | protected | **setApcuCacheDriver()** : *void*  
*The ApcuCache driver uses the apcu_fetch, apcu_exists, etc. functions that come with PHP so no additional setup is required in order to use it.* | | protected | **setArrayCacheDriver()** : *void*  
*The ArrayCache driver stores the cache data in PHPs memory and is not persisted anywhere. This can be useful for caching things in memory for a single process when you don't need the cache to be persistent across processes.* | | protected | **setCacheDriver(***\string* **$driver_name**)</strong> : *void* | | protected | **setDefaultCacheDriverName(***\string* **$driver_name**)</strong> : *void*  
*Set Default Cache Driver Name* | | protected | **setFilesystemCacheDriver()** : *void*  
*Filesystem cache Driver* | | protected | **setMemcachedCacheDriver()** : *void*  
*The MemcachedCache drivers stores the cache data in Memcached.* | | protected | **setRedisCacheDriver()** : *void*  
*The RedisCache driver stores the cache data in Redis and depends on the phpredis extension https://github.com/phpredis/phpredis* | | protected | **setSQLite3CacheDriver()** : *void*  
*The SQLite3Cache driver stores the cache data in a SQLite database and depends on the sqlite3 extension http://php.net/manual/en/book.sqlite3.php* | | protected | **setWinCacheDriver()** : *void*  
*The WinCacheCache driver uses the wincache_ucache_get, wincache_ucache_exists, etc. functions that come with the wincache extension http://php.net/manual/en/book.wincache.php* | | protected | **setZendDataCacheDriver()** : *void*  
*The ZendDataCache driver uses the Zend Data Cache API available in the Zend Platform.* |

* * *

<a id="class-flextypefieldsets"></a>

### Class: \Flextype\Fieldsets

<table>
  <tr>
    <th align="left">
      Visibility
    </th>
    
    <th align="left">
      Function
    </th>
  </tr>
  
  <tr>
    <td align="left">
      public
    </td>
    
    <td align="left">
      <strong>__construct(***mixed* **$flextype</strong>)</strong> : <em>void</em>
    </td>
  </tr>
</table>

*Constructor* | | public | **copy(***\string* **$id**, *\string* **$new_id**)</strong> : *bool True on success, false on failure.*  
*Copy fieldset* | | public | **create(***\string* **$id**, *array* **$data**)</strong> : *bool True on success, false on failure.*  
*Create fieldset* | | public | **delete(***\string* **$id**)</strong> : *bool True on success, false on failure.*  
*Delete fieldset* | | public | **fetch(***\string* **$id**)</strong> : *array/false The entry contents or false on failure.*  
*Fetch fieldset* | | public | **fetchAll()** : *array*  
*Fetch all fieldsets* | | public | **getDirLocation()** : *mixed*  
*Helper method getDirLocation* | | public | **getFileLocation(***\string* **$id**)</strong> : *mixed*  
*Helper method getFileLocation* | | public | **has(***\string* **$id**)</strong> : *bool True on success, false on failure.*  
*Check whether fieldset exists.* | | public | **rename(***\string* **$id**, *\string* **$new_id**)</strong> : *bool True on success, false on failure.*  
*Rename fieldset* | | public | **update(***\string* **$id**, *array* **$data**)</strong> : *bool True on success, false on failure.*  
*Update fieldset* |

* * *

<a id="class-flextypeplugins"></a>

### Class: \Flextype\Plugins

| Visibility | Function                                                                     |
|:---------- |:---------------------------------------------------------------------------- |
| public     | **__construct(***mixed* **$flextype**, *mixed* **$app**)</strong> : *void* |


*Constructor* | | public | **getLocales()** : *array*  
*Get locales* | | public | **init(***mixed* **$flextype**, *mixed* **$app**)</strong> : *void*  
*Init Plugins* |

* * *

<a id="class-flextypemiddleware"></a>

### Class: \Flextype\Middleware

| Visibility | Function                                                    |
|:---------- |:----------------------------------------------------------- |
| public     | **__construct(***mixed* **$container**)</strong> : *void* |
 *__construct* | | public | **__get(***mixed* **$property**)</strong> : *void* 

*__get* |

* * *

<a id="class-flextypeforms"></a>

### Class: \Flextype\Forms

<table>
  <tr>
    <th align="left">
      Visibility
    </th>
    
    <th align="left">
      Function
    </th>
  </tr>
  
  <tr>
    <td align="left">
      public
    </td>
    
    <td align="left">
      <strong>__construct(***mixed* **$flextype</strong>)</strong> : <em>void</em>
    </td>
  </tr>
</table>

*Constructor* | | public | **render(***array* **$fieldset**, *array* **$values=array()**, *\Flextype\Request/\Psr\Http\Message\ServerRequestInterface* **$request**, *\Flextype\Response/\Psr\Http\Message\ResponseInterface* **$response**)</strong> : *string Returns form based on fieldsets*  
*Render form* | | protected | **_actionHiddenField()** : *string Returns field*  
*_actionHiddenField* | | protected | **_csrfHiddenField()** : *string Returns field*  
*_csrfHiddenField* | | protected | **dateField(***\string* **$name**, *\string* **$value**)</strong> : *string Returns field*  
*Date field* | | protected | **getElementName(***\string* **$element**)</strong> : *string Returns form element name*  
*Get element name* | | protected | **hiddenField(***\string* **$name**, *\string* **$value**, *array* **$property**)</strong> : *string Returns field*  
*Hidden field* | | protected | **htmlField(***\string* **$name**, *\string* **$value**, *array* **$property**)</strong> : *string Returns field*  
*Html field* | | protected | **mediaSelectField(***\string* **$name**, *array* **$options**, *\string* **$value**, *array* **$property**)</strong> : *string Returns field*  
*Media select field* | | protected | **selectField(***\string* **$name**, *array* **$options**, *\string* **$value**, *array* **$property**)</strong> : *string Returns field*  
*Select field* | | protected | **tagsField(***\string* **$name**, *\string* **$value**)</strong> : *string Returns field*  
*Tags field* | | protected | **templateSelectField(***\string* **$name**, *\string* **$value**, *array* **$property**)</strong> : *string Returns field*  
*Template select field* | | protected | **textField(***\string* **$name**, *\string* **$value**, *array* **$property**)</strong> : *string Returns field*  
*Text field* | | protected | **textareaField(***\string* **$name**, *\string* **$value**, *array* **$property**)</strong> : *string Returns field*  
*Textarea field* | | protected | **visibilitySelectField(***\string* **$name**, *array* **$options**, *\string* **$value**, *array* **$property**)</strong> : *string Returns field*  
*Visibility field* |

* * *

<a id="class-flextypeauthmiddleware"></a>

### Class: \Flextype\AuthMiddleware

| Visibility | Function                                                                                                                                                                                                                |
|:---------- |:----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| public     | **__invoke(***\Flextype\Request/\Psr\Http\Message\ServerRequestInterface* **$request**, *\Flextype\Response/\Psr\Http\Message\ResponseInterface* **$response**, *\callable* **$next**)</strong> : *void* |
 *__invoke* | 

*This class extends [\Flextype\Middleware](#class-flextypemiddleware)*

* * *

<a id="class-flextypeemittertwigextension"></a>

### Class: \Flextype\EmitterTwigExtension

| Visibility | Function                                                   |
|:---------- |:---------------------------------------------------------- |
| public     | **__construct(***mixed* **$flextype**)</strong> : *void* |


*Constructor* | | public | **getGlobals()** : *mixed*  
*Register Global variables in an extension* |

*This class extends \Twig\Extension\AbstractExtension*

*This class implements \Twig\Extension\ExtensionInterface, \Twig\Extension\GlobalsInterface*

* * *

<a id="class-flextypemarkdowntwigextension"></a>

### Class: \Flextype\MarkdownTwigExtension

| Visibility | Function                                                   |
|:---------- |:---------------------------------------------------------- |
| public     | **__construct(***mixed* **$flextype**)</strong> : *void* |


*Constructor* | | public | **getFilters()** : *array*  
*Returns a list of filters to add to the existing list.* | | public | **markdown(***mixed* **$value**)</strong> : *void*  
*Markdown process* |

*This class extends \Twig\Extension\AbstractExtension*

*This class implements \Twig\Extension\ExtensionInterface*

* * *

<a id="class-flextypesnippetstwigextension"></a>

### Class: \Flextype\SnippetsTwigExtension

| Visibility | Function                                                   |
|:---------- |:---------------------------------------------------------- |
| public     | **__construct(***mixed* **$flextype**)</strong> : *void* |


*Constructor* | | public | **getGlobals()** : *mixed*  
*Register Global variables in an extension* |

*This class extends \Twig\Extension\AbstractExtension*

*This class implements \Twig\Extension\ExtensionInterface, \Twig\Extension\GlobalsInterface*

* * *

<a id="class-flextypei18ntwigextension"></a>

### Class: \Flextype\I18nTwigExtension

| Visibility | Function                   |
|:---------- |:-------------------------- |
| public     | **getFilters()** : *array* |


*Returns a list of filters to add to the existing list.* | | public | **getFunctions()** : *array*  
*Returns a list of functions to add to the existing list.* | | public | **tr(***\string* **$translate**, *\string* **$locale=null**, *array* **$values=array()**)</strong> : *void*  
*Translate string* |

*This class extends \Twig\Extension\AbstractExtension*

*This class implements \Twig\Extension\ExtensionInterface*

* * *

<a id="class-flextypeassetstwigextension"></a>

### Class: \Flextype\AssetsTwigExtension

| Visibility | Function                   |
|:---------- |:-------------------------- |
| public     | **getGlobals()** : *mixed* |


*Register Global variables in an extension* |

*This class extends \Twig\Extension\AbstractExtension*

*This class implements \Twig\Extension\ExtensionInterface, \Twig\Extension\GlobalsInterface*

* * *

<a id="class-flextypeflashtwigextension"></a>

### Class: \Flextype\FlashTwigExtension

| Visibility | Function                                                   |
|:---------- |:---------------------------------------------------------- |
| public     | **__construct(***mixed* **$flextype**)</strong> : *void* |


*Constructor* | | public | **getFunctions()** : *array*  
*Returns a list of functions to add to the existing list.* | | public | **getMessages(***\string* **$key=null**)</strong> : *array*  
*Returns Flash messages; If key is provided then returns messages for that key.* |

*This class extends \Twig\Extension\AbstractExtension*

*This class implements \Twig\Extension\ExtensionInterface*

* * *

<a id="class-flextypejsontwigextension"></a>

### Class: \Flextype\JsonTwigExtension

| Visibility | Function                                                                                                                                                    |
|:---------- |:----------------------------------------------------------------------------------------------------------------------------------------------------------- |
| public     | **decode(***\string* **$input**, *\boolean* **$decode_assoc=true**, *\integer* **$decode_depth=512**, *\integer* **$decode_options**)</strong> : *void* |


*Decode JSON* | | public | **encode(***mixed* **$input**, *\integer* **$encode_options**, *\integer* **$encode_depth=512**)</strong> : *void*  
*Encode JSON* | | public | **getFunctions()** : *array*  
*Returns a list of functions to add to the existing list.* |

*This class extends \Twig\Extension\AbstractExtension*

*This class implements \Twig\Extension\ExtensionInterface*

* * *

<a id="class-flextypecsrftwigextension"></a>

### Class: \Flextype\CsrfTwigExtension

| Visibility | Function                                                             |
|:---------- |:-------------------------------------------------------------------- |
| public     | **__construct(***\Slim\Csrf\Guard* **$csrf**)</strong> : *void* |


*Constructor* | | public | **csrf()** : *void*  
*CSRF* | | public | **getFunctions()** : *array*  
*Returns a list of functions to add to the existing list.* | | public | **getGlobals()** : *mixed*  
*Register Global variables in an extension* | | public | **getName()** : *mixed* |

*This class extends \Twig\Extension\AbstractExtension*

*This class implements \Twig\Extension\ExtensionInterface, \Twig\Extension\GlobalsInterface*

* * *

<a id="class-flextypeentriestwigextension"></a>

### Class: \Flextype\EntriesTwigExtension

| Visibility | Function                                                   |
|:---------- |:---------------------------------------------------------- |
| public     | **__construct(***mixed* **$flextype**)</strong> : *void* |


*Constructor* | | public | **getGlobals()** : *mixed*  
*Register Global variables in an extension* |

*This class extends \Twig\Extension\AbstractExtension*

*This class implements \Twig\Extension\ExtensionInterface, \Twig\Extension\GlobalsInterface*

* * *

<a id="class-flextypefilesystemtwigextension"></a>

### Class: \Flextype\FilesystemTwigExtension

| Visibility | Function                                                                      |
|:---------- |:----------------------------------------------------------------------------- |
| public     | **basename(***mixed* **$value**, *string* **$suffix=`''`**)</strong> : *void* |
| public     | **ext(***mixed* **$file**)</strong> : *void*                                  |
| public     | **getFunctions()** : *array*                                                  |


*Callback for twig.* | | public | **has(***mixed* **$path**)</strong> : *bool* | | public | **list_contents(***\string* **$directory=`''`**, *\boolean* **$recursive=false**)</strong> : *void* | | public | **read(***mixed* **$path**)</strong> : *void* |

*This class extends \Twig\Extension\AbstractExtension*

*This class implements \Twig\Extension\ExtensionInterface*

* * *

<a id="class-flextypeshortcodestwigextension"></a>

### Class: \Flextype\ShortcodesTwigExtension

| Visibility | Function                                                   |
|:---------- |:---------------------------------------------------------- |
| public     | **__construct(***mixed* **$flextype**)</strong> : *void* |


*Constructor* | | public | **getFilters()** : *array*  
*Returns a list of filters to add to the existing list.* | | public | **shortcode(***mixed* **$value**)</strong> : *void*  
*Shorcode process* |

*This class extends \Twig\Extension\AbstractExtension*

*This class implements \Twig\Extension\ExtensionInterface*

* * *

<a id="class-flextypeyamltwigextension"></a>

### Class: \Flextype\YamlTwigExtension

| Visibility | Function                                                                    |
|:---------- |:--------------------------------------------------------------------------- |
| public     | **decode(***\string* **$input**, *\integer* **$flags**)</strong> : *void* |


*Decode YAML* | | public | **encode(***mixed* **$input**, *\integer* **$inline=5**, *\integer* **$indent=2**, *\integer* **$flags=16**)</strong> : *void*  
*Encode YAML* | | public | **getFunctions()** : *array*  
*Returns a list of functions to add to the existing list.* |

*This class extends \Twig\Extension\AbstractExtension*

*This class implements \Twig\Extension\ExtensionInterface*

* * *

<a id="class-flextypeglobalvarstwigextension"></a>

### Class: \Flextype\GlobalVarsTwigExtension

| Visibility | Function                                                   |
|:---------- |:---------------------------------------------------------- |
| public     | **__construct(***mixed* **$flextype**)</strong> : *void* |


*Constructor* | | public | **getGlobals()** : *mixed*  
*Register Global variables in an extension* |

*This class extends \Twig\Extension\AbstractExtension*

*This class implements \Twig\Extension\ExtensionInterface, \Twig\Extension\GlobalsInterface*