---
title: Registry
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
| <a href="#get"><code>get()</code></a> | Get item from the registry. |
| <a href="#set"><code>set()</code></a> | Registers or update a given value under a given name. |
| <a href="#has"><code>has()</code></a> | Checks if an object with this name is in the registry. |
| <a href="#dump"><code>dump()</code></a> | Get registry array. |


##### <a name="get"></a> `get()`

Get item from the registry.

**Examples**

Get `flextype.settings.timezone` item from the registry.

```php
$flextype_timezone = $flextype->registry->get('flextype.settings.timezone');
```

##### <a name="set"></a> `set()`

Registers or update a given value under a given name.

**Examples**

Set `flextype.settings.timezone` item in the registry.

```php
$flextype->registry->set('flextype.settings.timezone', 'America/New_York');
```

##### <a name="has"></a> `has()`

Checks if an config item with this key name is in the config.

**Examples**

Checks if an `flextype.settings.timezone` item with this key name is in the registry.

```php
if ($flextype->registry->has('flextype.settings.timezone')) {
    // do something...
}
```

##### <a name="dump"></a> `dump()`

Get registry array.

**Examples**

```php
$registry = $flextype->config->dump();
```
