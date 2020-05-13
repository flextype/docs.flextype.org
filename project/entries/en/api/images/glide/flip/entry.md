---
title: Flip
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

`flip`

Flips the image. Accepts `v`, `h` and `both`.

Example:

```twig
<img src="{{ url() }}/api/images/en/content/media/image.jpg?flip=v&token=YOUR_IMAGES_TOKEN">
<img src="{{ url() }}/api/images/en/content/media/image.jpg?flip=h&token=YOUR_IMAGES_TOKEN">
<img src="{{ url() }}/api/images/en/content/media/image.jpg?flip=both&token=YOUR_IMAGES_TOKEN">
```

Result:

<img width="200" class="inline" src="[url]/api/images/en/content/media/image.jpg?q=70&w=200&dpr=2&flip=v&token=4864fb8e1ebe080e6e4ad5c4363083a6">
<img width="200" class="inline" src="[url]/api/images/en/content/media/image.jpg?q=70&w=200&dpr=2&flip=h&token=4864fb8e1ebe080e6e4ad5c4363083a6">
<img width="200" class="inline" src="[url]/api/images/en/content/media/image.jpg?q=70&w=200&dpr=2&flip=both&token=4864fb8e1ebe080e6e4ad5c4363083a6">
