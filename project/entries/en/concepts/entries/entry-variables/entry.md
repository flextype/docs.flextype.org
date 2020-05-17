---
title: Entry Variables
description: Entries are the fundamental building-blocks of your site. Each entry in Flextype should contains Entry Front Matter block in YAML format at the top of the file and Entry Content marked up using HTML + Markdown + Shortcodes at the bottom of the file.
breadcrumbs:
  0:
    title: "Documentation"
    link: "[url]/en/"
  1:
    title: "Concepts"
    link: "[url]/en/concepts/"
  2:
    title: "Entries"
    link: "[url]/en/concepts/entries/"
on_this_page:
  0:
    title: "Default Entry Variables"
    link: "default-entry-variables"
  1:
    title: "Custom Entry Variables"
    link: "custom-entry-variables"
---

### <a name="default-entry-variables"></a> Default Entry Variables

There are a number of basic entry variables available for each entry and defined in the Front Matter section.

#### Visibility

| Name | Default | Available values for option |
| --- | --- | --- |
| `visibility` | `visible` | `visible` or `draft` or `hidden`|

Content visibility is about controlling who can see your entries. Flextype allows you to control the visibility of your Entries and Pages on an individual basis. By default, all entries are visible.

##### Example

    ---
    title: My Entry Title
    visibility: draft
    ---
    My entry content here.

#### Routable

| Name | Default | Available values for option |
| --- | --- | --- |
| `routable` | `true` | `true` or `false`|

By default, all pages are routable. This means that they can be reached by pointing your browser to the URL of the entry. However, you may need to create a entry that is created to hold specific content, but it is meant to be called directly by a plugin, other content, or even a theme directly.

##### Example

    ---
    title: Commment42
    routable: false
    ---
    Content for Commment42

#### Published at

| Name | Default | Available values for option |
| --- | --- | --- |
| `published_at` |  | Date & Time |

This variable allows you to specifically set a published_at date associated with this entry.

##### Example

    ---
    title: My Entry Title
    published_at: '15-05-2020 06:57'
    ---
    My entry content here.

#### Published by

| Name | Default | Available values for option |
| --- | --- | --- |
| `published_by` |  | User UUID |

This variable allows you to specifically set a published_by User UUID associated with this entry.

##### Example

    ---
    title: My Entry Title
    published_by: ea7432a3-b2d5-4b04-b31d-1c5acc7a55e2
    ---
    My entry content here.

#### Created at

| Name | Default | Available values for option |
| --- | --- | --- |
| `created_at` |  | Date & Time |

This variable allows you to specifically set a created_at date associated with this entry.

#### Modified at

| Name | Default | Available values for option |
| --- | --- | --- |
| `modified_at` |  | Date & Time |

This variable allows you to specifically set a modified_at date associated with this entry.

##### Example

    ---
    title: My Entry Title
    modified_at: '15-05-2020 06:57'
    ---
    My entry content here.

#### Parsers

| Name | Default | Available values for option |
| --- | --- | --- |
| `parsers` |  | A list of parsers with options |

```
parsers:
  markdown:
    enabled: true
    cache: true
    fields: ['content', 'title']
  shortcodes:
    enabled: true
    cache: true
    fields: "*"
```

#### Slug

| Name | Default | Available values for option |
| --- | --- | --- |
| `slug` |  | Slug ist entirely lowercase, with accented characters replaced by letters from the Latin alphabet and whitespace characters replaced by a dash or an underscore, to avoid being encoded. |

### <a name="custom-entry-variables"></a> Custom Entry Variables

You can create your own custom entry variables using any valid YAML syntax. These would be entry-specific variable and be available for content api's and any extension such as plugin, theme and etc...

##### Example

    ---
    title: My Entry Title
    description: My entry description
    author:
      twitter: "@getflextype"
    ---
    My entry content here.

<!--
There are a number of predefined global variables that you can set in the front matter of a entry.

* published_at
* created_at
* modified_at
* slug
* content
-->
