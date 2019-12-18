---
title: Blur
---

`blur`

Adds a blur effect to the image. Use values between `0` and `100`.

Example:

```twig
<img src="{{ base_url() }}/image/en/content/media/image.jpg?blur=0">
<img src="{{ base_url() }}/image/en/content/media/image.jpg?blur=50">
<img src="{{ base_url() }}/image/en/content/media/image.jpg?blur=100">
```

Result:

<img width="200" class="inline" src="[base_url]/image/en/content/media/image.jpg?q=70&w=200&dpr=2&blur=0" />
<img width="200" class="inline" src="[base_url]/image/en/content/media/image.jpg?q=70&w=200&dpr=2&blur=50" />
<img width="200" class="inline" src="[base_url]/image/en/content/media/image.jpg?q=70&w=200&dpr=2&blur=100" />
