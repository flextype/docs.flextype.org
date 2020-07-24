---
title: Requirements
description: System and Browser requirements for Flextype
on_this_page:
  - 
    title: "System requirements"
    link: "system-requirements"
  - 
    title: "PHP extensions"
    link: "php-extensions"
  - 
    title: "Browser requirements"
    link: "browser-requirements"
---

### <a name="system-requirements"></a> Системные требования

Убедитесь, что ваш сервер отвечает следующим требованиям.

* Веб-сервер (Apache с функцией [Mod Rewrite](http://httpd.apache.org/docs/current/mod/mod_rewrite.html))
* PHP 7.2.0 или выше

### <a name="php-extensions"></a> Расширения PHP

Для работы Flextype необходимо включить следующие расширения PHP:

- Модуль PHP [mbstring](http://php.net/manual/en/book.mbstring.php) для полной поддержки UTF-8.
- PHP [gd](http://php.net/manual/en/book.image.php) или [ImageMagick](http://php.net/manual/en/book.imagick.php) модуль для обработки изображений.
- Модуль [PHP json](https://php.net/manual/en/book.json.php) для манипулирования JSON.
- PHP [Информация о файле](https://www.php.net/manual/en/book.fileinfo.php)
- PHP [SPL](https://www.php.net/manual/en/book.spl.php)
- PHP [DOM](https://www.php.net/manual/ru/class.domdocument.php)

Although it is optional, we strongly recommend enabling the following PHP extensions: APC, APCu, XCache, Memcached, or Redis for better performance.

### <a name="browser-requirements"></a> Требования к браузеру

Панель администрирования Flextype совместима с:

#### Windows and macOS

* Chrome 29 или позже
* Mozilla Firefox 28 или позже
* Safari 9.0 или позже
* Microsoft Edge

#### Mobile

* iOS: Safari 9.1 или позже
* Android: Chrome 4.4 или позже
