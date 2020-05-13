---
title: Brightness
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

`bri`

Adjusts the image brightness. Use values between `-100` and `+100`, where `0` represents no change.

Example:

```twig
<img src="{{ url() }}/api/images/en/content/media/image.jpg?bri=-50&token=YOUR_IMAGES_TOKEN">
<img src="{{ url() }}/api/images/en/content/media/image.jpg?bri=50&token=YOUR_IMAGES_TOKEN">
```

Result:

<img width="200" class="inline" src="[url]/api/images/en/content/media/image.jpg?q=70&w=200&dpr=2&bri=-50&token=4864fb8e1ebe080e6e4ad5c4363083a6">
<img width="200" class="inline" src="[url]/api/images/en/content/media/image.jpg?q=70&w=200&dpr=2&bri=50&token=4864fb8e1ebe080e6e4ad5c4363083a6">
