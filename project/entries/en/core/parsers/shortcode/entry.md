---
title: SHORTCODE
description: Shortcode is a small piece of code, indicated by brackets like `[this]`, that performs a dedicated function on your site.
breadcrumbs:
  -
    title: "Core Concepts"
    link: "[url]/en/core/"
  -
    title: "Parsers"
    link: "[url]/en/core/parsers/"
on_this_page:
  -
    title: "Shortcodes"
    link: "shortcodes"
  -
    title: "Methods"
    link: "methods"
---

Shortcode is a small piece of code, indicated by brackets like `[this]`, that performs a dedicated function on your site. You can place it just about anywhere you’d like, and it will add a specific feature to your page, post, or other content. For example, you can use shortcodes to display galleries, videos, or even playlists.

### <a name="shortcodes"></a> Shortcodes

<div class="table">
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Parameters</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><a href="#shortcodes-entries_fetch">entries_fetch</a></td>
                <td>id, field</td>
                <td>Fetch specific entry field.</td>
            </tr>
            <tr>
                <td><a href="#shortcodes-registry">registry</a></td>
                <td>name, default</td>
                <td>Fetch specific item from registry.</td>
            </tr>
            <tr>
                <td><a href="#shortcodes-raw">raw</a></td>
                <td></td>
                <td>Do not process the shortcodes between the raw shortcode tags.</td>
            </tr>
            <tr>
                <td><a href="#shortcodes-raw">url</a></td>
                <td></td>
                <td>Display application url.</td>
            </tr>
        </tbody>
    </table>
</div>

### Shortocodes Details

##### <a name="shortcodes-entries_fetch"></a> `entries_fetch`

Fetch specific entry field.

**Examples**

```
entries_fetch id="entry-id" field="field-name" default="default-value"
```

##### <a name="shortcodes-registry"></a> `registry`

Fetch specific item from registry.

**Examples**

```
registry_get name="item-name" default="default-value"
```

##### <a name="shortcodes-raw"></a> `raw`

Do not process the shortcodes between the raw shortcode tags.

**Examples**

```
raw raw content here /raw
```

##### <a name="shortcodes-url"></a> `url`

Display application url.

**Examples**

```
url
```

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
                <td><a href="#methods-addHandler">addHandler()</a></td>
                <td>Add shortcode handler.</td>
            </tr>
            <tr>
                <td><a href="#methods-addEventHandler">addEventHandler()</a></td>
                <td>Add event handler.</td>
            </tr>
            <tr>
                <td><a href="#methods-process">process()</a></td>
                <td>Processes text and replaces shortcodes.</td>
            </tr>
            <tr>
                <td><a href="#methods-parse">parse()</a></td>
                <td>Parses text into shortcodes.</td>
            </tr>
            <tr>
                <td><a href="#methods-getCacheID">getCacheID()</a></td>
                <td>Get Cache ID for shortcode</td>
            </tr>
        </tbody>
    </table>
</div>

### Methods Details

##### <a name="methods-addHandler"></a> `addHandler()`

Add shortcode handler.

**Examples**

```php
flextype('shortcode')->addHandler('message', function () {
    return "Indeed. – Teal'c";
});
```

##### <a name="methods-addEventHandler"></a> `addEventHandler()`

Add event handler.

**Examples**

```php
flextype('shortcode')->addHandler('raw', static function (ShortcodeInterface $s) {
    return $s->getContent();
});

flextype('shortcode')->addEventHandler(Events::FILTER_SHORTCODES, new FilterRawEventHandler(['raw']));
```

More details about events: https://github.com/thunderer/Shortcode#events



##### <a name="methods-process"></a> `process()`

Processes text and replaces shortcodes.

**Examples**

```php
$shortcode = 'text with [message]';

$html = flextype('shortcode')->process($shortcode);
```

##### <a name="methods-parse"></a> `parse()`

Parses text into shortcodes.

**Examples**

```php
$shortcode = 'text with [message]';

$text = flextype('shortcode')->parse($shortcode);
```

##### <a name="methods-getCacheID"></a> `getCacheID()`

Get Cache ID for shortcode

**Examples**

```php
$shortcode = 'text with [message]';

$cache_id = flextype('shortcode')->getCacheID($shortcode);
```
