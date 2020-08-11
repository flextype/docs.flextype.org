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
    level2:
      1:
        title: "get()"
        link: "get"
      2:
        title: "set()"
        link: "set"
      3:
        title: "has()"
        link: "has"
      4:
        title: "all()"
        link: "all"
      5:
        title: "delete()"
        link: "delete"
      6:
        title: "flush()"
        link: "flush"
---

A registry is a container for storing objects and values in the Flextype application space. By storing the value in a registry, the same object is always available throughout Flextype application. This mechanism is an alternative to using global storage.

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
                <td><a href="#get"><code>get()</code></a></a></td>
                <td>Get item from the registry.</td>
            </tr>
            <tr>
                <td><a href="#set"><code>set()</code></a></td>
                <td>Registers or update a given value under a given name.</td>
            </tr>
            <tr>
                <td><a href="#has"><code>has()</code></a></td>
                <td>Checks if an object with this name is in the registry.</td>
            </tr>
            <tr>
                <td><a href="#all"><code>all()</code></a></td>
                <td>Get all values in the register.</td>
            </tr>
            <tr>
                <td><a href="#delete"><code>delete()</code></a></td>
                <td>Delete a value from the registry.</td>
            </tr>
            <tr>
                <td><a href="#flush"><code>flush()</code></a></td>
                <td>Flush all values from the registry.</td>
            </tr>
        </tbody>
    </table>
</div>

### Methods Details

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

##### <a name="all"></a> `all()`

Get all values in the register.

**Examples**

```php
$registry = $flextype->registry->all();
```

##### <a name="delete"></a> `delete()`

Delete a value from the registry.

**Examples**

```php
$flextype->registry->delete('flextype.settings.timezone');
```

##### <a name="flush"></a> `flush()`

Flush all values from the registry.

**Examples**

```php
$flextype->registry->flush();
```
