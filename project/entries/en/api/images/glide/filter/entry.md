---
title: Filter
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

`filt`

Applies a filter effect to the image. Accepts `greyscale` or `sepia`.

Example:

```twig
<img src="{{ url() }}/api/images/en/content/media/image.jpg?filt=greyscale&token=YOUR_IMAGES_TOKEN">
<img src="{{ url() }}/api/images/en/content/media/image.jpg?filt=sepia&token=YOUR_IMAGES_TOKEN">
```

Result:

<img width="200" class="inline" src="[url]/api/images/en/content/media/image.jpg?q=70&w=200&dpr=2&filt=greyscale&token=4864fb8e1ebe080e6e4ad5c4363083a6">
<img width="200" class="inline" src="[url]/api/images/en/content/media/image.jpg?q=70&w=200&dpr=2&filt=sepia&token=4864fb8e1ebe080e6e4ad5c4363083a6">
