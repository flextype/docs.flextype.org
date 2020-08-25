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
    level2:
      -
        title: "visibility"
        link: "default-variables-visibility"
      -
        title: "routable"
        link: "default-variables-routable"
      -
        title: "published_at"
        link: "default-variables-published-at"
      -
        title: "published_by"
        link: "default-variables-published-by"
      -
        title: "created_at"
        link: "default-variables-created-at"
      -
        title: "created_by"
        link: "default-variables-created-by"
      -
        title: "modified_at"
        link: "default-variables-modified-at"
      -
        title: "parsers"
        link: "default-variables-parsers"
      -
        title: "cache"
        link: "default-variables-cache"
      -
        title: "slug"
        link: "default-variables-slug"
      -
        title: "id"
        link: "default-variables-id"
  2:
    title: "Custom Variables"
    link: "custom-variables"
  3:
    title: "Methods"
    link: "methods"
    level2:
      0:
        title: "fetch()"
        link: "methods-fetch"
      1:
        title: "fetchSingle()"
        link: "methods-fetchSingle"
      2:
        title: "fetchCollection()"
        link: "methods-fetchCollection"
      3:
        title: "create()"
        link: "methods-create"
      4:
        title: "update()"
        link: "methods-update"
      5:
        title: "rename()"
        link: "methods-rename"
      6:
        title: "copy()"
        link: "methods-copy"
      7:
        title: "delete()"
        link: "methods-delete"
      8:
        title: "has()"
        link: "methods-has"
      9:
        title: "getFileLocation()"
        link: "methods-getFileLocation"
      10:
        title: "getDirLocation()"
        link: "methods-getDirLocation"
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

All content entries are located in the `project/entries/` folder.

Each entry file `entry.md` should be placed in its own folder.

Folder names should also be valid **slugs**. Slugs are entirely lowercase, with accented characters replaced by letters from the Latin alphabet and whitespace characters replaced by a dash or an underscore, to avoid being encoded.

##### Examples

```
# Physical Location
project/entries/movies/sg-1/entry.md

# ID (URL)
movies/sg-1

# Slug
sg-1
```

```
# Physical Location
project/entries/movies/sg-1/season-5/entry.md

# ID (URL)
movies/sg-1/season-5

# Slug
season-5
```

```
# Physical Location
project/entries/movies/sg-1/season-5/episode-21/entry.md

# ID (URL)
movies/sg-1/season-5/episode-21

# Slug
episode-21
```


### <a name="default-variables"></a> Default Variables

There are a number of default entry variables available for each entry and defined in the Front Matter section.

##### <a name="default-variables-visibility"></a> Visibility

<div class="table">
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Default</th>
                <th>Available values for option</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>visibility</td>
                <td>visible</td>
                <td>visible or draft or hidden</td>
            </tr>
        </tbody>
    </table>
</div>

Content visibility is about controlling who can see your entries. Flextype allows you to control the visibility of your Entries and Pages on an individual basis. By default, all entries are visible.

**Examples**

    ---
    title: My Entry Title
    visibility: draft
    ---
    My entry content here.

##### <a name="default-variables-routable"></a> Routable

<div class="table">
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Default</th>
                <th>Available values for option</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>routable</td>
                <td>true</td>
                <td>true or false</td>
            </tr>
        </tbody>
    </table>
</div>

By default, all pages are routable. This means that they can be reached by pointing your browser to the URL of the entry. However, you may need to create a entry that is created to hold specific content, but it is meant to be called directly by a plugin, other content, or even a theme directly.

**Examples**

    ---
    title: Commment42
    routable: false
    ---
    Content for Commment42

##### <a name="default-variables-published-at"></a> Published at

<div class="table">
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Default</th>
                <th>Available values for option</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>published_at</td>
                <td></td>
                <td>Date & Time</td>
            </tr>
        </tbody>
    </table>
</div>

This variable allows you to specifically set a published_at date associated with this entry.

**Examples**

    ---
    title: My Entry Title
    published_at: '15-05-2020 06:57'
    ---
    My entry content here.

##### <a name="default-variables-published-by"></a> Published by

<div class="table">
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Default</th>
                <th>Available values for option</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>published_by</td>
                <td></td>
                <td>User UUID</td>
            </tr>
        </tbody>
    </table>
</div>

This variable allows you to specifically set a published_by User UUID associated with this entry.

**Examples**

    ---
    title: My Entry Title
    published_by: ea7432a3-b2d5-4b04-b31d-1c5acc7a55e2
    ---
    My entry content here.

##### <a name="default-variables-created-at"></a> Created at

<div class="table">
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Default</th>
                <th>Available values for option</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>created_at</td>
                <td></td>
                <td>Date & Time</td>
            </tr>
        </tbody>
    </table>
</div>

This variable allows you to specifically set a created_at date associated with this entry.

##### <a name="default-variables-modified-at"></a> Modified at

<div class="table">
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Default</th>
                <th>Available values for option</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>modified_at</td>
                <td></td>
                <td>Date & Time</td>
            </tr>
        </tbody>
    </table>
</div>

This variable allows you to specifically set a modified_at date associated with this entry.

**Examples**

    ---
    title: My Entry Title
    modified_at: '15-05-2020 06:57'
    ---
    My entry content here.

##### <a name="default-variables-parsers"></a> Parsers

<div class="table">
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Default</th>
                <th>Available values for option</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>parsers</td>
                <td></td>
                <td>A list of parsers with options</td>
            </tr>
        </tbody>
    </table>
</div>

```yaml
parsers:
  markdown:
    enabled: true
    fields: ['content', 'title']
  shortcodes:
    enabled: true
    fields: ['content', 'title', 'description']
```

##### <a name="default-variables-cache"></a> Cache

<div class="table">
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Default</th>
                <th>Available values for option</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>cache</td>
                <td></td>
                <td>true or false</td>
            </tr>
        </tbody>
    </table>
</div>

By default, all pages are stored in the cache if flextype cache is true.
But this rule can be changed by setting individual cache for each entry.

##### <a name="default-variables-slug"></a> Slug

<div class="table">
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Default</th>
                <th>Available values for option</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>slug</td>
                <td></td>
                <td>Slug ist entirely lowercase, with accented characters replaced by letters from the Latin alphabet and whitespace characters replaced by a dash or an underscore, to avoid being encoded.</td>
            </tr>
        </tbody>
    </table>
</div>

##### <a name="default-variables-id"></a> Id

<div class="table">
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Default</th>
                <th>Available values for option</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>id</td>
                <td></td>
                <td>Entry ID</td>
            </tr>
        </tbody>
    </table>
</div>

### <a name="custom-variables"></a> Custom Variables

You can create your own custom entry variables using any valid YAML syntax. These would be entry-specific variable and be available for Entry API and any extension such as plugin, theme and etc...

**Examples**

    ---
    title: My Entry Title
    description: My entry description
    author:
      twitter: "@getflextype"
    ---
    My entry content here.


### <a name="methods"></a> Methods

<div class="table">
    <table>
        <thead>
            <tr>
                <th>Method</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><a href="#methods-fetch">fetch()</a></td>
                <td>Fetch single entry or collections of entries</td>
            </tr>
            <tr>
                <td><a href="#methods-fetchSingle">fetchSingle()</a></td>
                <td>Fetch single entry</td>
            </tr>
            <tr>
                <td><a href="#methods-fetchCollection">fetchCollection()</a></td>
                <td>Fetch entries collection</td>
            </tr>
            <tr>
                <td><a href="#methods-create">create()</a></td>
                <td>Create entry</td>
            </tr>
            <tr>
                <td><a href="#methods-update">update()</a></td>
                <td>Update entry</td>
            </tr>
            <tr>
                <td><a href="#methods-rename">rename()</a></td>
                <td>Rename entry</td>
            <tr>
                <td><a href="#methods-copy">copy()</a></td>
                <td>Copy entry</td>
            </tr>
            <tr>
                <td><a href="#methods-delete">delete()</a></td>
                <td>Delete entry</td>
            </tr>
            <tr>
                <td><a href="#methods-has">has()</a></td>
                <td>Check whether entry exists</td>
            </tr>
            <tr>
                <td><a href="#methods-getFileLocation">getFileLocation()</a></td>
                <td>Get entry file location</td>
            </tr>
            <tr>
                <td><a href="#methods-getDirLocation">getDirLocation()</a></td>
                <td>Get entry directory location</td>
            </tr>
        </tbody>
    </table>
</div>

### Methods Details

##### <a name="methods-fetch"></a> `fetch()`

Fetch single entry or collections of entries.

**Examples**

Fetch single entry `movies/sg-1/season-5/episode-21`

```php
// Fetch single entry: movies/sg-1/season-5/episode-21
$data = flextype('entries')->fetch('movies/sg-1/season-5/episode-21');

// Fetch collections of entries episodes in movies/sg-1/season-5
$data = flextype('entries')->fetch('movies/sg-1/season-5', true);

// Fetch collections of entries in movies/sg-1 and filter them.
$data = flextype('entries')->fetch('movies/sg-1', true, $filter);
```

`$filter` is an array of valid values for [collect_filter()](./collections#collect-filter) and finder filter.

##### <a name="methods-fetchSingle"></a> `fetchSingle()`

Fetch single entry.

**Examples**

Fetch single entry `movies/sg-1/season-5/episode-21`

```php
$data = flextype('entries')->fetchSingle('movies/sg-1/season-5/episode-21');
```

##### <a name="methods-fetchCollection"></a> `fetchCollection()`

Fetch entries collection.

**Examples**

Fetch collections of entries episodes in `movies/sg-1/season-5`

```php
$data = flextype('entries')->fetchCollection('movies/sg-1/season-5');
```

Fetch collections of entries in `movies/sg-1` and filter them.

```php
$data = flextype('entries')->fetchCollection('movies/sg-1/season-5', $filter);
```

`$filter` is an array of valid values for [collect_filter()](./collections#collect-filter) and [find_filter()](./finder#find-filter) functions.

##### <a name="methods-create"></a> `create()`

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


flextype('entries')->create('movies/sg-1/season-5/episode-22', $data);
```

##### <a name="methods-update"></a> `update()`

Update entry.

**Examples**

Update entry `episode-22` in `movies/sg-1/season-5`

```php
$data = ['soundtracks' => 'Joel Goldsmith'];


flextype('entries')->update('movies/sg-1/season-5/episode-22', $data);
```

##### <a name="methods-rename"></a> `rename()`

Rename entry.

**Examples**

Rename entry `episode-22` to `episode-23` in `movies/sg-1/season-5`

```php
flextype('entries')->rename('movies/sg-1/season-5/episode-22',
                                       'movies/sg-1/season-5/episode-23');
```

##### <a name="methods-copy"></a> `copy()`

Copy entry.

**Examples**

Copy entry `episode-23` to `episode-22` in `movies/sg-1/season-5`

```php
flextype('entries')->rename('movies/sg-1/season-5/episode-23',
                                       'movies/sg-1/season-5/episode-22');
```

##### <a name="methods-delete"></a> `delete()`

Delete entry.

**Examples**

Delete entry `episode-23` in `movies/sg-1/season-5`

```php
flextype('entries')->delete('movies/sg-1/season-5/episode-23');
```

##### <a name="methods-has"></a> `has()`

Check whether entry exists.

**Examples**

Check whether entry `episode-23` exists in `movies/sg-1/season-5`

```php
if (flextype('entries')->has('movies/sg-1/season-5/episode-23')) {
    // do something...
}
```

##### <a name="methods-getFileLocation"></a> `getFileLocation()`

Get entry file location

**Examples**

Check whether entry `episode-23` exists in `movies/sg-1/season-5`

```php
$data = flextype('entries')->getFileLocation('movies/sg-1/season-5/episode-23');
```

##### <a name="methods-getDirLocation"></a> `getDirLocation()`

Get entry directory location

**Examples**

Get entry `episode-23` exists in `movies/sg-1/season-5`

```php
$data = flextype('entries')->getDirLocation('movies/sg-1/season-5/episode-23');
```
