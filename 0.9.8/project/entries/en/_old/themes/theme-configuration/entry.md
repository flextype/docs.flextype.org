---
title: Theme Configuration
description: You can easily access theme configuration and theme information from your Twig and PHP files.
---

You can easily access theme configuration and theme information from your Twig and PHP files.

### Accessing Theme Information

Information from the currently active theme can get from the `registry` object.

Example information from `/site/themes/default/theme.yaml`

<div class="file-header"><i class="far fa-file-alt"></i> /site/themes/default/theme.yaml</div>
```yaml
name: Default
version: 1.0.0
description: Default theme for Flextype
author:
  name: Sergey Romanenko
  email: hello@romanenko.digital
  url: http://romanenko.digital
homepage: https://github.com/flextype/flextype
bugs: https://github.com/flextype/flextype/issues
license: MIT
```

You can reach any of these items via `registry.themes` by using the standard dot-syntax:

Usage:

```twig
Theme name: {{ registry.themes.default.name }}
Theme version: {{ registry.themes.default.version }}
```

Result:

```twig
Theme name: Default
Theme version: 1.0.0
```

You can also reach these same values from a Flextype plugin(s) with PHP syntax:

Usage:

```php
$theme_name = $flextype->registry->get('themes.default.name');
$theme_version = $flextype->registry->get('themes.default.version');
```

### Accessing Theme Configuration

Themes have default and site configuration files, named `settings.yaml` located in `/site/themes/<themename>/` and in `/site/config/themes/<themename>/`

For example, let us consider the Default theme and there is a file called `settings.yaml` in the themes site settings folder. The contents of this configuration file look like this:

```yaml
enabled: true
```

Let us add some custom theme settings. Open `/site/config/themes/default/settings.yaml` and add new variable with value `highlight: red`

```yaml
enabled: true
highlight: red
```

Then in your theme templates you can access these variable using the `registry.themes.default` object:

```twig
<h1 style="color:{{ registry.themes.default.highlight }}">
    BUILD FAST, FLEXIBLE, EASIER TO MANAGE WEBSITES WITH FLEXTYPE.
</h1>
```

Result:

<h1 style="color:red">BUILD FAST, FLEXIBLE, EASIER TO MANAGE WEBSITES WITH FLEXTYPE.</h1>


In PHP you can access the current theme configuration like this:

```php
$highlight = $flextype->registry->get('themes.default.highlight');
```
