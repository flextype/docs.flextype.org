---
title: Twig Filters & Functions
---

Twig already provides an extensive list of [filters, functions, and tags](https://twig.symfony.com/doc/2.x/), Flextype also provides a selection of useful additions to make the process of theming easier.


### Flextype Twig Filters

Twig filters are applied to Twig variables by using the `|` character followed by the filter name. Parameters can be passed in just like Twig functions using parenthesis.

#### Shortcode Parser

Usage:
```
{{ '[b]Bold text[/b]'|shortcode }}
```

Result:

**Bold text**

#### Markdown Parser

Usage:
```
{{ '**Bold text**'|markdown }}
```

Result:

**Bold text**

#### Translates

Usage:
```
{{ 'site_powered_by_flextype'|tr }}
```

Result:

Build fast, flexible, easier to manage websites with
<a href="http://flextype.org">Flextype</a>.

<hr>

Multiple filters can be chained. The output of one filter is applied to the next.


Usage:
```
{{ '[b]Bold text[/b] *Italic text*'|shortcode|markdown }}
```

Result:

**Bold text** *Italic text*
