---
title: Theme Variables
---

When you are designing a theme, Flextype gives you access to all sorts of objects and variables from within your Twig templates. The Twig templating framework provides powerful ways to read and manipulate these objects and variables.

### Core Objects

There are several **core objects** that are available to a Twig template, and each object has a set of **variables** and **functions**.

#### Registry Object

You can access any Flextype registry via the config-object.  
For example:
```
{{ registry.settings.theme }}{# returns the currently configured theme #}
```
