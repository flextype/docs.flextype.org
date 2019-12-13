---
title: Requirements
on_this_page:
  system_requirements:
    title: "System requirements"
    link: "system-requirements"
  php_extensions:
    title: "PHP extensions"
    link: "php-extensions"
  browser_requirements:
    title: "Browser requirements"
    link: "browser-requirements"
---

<a name="system-requirements"></a>

### Системные требования

Убедитесь, что ваш сервер отвечает следующим требованиям.

* Веб-сервер (Apache с функцией [Mod Rewrite](http://httpd.apache.org/docs/current/mod/mod_rewrite.html))
* PHP 7.2.0 или выше

<a name="php-extensions"></a>

### Расширения PHP

Для работы Flextype необходимо включить следующие расширения PHP:

- Модуль PHP [mbstring](http://php.net/manual/en/book.mbstring.php) для полной поддержки UTF-8.
- PHP [gd](http://php.net/manual/en/book.image.php) или [ImageMagick](http://php.net/manual/en/book.imagick.php) модуль для обработки изображений.
- Модуль [PHP json](https://php.net/manual/en/book.json.php) для манипулирования JSON.
- PHP [Информация о файле](https://www.php.net/manual/en/book.fileinfo.php)
- PHP [SPL](https://www.php.net/manual/en/book.spl.php)
- PHP [DOM](https://www.php.net/manual/ru/class.domdocument.php)

Хотя это и необязательно, мы настоятельно рекомендуем включить следующие расширения PHP: APC, APCu, XCache, Memcached или Redis для повышения производительности.

<a name="browser-requirements"></a>

### Требования к браузеру

Панель администрирования Flextype совместима с:

##### Windows и macOS

* Chrome 29 или позже
* Mozilla Firefox 28 или позже
* Safari 9.0 или позже
* Microsoft Edge

##### Мобильный

* iOS: Safari 9.1 или позже
* Android: Chrome 4.4 или позже
