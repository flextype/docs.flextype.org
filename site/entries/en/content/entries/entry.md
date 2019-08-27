---
title: Entries
---

Entries are the fundamental building-blocks of your site. Each entry in Flextype should contains **entry header** block in YAML format at the top of the file and **entry content** marked up using HTML + Shortcodes at the bottom of the file.

Here is a basic example (site/entries/my-entry/entry.html):

    ---
    title: My Entry
    description: My entry description
    ---
    My entry content.
    

Between these triple-dashed lines, you can set predefined entry header variables or even create custom ones of your own. These variables will then be available to you to access in site templates.

### Entries and Urls structure in Flextype: {#entries-and-urls-structure-in-flextype}

| Physical Location                       | URL              |
| --------------------------------------- | ---------------- |
| site/entries/home/entry.html            | /                |
| site/entries/blog/my-post/entry.html    | /blog/my-post    |
| site/entries/a/very/long/url/entry.html | /a/very/long/url |


### Predefined Entries Header Variables {#predefined-entries-header-variables}

Here is a list of predefined entry header variables with example values:

    title: Welcome title
    description: Some welcome description here
    keywords: key, words
    visibility: draft (or or hidden or empty for published pages)
    author:
      name: Sergey Romanenko
      email: awilum@msn.com
      url: https://github.com/Awilum
    date: 2019-01-01 08:00
    robots: noindex, nofollow
    template: default (allows you to use different templates in your theme)  
    

### Custom Entry Header Variables {#custom-entry-header-variables}

You can create your own custom entry header variables using any valid YAML syntax.

Example:

    author:
      twitter: "@getflextype"