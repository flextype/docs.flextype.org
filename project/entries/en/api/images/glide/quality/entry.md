---
title: Quality
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

`q`

Defines the quality of the image. Use values between `0` and `100`. Defaults to `90`. Only relevant if the format is set to `jpg` or `pjpg`.

Example:

```twig
<img src="{{ url() }}/api/images/en/content/media/image.jpg?q=25&token=YOUR_IMAGES_TOKEN">
<img src="{{ url() }}/api/images/en/content/media/image.jpg?q=70&token=YOUR_IMAGES_TOKEN">
```

Result:

<img width="200" class="inline" src="[url]/api/images/en/content/media/image.jpg?q=25&w=200&dpr=2&token=4864fb8e1ebe080e6e4ad5c4363083a6">
<img width="200" class="inline" src="[url]/api/images/en/content/media/image.jpg?q=70&w=200&dpr=2&token=4864fb8e1ebe080e6e4ad5c4363083a6">
