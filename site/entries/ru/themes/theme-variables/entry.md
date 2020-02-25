---
title: Настраиваемые параметры темы
description: When you are designing a theme, Flextype gives you access to all sorts of objects and variables from within your Twig templates. The Twig templating framework provides powerful ways to read and manipulate these objects and variables.
---

При проектировании темы Flextype дает доступ ко всем видам объектов и переменных из ваших шаблонов Twig. Шаблон Twig предоставляет мощные способы для чтения и манипулирования этими объектами и переменными.

### Основные объекты

Существует несколько основных объектов ****, которые доступны для шаблона Twig, и каждый объект имеет набор переменных **** и **функций**.

#### реестр

Реестр хранит все настройки flextype, тем и плагинов.<br /> Вы можете получить доступ к реестру Flextype через объект реестра.

Применение:

```twig
{{ registry.flextype.theme }} {# returns the currently configured theme #}
```

#### записи

Поскольку Flextype построен с использованием структуры, определенной в папке `/site/entries/`, каждая запись представлена объектом записи.

Объект записи, вероятно, самый важный объект, с которым вы будете работать, так как он содержит всю информацию о текущей странице, на которой вы находитесь в данный момент.

Применение:

```twig
{{ entry.title }} {# returns the current entry title #}
```

#### entries

Получить одну запись

Применение:

```twig
{% set about_entry = entries.fetch('about') %}
```

Получить коллекцию записей

Применение:

```twig
{% set posts = entries.fetch('blog', {}) %}
or
{% set posts = entries.fetchCollection('blog') %}
```

#### assets

Добавить активы в коллекцию

Применение:

```twig
{% set site = site_url() ~ '/site/themes/' ~ registry.flextype.theme ~ '/assets/dist/site/site.min.css' %}
{% do assets.add('css', site, 'site', 1) %}
```

Получить активы из коллекции

Применение:

```twig
{% for assets_site in assets.get('css', 'site') %}
    {% for assets_by_priorities in assets_site %}
        <link href="{{ assets_by_priorities.asset }}" rel="stylesheet">
    {% endfor %}
{% endfor %}
```

#### emitter

Происходящие события

Применение:
```twig
{% do emitter.emit('onThemeHeader') %}
```

Выпуск событий партиями

Применение:

```twig
{% do emitter.emitBatch({'onThemeHeader', 'onSomeOtherEvent'}) %}
```

#### snippets

Execute snippet

Применение:

```twig
{{ snippets.exec('google-analytics')|raw }}
```

### Глобальные переменные

```twig
{{ PATH_SITE }} {# Returns the path to the site directory (without trailing slash). #}
{{ PATH_PLUGINS }} {# Returns the plugins to the root directory (without trailing slash). #}
{{ PATH_THEMES }} {# Returns the path to the themes directory (without trailing slash). #}
{{ PATH_ENTRIES }} {# Returns the path to the entries directory (without trailing slash). #}
{{ PATH_SNIPPETS }} {# Returns the path to the snippets directory (without trailing slash). #}
{{ PATH_FIELDSETS }} {# Returns the path to the fieldsets directory (without trailing slash). #}
{{ PATH_LOGS }} {# Returns the path to the logs directory (without trailing slash). #}
{{ PATH_TOKENS }} {# Returns the path to the tokens directory (without trailing slash). #}
{{ PATH_ACCOUNTS }} {# Returns the path to the accounts directory (without trailing slash). #}
{{ PATH_CONFIG_DEFAULT }} {# Returns the path to the default config directory (without trailing slash). #}
{{ PATH_CONFIG_SITE }} {# Returns the path to the site config directory (without trailing slash). #}
{{ PATH_CACHE }} {# Returns the path to the cache directory (without trailing slash). #}
{{ FLEXTYPE_VERSION }} {# Returns the Flextype version #}
{{ PHP_VERSION }} {# Returns the php version #}
```
