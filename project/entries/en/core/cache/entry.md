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

Flextype caching system is really smart and efficient.

Flextype uses the established and well-respected [Doctrine Cache library](https://www.doctrine-project.org/projects/doctrine-orm/en/2.6/reference/caching.html). This means that Flextype supports any caching mechanism that Doctrine Cache supports and our own PhpArrayFile driver which stores the data in a native PHP array.

* Auto (Default) - Finds the best option automatically
* File - Stores in cache files in the `/var/cache/` folder
* APC - https://php.net/manual/en/book.apc.php
* XCache - http://xcache.lighttpd.net/
* Memcache - https://php.net/manual/en/book.memcache.php
* Redis - https://redis.io
* WinCache - https://www.iis.net/downloads/microsoft/wincache-extension

By default, Flextype comes preconfigured to use the auto setting. This will try APC, then WinCache, then XCache, and lastly PhpArrayFile. You can, of course, explicitly configure the cache in your `/project/config/flextype/settings.yaml` file, which could make things ever so slightly faster.

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
                <td>Get Cache Driver</td>
            </tr>
            <tr>
                <td><a href="#driver"><code>driver()</code></a></td>
                <td>Registers or update a given value under a given name.</td>
            </tr>
            <tr>
                <td><a href="#getKey"><code>getKey()</code></a></td>
                <td>Get cache key.</td>
            </tr>
            <tr>
                <td><a href="#fetch"><code>fetch()</code></a></td>
                <td>Fetches an item from the cache.</td>
            </tr>
            <tr>
                <td><a href="#contains"><code>contains()</code></a></td>
                <td>Checking whether cached data exists.</td>
            </tr>
            <tr>
                <td><a href="#delete"><code>delete()</code></a></td>
                <td>Delete specific item from the cache.</td>
            </tr>
            <tr>
                <td><a href="#clear"><code>clear()</code></a></td>
                <td>Clear cache</td>
            </tr>
            <tr>
                <td><a href="#clearAll"><code>clearAll()</code></a></td>
                <td>Clear all cahce namespaces.</td>
            </tr>
            <tr>
                <td><a href="#setLifetime"><code>setLifetime()</code></a></td>
                <td>Set the cache lifetime.</td>
            </tr>
            <tr>
                <td><a href="#getLifetime"><code>getLifetime()</code></a></td>
                <td>Retrieve the cache lifetime (in seconds)</td>
            </tr>
        </tbody>
    </table>
</div>
