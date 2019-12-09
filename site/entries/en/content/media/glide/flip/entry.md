---
title: Flip
---

`flip`

Flips the image. Accepts `v`, `h` and `both`.

Example:

```twig
<img src="{{ base_url() }}/image/en/content/media/image.jpg?flip=v">
<img src="{{ base_url() }}/image/en/content/media/image.jpg?flip=h">
<img src="{{ base_url() }}/image/en/content/media/image.jpg?flip=both">
```

Result:

<img width="200" src="[base_url]/image/en/content/media/image.jpg?q=70&w=200&dpr=2&flip=v">
<img width="200" src="[base_url]/image/en/content/media/image.jpg?q=70&w=200&dpr=2&flip=h">
<img width="200" src="[base_url]/image/en/content/media/image.jpg?q=70&w=200&dpr=2&flip=both">
