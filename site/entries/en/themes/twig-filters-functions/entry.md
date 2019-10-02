---
title: Twig Filters & Functions
---

Twig already provides an extensive list of [filters, functions, and tags](https://twig.symfony.com/doc/2.x/), Flextype also provides a selection of useful additions to make the process of theming easier.

### Flextype Twig Filters

Twig filters are applied to Twig variables by using the `|` character followed by the filter name. Parameters can be passed in just like Twig functions using parenthesis.

#### shortcode

Parse shortcode

Usage:

    {{ '[b]Bold text[/b]'|shortcode }}


Result:

**Bold text**

#### markdown

Parse markdown

Usage: markdown

    {{ '**Bold text**'|markdown }}


Result:

**Bold text**

#### tr

Translate text

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

#### yaml_decode

Decode valid yaml string into array

Usage:

    {{ yaml_decode('title: Hello World!').title }}


Result:

Hello World!

#### yaml_encode

Encode array into valid yaml string

Usage:

    {{ yaml_encode({'title': 'Hello World!'})}}


Result:

title: 'Hello World!'

#### json_decode

Decode valid json string into array

Usage:

    {{ json_decode('{"title": "Hello World!"}').title }}


Result:

Hello World!

#### json_encode

Encode array into valid json string

Usage:

    {{ json_encode({'title': 'Hello World!'})}}


Result:

{"title": "Hello World!"}

#### tr

Translate string

Usage:

    {{ tr('site_powered_by_flextype') }}


Result:

Build fast, flexible, easier to manage websites with
<a href="http://flextype.org">Flextype</a>.

#### filesystem_list_contents

List contents of a directory

Usage:

    {% set media = filesystem_list_contents(PATH_ENTRIES ~ '/' ~ entry.slug) %}


Result:

array (media)

#### filesystem_has

Check whether a file exists

Usage:

    {% if (filesystem_has(PATH_ENTRIES ~ '/' ~ 'about/entry.md')) %}
        Show something...
    {% endif %}


#### filesystem_read

Read a file

Usage:

    {{ filesystem_read(PATH_ENTRIES ~ '/' ~ 'about/entry.md') }}


Result:

    ---
    title: About
    ---


#### filesystem_ext

Get file extension

Usage:

    {{ filesystem_ext(PATH_ENTRIES ~ '/' ~ 'about/entry.md') }}


Result:

.md

#### filesystem_basename

Get filename

Usage:

    {{ filesystem_basename(PATH_ENTRIES ~ '/' ~ 'about/entry.md') }}


Result:

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
