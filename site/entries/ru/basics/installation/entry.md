---
title: Установка
---

### Проверьте версию PHP

Flextype невероятно легко настроить и запустить.  
Убедитесь, что у вас есть хотя бы PHP версии 7.2.0+, перейдя в терминал и набрав `php -v`:

                php -v
                PHP 7.2.20 (cli) (built: Jul  5 2019 12:51:26) ( NTS )
                Copyright (c) 1997-2018 The PHP Group
                Zend Engine v3.2.0, Copyright (c) 1998-2018 Zend Technologies
                    with Zend OPcache v7.2.20, Copyright (c) 1999-2018, by Zend Technologies
    

### Использование (S)FTP

[Загрузите последнюю версию.](http://flextype.org/en/download)

Распакуйте содержимое в новую папку на локальном компьютере и загрузите на свой веб-узел с помощью выбранного FTP-клиента. Затем, когда файлы загружены, удостоверьтесь в том, что вы выставили права chmod (для *nix систем) `755`, либо `777` на следующие директории:

* `site/`

### Использование Composer

Вы можете легко установить Flextype с помощью Composer.

                composer create-project flextype/flextype
    

Вероятно, вам понадобится внешние библиотеки для default-темы сайта с помощью Node Package Manager

                composer install
                cd site/themes/default
                npm install
                gulp
    

### Использование командной строки

If you have command-line access, you can easily install Flextype by executing a few commands. First, create the directory where you want to install Flextype, if it doesn’t already exist. Enter the directory, and execute the following commands:

                wget https://github.com/flextype/flextype/releases/download/v0.9.4/flextype-0.9.4.zip
                unzip flextype-0.9.4.zip
                chmod -R 0777 site/
    

### Installation issues

##### Broken subpages

Your homepage is working, but subpages won't open or lead to a server error?

1. Make sure that the .htaccess file is present in your Flextype folder.
2. Check if mod_rewrite is enabled on your server.
3. Please try setting the RewriteBase in the .htaccess file:
    
    RewriteBase /

If you run Flextype in a subfolder, make sure to set the RewriteBase according to the name of your subfolder:

                RewriteBase /my-subfolder/
    

## Themes Installation

1. Unzip theme to the folder `/site/themes/`
2. Go to `/site/config/settings.yaml` and update `theme` setting with your theme name.
3. Save your changes.

## Plugins Installation

1. Unzip plugin to the folder `/site/plugins/`