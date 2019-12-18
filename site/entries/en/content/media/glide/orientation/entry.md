---
title: Orientation
---

`or`

Rotates the image. Accepts auto, `0`, `90`, `180` or `270`. Default is `auto`. The auto option uses Exif data to automatically orient images correctly.

Example:

```twig
<img src="{{ base_url() }}/image/en/content/media/image.jpg?or=0">
<img src="{{ base_url() }}/image/en/content/media/image.jpg?or=90">
<img src="{{ base_url() }}/image/en/content/media/image.jpg?or=180">
<img src="{{ base_url() }}/image/en/content/media/image.jpg?or=270">
```

Result:

<img width="200" class="inline" src="[base_url]/image/en/content/media/image.jpg?q=70&w=200&dpr=2&or=0">
<img width="200" class="inline" src="[base_url]/image/en/content/media/image.jpg?q=70&w=200&dpr=2&or=90">
<img width="200" class="inline" src="[base_url]/image/en/content/media/image.jpg?q=70&w=200&dpr=2&or=180">
<img width="200" class="inline" src="[base_url]/image/en/content/media/image.jpg?q=70&w=200&dpr=2&or=270">
