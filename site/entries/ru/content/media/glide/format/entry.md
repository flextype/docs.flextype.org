---
title: Format
---

`fm`

Encodes the image to a specific format. Accepts `jpg`, `pjpg` (progressive jpeg), `png`, `gif` or `webp`. Defaults to jpg.

Example:

```twig
<img src="{{ site_url() }}/api/delivery/images/en/content/media/image.jpg?fm=gif&token=YOUR_IMAGES_DELIVERY_TOKEN">
```

Result:

<img width="200" class="inline" src="[site_url]/api/delivery/images/en/content/media/image.jpg?q=70&w=200&dpr=2&fm=gif&token=4864fb8e1ebe080e6e4ad5c4363083a6" />
