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

У темы есть конфигурационные файлы, под названием: `settings.yaml` расположенный в `/site/themes/<themename>/`

Например, давайте рассмотрим тему Default (По умолчанию) и в корневой папке темы есть файл settings.yaml. Содержимое этого конфигурационного файла выглядит следующим образом:

```
enabled: true
```

Давайте добавим некоторые пользовательские настройки тем. Открыть `/site/themes/default/settings.yaml` и добавить новую переменную с значением `highlight: red`

```
enabled: true
highlight: red
```

Затем в шаблонах тем вы можете получить доступ к этой переменной с помощью объекта `registry.themes.default.`:object:

```
<h1 style="color:{{ registry.themes.default.highlight }}">
    BUILD FAST, FLEXIBLE, EASIER TO MANAGE WEBSITES WITH FLEXTYPE.
</h1>
```

Результат:

<h1 style="color:red">СОЗДАВАТЬ БЫСТРЫЕ, ГИБКИЕ, ПРОСТЫЕ В УПРАВЛЕНИИ ВЕБ-САЙТЫ С ПОМОЩЬЮ ТЕХНОЛОГИИ FLEXTYPE.</h1>

В PHP вы можете получить доступ к текущей конфигурации тем следующим образом:

```
$highlight = $flextype->registry->get('themes.default.highlight');
```
