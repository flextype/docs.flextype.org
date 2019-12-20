---
title: Filter
---

`filt`

Applies a filter effect to the image. Accepts `greyscale` or `sepia`.

Example:

```twig
<img src="{{ base_url() }}/image/en/content/media/image.jpg?filt=greyscale">
<img src="{{ base_url() }}/image/en/content/media/image.jpg?filt=sepia">
```

Result:

<img width="200" class="inline" src="[base_url]/image/en/content/media/image.jpg?q=70&w=200&dpr=2&filt=greyscale" />
<img width="200" class="inline" src="[base_url]/image/en/content/media/image.jpg?q=70&w=200&dpr=2&filt=sepia" />
