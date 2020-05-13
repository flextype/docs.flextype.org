---
title: Orientation
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

`or`

Rotates the image. Accepts auto, `0`, `90`, `180` or `270`. Default is `auto`. The auto option uses Exif data to automatically orient images correctly.

Example:

```twig
<img src="{{ url() }}/api/images/en/content/media/image.jpg?or=0&token=YOUR_IMAGES_TOKEN">
<img src="{{ url() }}/api/images/en/content/media/image.jpg?or=90&token=YOUR_IMAGES_TOKEN">
<img src="{{ url() }}/api/images/en/content/media/image.jpg?or=180&token=YOUR_IMAGES_TOKEN">
<img src="{{ url() }}/api/images/en/content/media/image.jpg?or=270&token=YOUR_IMAGES_TOKEN">
```

Result:

<img width="200" class="inline" src="[url]/api/images/en/content/media/image.jpg?q=70&w=200&dpr=2&or=0&token=4864fb8e1ebe080e6e4ad5c4363083a6">
<img width="200" class="inline" src="[url]/api/images/en/content/media/image.jpg?q=70&w=200&dpr=2&or=90&token=4864fb8e1ebe080e6e4ad5c4363083a6">
<img width="200" class="inline" src="[url]/api/images/en/content/media/image.jpg?q=70&w=200&dpr=2&or=180&token=4864fb8e1ebe080e6e4ad5c4363083a6">
<img width="200" class="inline" src="[url]/api/images/en/content/media/image.jpg?q=70&w=200&dpr=2&or=270&token=4864fb8e1ebe080e6e4ad5c4363083a6">
