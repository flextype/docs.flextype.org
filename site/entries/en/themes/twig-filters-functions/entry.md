---
title: Twig Filters & Functions
---

Twig already provides an extensive list of [filters, functions, and tags](https://twig.symfony.com/doc/2.x/), Flextype also provides a selection of useful additions to make the process of theming easier.

### Flextype Twig Filters

Twig filters are applied to Twig variables by using the `|` character followed by the filter name. Parameters can be passed in just like Twig functions using parenthesis.

#### Shortcode Parser

Usage:

    {{ '[b]Bold text[/b]'|shortcode }}
    

Result:

**Bold text**

#### Markdown Parser

Usage:

    {{ '**Bold text**'|markdown }}
    

Result:

**Bold text**

#### Translates

Usage:

    {{ 'site_powered_by_flextype'|tr }}
    

Result:

Build fast, flexible, easier to manage websites with
<a href="http://flextype.org">Flextype</a>.

Multiple filters can be chained. The output of one filter is applied to the next.

Usage:

    {{ '[b]Bold text[/b] *Italic text*'|shortcode|markdown }}
    

Result:

**Bold text** *Italic text*

### Flextype Twig Functions

Twig functions are called directly with any parameters being passed in via parenthesis.

#### Yaml Decode

Usage:

    {{ yaml_decode('title: Hello World!').title }}
    

Result:

Hello World!

#### Yaml Encode

Usage:

    {{ yaml_encode({'title': 'Hello World!'})}}
    

Result:

title: 'Hello World!'

#### Json Decode

Usage:

    {{ json_decode('{"title": "Hello World!"}').title }}
    

Result:

Hello World!

#### Json Encode

Usage:

    {{ json_encode({'title': 'Hello World!'})}}
    

Result:

{"title": "Hello World!"}

#### Translates

Usage:

    {{ tr('site_powered_by_flextype') }}
    

Result:

Build fast, flexible, easier to manage websites with
<a href="http://flextype.org">Flextype</a>.

#### List contents of a directory

Usage:

    {% set media = filesystem_list_contents(PATH_ENTRIES ~ '/' ~ entry.slug) %}
    

#### Check whether a file exists

Usage:

    {% if (filesystem_has(PATH_ENTRIES ~ '/' ~ 'about/entry.md')) %}
        Show something...
    {% endif %}
    

#### Read a file

Usage:

    {{ filesystem_read(PATH_ENTRIES ~ '/' ~ 'about/entry.md') }}
    

#### Get file extension

Usage:

    {{ filesystem_ext(PATH_ENTRIES ~ '/' ~ 'about/entry.md') }}
    

#### Get filename

Usage:

    {{ filesystem_basename(PATH_ENTRIES ~ '/' ~ 'about/entry.md') }}