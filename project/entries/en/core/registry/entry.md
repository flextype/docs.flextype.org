---
title: Registry
breadcrumbs:
  -
    title: "Core Concepts"
    link: "[url]/en/core/"
on_this_page:
  -
    title: "Methods"
    link: "methods"
    level2:
      -
        title: "get()"
        link: "get"
      -
        title: "set()"
        link: "set"
      -
        title: "has()"
        link: "has"
      -
        title: "all()"
        link: "all"
      -
        title: "delete()"
        link: "delete"
      -
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
                <td><a href="#methods-get">get()</a></a></td>
                <td>Get item from the registry.</td>
            </tr>
            <tr>
                <td><a href="#methods-set">set()</a></td>
                <td>Registers or update a given value under a given name.</td>
            </tr>
            <tr>
                <td><a href="#methods-has">has()</a></td>
                <td>Checks if an object with this name is in the registry.</td>
            </tr>
            <tr>
                <td><a href="#methods-all">all()</a></td>
                <td>Get all values in the register.</td>
            </tr>
            <tr>
                <td><a href="#methods-delete">delete()</a></td>
                <td>Delete a value from the registry.</td>
            </tr>
            <tr>
                <td><a href="#methods-flush">flush()</a></td>
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
$flextype_timezone = $flextype->container('registry')->get('flextype.settings.timezone');
```

##### <a name="set"></a> `set()`

Registers or update a given value under a given name.

**Examples**

Set `flextype.settings.timezone` item in the registry.

```php
$flextype->container('registry')->set('flextype.settings.timezone', 'America/New_York');
```

##### <a name="has"></a> `has()`

Checks if an config item with this key name is in the config.

**Examples**

Checks if an `flextype.settings.timezone` item with this key name is in the registry.

```php
if ($flextype->container('registry')->has('flextype.settings.timezone')) {
    // do something...
}
```

##### <a name="all"></a> `all()`

Get all values in the register.

**Examples**

```php
$registry = $flextype->container('registry')->all();
```

##### <a name="delete"></a> `delete()`

Delete a value from the registry.

**Examples**

```php
$flextype->container('registry')->delete('flextype.settings.timezone');
```

##### <a name="flush"></a> `flush()`

Flush all values from the registry.

**Examples**

```php
$flextype->container('registry')->flush();
```
