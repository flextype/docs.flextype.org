---
title: Config
breadcrumbs:
  1:
    title: "Core Concepts"
    link: "[url]/en/core/"
on_this_page:
  1:
    title: "Methods"
    link: "methods"
---

### <a name="methods"></a> Methods

| Method | Description |
|---|---|
| <a href="#get"><code>get()</code></a> | Get item from the config |
| <a href="#create"><code>create()</code></a> | Create new config item |
| <a href="#update"><code>update()</code></a> | Update config item |
| <a href="#delete"><code>delete()</code></a> | Delete config item |
| <a href="#has"><code>has()</code></a> | Checks if an config item with this key name is in the config. |


##### <a name="get"></a> `get()`

Get item from the config

**Examples**

Get `timezone` item from the `flextype` config.

```php
$flextype_timezone = $flextype->config->get('flextype', 'timezone');
```

##### <a name="create"></a> `create()`

Create new config item

**Examples**

Create new `maintenance` item in the `flextype` config.

```php
$flextype->config->create('flextype', 'maintenance', false);
```

##### <a name="update"></a> `update()`

Update config item

**Examples**

Update `maintenance` item in the `flextype` config.

```php
$flextype->config->create('flextype', 'maintenance', true);
```

##### <a name="delete"></a> `delete()`

Delete config item

**Examples**

Delete `maintenance` item from the `flextype` config.

```php
$flextype->config->delete('flextype', 'maintenance');
```

##### <a name="has"></a> `has()`

Checks if an config item with this key name is in the config.

**Examples**

Checks if an config item `maintenance` with this key name is in the config `flextype`.

```php
if ($flextype->config->has('flextype', 'maintenance')) {
    // do something...
}
```
