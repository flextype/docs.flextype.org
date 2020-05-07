---
title: Конфигурация темы
description: You can easily access theme configuration and theme information from your Twig and PHP files.
---

Вы можете легко получить доступ к настройке тем и информации о темах из ваших файлов Twig и PHP.

### Доступ к тематической информации

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

Вы можете получить доступ к любому из этих элементов через раздел `registry.themes`, темы с помощью стандартного точечного синтаксиса:

Использовать:

```twig
Theme name: {{ registry.themes.default.name }}
Theme version: {{ registry.themes.default.version }}
```

Результат:

```twig
Theme name: Default
Theme version: 1.0.0
```

You can also reach these same values from a Flextype plugin(s) with PHP syntax:

Использовать:

```php
$theme_name = $flextype->registry->get('themes.default.name');
$theme_version = $flextype->registry->get('themes.default.version');
```

### Доступ к тематической конфигурации

Themes have default and site configuration files, named `settings.yaml` located in `/site/themes/<themename>/` and in `/site/config/themes/<themename>/`

For example, let us consider the Default theme and there is a file called `settings.yaml` in the themes site settings folder. Содержимое этого конфигурационного файла выглядит следующим образом:

```yaml
enabled: true
```

Давайте добавим некоторые пользовательские настройки тем. Open `/site/config/themes/default/settings.yaml` and add new variable with value `highlight: red`

```yaml
enabled: true
highlight: red
```

Затем в шаблонах тем вы можете получить доступ к этой переменной с помощью объекта `registry.themes.default.`:object:

```twig
<h1 style="color:{{ registry.themes.default.highlight }}">
    BUILD FAST, FLEXIBLE, EASIER TO MANAGE WEBSITES WITH FLEXTYPE.
</h1>
```

Результат:

<h1 style="color:red">СОЗДАВАТЬ БЫСТРЫЕ, ГИБКИЕ, ПРОСТЫЕ В УПРАВЛЕНИИ ВЕБ-САЙТЫ С ПОМОЩЬЮ ТЕХНОЛОГИИ FLEXTYPE.</h1>

В PHP вы можете получить доступ к текущей конфигурации тем следующим образом:

```php
$highlight = $flextype->registry->get('themes.default.highlight');
```
