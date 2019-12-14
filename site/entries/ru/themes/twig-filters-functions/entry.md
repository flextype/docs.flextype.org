---
title: Twig Фильтры и Функции
description: Twig already provides an extensive list of filters, functions, and tags, Flextype also provides a selection of useful additions to make the process of theming easier.
---

Twig уже предоставляет обширный список [фильтров, функций и тегов](https://twig.symfony.com/doc/2.x/), Flextype также предоставляет набор полезных дополнений, облегчающих процесс создания тем.

### Flextype Twig Фильтры

Фильтры Twig применяются к переменным Twig, используя символ `|`, за которым следуют имя фильтра. Параметры могут передаваться точно так же, как Twig-функции в скобках.

#### shortcode

Разбор

Применение:

```twig
{{ '[b]Bold text[/b]'|shortcode }}
```

Результат:

**Bold text**

#### markdown

Разбор

Применение: markdown

```twig
{{ '**Bold text**'|markdown }}
```

Результат:

**Bold text**

#### tr

Перевод текста

Применение:

```twig
{{ 'site_powered_by_flextype'|tr }}
```

Результат:

Создавайте быстрые, гибкие, простые в управлении веб-сайты с помощью
<a href="http://flextype.org">Flextype</a>.

Могут быть сцеплены несколько фильтров. Выход одного фильтра применяется к следующему.

Применение:

```twig
{{ '[b]Bold text[/b] *Italic text*'|shortcode|markdown }}
```

Результат:

**Bold text** *Italic text*

### Flextype Twig Функции

Функции Twig вызываются напрямую с любыми параметрами, передаваемыми через скобки.

#### yaml_decode

Декодируйте действительную строку из yaml в массив

Применение:

```twig
{{ yaml_decode('title: Hello World!').title }}
```

Результат:

```twig
Hello World!
```

#### yaml_encode

Encode array into valid yaml string

Usage:

```twig
{{ yaml_encode({'title': 'Hello World!'})}}
```

Result:

```yaml
title: 'Hello World!'
```

#### json_decode

Decode valid json string into array

Usage:

```twig
{{ json_decode('{"title": "Hello World!"}').title }}
```

Result:

```twig
Hello World!
```

#### json_encode

Encode array into valid json string

Usage:

```twig
{{ json_encode({'title': 'Hello World!'})}}
```

Result:

```json
{"title": "Hello World!"}
```

#### tr

Translate string

Применение:

```twig
{{ tr('site_powered_by_flextype') }}
```

Результат:

Build fast, flexible, easier to manage websites with
<a href="http://flextype.org">Flextype</a>.

#### filesystem_list_contents

List contents of a directory

Применение:

```twig
{% set media = filesystem_list_contents(PATH_ENTRIES ~ '/' ~ entry.slug) %}
```

Результат:

array (media)

#### filesystem_has

Check whether a file exists

Применение:

```twig
{% if (filesystem_has(PATH_ENTRIES ~ '/' ~ 'about/entry.md')) %}
    Show something...
{% endif %}
```

#### filesystem_read

Read a file

Usage:

```twig
{{ filesystem_read(PATH_ENTRIES ~ '/' ~ 'about/entry.md') }}
```

Result:

    ---
    title: About
    ---
    Some text here
    

#### filesystem_ext

Get file extension

Usage:

```twig
{{ filesystem_ext(PATH_ENTRIES ~ '/' ~ 'about/entry.md') }}
```

Result:

.md

#### filesystem_basename

Get filename

Применение:

```twig
{{ filesystem_basename(PATH_ENTRIES ~ '/' ~ 'about/entry.md') }}
```

Результат:

entry

#### path_for

Returns the URL for a given route.

Применение:

```twig
{{ path_for('profile') }}
```

#### base_url

Returns the Uri object's base URL.

Usage:

```twig
{{ base_url() }}
```

#### is_current_path

Returns true is the provided route name and parameters are valid for the current path.

```twig
{% if is_current_path('profile') %}
    Show profile page
{% endif %}
```

#### current_path

Renders the current path, with or without the query string.

```twig
{{ current_path() }}
```