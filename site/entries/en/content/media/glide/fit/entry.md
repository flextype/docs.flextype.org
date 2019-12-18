---
title: Fit
---

`fit`

Sets how the image is fitted to its target dimensions.

**Accepts:**
* `contain` - Default. Resizes the image to fit within the width and height boundaries without cropping, distorting or altering the aspect ratio.
* `max`: Resizes the image to fit within the width and height boundaries without cropping, distorting or altering the aspect ratio, and will also not increase the size of the image if it is smaller than the output size.
* `fill` - Resizes the image to fit within the width and height boundaries without cropping or distorting the image, and the remaining space is filled with the background color. The resulting image will match the constraining dimensions.
* `stretch` - Stretches the image to fit the constraining dimensions exactly. The resulting image will fill the dimensions, and will not maintain the aspect ratio of the input image.
* `crop` - Resizes the image to fill the width and height boundaries and crops any excess image data. The resulting image will match the width and height constraints without distorting the image. See the crop section for more information.

Example:

```twig
<img src="{{ base_url() }}/image/en/content/media/image.jpg?w=300&h=300&fit=stretch">
```

Result:

<img height="200" class="inline" src="[base_url]/image/en/content/media/image.jpg?q=70&w=100&h=200&dpr=2&fit=stretch">
