---
title: Theme Variables
---

When you are designing a theme, Flextype gives you access to all sorts of objects and variables from within your Twig templates. The Twig templating framework provides powerful ways to read and manipulate these objects and variables.

### Core Objects

There are several **core objects** that are available to a Twig template, and each object has a set of **variables** and **functions**.

#### Registry Object

You can access any Flextype registry via the registry object.

Usage:

```
{{ registry.settings.theme }} {# returns the currently configured theme #}
```

#### Entry Object

Because Flextype is built using the structure defined in the entries/ folder, each entry is represented by a entry object.

The entry object is probably the most important object you will work with as it contains all the information about the current page you are currently on.

Usage:

```
{{ entry.title }} {# returns the current entry title #}
```

#### Entries Object

Fetch single entry

Usage:

```
{% set about_entry = entries.fetch('about') %}
```

Fetch collection of entries

Usage:

```
{% set posts = entries.fetchAll('blog') %}
```

#### Assets Object

Add asset to the collection

Usage:

```
{% set site = base_url() ~ '/site/themes/' ~ registry.settings.theme ~ '/assets/dist/site/site.min.css' %}
{% do assets.add('css', site, 'site', 1) %}
```

Get assets from the collection

Usage:

```
{% for assets_site in assets.get('css', 'site') %}
    {% for assets_by_priorities in assets_site %}
        <link href="{{ assets_by_priorities.asset }}" rel="stylesheet">
    {% endfor %}
{% endfor %}
```

#### Emitter Object

Emitting events

Usage:
```
{% do emitter.emit('onThemeHeader') %}
```

Emitting events in batches

Usage:

```
{% do emitter.emitBatch({'onThemeHeader', 'onSomeOtherEvent'}) %}
```
