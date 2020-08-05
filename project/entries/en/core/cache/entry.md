---
title: Cache
breadcrumbs:
  1:
    title: "Core Concepts"
    link: "[url]/en/core/"
on_this_page:
  1:
    title: "Methods"
    link: "methods"
---

Flextype caching system is really smart and efficient! We are using established and well-respected [Doctrine Cache library](https://www.doctrine-project.org/projects/doctrine-orm/en/2.6/reference/caching.html). This means that Flextype supports any caching mechanism that Doctrine Cache supports and our own PhpArrayFile driver which stores the data in a native PHP array.

* Auto (Default) - Finds the best option automatically.
* File - Stores in cache files in the `var/cache/` folder.
* APC - https://php.net/manual/en/book.apc.php
* XCache - http://xcache.lighttpd.net/
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
                <td><a href="#getCacheDriver"><code>getCacheDriver()</code></a></a></td>
                <td>Get Active Cache Driver</td>
            </tr>
            <tr>
                <td><a href="#driver"><code>driver()</code></a></td>
                <td>Returns a driver object</td>
            </tr>
            <tr>
                <td><a href="#getKey"><code>getKey()</code></a></td>
                <td>Get cache key.</td>
            </tr>
            <tr>
                <td><a href="#contains"><code>contains()</code></a></td>
                <td>Returns a boolean state of whether or not the item exists in the cache based on id key.</td>
            </tr>
            <tr>
                <td><a href="#fetch"><code>fetch()</code></a></td>
                <td>Fetches an item from the cache.</td>
            </tr>
            <tr>
                <td><a href="#fetchMultiple"><code>fetchMultiple()</code></a></td>
                <td>Fetches multiple items from the cache.</td>
            </tr>
            <tr>
                <td><a href="#delete"><code>delete()</code></a></td>
                <td>Delete specific item from the cache.</td>
            </tr>
            <tr>
                <td><a href="#deleteMultiple"><code>deleteMultiple()</code></a></td>
                <td>Delete multiple item from the cache.</td>
            </tr>
            <tr>
                <td><a href="#deleteAll"><code>deleteAll()</code></a></td>
                <td>Deletes all cache items.</td>
            </tr>
            <tr>
                <td><a href="#flushAll"><code>flushAll()</code></a></td>
                <td>Flushes all cache items.</td>
            </tr>
            <tr>
                <td><a href="#purge"><code>purge()</code></a></td>
                <td>Purge specific cache directory.</td>
            </tr>
            <tr>
                <td><a href="#purgeAll"><code>purgeAll()</code></a></td>
                <td>Purge all cache directories.</td>
            </tr>
            <tr>
                <td><a href="#save"><code>save()</code></a></td>
                <td>Puts data into the cache.</td>
            </tr>
            <tr>
                <td><a href="#saveMultiple"><code>saveMultiple()</code></a></td>
                <td>Puts multiple data into the cache.</td>
            </tr>
            <tr>
                <td><a href="#setLifetime"><code>setLifetime()</code></a></td>
                <td>Set the cache lifetime.</td>
            </tr>
            <tr>
                <td><a href="#getLifetime"><code>getLifetime()</code></a></td>
                <td>Retrieve the cache lifetime (in seconds)</td>
            </tr>
            <tr>
                <td><a href="#getStats"><code>getStats()</code></a></td>
                <td>Retrieves cached information from the data store.</td>
            </tr>
        </tbody>
    </table>
</div>

##### <a name="getCacheDriver"></a> `getCacheDriver()`

Get Active Cache Driver.

**Examples**

```php
$cache_driver = $flextype->cache->getCacheDriver();
```

##### <a name="driver"></a> `driver()`

Returns a driver object

**Examples**

```php
$driver = $flextype->cache->driver();
```

##### <a name="getKey"></a> `getKey()`

Get cache key.

**Examples**

```php
$cache_key = $flextype->cache->getKey();
```

##### <a name="contains"></a> `contains()`

Returns a boolean state of whether or not the item exists in the cache based on id key.

**Examples**

Check is posts are exists in the cache then fetch them.

```php
if ($flextype->cache->contains('posts')) {
    $posts = $flextype->cache->fetch('posts');
}
```

##### <a name="fetch"></a> `fetch()`

Fetches an item from the cache.

**Examples**

Fetch posts from cache.

```php
$posts = $flextype->cache->fetch('posts');
```

##### <a name="fetchMultiple"></a> `fetchMultiple()`

Fetches multiple items from the cache.

**Examples**

Fetch posts and comments from the cache.

```php
$data = $flextype->cache->fetchMultiple(['posts', 'comments']);
```

##### <a name="delete"></a> `delete()`

Delete specific item from the cache.

**Examples**

Delete posts from the cache.

```php
$flextype->cache->delete('posts');
```

##### <a name="deleteMultiple"></a> `deleteMultiple()`

Delete multiple item from the cache.

**Examples**

Delete posts and comments from the cache.

```php
$flextype->cache->deleteMultiple(['posts', 'comments']);
```

##### <a name="deleteAll"></a> `deleteAll()`

Deletes all cache items.

**Examples**

```php
$flextype->cache->deleteAll();
```

##### <a name="flushAll"></a> `flushAll()`

Flushes all cache items.

**Examples**

```php
$flextype->cache->flushAll();
```

##### <a name="purge"></a> `purge()`

Purge specific cache directory.

**Examples**

Clear doctrine cache.

```php
$flextype->cache->purge('doctrine');
```

##### <a name="purgeAll"></a> `purgeAll()`

Purge all cache directories.

**Examples**

```php
$flextype->cache->purgeAll();
```

##### <a name="save"></a> `save()`

Puts data into the cache.

**Examples**

```php
$flextype->cache->save('posts', $posts);
```

##### <a name="saveMultiple"></a> `saveMultiple()`

Puts multiple data into the cache.

**Examples**

```php
$flextype->cache->saveMultiple(['posts' => $posts, 'comments' => $comments]);
```

##### <a name="setLifetime"></a> `setLifetime()`

Set the cache lifetime.

**Examples**

```php
$flextype->cache->setLifetime(300);
```

##### <a name="getLifetime"></a> `getLifetime()`

Retrieve the cache lifetime (in seconds)

**Examples**

```php
$lifetime = $flextype->cache->getLifetime();
```

##### <a name="getStats"></a> `getStats()`

Retrieves cached information from the data store.

**Examples**

```php
$stats = $flextype->cache->getStats();
```
