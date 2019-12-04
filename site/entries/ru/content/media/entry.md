---
title: Медиа
---

Записи могут иметь любое количество изображений, видео, документов или других файлов.  
Эти файлы хранятся непосредственно в папке ввода.

### Получение списка медиа файлов для записи в вашем шаблоне

```twig
{% set media = filesystem_list_contents(PATH_ENTRIES ~ '/' ~ entry.slug) %}
```

### Подключение изображений

```twig
{% for image in media %}
    {% if image.extension == 'jpg' %}
        <img src="{{ base_url() }}/image/{{ entry.slug }}/{{ image.filename }}">
    {% endif %}
{% endfor %}
```

### Отображение изображений с помощью Glide/Intervention

Встроенная библиотека Glide/Intervention позволяет вам манипулировать изображениями и кэшировать изображения.

Пример использования библиотеки Glide/Intervention для изменения размера изображений:

```twig
{% for image in media %}
    {% if image.extension == 'jpg' %}
        <img src="{{ base_url() }}/image/{{ entry.slug }}/{{ image.filename }}?dpr=2&w=350&q=60">
    {% endif %}
{% endfor %}
```

Полный список доступных вариантов, вы можете найти здесь: <http://glide.thephpleague.com/1.0/api/quick-reference/>