---
title: Width
---

`w`

Sets the width of the image, in pixels.

Example:

```twig
<img src="{{ base_url() }}/image/en/content/media/image.jpg?w=100">
<img src="{{ base_url() }}/image/en/content/media/image.jpg?w=200">
<img src="{{ base_url() }}/image/en/content/media/image.jpg?w=300">
```

Result:

<img width="100" src="[base_url]/image/en/content/media/image.jpg?q=70&w=100&dpr=2">
<img width="200" src="[base_url]/image/en/content/media/image.jpg?q=70&w=200&dpr=2">
<img width="300" src="[base_url]/image/en/content/media/image.jpg?q=70&w=300&dpr=2">
