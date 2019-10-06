---
title: Twig Фильтры и Функции
---

Twig уже предоставляет обширный список [фильтров, функций и тегов](https://twig.symfony.com/doc/2.x/), Flextype также предоставляет набор полезных дополнений, облегчающих процесс создания тем.

### Flextype Twig Фильтры

Фильтры Twig применяются к переменным Twig, используя символ `|`, за которым следуют имя фильтра. Параметры могут передаваться точно так же, как Twig-функции в скобках.

#### shortcode

Разбор

Применение:

    {{ '[b]Bold text[/b]'|shortcode }}
    

Результат:

**Bold text**

#### markdown

Разбор

Применение: markdown

    {{ '**Bold text**'|markdown }}
    

Результат:

**Bold text**

#### tr

Перевод текста

Применение:

    {{ 'site_powered_by_flextype'|tr }}
    

Результат:

Создавайте быстрые, гибкие, простые в управлении веб-сайты с помощью
<a href="http://flextype.org">Flextype</a>.

Могут быть сцеплены несколько фильтров. Выход одного фильтра применяется к следующему.

Применение:

    {{ '[b]Bold text[/b] *Italic text*'|shortcode|markdown }}
    

Результат:

**Bold text** *Italic text*

### Flextype Twig Функции

Функции Twig вызываются напрямую с любыми параметрами, передаваемыми через скобки.

#### yaml_decode

Декодируйте действительную строку из yaml в массив

Применение:

    {{ yaml_decode('title: Hello World!').title }}
    

Результат:

Hello World!

#### yaml_encode

Кодировать массив в действительную строку yaml

Применение:

    {{ yaml_encode({'title': 'Hello World!'})}}
    

Результат:

title: 'Hello World!'

#### json_decode

Декодируйте действительную строку из yaml в массив

Применение:

    {{ json_decode('{"title": "Hello World!"}').title }}
    

Результат:

Hello World!

#### json_encode

Кодировать массив в действительную строку yaml

Применение:

    {{ json_encode({'title': 'Hello World!'})}}
    

Результат:

{"title": "Hello World!"}

#### tr

Перевести строку

Применение:

    {{ tr('site_powered_by_flextype') }}
    

Результат:

Создавайте быстрые, гибкие, простые в управлении веб-сайты с помощью
<a href="http://flextype.org">Flextype</a>.

#### filesystem_list_contents

Считывает содержимое каталога

Применение:

    {% set media = filesystem_list_contents(PATH_ENTRIES ~ '/' ~ entry.slug) %}
    

Результат:

array (media)

#### filesystem_has

Проверьте наличие файла

Применение:

    {% if (filesystem_has(PATH_ENTRIES ~ '/' ~ 'about/entry.md')) %}
        Show something...
    {% endif %}
    

#### filesystem_read

Открыть файл

Применение:

    {{ filesystem_read(PATH_ENTRIES ~ '/' ~ 'about/entry.md') }}
    

Результат:

    ---
    title: About
    ---
    

#### filesystem_ext

Получить расширение файла

Применение:

    {{ filesystem_ext(PATH_ENTRIES ~ '/' ~ 'about/entry.md') }}
    

Результат:

.md

#### filesystem_basename

Получить имя файла

Применение:

    {{ filesystem_basename(PATH_ENTRIES ~ '/' ~ 'about/entry.md') }}
    

Результат:

entry

#### path_for

Returns the URL for a given route.

Usage:

    {{ path_for('profile') }}
    

#### base_url

Returns the Uri object's base URL.

Usage:

    {{ base_url() }}
    

#### is_current_path

Returns true is the provided route name and parameters are valid for the current path.

    {% if is_current_path('profile') %}
        Show profile page
    {% endif %}
    

#### current_path

Renders the current path, with or without the query string.

    {{ current_path() }}