---
title: Performance & Caching
description: Flextype is super fast content management system because of its elegance architecture. It is do not use super heavy solutions and libraries to delivery the site content. Flextype caching system is really smart and efficient to deliver site content fast as possible.
---

Flextype is super fast content management system because of its elegance architecture.<br>It is do not use super heavy solutions and libraries to delivery the site content.<br>Flextype caching system is really smart and efficient to deliver site content fast as possible.

But there is a several ways to speed up your projects powered by Flextype even more!

### Performance

1. **PHP caching is critical for Flextype.** You should run a PHP OPCache and User Cache in order to get the best performance results.

2. **SSD drives.** Most things can get cached in PHP User Cache, but some are stored as files, so SSD drives can make a big impact on performance.

3. **Native hosting will always be faster than a Virtual Machine.** Virtual Machines are a great way hosting providers can offer flexible “cloud” type environments. These add a layer of processing that will always affect performance. Flextype can still be fast on a Virtual Machine (much faster than WordPress, Joomla!, Drupal, etc), but still, for optimal performance, you can't beat a native hosting option.

4. **Faster memory is better.** Flextype architecture designed to be super fast! It is operate with memory very carefully compare to some others Flat File CMS. But to work with big amount of data will be important to have ability to increase limit of memory on your server.

5. **Shared hosting** is cheap and readily available, but sharing resources will always slow things down a bit.

6. **Multi-core processors are better.** Faster and more advanced processors will always help, but not as much as the other points.

7. **PECL Yaml Parser.** Installing the native PHP PECL Yaml parser can increase YAML parsing!

### Caching Options

Flextype caching system is really smart and efficient.

Flextype uses the established and well-respected [Doctrine Cache library](https://www.doctrine-project.org/projects/doctrine-orm/en/2.6/reference/caching.html). This means that Flextype supports any caching mechanism that Doctrine Cache supports.

* Auto (Default) - Finds the best option automatically
* File - Stores in cache files in the cache/ folder
* APC - https://php.net/manual/en/book.apc.php
* XCache - http://xcache.lighttpd.net/
* Memcache - https://php.net/manual/en/book.memcache.php
* Redis - https://redis.io
* WinCache - https://www.iis.net/downloads/microsoft/wincache-extension

By default, Flextype comes preconfigured to use the auto setting. This will try APC, then WinCache, then XCache, and lastly File. You can, of course, explicitly configure the cache in your `site/config/settings.yaml` file, which could make things ever so slightly faster.
