---
title: Event Hooks
description: Plugins are the foundation for adding new features to the Flextype by extending it. Each Flextype plugin is an additional piece of software that can be easily installed to extend the functionality of Flextype core.
breadcrumbs:
  1:
    title: "Core Concepts"
    link: "[url]/en/core/"
  2:
    title: "Plugins"
    link: "[url]/en/core/plugins/"
---

Hooks are a way for one piece of code to interact/modify another piece of code. They make up the foundation for how plugins and themes interact with Flextype.

### Available event hooks

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
                <td>onPluginsInitialized</td>
                <td>Fires when all enabled plugins initialized.</td>
            </tr>
            <tr>
                <td>onEntryAfterInitialized</td>
                <td>Fires when current entry requested by fetchSingle() method has been loaded into the entry object.</td>
            </tr>
            <tr>
                <td>onEntriesAfterInitialized</td>
                <td>Fires when current entries collection requested by fetchCollection() method has been loaded into the entries object.</td>
            </tr>
        </tbody>
    </table>
</div>

### How to use hooks

#### Registering Listeners{.margin-top-none .padding-top-none}

Listeners are registered through the `addListener` method.

```php
$flextype->container('emitter')->addListener('event.name', $listener);
```

The listener can be of two types:
* `callable` (<a href="https://event.thephpleague.com/2.0/listeners/callables/">view docs</a>)
* `League\Event\ListenerInterface` (<a href="https://event.thephpleague.com/2.0/listeners/classes/">view docs</a>)

Example:
```php
$flextype->container('emitter')->addListener('onThemeMeta', function() {
    echo '
        <!-- Twitter -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@getflextype">
        <meta name="twitter:creator" content="@getflextype">
        <meta name="twitter:title" content="Content Management System &mdash; Flextype">
        <meta name="twitter:description" content="Build fast, flexible, easier to manage websites with Flextype.">
        <meta name="twitter:image" content="https://github.com/flextype/flextype/raw/dev/site/plugins/admin/preview.png">';
});
```

#### Listener Priority

Optionally event flow can be influenced by setting a priority. Priorities are represented as integers.

```php
$flextype->container('emitter')->addListener('event.name', $listener, 100);
```

Example:
```php
$flextype->container('emitter')->addListener('onThemeMeta', function() {
    echo '
        <!-- Twitter -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@getflextype">
        <meta name="twitter:creator" content="@getflextype">
        <meta name="twitter:title" content="Content Management System &mdash; Flextype">
        <meta name="twitter:description" content="Build fast, flexible, easier to manage websites with Flextype.">
        <meta name="twitter:image" content="https://github.com/flextype/flextype/raw/dev/site/plugins/admin/preview.png">';
}, 100);

$flextype->container('emitter')->addListener('onThemeMeta', function() {
    echo '
        <!-- Facebook -->
        <meta property="og:url" content="http://flextype.org">
        <meta property="og:title" content="Content Management System &mdash; Flextype">
        <meta property="og:description" content="Build fast, flexible, easier to manage websites with Flextype.">
        <meta property="og:type" content="website">
        <meta property="og:image" content="https://github.com/flextype/flextype/raw/dev/site/plugins/admin/preview.png">
        <meta property="og:image:type" content="image/png">';
}, 200);
```

The `League\Event\EmitterInterface` has 3 predefined priorities:

* `EmitterInterface::P_HIGH` is 100
* `EmitterInterface::P_NORMAL` is 0
* `EmitterInterface::P_LOW` is -100

#### Emitting events

Events are emitted using the `emit` function.

```php
$event = $flextype->container('emitter')->emit($event);
```

The event can be of two types:

* `string` - (<a href="https://event.thephpleague.com/2.0/events/named/">view docs</a>)
* `League\Event\EventInterface` - (<a href="https://event.thephpleague.com/2.0/events/classes/">view docs</a>)

#### Emitting events in batches

```
$events = $flextype->container('emitter')->emitBatch([$event, $event, $event]);
```

#### Emit Return Values

Events emitted are returned as the result. When emitting events in batches an array of events is returned.
