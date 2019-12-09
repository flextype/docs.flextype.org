---
title: Crop
---

`crop`

Crops the image to specific dimensions prior to any other resize operations. Required format: `width, height, x, y`.

Example:

```twig
<img src="{{ base_url() }}/image/en/content/media/image.jpg?crop=2000,2000,600,655">
```

Result:

<img width="200" src="[base_url]/image/en/content/media/image.jpg?q=70&w=200&dpr=2&crop=2000,2000,600,655">
