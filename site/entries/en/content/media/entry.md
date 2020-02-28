---
title: Media
description: Entries can have any number and kind of images, videos, documents or other files. Those files are being stored directly in the entry folder.
---

Entries can have any number and kind of images, videos, documents or other files.  
Those files are being stored directly in the entry folder.

### Getting list of media files for entry in the template

```twig
{% set media = filesystem_list_contents(PATH_UPLOADS ~ '/' ~ entry.slug) %}
```

### Displaying images in the template

```twig
{% for image in media %}
    {% if image.extension == 'jpg' %}
        <img src="{{ site_url() }}/site/uploads/{{ entry.slug }}/{{ image.filename }}">
    {% endif %}
{% endfor %}
```

### Display images in the template using the Glide/Intervention

The built-in Glide/Intervention library allows you to do manipulations with images and cache the images.

An example of using the Glide/Intervention library to resize images:

```twig
{% for image in media %}
    {% if image.extension == 'jpg' %}
        <img src="{{ site_url() }}/api/delivery/images/{{ entry.slug }}/{{ image.filename }}?dpr=2&w=350&q=60&token=YOUR_IMAGES_DELIVERY_TOKEN">
    {% endif %}
{% endfor %}
```

### A complete list of available options for Glide/Intervention
* [Orientation](./media/glide/orientation)
* [Flip](./media/glide/flip)
* [Crop](./media/glide/crop)
* [Width](./media/glide/width)
* [Height](./media/glide/height)
* [Fit](./media/glide/fit)
* [Device pixel ratio](./media/glide/device-pixel-ratio)
* [Brightness](./media/glide/brightness)
* [Contrast](./media/glide/contrast)
* [Gamma](./media/glide/gamma)
* [Sharpen](./media/glide/sharpen)
* [Blur](./media/glide/blur)
* [Pixelate](./media/glide/pixelate)
* [Filter](./media/glide/filter)
* [Border](./media/glide/border)
* [Quality](./media/glide/quality)
* [Format](./media/glide/format)
* [Relative dimensions](./media/glide/relative-dimensions)
* [Colors](./media/glide/colors)

<!--
<http://glide.thephpleague.com/1.0/api/quick-reference/>
-->
