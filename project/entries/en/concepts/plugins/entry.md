---
title: Plugins
description: Plugins are the foundation for adding new features to the Flextype by extending it. Each Flextype plugin is an additional piece of software that can be easily installed to extend the functionality of Flextype core.
on_this_page:
  0:
    title: "What are plugins?"
    link: "what-are-plugins"
  1:
    title: "Installation"
    link: "installation"
  2:
    title: "Configuration"
    link: "configuration"
  3:
    title: "Event Hooks"
    link: "event-hooks"
---
### <a name="what-are-plugins"></a> What are plugins?

Plugins are the foundation for adding new features to the Flextype by extending it.

Each Flextype plugin is an additional piece of software that can be easily installed to extend the functionality of Flextype core.

This allows you to customize your Flextype powered project with your desired functionality. Since so much functionality is provided through plugins, Flextype core is full-featured and customizable, without having to include everything for everyone.

Plugins are available via the Flextype Plugin Directory.

### <a name="installation"></a> Installation


1. Download & Install all required dependencies for PLUGIN_NAME.
2. Create new folder `/project/plugins/PLUGIN_NAME`
3. Download PLUGIN_NAME and unzip plugin content to the folder `/project/plugins/PLUGIN_NAME`

### <a name="configuration"></a> Configuration

You can easily access plugin configuration and plugin information by Flextype Core API and Content APIs.

#### Accessing Plugin Information

Information for the currently enabled plugins you can get from the `registry` object.

Example information from `/project/plugins/site/plugin.yaml`

<div class="file-header"><i class="far fa-file-alt"></i> /project/plugins/site/plugin.yaml</div>
```yaml
name: Site
version: 1.0.0
description: Site plugin to display entries content on the website frontend.
icon: fas fa-globe
author:
  name: Sergey Romanenko
  email: support@flextype.org
  url: http://flextype.org
homepage: https://github.com/flextype-plugins/site
bugs: https://github.com/flextype-plugins/site/issues
license: MIT

dependencies:
  flextype: 0.9.8
  twig: '>=1.0.0'
```

You can reach these items values from a Flextype plugin(s) with PHP syntax:

Usage:

```php
$plugin_name = $flextype->registry->get('plugins.site.manifest.name');
$plugin_version = $flextype->registry->get('plugins.site.manifest.version');
```

#### Accessing Plugin Configuration

Plugins have default and site configuration files, named `settings.yaml` located in `/project/plugins/<pluginname>/` and in `/project/config/plugins/<pluginname>/`

For example, let us consider the Site plugin and there is a file called `settings.yaml` in the plugins site settings folder. The contents of this configuration file look like this:

```yaml
enabled: true
```

Let us add some custom plugin settings.

Open `/project/config/plugins/site/settings.yaml` and add new variable with value:

`my_custom_var: "Lorem ipsum dolor sit amet"`

```yaml
enabled: true
my_custom_var: "Lorem ipsum dolor sit amet"
```

<br>
Then you can access the current plugin configuration like this:

```php
$my_custom_var = $flextype->registry->get('plugins.site.settings.my_custom_var');
```

### <a name="event-hooks"></a> Event Hooks

Hooks are a way for one piece of code to interact/modify another piece of code. They make up the foundation for how plugins and themes interact with Flextype.

### Available event hooks

| Name | Description |
| :------------- | :------------- |
| `onPluginsInitialized` | Fires when all enabled plugins initialized. |
| `onEntryAfterInitialized` | Fires when current entry requested by fetchSingle() method has been loaded into the entry object. |
| `onEntriesAfterInitialized` | Fires when current entries collection requested by fetchCollection() method has been loaded into the entries object. |

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
