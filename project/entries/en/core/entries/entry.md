---
title: Entries
description: Entries are the fundamental building-blocks of your site. Each entry in Flextype should contains Entry Front Matter block in YAML format at the top of the file and Entry Content marked up using HTML + Markdown + Shortcodes at the bottom of the file.
breadcrumbs:
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
  3:
    title: "Methods"
    link: "methods"
---

Entries are the fundamental building-blocks of your project. We are using jekyll like entries format. It means that each entry in the Flextype should contains **Entry Front Matter** block in valid YAML format at the top of the file and **Entry Content** marked up using HTML + Markdown + Shortcodes and etc... at the bottom of the file.

Here is a simple entry example:

<div class="file-header"><i class="far fa-file-alt"></i> project/entries/movies/sg-1/season-5/episode-21/entry.md</div>

    ---
    title: Meridian
    description: As Jackson suffers from a fatal dose of radiation, he struggles with the value of his life while his friends deal with the emotional and diplomatic repercussions.
    director: William Waring
    writers: Brad Wright, Jonathan Glassner
    stars: Richard Dean Anderson, Michael Shanks, Amanda Tapping
    ---
    SG-1 returns from an off-world mission to P9Y-3C3 with Daniel Jackson suffering from what is likely a fatal dose of radiation. On the planet, they dealt with the country of Kelowna and their representative Jonas Quinn. That country was at the same stage of development as the United States in the 1940s and well on their way to creating an atomic weapon using Goa'uld technology found in an ancient temple. Daniel argued against the Kelownans developing such a weapon and is accused of attempting to sabotage the project. As members of the team sit by his deathbed, Daniel receives an unexpected offer from someone they once met off-world.

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
    fields: ['content', 'title']
  shortcodes:
    enabled: true
    fields: ['content', 'title', 'description']
```

##### Cache

| Name | Default | Available values for option |
| --- | --- | --- |
| `cache` | `true` | `true` or `false`|

By default, all pages are stored in the cache if flextype cache is true.
But this rule can be changed by setting individual cache for each entry.

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


### <a name="methods"></a> Methods

| Method | Description |
|---|---|
| <a href="#fetch"><code>fetch()</code></a> | Fetch single entry or collections of entries |
| <a href="#fetch-single"><code>fetchSingle()</code></a> | Fetch single entry |
| <a href="#fetch-collection"><code>fetchCollection()</code></a> | Fetch entries collection |
| <a href="#create"><code>create()</code></a> | Create entry |
| <a href="#update"><code>update()</code></a> | Update entry |
| <a href="#rename"><code>rename()</code></a> | Rename entry |
| <a href="#copy"><code>copy()</code></a> | Copy entry |
| <a href="#delete"><code>delete()</code></a> | Delete entry |
| <a href="#has"><code>has()</code></a> | Check whether entry exists |
| <a href="#getFileLocation"><code>getFileLocation()</code></a> | Get entry file location |
| <a href="#getDirLocation"><code>getDirLocation()</code></a> | Get entry directory location |


##### <a name="fetch"></a> `fetch()`

Fetch single entry or collections of entries.

**Examples**

Fetch single entry `movies/sg-1/season-5/episode-21`

```php
// Fetch single entry: movies/sg-1/season-5/episode-21
$data = $flextype->entries->fetch('movies/sg-1/season-5/episode-21');

// Fetch collections of entries episodes in movies/sg-1/season-5
$data = $flextype->entries->fetch('movies/sg-1/season-5', true);

// Fetch collections of entries in movies/sg-1 and filter them.
$data = $flextype->entries->fetch('movies/sg-1', true, $filter);
```

`$filter` is an array of valid values for [collect_filter()](./collections#collect-filter) and finder filter.

##### <a name="fetchSingle"></a> `fetchSingle()`

Fetch single entry.

**Examples**

Fetch single entry `movies/sg-1/season-5/episode-21`

```php
$data = $flextype->entries->fetchSingle('movies/sg-1/season-5/episode-21');
```

##### <a name="fetchCollection"></a> `fetchCollection()`

Fetch entries collection.

**Examples**

Fetch collections of entries episodes in `movies/sg-1/season-5`

```php
$data = $flextype->entries->fetchCollection('movies/sg-1/season-5');
```

Fetch collections of entries in `movies/sg-1` and filter them.

```php
$data = $flextype->entries->fetchCollection('movies/sg-1/season-5', $filter);
```

`$filter` is an array of valid values for [collect_filter()](./collections#collect-filter) and finder filter.

##### <a name="create"></a> `create()`

Create entry.

**Examples**

Create new entry `episode-22` in `movies/sg-1/season-5`

```php
$data = [
                'title' => 'Revelations',
                'description' => 'While still dealing with the loss of Daniel Jackson the SGC is contacted by the Asgard who require assistance dealing with Anubis, who seems to have new shield technology that can repel Asgard weapons.',
                'director' => 'Martin Wood',
                'writers' => 'Brad Wright, Jonathan Glassner',
                'stars' => 'Richard Dean Anderson, Michael Shanks, Amanda Tapping',
                'content' => 'Osiris engages in space combat with Thor over a violation of the protected planets treaty. Freyr arrives at the SGC bringing news of Thor\'s death and asking SG-1 to mount a rescue mission to retrieve an Asgard scientist from the planet in question. Upon their arrival Heimdall informs them that Thor still lives and has been taken captive by the Goa\'uld. O\'Neill and Teal\'c transport over to the mothership to rescue him from the clutches of Anubis.'
        ];


$flextype->entries->create('movies/sg-1/season-5/episode-22', $data);
```

##### <a name="update"></a> `update()`

Update entry.

**Examples**

Update entry `episode-22` in `movies/sg-1/season-5`

```php
$data = ['soundtracks' => 'Joel Goldsmith'];


$flextype->entries->update('movies/sg-1/season-5/episode-22', $data);
```

##### <a name="rename"></a> `rename()`

Rename entry.

**Examples**

Rename entry `episode-22` to `episode-23` in `movies/sg-1/season-5`

```php
$flextype->entries->rename('movies/sg-1/season-5/episode-22',
                                       'movies/sg-1/season-5/episode-23');
```

##### <a name="copy"></a> `copy()`

Copy entry.

**Examples**

Copy entry `episode-23` to `episode-22` in `movies/sg-1/season-5`

```php
$flextype->entries->rename('movies/sg-1/season-5/episode-23',
                                       'movies/sg-1/season-5/episode-22');
```

##### <a name="delete"></a> `delete()`

Delete entry.

**Examples**

Delete entry `episode-23` in `movies/sg-1/season-5`

```php
$flextype->entries->delete('movies/sg-1/season-5/episode-23');
```

##### <a name="has"></a> `has()`

Check whether entry exists.

**Examples**

Check whether entry `episode-23` exists in `movies/sg-1/season-5`

```php
if ($flextype->entries->has('movies/sg-1/season-5/episode-23')) {
    // do something...
}
```

##### <a name="getFileLocation"></a> `getFileLocation()`

Get entry file location

**Examples**

Check whether entry `episode-23` exists in `movies/sg-1/season-5`

```php
$data = $flextype->entries->getFileLocation('movies/sg-1/season-5/episode-23');
```

##### <a name="getDirLocation"></a> `getDirLocation()`

Get entry directory location

**Examples**

Get entry `episode-23` exists in `movies/sg-1/season-5`

```php
$data = $flextype->entries->getDirLocation('movies/sg-1/season-5/episode-23');
```
