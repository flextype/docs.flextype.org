---
title: Contrast
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

`con`

Adjusts the image contrast. Use values between `-100` and `+100`, where `0` represents no change.

Example:

```twig
<img src="{{ site_url() }}/api/images/en/content/media/image.jpg?con=-50&token=YOUR_IMAGES_TOKEN">
<img src="{{ site_url() }}/api/images/en/content/media/image.jpg?con=50&token=YOUR_IMAGES_TOKEN">
```

Result:

<img width="200" class="inline" src="[site_url]/api/images/en/content/media/image.jpg?q=70&w=200&dpr=2&con=-50&token=4864fb8e1ebe080e6e4ad5c4363083a6">
<img width="200" class="inline" src="[site_url]/api/images/en/content/media/image.jpg?q=70&w=200&dpr=2&con=50&token=4864fb8e1ebe080e6e4ad5c4363083a6">
