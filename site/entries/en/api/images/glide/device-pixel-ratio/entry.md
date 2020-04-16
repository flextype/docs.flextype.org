---
title: Device pixel ratio
---

`dpr`

The device pixel ratio is used to easily convert between CSS pixels and device pixels. This makes it possible to display images at the correct pixel density on a variety of devices such as Apple devices with Retina Displays and Android devices. You must specify either a width, a height, or both for this parameter to work. The default is 1. The maximum value that can be set for dpr is 8.

Example:

```twig
<img src="{{ site_url() }}/api/images/en/content/media/image.jpg?dpr=2&token=YOUR_IMAGES_TOKEN">
```

Result:

<img width="200" class="inline" src="[site_url]/api/images/en/content/media/image.jpg?q=70&w=200&h=200&dpr=2&token=4864fb8e1ebe080e6e4ad5c4363083a6">
