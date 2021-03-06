---
title: Cache
breadcrumbs:
  -
    title: "Core Concepts"
    link: "[url]/en/core/"
on_this_page:
  -
    title: "Methods"
    link: "methods"
    level2:
      -
        title: "getCacheDriver()"
        link: "methods-getCacheDriver"
      -
        title: "driver()"
        link: "methods-driver"
      -
        title: "getKey()"
        link: "methods-getKey"
      -
        title: "contains()"
        link: "methods-contains"
      -
        title: "fetch()"
        link: "methods-fetch"
      -
        title: "fetchMultiple()"
        link: "methods-fetchMultiple"
      -
        title: "delete()"
        link: "methods-delete"
      -
        title: "deleteMultiple()"
        link: "methods-deleteMultiple"
      -
        title: "deleteAll()"
        link: "methods-deleteAll"
      -
        title: "flushAll()"
        link: "methods-flushAll"
      -
        title: "purge()"
        link: "methods-purge"
      -
        title: "purgeAll()"
        link: "methods-purgeAll"
      -
        title: "save()"
        link: "methods-save"
      -
        title: "saveMultiple()"
        link: "methods-saveMultiple"
      -
        title: "setLifetime()"
        link: "methods-setLifetime"
      -
        title: "getLifetime()"
        link: "methods-getLifetime"
      -
        title: "getStats()"
        link: "methods-getStats"
---

Flextype caching system is really smart and efficient! We are using established and well-respected [Doctrine Cache library](https://www.doctrine-project.org/projects/doctrine-orm/en/2.6/reference/caching.html). This means that Flextype supports any caching mechanism that Doctrine Cache supports and our own PhpArrayFile driver which stores the data in a native PHP array.

* Auto (Default) - Finds the best option automatically.
* File - Stores in cache files in the `var/cache/` folder.
* APC - https://php.net/manual/en/book.apc.php
* XCache - https://xcache.lighttpd.net/
* Memcache - https://php.net/manual/en/book.memcache.php
* Redis - https://redis.io
* WinCache - https://www.iis.net/downloads/microsoft/wincache-extension

By default, Flextype comes preconfigured to use the auto setting. This will try APC, then WinCache, then XCache, and lastly PhpArrayFile. You can, of course, explicitly configure the cache in your `project/config/flextype/settings.yaml` file, which could make things ever so slightly faster.

### <a name="methods"></a> Methods

<div class="table">
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><a href="#methods-getCacheDriver">getCacheDriver()</a></a></td>
                <td>Get Active Cache Driver</td>
            </tr>
            <tr>
                <td><a href="#methods-driver">driver()</a></td>
                <td>Returns a driver object</td>
            </tr>
            <tr>
                <td><a href="#methods-getKey">getKey()</a></td>
                <td>Get cache key.</td>
            </tr>
            <tr>
                <td><a href="#methods-contains">contains()</a></td>
                <td>Returns a boolean state of whether or not the item exists in the cache based on id key.</td>
            </tr>
            <tr>
                <td><a href="#methods-fetch">fetch()</a></td>
                <td>Fetches an item from the cache.</td>
            </tr>
            <tr>
                <td><a href="#methods-fetchMultiple">fetchMultiple()</a></td>
                <td>Fetches multiple items from the cache.</td>
            </tr>
            <tr>
                <td><a href="#methods-delete">delete()</a></td>
                <td>Delete specific item from the cache.</td>
            </tr>
            <tr>
                <td><a href="#methods-deleteMultiple">deleteMultiple()</a></td>
                <td>Delete multiple item from the cache.</td>
            </tr>
            <tr>
                <td><a href="#methods-deleteAll">deleteAll()</a></td>
                <td>Deletes all cache items.</td>
            </tr>
            <tr>
                <td><a href="#methods-flushAll">flushAll()</a></td>
                <td>Flushes all cache items.</td>
            </tr>
            <tr>
                <td><a href="#methods-purge">purge()</a></td>
                <td>Purge specific cache directory.</td>
            </tr>
            <tr>
                <td><a href="#methods-purgeAll">purgeAll()</a></td>
                <td>Purge all cache directories.</td>
            </tr>
            <tr>
                <td><a href="#methods-save">save()</a></td>
                <td>Puts data into the cache.</td>
            </tr>
            <tr>
                <td><a href="#methods-saveMultiple">saveMultiple()</a></td>
                <td>Puts multiple data into the cache.</td>
            </tr>
            <tr>
                <td><a href="#methods-setLifetime">setLifetime()</a></td>
                <td>Set the cache lifetime.</td>
            </tr>
            <tr>
                <td><a href="#methods-getLifetime">getLifetime()</a></td>
                <td>Retrieve the cache lifetime (in seconds)</td>
            </tr>
            <tr>
                <td><a href="#methods-getStats">getStats()</a></td>
                <td>Retrieves cached information from the data store.</td>
            </tr>
        </tbody>
    </table>
</div>

### Methods Details

##### <a name="methods-getCacheDriver"></a> `getCacheDriver()`

Get Active Cache Driver.

**Examples**

```php
$cache_driver = flextype('cache')->getCacheDriver();
```

##### <a name="methods-driver"></a> `driver()`

Returns a driver object

**Examples**

```php
$driver = flextype('cache')->driver();
```

##### <a name="methods-getKey"></a> `getKey()`

Get cache key.

**Examples**

```php
$cache_key = flextype('cache')->getKey();
```

##### <a name="methods-contains"></a> `contains()`

Returns a boolean state of whether or not the item exists in the cache based on id key.

**Examples**

Check is posts are exists in the cache then fetch them.

```php
if (flextype('cache')->contains('posts')) {
    $posts = flextype('cache')->fetch('posts');
}
```

##### <a name="methods-fetch"></a> `fetch()`

Fetches an item from the cache.

**Examples**

Fetch posts from cache.

```php
$posts = flextype('cache')->fetch('posts');
```

##### <a name="methods-fetchMultiple"></a> `fetchMultiple()`

Fetches multiple items from the cache.

**Examples**

Fetch posts and comments from the cache.

```php
$data = flextype('cache')->fetchMultiple(['posts', 'comments']);
```

##### <a name="methods-delete"></a> `delete()`

Delete specific item from the cache.

**Examples**

Delete posts from the cache.

```php
flextype('cache')->delete('posts');
```

##### <a name="methods-deleteMultiple"></a> `deleteMultiple()`

Delete multiple item from the cache.

**Examples**

Delete posts and comments from the cache.

```php
flextype('cache')->deleteMultiple(['posts', 'comments']);
```

##### <a name="methods-deleteAll"></a> `deleteAll()`

Deletes all cache items.

**Examples**

```php
flextype('cache')->deleteAll();
```

##### <a name="methods-flushAll"></a> `flushAll()`

Flushes all cache items.

**Examples**

```php
flextype('cache')->flushAll();
```

##### <a name="methods-purge"></a> `purge()`

Purge specific cache directory.

**Examples**

Clear doctrine cache.

```php
flextype('cache')->purge('doctrine');
```

##### <a name="methods-purgeAll"></a> `purgeAll()`

Purge all cache directories.

**Examples**

```php
flextype('cache')->purgeAll();
```

##### <a name="methods-save"></a> `save()`

Puts data into the cache.

**Examples**

```php
flextype('cache')->save('posts', $posts);
```

##### <a name="methods-saveMultiple"></a> `saveMultiple()`

Puts multiple data into the cache.

**Examples**

```php
flextype('cache')->saveMultiple(['posts' => $posts, 'comments' => $comments]);
```

##### <a name="methods-setLifetime"></a> `setLifetime()`

Set the cache lifetime.

**Examples**

```php
flextype('cache')->setLifetime(300);
```

##### <a name="methods-getLifetime"></a> `getLifetime()`

Retrieve the cache lifetime (in seconds)

**Examples**

```php
$lifetime = flextype('cache')->getLifetime();
```

##### <a name="methods-getStats"></a> `getStats()`

Retrieves cached information from the data store.

**Examples**

```php
$stats = flextype('cache')->getStats();
```
