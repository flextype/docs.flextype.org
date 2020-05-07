---
title: Border
---

`border`

Add a border to the image. Required format: `width, color, method`.

**Width**

Sets the border width in pixels, or using relative dimensions.

**Color**

Sets the border color. See supported colors for more information on the available color formats.

**Method**

Sets how the border will be displayed. Available options:

* `overlay` - Place border on top of image (default).
* `shrink` - Shrink image within border (canvas does not change).
* `expand` - Expands canvas to accommodate border.

Example:

```twig
<img src="{{ site_url() }}/api/delivery/images/en/content/media/image.jpg?border=10,5000,overlay&token=YOUR_IMAGES_DELIVERY_TOKEN">
<img src="{{ site_url() }}/api/delivery/images/en/content/media/image.jpg?border=10,FFCC33,expand&token=YOUR_IMAGES_DELIVERY_TOKEN">
```

Result:

<img width="200" class="inline" src="[site_url]/api/delivery/images/en/content/media/image.jpg?q=70&w=200&dpr=2&border=10,5000,overlay&token=4864fb8e1ebe080e6e4ad5c4363083a6" />
<img width="200" class="inline" src="[site_url]/api/delivery/images/en/content/media/image.jpg?q=70&w=200&dpr=2&border=10,FFCC33,expand&token=4864fb8e1ebe080e6e4ad5c4363083a6" />
