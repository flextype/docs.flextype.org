---
title: Медиа
---

Записи могут иметь любое количество изображений, видео, документов или других файлов.  
Эти файлы хранятся непосредственно в папке ввода.

### Getting list of media files for entry in the template

```twig
{% set media = filesystem_list_contents(PATH_ENTRIES ~ '/' ~ entry.slug) %}
```

### Displaying images in the template

```twig
{% for image in media %}
    {% if image.extension == 'jpg' %}
        <img src="{{ base_url() }}/image/{{ entry.slug }}/{{ image.filename }}">
    {% endif %}
{% endfor %}
```

### Display images in the template using the Glide/Intervention

Встроенная библиотека Glide/Intervention позволяет вам манипулировать изображениями и кэшировать изображения.

Пример использования библиотеки Glide/Intervention для изменения размера изображений:

```twig
{% for image in media %}
    {% if image.extension == 'jpg' %}
        <img src="{{ base_url() }}/image/{{ entry.slug }}/{{ image.filename }}?dpr=2&w=350&q=60">
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