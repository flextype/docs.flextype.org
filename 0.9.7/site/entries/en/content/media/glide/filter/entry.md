---
title: Filter
---

`filt`

Applies a filter effect to the image. Accepts `greyscale` or `sepia`.

Example:

```twig
<img src="{{ site_url() }}/api/delivery/images/en/content/media/image.jpg?filt=greyscale&token=YOUR_IMAGES_DELIVERY_TOKEN">
<img src="{{ site_url() }}/api/delivery/images/en/content/media/image.jpg?filt=sepia&token=YOUR_IMAGES_DELIVERY_TOKEN">
```

Result:

<img width="200" class="inline" src="[site_url]/api/delivery/images/en/content/media/image.jpg?q=70&w=200&dpr=2&filt=greyscale&token=4864fb8e1ebe080e6e4ad5c4363083a6">
<img width="200" class="inline" src="[site_url]/api/delivery/images/en/content/media/image.jpg?q=70&w=200&dpr=2&filt=sepia&token=4864fb8e1ebe080e6e4ad5c4363083a6">
