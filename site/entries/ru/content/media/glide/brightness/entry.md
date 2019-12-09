---
title: Brightness
---

`bri`

Adjusts the image brightness. Use values between `-100` and `+100`, where `0` represents no change.

Example:

```twig
<img src="{{ base_url() }}/image/en/content/media/image.jpg?bri=-50">
<img src="{{ base_url() }}/image/en/content/media/image.jpg?bri=50">
```

Result:

<img width="200" src="[base_url]/image/en/content/media/image.jpg?q=70&w=200&dpr=2&bri=-50" />
<img width="200" src="[base_url]/image/en/content/media/image.jpg?q=70&w=200&dpr=2&bri=50" />
