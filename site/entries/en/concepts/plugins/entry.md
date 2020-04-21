---
title: Plugins
description: Entries are the fundamental building-blocks of your site. Each entry in Flextype should contains Entry Front Matter block in YAML format at the top of the file and Entry Content marked up using HTML + Markdown + Shortcodes at the bottom of the file.
on_this_page:
  0:
    title: "What are plugins?"
    link: "what-are-plugins"
  1:
    title: "Installation"
    link: "installation"
  2:
    title: "Configuration"
    link: "configuration"
---
### <a name="what-are-plugins"></a> What are plugins?

Plugins are the foundation for adding new features to the Flextype by extending it.

Each Flextype plugin is an additional piece of software that can be easily installed to extend the functionality of Flextype core.

This allows you to customize your Flextype powered project with your desired functionality. Since so much functionality is provided through plugins, Flextype core is full-featured and customizable, without having to include everything for everyone.

Plugins are available via the Flextype Plugin Directory.

### <a name="installation"></a> Installation

1. Unzip plugin to the folder `/site/plugins/`

### <a name="configuration"></a> Configuration

You can easily access plugin configuration and plugin information by Flextype Core API and Content APIs.

#### Accessing Plugin Information

Information for the currently enabled plugins you can get from the `registry` object.

Example information from `/site/plugins/site/plugin.yaml`

<div class="file-header"><i class="far fa-file-alt"></i> /site/plugins/site/plugin.yaml</div>
```yaml
name: Site
version: 1.0.0
description: Site plugin to display entries content on the website frontend.
icon: fas fa-globe
author:
  name: Sergey Romanenko
  email: support@flextype.org
  url: http://flextype.org
homepage: https://github.com/flextype-plugins/site
bugs: https://github.com/flextype-plugins/site/issues
license: MIT

dependencies:
  flextype: 0.9.8
  plugins:
    twig: 1.0.0
  themes:
    noir: 1.0.0
```

You can reach these items values from a Flextype plugin(s) with PHP syntax:

Usage:

```php
$plugin_name = $flextype->registry->get('plugins.site.manifest.name');
$plugin_version = $flextype->registry->get('plugins.site.manifest.version');
```

#### Accessing Plugin Configuration

Plugins have default and site configuration files, named `settings.yaml` located in `/site/plugins/<pluginname>/` and in `/site/config/plugins/<pluginname>/`

For example, let us consider the Site plugin and there is a file called `settings.yaml` in the plugins site settings folder. The contents of this configuration file look like this:

```yaml
enabled: true
```

Let us add some custom plugin settings.

Open `/site/config/plugins/site/settings.yaml` and add new variable with value:

`my_custom_var: "Lorem ipsum dolor sit amet"`

```yaml
enabled: true
my_custom_var: "Lorem ipsum dolor sit amet"
```

<br>
Then you can access the current plugin configuration like this:

```php
$my_custom_var = $flextype->registry->get('plugins.site.settings.my_custom_var');
```
