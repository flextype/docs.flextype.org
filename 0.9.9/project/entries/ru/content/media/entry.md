---
title: Медиа
description: Entries can have any number and kind of images, videos, documents or other files. Those files are being stored directly in the entry folder.
on_this_page:
  - 
    title: "Getting list of media files for entry in the template"
    link: "getting-list-of-media-files"
  - 
    title: "Displaying images in the template"
    link: "displaying-images-in-the-template"
  - 
    title: "Display images in the template using the Glide/Intervention"
    link: "displaying-images-in-the-template-glide"
  - 
    title: "A complete list of available options for Glide/Intervention"
    link: "displaying-images-in-the-template-glide-options"
---

Записи могут иметь любое количество изображений, видео, документов или других файлов.  
Эти файлы хранятся непосредственно в папке ввода.

### <a name="getting-list-of-media-files"></a> Getting list of media files for entry in the template

```twig
{% set media = filesystem_list_contents(PATH_UPLOADS ~ '/' ~ entry.slug) %}
```

### <a name="displaying-images-in-the-template"></a> Displaying images in the template

```twig
{% for image in media %}
    {% if image.extension == 'jpg' %}
        <img src="{{ site_url() }}/site/uploads/{{ entry.slug }}/{{ image.filename }}">
    {% endif %}
{% endfor %}
```

### <a name="displaying-images-in-the-template-glide"></a> Display images in the template using the Glide/Intervention

Встроенная библиотека Glide/Intervention позволяет вам манипулировать изображениями и кэшировать изображения.

To access Glide/Intervention you should use `/api/delivery/images` endpoint and [valid images delivery token](http://docs.flextype.org/en/advanced/api/rest/delivery/images).

An example of using the Glide/Intervention library to resize images:

```twig
{% for image in media %}
    {% if image.extension == 'jpg' %}
        <img src="{{ site_url() }}/api/delivery/images/{{ entry.slug }}/{{ image.filename }}?dpr=2&w=350&q=60&token=YOUR_IMAGES_DELIVERY_TOKEN">
    {% endif %}
{% endfor %}
```

### <a name="displaying-images-in-the-template-glide-options"></a> A complete list of available options for Glide/Intervention

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