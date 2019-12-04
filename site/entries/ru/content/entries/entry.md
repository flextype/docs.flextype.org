---
title: Записи
---

Записи являются основными строительными блоками вашего сайта. Каждая запись в Flextype должна содержать **Вступительный фронт Matter** блок в формате YAML вверху файла и **Содержимое записи** помечено с помощью HTML + Markdown + Коротков в нижней части файла.

Вот базовый пример: `сайт/записи/my-entry/entry.md`:

<div class="file-header"><i class="far fa-file-alt"></i> site/entries/my-entry/entry.md</div>

    title: My Entry
    description: My entry description
    ---
    My entry content.
    

Между строками с трехразовым дефисом можно установить предопределенные переменные или даже создать собственные. Эти переменные будут доступны для доступа к шаблонам сайта.

Использование в шаблонах:

    <h1>{{ entry.content }}</h1>
    <p>{{ entry.description }}</p>
    {{ entry.content }}
    

### Структура записей и Url-адресов в Flextype

Все записи содержимого расположены в папке `/site/entries`. Каждая запись должна быть помещена в свою папку.

Имена папок должны быть допустимыми **slugs**. Slugs полностью строчный, с акцентированными символами, заменяемыми буквами латинского алфавита и пробелами символов, заменяемых дефисом или подчеркиванием, чтобы избежать кодирования.

| Месторасположение                     | URL адрес        |
| ------------------------------------- | ---------------- |
| site/entries/home/entry.md            | /                |
| site/entries/blog/my-post/entry.md    | /blog/my-post    |
| site/entries/a/very/long/url/entry.md | /a/very/long/url |


### Predefined Entry Variables

There are a number of predefined global variables that you can set in the front matter of a entry.

* published_at
* created_at
* modified_at
* slug
* content

### Custom Entry Variables

You can create any custom entry front matter variables using valid YAML syntax.

Example:

    ---
    title: My Entry
    description: My entry description
    author:
      twitter: "@getflextype"
    ---
    My entry content.
    

Using in the templates:

    {{ entry.author.twitter }}