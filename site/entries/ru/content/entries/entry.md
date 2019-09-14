---
title: Entries
---

Entries are the fundamental building-blocks of your site. Each entry in Flextype should contains **Entry Front Matter** block in YAML format at the top of the file and **Entry Content** marked up using HTML + Markdown + Shortcodes at the bottom of the file.

Here is a basic example (site/entries/my-entry/entry.md):

    ---
    title: My Entry
    description: My entry description
    ---
    My entry content.
    

Using in the templates:

    <h1>{{ entry.content }}</h1>
    <p>{{ entry.description }}</p>
    {{ entry.content }}
    

Between triple-dashed lines, you can set predefined variables or even create custom ones of your own. These variables will then be available to you to access in site templates.

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
    

### Entries and Urls structure in Flextype:

| Physical Location                     | URL              |
| ------------------------------------- | ---------------- |
| site/entries/home/entry.md            | /                |
| site/entries/blog/my-post/entry.md    | /blog/my-post    |
| site/entries/a/very/long/url/entry.md | /a/very/long/url |