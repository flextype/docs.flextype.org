---
title: Flextype
description:
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
        title: "getInstance()"
        link: "methods-getInstance"
      -
        title: "getVersion()"
        link: "methods-getVersion"
      -
        title: "container()"
        link: "methods-container"
---

Common part of Flextype is a Flextype Core Class that extends [Slim Framework](http://www.slimframework.com) that we are using under the hood. Slim is amazing PHP micro framework that helps quickly write simple yet powerful web applications and APIs.

**Slim Framework Resources**
* Website: http://slimframework.com
* Documentation: http://slimframework.com/docs/v3/
* Repository: https://github.com/slimphp/Slim

Getting back to Flextype Core.

With help of Flextype Core Class we are able to access all features and develop a new amazing features for Flextype powered project.

### <a name="methods"></a> Methods

<div class="table">
    <table>
        <thead>
            <tr>
                <th>Method</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><a href="#methods-getInstance">getInstance()</a></td>
                <td>Get the available Flextype Application instance.</td>
            </tr>
            <tr>
                <td><a href="#methods-getVersion">getVersion()</a></td>
                <td>Get current Flextype version.</td>
            </tr>
            <tr>
                <td><a href="#methods-container">container()</a></td>
                <td>Get and Set Dependency Injection Container.</td>
            </tr>
        </tbody>
    </table>
</div>

### Methods Details

##### <a name="methods-getInstance"></a> `getInstance()`

Get the available Flextype Application instance.

**Examples**

```php
$instance = Flextype::getInstance();
```

##### <a name="methods-getVersion"></a> `getVersion()`

Get current Flextype version.

**Examples**

```php
$version = Flextype::getInstance()->getVersion();
```

##### <a name="methods-container"></a> `container()`

Get and Set Dependency Injection Container.

**Examples**

```php
// Get container object
$container = Flextype::getInstance()->container();

// Set new container
Flextype::getInstance()->container()['name'] = function () {
    return new ServiceName();
};

// Get specific container object by name
$entries = Flextype::getInstance()->container('entries');
```

We recommend to use our `flextype()` helper function to access all Flexype Application methods, set and get containers.

**Examples**

```php
// Get the available Flextype Application instance.
$instance = flextype();

// Get current Flextype version.
$version = flextype()->getVersion();

// Get container object
$container = flextype()->container();

// Set new container
flextype()->container()['name'] = function () {
    return new ServiceName();
};

// Get specific container object by name
$entries = flextype()->container('entries');

// ... or even better :)
$entries = flextype('entries');
```

With `flextype()` helper function you can access Flexype Application and all available Slim Framework methods.

**Examples**

```php
// Add GET route
flextype()
  ->get('/dashboard', 'DashboardController:index')
  ->setName('admin.dashboard.index');

// Add POST route
flextype()
  ->get('/save-form', 'CustomServiceController:index')
  ->setName('service.form.index');
```

Check all available methods: http://slimframework.com/docs/v3/
