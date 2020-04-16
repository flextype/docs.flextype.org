---
title: Height
---

`h`

Sets the height of the image, in pixels.

Example:

```twig
<img src="{{ site_url() }}/api/images/en/content/media/image.jpg?h=100&token=YOUR_IMAGES_TOKEN">
<img src="{{ site_url() }}/api/images/en/content/media/image.jpg?h=200&token=YOUR_IMAGES_TOKEN">
<img src="{{ site_url() }}/api/images/en/content/media/image.jpg?h=300&token=YOUR_IMAGES_TOKEN">
```

Result:

<img height="100" class="inline" src="[site_url]/api/images/en/content/media/image.jpg?q=70&h=100&dpr=2&token=4864fb8e1ebe080e6e4ad5c4363083a6">
<img height="200" class="inline" src="[site_url]/api/images/en/content/media/image.jpg?q=70&h=200&dpr=2&token=4864fb8e1ebe080e6e4ad5c4363083a6">
<img height="300" class="inline" src="[site_url]/api/images/en/content/media/image.jpg?q=70&h=300&dpr=2&token=4864fb8e1ebe080e6e4ad5c4363083a6">
