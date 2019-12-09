---
title: Pixelate
---

`pixel`

Applies a pixelation effect to the image. Use values between `0` and `1000`.

Example:

```twig
<img src="{{ base_url() }}/image/en/content/media/image.jpg?pixel=0">
<img src="{{ base_url() }}/image/en/content/media/image.jpg?pixel=5">
<img src="{{ base_url() }}/image/en/content/media/image.jpg?pixel=10">
```

Result:

<img width="200" src="[base_url]/image/en/content/media/image.jpg?q=70&w=200&dpr=2&pixel=0" />
<img width="200" src="[base_url]/image/en/content/media/image.jpg?q=70&w=200&dpr=2&pixel=5" />
<img width="200" src="[base_url]/image/en/content/media/image.jpg?q=70&w=200&dpr=2&pixel=10" />
