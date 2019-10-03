---
title: Конфигурация темы
---

Вы можете легко получить доступ к настройке тем и информации о темах из ваших файлов Twig и PHP.

### Доступ к тематической информации

Информация из текущего активного шаблона может быть получена из объекта `registry`.

Пример информации из `/site/themes/default/theme.yaml`:

```
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

Вы можете получить доступ к любому из этих элементов через раздел `registry.themes`, темы с помощью стандартного точечного синтаксиса:

Использовать:

```
Theme name: {{ registry.themes.default.name }}
Theme version: {{ registry.themes.default.version }}
```

Результат:

```
Theme name: Default
Theme version: 1.0.0
```

Вы также можете получить эти же значения из плагина Fextype с синтаксисом PHP:

Использовать:

```
$theme_name = $flextype->registry->get('themes.default.name');
$theme_version = $flextype->registry->get('themes.default.version');
```

### Доступ к тематической конфигурации

Theme's have configuration files, named `settings.yaml` located in `/site/themes/<themename>/`

For example, let us consider the Default theme and there is a file called settings.yaml in the theme's root folder. The contents of this configuration file look like this:

```
enabled: true
```

Let us add some custom theme settings. Open `/site/themes/default/settings.yaml` and add new variable with value `highlight: red`

```
enabled: true
highlight: red
```

Then in your theme templates you can access these variable using the `registry.themes.default` object:

```
<h1 style="color:{{ registry.themes.default.highlight }}">
    BUILD FAST, FLEXIBLE, EASIER TO MANAGE WEBSITES WITH FLEXTYPE.
</h1>
```

Result:

<h1 style="color:red">BUILD FAST, FLEXIBLE, EASIER TO MANAGE WEBSITES WITH FLEXTYPE.</h1>

In PHP you can access the current theme configuration like this:

```
$highlight = $flextype->registry->get('themes.default.highlight');
```
