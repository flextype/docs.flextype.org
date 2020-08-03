---
title: Entries
description: Entries are the fundamental building-blocks of your site. Each entry in Flextype should contains Entry Front Matter block in YAML format at the top of the file and Entry Content marked up using HTML + Markdown + Shortcodes at the bottom of the file.
on_this_page:
  0:
    title: "Basics"
    link: "basics"
  1:
    title: "Entries and Urls structure in Flextype"
    link: "urls-structure"
  2:
    title: "Predefined Entry Variables"
    link: "predefined-entry-variables"
  3:
    title: "Custom Entry Variables"
    link: "custom-entry-variables"
  4:
    title: "Entries visibility"
    link: "entries-visibility"
---
<a name="basics"></a>
Entries are the fundamental building-blocks of your site. Each entry in Flextype should contains **Entry Front Matter** block in YAML format at the top of the file and **Entry Content** marked up using HTML + Markdown + Shortcodes at the bottom of the file.

Here is a basic example:

<div class="file-header"><i class="far fa-file-alt"></i> site/entries/my-entry/entry.md</div>

    ---
    title: My Entry
    description: My entry description
    ---
    My entry content.

Between triple-dashed lines, you can set predefined variables or even create custom ones of your own. These variables will then be available to you to access in site templates.

Using in the templates:

```twig
<h1>{{ entry.content }}</h1>
<p>{{ entry.description }}</p>
{{ entry.content }}
```

### <a name="urls-structure"></a> Entries and Urls structure in Flextype

All content entries are located in the `/site/entries` folder. Each Entry should be placed in its own folder.

Folder names should also be valid **slugs**. Slugs are entirely lowercase, with accented characters replaced by letters from the Latin alphabet and whitespace characters replaced by a dash or an underscore, to avoid being encoded.

| Physical Location                     | URL              |
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
