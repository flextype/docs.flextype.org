---
title: SHORTCODE
description: Shortcode is a small piece of code, indicated by brackets like `[this]`, that performs a dedicated function on your site.
breadcrumbs:
  1:
    title: "Core Concepts"
    link: "[url]/en/core/"
  2:
    title: "Parsers"
    link: "[url]/en/core/parsers/"
on_this_page:
  0:
    title: "Methods"
    link: "methods"
---

Shortcode is a small piece of code, indicated by brackets like `[this]`, that performs a dedicated function on your site. You can place it just about anywhere you’d like, and it will add a specific feature to your page, post, or other content. For example, you can use shortcodes to display galleries, videos, or even playlists.

### <a name="methods"></a> Methods

| Method | Description |
|---|---|
| <a href="#parse"><code>add()</code></a> | Add new SHORTCODE handler |
| <a href="#parse"><code>parse()</code></a> | Takes a SHORTCODE encoded string and converts it into a HTML |

##### <a name="add"></a> `add()`

Add new SHORTCODE handler

**Examples**

```php
$flextype['shortcode']->add('message', function () {
    return "Indeed. – Teal'c";
});
```

##### <a name="parse"></a> `parse()`

Takes a SHORTCODE encoded string and converts it into a HTML

**Examples**

```php
$shortcode = 'text with [message]';

$html = $flextype->shortcode->parse($shortcode);
```
