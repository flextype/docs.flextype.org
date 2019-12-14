---
title: Requirements
description: System and Browser requirements for Flextype
on_this_page:
  0:
    title: "System requirements"
    link: "system-requirements"
  1:
    title: "PHP extensions"
    link: "php-extensions"
  2:
    title: "Browser requirements"
    link: "browser-requirements"

---

### <a name="system-requirements"></a> System requirements

Make sure your server meets the following requirements.

* Webserver (Apache with [Mod Rewrite](http://httpd.apache.org/docs/current/mod/mod_rewrite.html))
* PHP 7.2.0 or higher

### <a name="php-extensions"></a> PHP extensions

Flextype needs the following PHP extensions to be enabled:

- PHP [mbstring](http://php.net/manual/en/book.mbstring.php) module for full UTF-8 support.
- PHP [gd](http://php.net/manual/en/book.image.php) or [ImageMagick](http://php.net/manual/en/book.imagick.php) module for image processing.
- PHP [json](https://php.net/manual/en/book.json.php) module for JSON manipulation.
- PHP [Fileinfo](https://www.php.net/manual/en/book.fileinfo.php)
- PHP [SPL](https://www.php.net/manual/en/book.spl.php)
- PHP [DOM](https://www.php.net/manual/ru/class.domdocument.php)

Although it is optional, we strongly recommend enabling the following PHP extensions:  
APC, APCu, XCache, Memcached, or Redis for better performance.

### <a name="browser-requirements"></a> Browser requirements

The admin panel of Flextype is compatible with:

#### Windows and macOS

* Chrome 29 or later
* Firefox 28 or later
* Safari 9.0 or later
* Microsoft Edge

#### Mobile

* iOS: Safari 9.1 or later
* Android: Chrome 4.4 or later
