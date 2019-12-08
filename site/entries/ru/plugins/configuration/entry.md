---
title: Plugin Configuration
---

You can easily access plugin configuration and plugin information from your Twig templates and PHP files.

### Accessing Plugin Information

Information for the currently enabled plugins you can get from the `registry` object.

Example information from `/site/plugins/site/plugin.yaml`

<div class="file-header"><i class="far fa-file-alt"></i> /site/plugins/site/plugin.yaml</div>

```yaml
name: Site
version: 0.9.6
description: Site plugin for Flextype
icon: fas fa-globe
author:
  name: Sergey Romanenko
  email: hello@romanenko.digital
  url: http://flextype.org
homepage: https://github.com/flextype
bugs: https://github.com/flextype/issues
license: MIT

```

You can reach any of these items in your TWIG templates via `registry.plugins` by using the standard dot-syntax:

Usage:

```twig
Plugin name: {{ registry.plugins.site.name }}
Plugin version: {{ registry.plugins.site.version }}
```

Result:

```twig
Plugin name: Site
Plugin version: 0.9.6
```

You can also reach these same values from a Flextype plugin(s) with PHP syntax:

Usage:

```php
$plugin_name = $flextype->registry->get('plugins.site.name');
$plugin_version = $flextype->registry->get('plugins.site.version');
```

### Accessing Plugin Configuration

Plugins have default and site configuration files, named `settings.yaml` located in `/site/plugins/<pluginname>/` and in `/site/config/plugins/<pluginname>/`

For example, let us consider the Site plugin and there is a file called `settings.yaml` in the plugins site settings folder. The contents of this configuration file look like this:

```yaml
enabled: true
```

Let us add some custom plugin settings. Open `/site/config/plugins/site/settings.yaml` and add new variable with value `my_custom_var: "Lorem ipsum dolor sit amet"`

```yaml
enabled: true
my_custom_var: "Lorem ipsum dolor sit amet"
```

Then in your theme templates you can access these variable using the `registry.plugins.site` object:

```twig
<div>{{ registry.plugins.site.my_custom_var }}</div>
```

Result:

<div>Lorem ipsum dolor sit amet</div>

<br>
In PHP you can access the current plugin configuration like this:

```php
$my_custom_var = $flextype->registry->get('plugins.site.my_custom_var');
```
