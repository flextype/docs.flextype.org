---
title: Format
---

`fm`

Encodes the image to a specific format. Accepts `jpg`, `pjpg` (progressive jpeg), `png`, `gif` or `webp`. Defaults to jpg.

Example:

```twig
<img src="{{ base_url() }}/image/en/content/media/image.jpg?fm=gif">
```

Result:

<img width="200" src="[base_url]/image/en/content/media/image.jpg?q=70&w=200&dpr=2&fm=gif" />
