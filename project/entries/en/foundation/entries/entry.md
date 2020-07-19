---
title: Entries
description: Entries are the fundamental building-blocks of your site. Each entry in Flextype should contains Entry Front Matter block in YAML format at the top of the file and Entry Content marked up using HTML + Markdown + Shortcodes at the bottom of the file.
breadcrumbs:
  0:
    title: "Documentation"
    link: "[url]/en/"
  1:
    title: "Foundation"
    link: "[url]/en/foundation/"
---

Entries are the fundamental building-blocks of your project. We are using jekyll like entries format. It means that each entry in the Flextype should contains **Entry Front Matter** block in valid YAML format at the top of the file and **Entry Content** marked up using HTML + Markdown + Shortcodes and etc... at the bottom of the file.

Here is a simple entry example:

<div class="file-header"><i class="far fa-file-alt"></i> project/entries/my-entry/entry.md</div>

    ---
    title: My Entry
    description: My entry description
    ---
    My entry content.

Between triple-dashed lines, you can set [predefined variables](./entries/variables) or even create custom ones of your own.

When you will fetch entry above with Flextype [Entries Rest API]([url]/en/rest-api/entries), entry data will looks like this:

```json
{
  "data": {
      "title": "My Entry",
      "description": "My entry description",
      "content": "My entry content."
  }
}
```

### Topics

* [Entries and URLs structure](./entries/urls-structure)
* [Variables](./entries/variables)
