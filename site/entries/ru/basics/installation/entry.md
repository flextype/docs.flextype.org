---
title: Установка
on_this_page:
  - 
    title: "Check for PHP version"
    link: "check-for-php-version"
  - 
    title: "Using (S)FTP"
    link: "using-sftp"
  - 
    title: "Using Composer"
    link: "using-composer"
  - 
    title: "Using command-line"
    link: "using-command-line"
  - 
    title: "Installation issues"
    link: "installation-issues"
---

### <a name="check-for-php-version"></a> Проверьте версию PHP

Flextype is incredibly easy to set up and get running.  
Be sure you have at least PHP version 7.2.0+ by going to the terminal and typing `php -v`:

```plaintext
php -v
PHP 7.2.20 (cli) (built: Jul  5 2019 12:51:26) ( NTS )
Copyright (c) 1997-2018 The PHP Group
Zend Engine v3.2.0, Copyright (c) 1998-2018 Zend Technologies
 with Zend OPcache v7.2.20, Copyright (c) 1999-2018, by Zend Technologies
```

### <a name="using-sftp"></a> Использование (S)FTP

[Download the latest version.](http://flextype.org/en/downloads)

Unzip the contents to a new folder on your local computer, and upload to your webhost using the (S)FTP client of your choice. After you’ve done this, be sure to chmod the following directories (with containing files) to `755` (or `777`), so they are readable and writable by Flextype:

* `site/`

### <a name="using-composer"></a> Использование Composer

You can easily install Flextype with Composer.

```plaintext
composer create-project flextype/flextype
```

Also you may need to install vendor libs for default plugins and default theme. Go to your project folder, and run:

```plaintext
cd site/plugins/admin
composer install
npm install
gulp

cd ../../../

cd site/plugins/site
composer install

cd ../../../

cd site/themes/default
npm install
gulp
```

### <a name="using-command-line"></a> Использование командной строки

If you have command-line access, you can easily install Flextype by executing a few commands. First, create the directory where you want to install Flextype, if it doesn’t already exist. Enter the directory, and execute the following commands:

```plaintext
wget https://github.com/flextype/flextype/releases/download/v0.9.6/flextype-0.9.6.zip
unzip flextype-0.9.6.zip
chmod -R 0777 site/
```

### <a name="installation-issues"></a> Проблемы при установке

##### Не работают под-страницы

Your homepage is working, but subpages won't open or lead to a server error?

1. Удостоверьтесь, что в папке с установленным Flextype присутствует файл .htaccess.
2. Проверьте, активирован ли на вашем сервере mod_rewrite.
3. Please try setting the RewriteBase in the .htaccess file:

    RewriteBase /
    

If you run Flextype in a subfolder, make sure to set the RewriteBase according to the name of your subfolder:

    RewriteBase /my-subfolder/