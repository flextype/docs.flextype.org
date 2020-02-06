---
title: Flextype meets Composer
description: Install and update Flextype via Composer.
---

Composer is an application-level package manager for the PHP programming language that provides a standard format for managing dependencies of PHP software and required libraries. It was developed by Nils Adermann and Jordi Boggiano, who continue to manage the project.

Composer runs from the command line and installs dependencies (e.g. libraries) for an application. It also allows users to install PHP applications that are available on [Packagist](https://packagist.org) which is its main repository containing available packages. It also provides autoload capabilities for libraries that specify autoload information to ease usage of third-party code.

If you have never used Composer before, you first need to install it. Please follow the [instructions on the Composer website.](https://getcomposer.org/doc/00-intro.md)

Once you have installed Composer, run the following command to set up Flextype:

```plaintext
composer create-project flextype/flextype
```

or you may setup Flextype with a dev stability

```plaintext
composer create-project flextype/flextype --stability=dev
```

Also you may need to install vendor libs for default plugins and default theme. Go to your project folder, and run:

```plaintext

composer install

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
