---
title: Quality
---

`q`

Defines the quality of the image. Use values between `0` and `100`. Defaults to `90`. Only relevant if the format is set to `jpg` or `pjpg`.

Example:

```twig
<img src="{{ base_url() }}/image/en/content/media/image.jpg?q=25">
<img src="{{ base_url() }}/image/en/content/media/image.jpg?q=70">
```

Result:

<img width="200" class="inline" src="[base_url]/image/en/content/media/image.jpg?q=25&w=200&dpr=2" />
<img width="200" class="inline" src="[base_url]/image/en/content/media/image.jpg?q=70&w=200&dpr=2" />
