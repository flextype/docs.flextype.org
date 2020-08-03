---
title: Twig Filters & Functions
description: Twig already provides an extensive list of filters, functions, and tags, Flextype also provides a selection of useful additions to make the process of theming easier.
---

Twig already provides an extensive list of [filters, functions, and tags](https://twig.symfony.com/doc/2.x/), Flextype also provides a selection of useful additions to make the process of theming easier.

### Flextype Twig Filters

Twig filters are applied to Twig variables by using the `|` character followed by the filter name. Parameters can be passed in just like Twig functions using parenthesis.

#### shortcode

Parse shortcode

Usage:

```twig
{{ '[b]Bold text[/b]'|shortcode }}
```

Result:

**Bold text**

#### markdown

Parse markdown

Usage: markdown

```twig
{{ '**Bold text**'|markdown }}
```

Result:

**Bold text**

#### tr

Translate text

Usage:
```twig
{{ 'site_powered_by_flextype'|tr }}
```

Result:

Build fast, flexible, easier to manage websites with
<a href="http://flextype.org">Flextype</a>.

Multiple filters can be chained. The output of one filter is applied to the next.

Usage:
```twig
{{ '[b]Bold text[/b] *Italic text*'|shortcode|markdown }}
```

Result:

**Bold text** *Italic text*

### Flextype Twig Functions

Twig functions are called directly with any parameters being passed in via parenthesis.

#### yaml_decode

Decode valid yaml string into array

Usage:
```twig
{{ yaml_decode('title: Hello World!').title }}
```

Result:
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

Usage:
```twig
{{ tr('site_powered_by_flextype') }}
```

Result:

Build fast, flexible, easier to manage websites with
<a href="http://flextype.org">Flextype</a>.

#### filesystem_list_contents

List contents of a directory

Usage:

```twig
{% set media = filesystem_list_contents(PATH_UPLOADS ~ '/' ~ entry.slug) %}
```

Result:

array (media)

#### filesystem_has

Check whether a file exists

Usage:
```twig
{% if (filesystem_has(PATH_UPLOADS ~ '/' ~ entry.slug ~ '/about.md')) %}
    Show something...
{% endif %}
```

#### filesystem_read

Read a file

Usage:
```twig
{{ filesystem_read(PATH_UPLOADS ~ '/' ~ entry.slug ~ '/about.md') }}
```

Result:

```
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
```

#### filesystem_ext

Get file extension

Usage:
```twig
{{ filesystem_ext(PATH_UPLOADS ~ '/' ~ entry.slug ~ '/about.md') }}
```

Result:

.md

#### filesystem_basename

Get filename

Usage:

```twig
{{ filesystem_basename(PATH_UPLOADS ~ '/' ~ entry.slug ~ '/about.md') }}
```

Result:

entry

#### path_for

Returns the URL for a given route.

Usage:
```twig
{{ path_for('profile') }}
```

#### base_url

Returns the Uri object's base URL.

Usage:
```twig
{{ base_url() }}
```

#### url

Returns the Uri object's App URL.

Usage:
```twig
{{ url() }}
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
