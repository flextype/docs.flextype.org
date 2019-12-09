---
title: Gamma
---

`gam`

Adjusts the image gamma. Use values between `0.1` and `9.99`.

Example:

```twig
<img src="{{ base_url() }}/image/en/content/media/image.jpg?gam=0.1">
<img src="{{ base_url() }}/image/en/content/media/image.jpg?gam=9.99">
```

Result:

<img width="200" src="[base_url]/image/en/content/media/image.jpg?q=70&w=200&dpr=2&gam=0.1">
<img width="200" src="[base_url]/image/en/content/media/image.jpg?q=70&w=200&dpr=2&gam=9.99">
