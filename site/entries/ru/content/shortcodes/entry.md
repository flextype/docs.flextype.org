---
title: Shortcodes
description: Shortcodes are an easy way to add dynamic content into your entries. Shortcodes look like small pieces of text within square brackets. Each one represents a unique execution of predefined code, which is triggered on demand.
---

Shortcodes are an easy way to add dynamic content into your entries. Shortcodes look like small pieces of text within square brackets. Each one represents a unique execution of predefined code, which is triggered on demand.

### Default core shortcodes

`snippets_exec`

Execute snippet content.

Parameters:
* `id` - snippet id

Usage:

<div class="hljs-shortcode">
    <input value='&#91;snippets_exec id="snippet-name"&#93;'>
</div>

`base_url`

Display base url.

Usage:

<div class="hljs-shortcode">
    <input value='&#91;base_url&#93;'>
</div>

`registry_get`

Display value from registry.

Parameters:
* `name` - registry item name
* `default` - default value

Usage:

<div class="hljs-shortcode">
    <input value='&#91;registry_get name="item-name" default="default-value"&#93;'>
</div>

`entries_fetch`

Display value from specific entry field.

Parameters:
* `id` - entry id
* `field` - entry field name
* `default` - default value

Usage:

<div class="hljs-shortcode">
    <input value='&#91;entries_fetch id="entry-id" field="field-name" default="default-value"&#93;'>
</div>

### Site plugin shortcodes

`site_url`

Display site url based on `registry.plugins.site.site_url` setting.

Usage:

<div class="hljs-shortcode">
    <input value='&#91;site_url&#93;'>
</div>

### Icon plugin shortcodes

`icon`

Display icon from Font Awesome collection.

Parameters:
* `value` - Fieldsets valid fontawesome icon class.

Usage:

<div class="hljs-shortcode">
    <input value='&#91;icon value="fab fa-apple"&#93;'>
</div>

