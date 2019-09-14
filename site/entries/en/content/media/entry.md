---
title: Media
---

Entries can have any number and kind of images, videos, documents or other files.  
Those files are being stored directly in the entry folder.

### Getting list of media files for entry in your template

    {% set media = filesystem_list_contents(PATH_ENTRIES ~ '/' ~ entry.slug) %}


### Displaying images

    {% for image in media %}
        {% if image.extension == 'jpg' %}
            <img src="{{ base_url() }}/image/{{ entry.slug }}/{{ image.filename }}">
        {% endif %}
    {% endfor %}


### Display images using the Glide/Intervention

The built-in Glide/Intervention library allows you to do manipulations with images and cache the images.

An example of using the Glide/Intervention library to resize images:

    {% for image in media %}
        {% if image.extension == 'jpg' %}
            <img src="{{ base_url() }}/image/{{ entry.slug }}/{{ image.filename }}?dpr=2&w=350&q=60">
        {% endif %}
    {% endfor %}


A complete list of available options, you can find here: <http://glide.thephpleague.com/1.0/api/quick-reference/>
