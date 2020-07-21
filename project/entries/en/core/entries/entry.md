---
title: Entries
description: Entries are the fundamental building-blocks of your site. Each entry in Flextype should contains Entry Front Matter block in YAML format at the top of the file and Entry Content marked up using HTML + Markdown + Shortcodes at the bottom of the file.
breadcrumbs:
  0:
    title: "Documentation"
    link: "[url]/en/"
  1:
    title: "Core Concepts"
    link: "[url]/en/core/"
on_this_page:
  0:
    title: "Entries and Urls structure"
    link: "entries-and-urls-structure"
  1:
    title: "Default Variables"
    link: "default-variables"
  2:
    title: "Custom Variables"
    link: "custom-variables"
---

Entries are the fundamental building-blocks of your project. We are using jekyll like entries format. It means that each entry in the Flextype should contains **Entry Front Matter** block in valid YAML format at the top of the file and **Entry Content** marked up using HTML + Markdown + Shortcodes and etc... at the bottom of the file.

Here is a simple entry example:

<div class="file-header"><i class="far fa-file-alt"></i> project/entries/movies/sg-1/season-1/episode-6/entry.md</div>

    ---
    title: Cold Lazarus
    description: When Jack is injured unintentionally by a crystal alien, the alien duplicates Jack's form and out of fear of retribution tries to heal Jack.
    director: Ken Girotti
    writers: Brad Wright, Jonathan Glassner
    stars: Richard Dean Anderson, Michael Shanks, Amanda Tapping
    ---
    SG-1 visits as planet, uninteresting except for unique broken crystals; nobody noticed that when colonel Jack O'Neill touched them, he fainted and was replaced by a copy, which returns to earth in his place. His strange, aloof behavior on the base, is one thing, but Jack's memories also drive him to return to his ex's paternal home, to deal with the great drama in his past  when his beloved kid son accidentally shot himself with his gun. Meanwhile Sam and Daniel compare the crystal sample with the puzzling result of goa'uld weapons elsewhere, and find out about the crystal's amazing powers. Then the real Jack regains conscience and returns to base, but is initially incarcerated as a possible fraud...

Between triple-dashed lines, you can set [predefined variables](#default-variables) or even create custom ones of your own.

### <a name="entries-and-urls-structure"></a> Entries and Urls structure in Flextype

All content entries are located in the `/project/entries/` folder.

Each entry file `entry.md` should be placed in its own folder.

Folder names should also be valid **slugs**. Slugs are entirely lowercase, with accented characters replaced by letters from the Latin alphabet and whitespace characters replaced by a dash or an underscore, to avoid being encoded.

| Physical Location                     | URL              |
| ------------------------------------- | ---------------- |
| project/entries/home/entry.md            | /                |
| project/entries/blog/my-post/entry.md    | /blog/my-post    |
| project/entries/a/very/long/url/entry.md | /a/very/long/url |

### <a name="default-variables"></a> Default Variables

There are a number of default entry variables available for each entry and defined in the Front Matter section.

##### Visibility

| Name | Default | Available values for option |
| --- | --- | --- |
| `visibility` | `visible` | `visible` or `draft` or `hidden`|

Content visibility is about controlling who can see your entries. Flextype allows you to control the visibility of your Entries and Pages on an individual basis. By default, all entries are visible.

**Examples**

    ---
    title: My Entry Title
    visibility: draft
    ---
    My entry content here.

##### Routable

| Name | Default | Available values for option |
| --- | --- | --- |
| `routable` | `true` | `true` or `false`|

By default, all pages are routable. This means that they can be reached by pointing your browser to the URL of the entry. However, you may need to create a entry that is created to hold specific content, but it is meant to be called directly by a plugin, other content, or even a theme directly.

**Examples**

    ---
    title: Commment42
    routable: false
    ---
    Content for Commment42

##### Published at

| Name | Default | Available values for option |
| --- | --- | --- |
| `published_at` |  | Date & Time |

This variable allows you to specifically set a published_at date associated with this entry.

**Examples**

    ---
    title: My Entry Title
    published_at: '15-05-2020 06:57'
    ---
    My entry content here.

##### Published by

| Name | Default | Available values for option |
| --- | --- | --- |
| `published_by` |  | User UUID |

This variable allows you to specifically set a published_by User UUID associated with this entry.

**Examples**

    ---
    title: My Entry Title
    published_by: ea7432a3-b2d5-4b04-b31d-1c5acc7a55e2
    ---
    My entry content here.

##### Created at

| Name | Default | Available values for option |
| --- | --- | --- |
| `created_at` |  | Date & Time |

This variable allows you to specifically set a created_at date associated with this entry.

##### Modified at

| Name | Default | Available values for option |
| --- | --- | --- |
| `modified_at` |  | Date & Time |

This variable allows you to specifically set a modified_at date associated with this entry.

**Examples**

    ---
    title: My Entry Title
    modified_at: '15-05-2020 06:57'
    ---
    My entry content here.

##### Parsers

| Name | Default | Available values for option |
| --- | --- | --- |
| `parsers` |  | A list of parsers with options |

```yaml
parsers:
  markdown:
    enabled: true
    cache: true
    fields: ['content', 'title']
  shortcodes:
    enabled: true
    cache: true
    fields: ['content', 'title', 'description']
```

##### Slug

| Name | Default | Available values for option |
| --- | --- | --- |
| `slug` |  | Slug ist entirely lowercase, with accented characters replaced by letters from the Latin alphabet and whitespace characters replaced by a dash or an underscore, to avoid being encoded. |

### <a name="custom-variables"></a> Custom Variables

You can create your own custom entry variables using any valid YAML syntax. These would be entry-specific variable and be available for content api's and any extension such as plugin, theme and etc...

**Examples**

    ---
    title: My Entry Title
    description: My entry description
    author:
      twitter: "@getflextype"
    ---
    My entry content here.
