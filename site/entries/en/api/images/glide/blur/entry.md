---
title: Blur
breadcrumbs:
  0:
    title: "Documentation"
    link: "[site_url]/en/"
  1:
    title: "API"
    link: "[site_url]/en/api/"
  2:
    title: "Images API"
    link: "[site_url]/en/api/images/"
---

`blur`

Adds a blur effect to the image. Use values between `0` and `100`.

Example:

```twig
<img src="{{ site_url() }}/api/images/en/content/media/image.jpg?blur=0&token=YOUR_IMAGES_TOKEN">
<img src="{{ site_url() }}/api/images/en/content/media/image.jpg?blur=50&token=YOUR_IMAGES_TOKEN">
<img src="{{ site_url() }}/api/images/en/content/media/image.jpg?blur=100&token=YOUR_IMAGES_TOKEN">
```

Result:

<img width="200" class="inline" src="[site_url]/api/images/en/content/media/image.jpg?q=70&w=200&dpr=2&blur=0&token=4864fb8e1ebe080e6e4ad5c4363083a6">
<img width="200" class="inline" src="[site_url]/api/images/en/content/media/image.jpg?q=70&w=200&dpr=2&blur=50&token=4864fb8e1ebe080e6e4ad5c4363083a6">
<img width="200" class="inline" src="[site_url]/api/images/en/content/media/image.jpg?q=70&w=200&dpr=2&blur=100&token=4864fb8e1ebe080e6e4ad5c4363083a6">
