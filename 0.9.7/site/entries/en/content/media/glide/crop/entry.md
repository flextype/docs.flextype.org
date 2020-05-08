---
title: Crop
---

`crop`

Crops the image to specific dimensions prior to any other resize operations.<br>
Required format: `width, height, x, y`.

Example:

```twig
<img src="{{ site_url() }}/api/delivery/images/en/content/media/image.jpg?crop=2000,2000,600,655&token=YOUR_IMAGES_DELIVERY_TOKEN">
```

Result:

<img width="200" class="inline" src="[site_url]/api/delivery/images/en/content/media/image.jpg?q=70&w=200&dpr=2&crop=2000,2000,600,655&token=4864fb8e1ebe080e6e4ad5c4363083a6">
