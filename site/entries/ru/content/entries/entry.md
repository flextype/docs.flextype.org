---
title: Записи
on_this_page:
  - 
    title: "Basics"
    link: "basics"
  - 
    title: "Entries and Urls structure in Flextype"
    link: "urls-structure"
  - 
    title: "Predefined Entry Variables"
    link: "predefined-entry-variables"
  - 
    title: "Custom Entry Variables"
    link: "custom-entry-variables"
  - 
    title: "Entries visibility"
    link: "entries-visibility"
---

<a name="basics"></a>
Записи являются основными строительными блоками вашего сайта. Каждая запись в Flextype должна содержать **Вступительный фронт Matter** блок в формате YAML вверху файла и **Содержимое записи** помечено с помощью HTML + Markdown + Коротков в нижней части файла.

Вот базовый пример: `сайт/записи/my-entry/entry.md`:

<div class="file-header"><i class="far fa-file-alt"></i> site/entries/my-entry/entry.md</div>

    ---
    title: My Entry
    description: My entry description
    ---
    My entry content.
    

Между строками с трехразовым дефисом можно установить предопределенные переменные или даже создать собственные. Эти переменные будут доступны для доступа к шаблонам сайта.

Использование в шаблонах:

```twig
<h1>{{ entry.content }}</h1>
<p>{{ entry.description }}</p>
{{ entry.content }}
```

### <a name="urls-structure"></a> Структура записей и Url-адресов в Flextype

Все записи содержимого расположены в папке `/site/entries`. Каждая запись должна быть помещена в свою папку.

Имена папок должны быть допустимыми **slugs**. Slugs полностью строчный, с акцентированными символами, заменяемыми буквами латинского алфавита и пробелами символов, заменяемых дефисом или подчеркиванием, чтобы избежать кодирования.

| Месторасположение                     | URL адрес        |
| ------------------------------------- | ---------------- |
| site/entries/home/entry.md            | /                |
| site/entries/blog/my-post/entry.md    | /blog/my-post    |
| site/entries/a/very/long/url/entry.md | /a/very/long/url |


### <a name="predefined-entry-variables"></a> Predefined Entry Variables

There are a number of predefined global variables that you can set in the front matter of a entry.

* published_at
* created_at
* modified_at
* slug
* content

### <a name="custom-entry-variables"></a> Custom Entry Variables

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

```twig
{{ entry.author.twitter }}
```

### <a name="entries-visibility"></a> Entries visibility

Content visibility is about controlling who can see your entries. Flextype allows you to control the visibility of your entries and Pages on an individual basis. By default, all entries are visible.

Available values for option `visibility`

* visible
* draft
* hidden

Also your entries can be routable and not. You can set `true` or `false` for `routable` option. By default it is `true`