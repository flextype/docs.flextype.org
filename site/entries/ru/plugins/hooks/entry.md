---
title: Event Hooks
description: Hooks are a way for one piece of code to interact/modify another piece of code. They make up the foundation for how plugins and themes interact with Flextype.
---

Hooks are a way for one piece of code to interact/modify another piece of code. They make up the foundation for how plugins and themes interact with Flextype.

### Available event hooks

#### Core

| Name                        | Description                                                                                                          |
|:--------------------------- |:-------------------------------------------------------------------------------------------------------------------- |
| `onThemesInitialized`       | Fires when all enabled themes initialized.                                                                           |
| `onPluginsInitialized`      | Fires when all enabled plugins initialized.                                                                          |
| `onEntryAfterInitialized`   | Fires when current entry requested by fetchSingle() method has been loaded into the entry object.                    |
| `onEntriesAfterInitialized` | Fires when current entries collection requested by fetchCollection() method has been loaded into the entries object. |

#### Admin plugin

| Name                 | Description                                                              |
|:-------------------- |:------------------------------------------------------------------------ |
| `onAdminThemeMeta`   | Fires when html header meta information are printed for all admin pages. |
| `onAdminThemeHeader` | Fires when html header information are printed for all admin pages.      |
| `onAdminThemeFooter` | Fires when html footer information are printed for all admin pages.      |

#### Site plugin

| Name                          | Description                              |
|:----------------------------- |:---------------------------------------- |
| `onSiteEntryAfterInitialized` | Fires after site entry requested by URL. |

#### Default theme

| Name            | Description                                                             |
|:--------------- |:----------------------------------------------------------------------- |
| `onThemeMeta`   | Fires when html header meta information are printed for all site pages. |
| `onThemeHeader` | Fires when html header information are printed for all site pages.      |
| `onThemeTail`   | Fires when html tail information are printed for all site pages.        |

### How to use hooks

#### Registering Listeners{.margin-top-none .padding-top-none}

Listeners are registered through the `addListener` method.

```php
$flextype['emitter']->addListener('event.name', $listener);
```

The listener can be of two types:
* `callable` (<a href="https://event.thephpleague.com/2.0/listeners/callables/">view docs</a>)
* `League\Event\ListenerInterface` (<a href="https://event.thephpleague.com/2.0/listeners/classes/">view docs</a>)

Example:
```php
$flextype['emitter']->addListener('onThemeMeta', function() {
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
$flextype['emitter']->addListener('event.name', $listener, 100);
```

Example:
```php
$flextype['emitter']->addListener('onThemeMeta', function() {
    echo '
        <!-- Twitter -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@getflextype">
        <meta name="twitter:creator" content="@getflextype">
        <meta name="twitter:title" content="Content Management System &mdash; Flextype">
        <meta name="twitter:description" content="Build fast, flexible, easier to manage websites with Flextype.">
        <meta name="twitter:image" content="https://github.com/flextype/flextype/raw/dev/site/plugins/admin/preview.png">';
}, 100);

$flextype['emitter']->addListener('onThemeMeta', function() {
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
$event = $flextype['emitter']->emit($event);
```

The event can be of two types:

* `string` - (<a href="https://event.thephpleague.com/2.0/events/named/">view docs</a>)
* `League\Event\EventInterface` - (<a href="https://event.thephpleague.com/2.0/events/classes/">view docs</a>)

#### Emitting events in batches

```
$events = $flextype['emitter']->emitBatch([$event, $event, $event]);
```

#### Emit Return Values

Events emitted are returned as the result. When emitting events in batches an array of events is returned.

#### Emitting events in twig templates

```twig
{% do emitter.emit('onThemeTail') %}
{% do emitter.emitBatch({'onThemeTail', 'onThemeFooter'}) %}
```
