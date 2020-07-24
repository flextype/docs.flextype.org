---
title: Configuration
description: Plugins are the foundation for adding new features to the Flextype by extending it. Each Flextype plugin is an additional piece of software that can be easily installed to extend the functionality of Flextype core.
breadcrumbs:
  0:
    title: "Documentation"
    link: "[url]/en/"
  1:
    title: "Concepts"
    link: "[url]/en/concepts/"
  2:
    title: "Plugins"
    link: "[url]/en/concepts/plugins/"
---

You can easily access plugin configuration and plugin information by Flextype Core API and Content APIs.

#### Accessing Plugin Information

Information for the currently enabled plugins you can get from the `registry` object.

Example information from `/project/plugins/site/plugin.yaml`

<div class="file-header"><i class="far fa-file-alt"></i> /project/plugins/site/plugin.yaml</div>
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
  twig: '>=1.0.0'
```

You can reach these items values from a Flextype plugin(s) with PHP syntax:

Usage:

```php
$plugin_name = $flextype->registry->get('plugins.site.manifest.name');
$plugin_version = $flextype->registry->get('plugins.site.manifest.version');
```

#### Accessing Plugin Configuration

Plugins have default and site configuration files, named `settings.yaml` located in `/project/plugins/<pluginname>/` and in `/project/config/plugins/<pluginname>/`

For example, let us consider the Site plugin and there is a file called `settings.yaml` in the plugins site settings folder. The contents of this configuration file look like this:

```yaml
enabled: true
```

Let us add some custom plugin settings.

Open `/project/config/plugins/site/settings.yaml` and add new variable with value:

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
