---
title: Height
---

`h`

Sets the height of the image, in pixels.

Example:

```twig
<img src="{{ base_url() }}/image/en/content/media/image.jpg?h=100">
<img src="{{ base_url() }}/image/en/content/media/image.jpg?h=200">
<img src="{{ base_url() }}/image/en/content/media/image.jpg?h=300">
```

Result:

<img height="100" class="inline" src="[base_url]/image/en/content/media/image.jpg?q=70&h=100&dpr=2" />
<img height="200" class="inline" src="[base_url]/image/en/content/media/image.jpg?q=70&h=200&dpr=2" />
<img height="300" class="inline" src="[base_url]/image/en/content/media/image.jpg?q=70&h=300&dpr=2" />
