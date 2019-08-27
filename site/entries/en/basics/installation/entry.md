---
title: Installation
---

## Flextype Installation

### Using (S)FTP

[Download the latest version.](http://flextype.org/download)

Unzip the contents to a new folder on your local computer, and upload to your webhost using the (S)FTP client of your choice. After you’ve done this, be sure to chmod the following directories (with containing files) to `755` (or `777`), so they are readable and writable by Flextype:

* `site/`

### Using Composer

You can easily install Flextype with Composer.

    composer create-project flextype/flextype
    

Also you may need to install vendor libs for Default Theme

    composer install
    cd site/themes/default
    npm install
    gulp
    

### Using command-line

If you have command-line access, you can easily install Flextype by executing a few commands. First, create the directory where you want to install Flextype, if it doesn’t already exist. Enter the directory, and execute the following commands:

    wget https://github.com/flextype/flextype/releases/download/v0.9.3/flextype-0.9.3.zip
    unzip flextype-0.9.3.zip
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
2. Go to `/site/config/settings.json` and update `theme` setting with your theme name.
3. Save your changes.

## Plugins Installation

1. Unzip plugin to the folder `/site/plugins/`