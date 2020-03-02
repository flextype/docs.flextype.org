---
title: Installation
description: Flextype is incredibly easy to set up and get running.
on_this_page:
  0:
    title: "Check for PHP version"
    link: "check-for-php-version"
  1:
    title: "Using (S)FTP"
    link: "using-sftp"
  2:
    title: "Using Composer"
    link: "using-composer"
  3:
    title: "Using command-line"
    link: "using-command-line"
  4:
    title: "Installation issues"
    link: "installation-issues"
---

### <a name="check-for-php-version"></a> Check for PHP version

Flextype is incredibly easy to set up and get running.  
Be sure you have at least PHP version 7.2.0+ by going to the terminal and typing `php -v`:

```plaintext
php -v
PHP 7.2.20 (cli) (built: Jul  5 2019 12:51:26) ( NTS )
Copyright (c) 1997-2018 The PHP Group
Zend Engine v3.2.0, Copyright (c) 1998-2018 Zend Technologies
 with Zend OPcache v7.2.20, Copyright (c) 1999-2018, by Zend Technologies
```

### <a name="using-sftp"></a> Using (S)FTP

[Download the latest version.](http://flextype.org/en/downloads)

Unzip the contents to a new folder on your local computer, and upload to your webhost using the (S)FTP client of your choice. After you’ve done this, be sure to chmod the following directories (with containing files) to `755` (or `777`), so they are readable and writable by Flextype:

* `site/`

### <a name="using-composer"></a> Using Composer

You can easily install Flextype with Composer.

Once you have installed Composer, run the following command to set up Flextype:

```plaintext
composer create-project flextype/flextype
```

or you may setup Flextype with a dev stability

```plaintext
composer create-project flextype/flextype --stability=dev
```

Also you may need to install vendor libs for default plugins and default theme.
Go to your project folder, and run:

```plaintext
composer install --no-dev;

cd site/themes/default
npm install
gulp

cd site/plugins/admin
npm install
gulp
composer install --no-dev

cd site/plugins/form
composer install --no-dev

cd site/plugins/icon
npm install
gulp
composer install --no-dev

cd site/plugins/site
composer install --no-dev
```

### <a name="using-command-line"></a> Using command-line

If you have command-line access, you can easily install Flextype by executing a few commands. First, create the directory where you want to install Flextype, if it doesn’t already exist. Enter the directory, and execute the following commands:

```plaintext
wget https://github.com/flextype/flextype/releases/download/v0.9.7/flextype-0.9.7.zip
unzip flextype-0.9.7.zip
chmod -R 0777 site/
```

### <a name="installation-issues"></a> Installation issues

##### Broken subpages

Your homepage is working, but subpages won't open or lead to a server error?

1. Make sure that the .htaccess file is present in your Flextype folder.
2. Check if mod_rewrite is enabled on your server.
3. Please try setting the RewriteBase in the .htaccess file:

```
RewriteBase /
```

If you run Flextype in a subfolder, make sure to set the RewriteBase according to the name of your subfolder:

```
RewriteBase /my-subfolder/
```
