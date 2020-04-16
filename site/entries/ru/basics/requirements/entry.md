---
title: Requirements
description: System and Browser requirements for Flextype
on_this_page:
  - 
    title: "Web Server Requirements"
    link: "web-server-requirements"
  - 
    title: "PHP Requirements"
    link: "php-requirements"
---

You can easily run Flextype on your local computer and on any Web hosting providers. Make sure that your server meets the following requirements


### <a name="web-server-requirements"></a> Web Server Requirements

Flextype architecture is so elegant simple that it is can easily run on the most of available web servers.

For local development you may install one of this amazing servers:

* [XAMPP](https://www.apachefriends.org/index.html) is a completely free, easy to install Apache distribution containing MariaDB, PHP, and Perl. The XAMPP open source package has been set up to be incredibly easy to install and to use.

* [MAMP](https://www.mamp.info/en/mamp/mac/) is a free, local server environment that can be installed under macOS and Windows with just a few clicks. MAMP provides them with all the tools they need to run WordPress on their desktop PC for testing or development purposes, for example. With the help of our local DNS server NAMO, you can even easily test your projects on mobile devices. It doesn't matter if you prefer Apache or Nginx or if you want to work with PHP, Python, Perl or Ruby.

* [EasyPHP](https://www.easyphp.org) is a complete and ready-to-use PHP development environment on Windows including the web server Apache, the SQL Server MySQL and others development tools.

* [Laragon](https://laragon.org) is a fast & powerful local development environment.

Make sure that your web server provides Mod Rewrite.

### <a name="php-requirements"></a> PHP Requirements

Flextype needs PHP 7.2.0 or higher and the following PHP extensions to be enabled:

- Модуль PHP [mbstring](http://php.net/manual/en/book.mbstring.php) для полной поддержки UTF-8.
- PHP [gd](http://php.net/manual/en/book.image.php) или [ImageMagick](http://php.net/manual/en/book.imagick.php) модуль для обработки изображений.
- Модуль [PHP json](https://php.net/manual/en/book.json.php) для манипулирования JSON.
- PHP [Информация о файле](https://www.php.net/manual/en/book.fileinfo.php)
- PHP [SPL](https://www.php.net/manual/en/book.spl.php)
- PHP [DOM](https://www.php.net/manual/ru/class.domdocument.php)

Although it is optional, we strongly recommend enabling the following PHP extensions: APC, APCu, XCache, Memcached, or Redis for better [performance]([site_url]/en/advanced/performance-and-caching).
