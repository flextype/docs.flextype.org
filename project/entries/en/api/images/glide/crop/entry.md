---
title: Crop
breadcrumbs:
  0:
    title: "Documentation"
    link: "[url]/en/"
  1:
    title: "API"
    link: "[url]/en/api/"
  2:
    title: "Images API"
    link: "[url]/en/api/images/"
---

`crop`

Crops the image to specific dimensions prior to any other resize operations.<br>
Required format: `width, height, x, y`.

Example:

```twig
<img src="{{ url() }}/api/images/en/content/media/image.jpg?crop=2000,2000,600,655&token=YOUR_IMAGES_TOKEN">
```

Result:

<img width="200" class="inline" src="[url]/api/images/en/content/media/image.jpg?q=70&w=200&dpr=2&crop=2000,2000,600,655&token=4864fb8e1ebe080e6e4ad5c4363083a6">
