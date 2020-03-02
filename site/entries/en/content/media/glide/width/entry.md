---
title: Width
---

`w`

Sets the width of the image, in pixels.

Example:

```twig
<img src="{{ site_url() }}/api/delivery/images/en/content/media/image.jpg?w=100&token=YOUR_IMAGES_DELIVERY_TOKEN">
<img src="{{ site_url() }}/api/delivery/images/en/content/media/image.jpg?w=200&token=YOUR_IMAGES_DELIVERY_TOKEN">
<img src="{{ site_url() }}/api/delivery/images/en/content/media/image.jpg?w=300&token=YOUR_IMAGES_DELIVERY_TOKEN">
```

Result:

<img width="100" class="inline" src="[site_url]/api/delivery/images/en/content/media/image.jpg?q=70&w=100&dpr=2&token=4864fb8e1ebe080e6e4ad5c4363083a6">
<img width="200" class="inline" src="[site_url]/api/delivery/images/en/content/media/image.jpg?q=70&w=200&dpr=2&token=4864fb8e1ebe080e6e4ad5c4363083a6">
<img width="300" class="inline" src="[site_url]/api/delivery/images/en/content/media/image.jpg?q=70&w=300&dpr=2&token=4864fb8e1ebe080e6e4ad5c4363083a6">
