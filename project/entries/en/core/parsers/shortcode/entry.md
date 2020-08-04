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

<div class="table">
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><a href="#add"><code>add()</code></a></td>
                <td>Add new SHORTCODE handler</td>
            </tr>
            <tr>
                <td><a href="#parse"><code>parse()</code></a></td>
                <td>Takes a SHORTCODE encoded string and converts it into a HTML</td>
            </tr>
        </tbody>
    </table>
</div>

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
