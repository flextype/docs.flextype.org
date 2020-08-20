---
title: Media
breadcrumbs:
  -
    title: "Core Concepts"
    link: "[url]/en/core/"
on_this_page:
  -
    title: "Files Methods"
    link: "files-methods"
    level2:
      -
        title: "upload()"
        link: "methods-files-upload"
      -
        title: "fetch()"
        link: "methods-files-fetch"
      -
        title: "fetchSingle()"
        link: "methods-files-fetchSingle"
      -
        title: "fetchCollection()"
        link: "methods-files-fetchCollection"
      -
        title: "rename()"
        link: "methods-files-rename"
      -
        title: "delete()"
        link: "methods-files-delete"
      -
        title: "has()"
        link: "methods-files-has"
      -
        title: "getFileLocation()"
        link: "methods-files-getFileLocation"
  -
    title: "Files Meta Methods"
    link: "files-meta-methods"
    level2:
      -
        title: "update()"
        link: "methods-files-meta-update"
      -
        title: "add()"
        link: "methods-files-meta-add"
      -
        title: "delete()"
        link: "methods-files-meta-delete"
      -
        title: "getFileMetaLocation()"
        link: "methods-files-meta-getFileMetaLocation"
  -
    title: "Folders Methods"
    link: "folders-methods"
    level2:
      -
        title: "fetch()"
        link: "methods-folders-fetch"
      -
        title: "fetchSingle()"
        link: "methods-folders-fetchSingle"
      -
        title: "fetchCollection()"
        link: "methods-folders-fetchCollection"
      -
        title: "create()"
        link: "methods-folders-create"
      -
        title: "rename()"
        link: "folders-rename"
      -
        title: "delete()"
        link: "methods-folders-delete"
      -
        title: "getDirLocation()"
        link: "methods-folders-getDirLocation"
  -
    title: "Folders Meta Methods"
    link: "folders-methods"
    level2:
      -
        title: "getDirMetaLocation()"
        link: "methods-folders-meta-getDirMetaLocation"
---

### <a name="files-methods"></a> Methods

#### Media Files

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
                <td><a href="#methods-files-upload">upload()</a></td>
                <td>Upload media file.</td>
            </tr>
            <tr>
                <td><a href="#methods-files-fetch">fetch()</a></td>
                <td>Fetch file(s).</td>
            </tr>
            <tr>
                <td><a href="#methods-files-fetchSingle">fetchSingle()</a></td>
                <td>Fetch single file.</td>
            </tr>
            <tr>
                <td><a href="#methods-files-fetchCollection">fetchCollection()</a></td>
                <td>Fetch files collection.</td>
            </tr>
            <tr>
                <td><a href="#methods-files-rename">rename()</a></td>
                <td>Rename file.</td>
            </tr>
            <tr>
                <td><a href="#methods-files-delete">delete()</a></td>
                <td>Delete file.</td>
            </tr>
            <tr>
                <td><a href="#methods-files-has">has()</a></td>
                <td>Check whether a file exists.</td>
            </tr>
            <tr>
                <td><a href="#methods-files-getFileLocation">getFileLocation()</a></td>
                <td>Get file location.</td>
            </tr>
        </tbody>
    </table>
</div>

### Methods Details

##### <a name="methods-files-upload"></a> `upload()`

Upload media file.

**Examples**

```php
$flextype->container('media_files')->upload($_FILES['file'],
                                            '/entries/movies/sg-1/season-5/episode-21/');
```

##### <a name="methods-files-fetch"></a> `fetch()`

Fetch file(s).

**Examples**

```php
// Fetch single image
$cover = $flextype
                ->container('media_files')
                ->fetch('entries/movies/sg-1/season-5/episode-21/cover.jpg');

// Now you may get each image field from image meta data.
echo $cover['title'];
echo $cover['description'];
echo $cover['uploaded_on'];
echo $cover['filename'];
echo $cover['basename'];
echo $cover['extension'];
echo $cover['dirname'];
echo $cover['url'];
echo $cover['full_url'];

// Fetch images collection
$images = $flextype
                ->container('media_files')
                ->fetch('entries/movies/sg-1/season-5/episode-21/images/');

```

##### <a name="methods-files-fetchSingle"></a> `fetchSingle()`

Fetch single file.

**Examples**

```php
// Fetch single image
$cover = $flextype
                ->container('media_files')
                ->fetch('entries/movies/sg-1/season-5/episode-21/cover.jpg');

// Now you may get each image field from image meta data.
echo $cover['title'];
echo $cover['description'];
echo $cover['uploaded_on'];
echo $cover['filename'];
echo $cover['basename'];
echo $cover['extension'];
echo $cover['dirname'];
echo $cover['url'];
echo $cover['full_url'];
```

##### <a name="methods-files-fetchCollection"></a> `fetchCollection()`

Fetch files collection.

**Examples**

```php
// Fetch images collection
$images = $flextype
                ->container('media_files')
                ->fetchCollection('entries/movies/sg-1/season-5/episode-21');

```
##### <a name="methods-files-rename"></a> `rename()`

Rename file.

**Examples**

```php
$flextype->container('media_files')
            ->rename('entries/movies/sg-1/season-5/episode-21/cover.jpg',
                          'entries/movies/sg-1/season-5/episode-21/cover-image.jpg');
```

##### <a name="methods-files-delete"></a> `delete()`

Delete file.

**Examples**

```php
$flextype->container('media_files')
            ->delete('entries/movies/sg-1/season-5/episode-21/cover-image.jpg');
```

##### <a name="methods-files-has"></a> `has()`

Check whether a file exists.

**Examples**

```php
if ($flextype->container('media_files')
            ->has('entries/movies/sg-1/season-5/episode-21/cover-image.jpg')) {
    // do something...
}
```

##### <a name="files-getFileLocation"></a> `getFileLocation()`

Get file location.

**Examples**

```php
$flextype->container('media_files')
            ->getFileLocation('entries/movies/sg-1/season-5/episode-21/cover-image.jpg');
```

#### <a name="methods-files-meta-methods"></a> Media Files Meta

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
                <td><a href="#methods-files-meta-update">update()</a></td>
                <td>Update file meta information.</td>
            </tr>
            <tr>
                <td><a href="#methods-files-meta-add">add()</a></td>
                <td>Add file meta information.</td>
            </tr>
            <tr>
                <td><a href="#methods-files-meta-delete">delete()</a></td>
                <td>Delete file meta information.</td>
            </tr>
            <tr>
                <td><a href="#methods-files-meta-getFileMetaLocation">getFileMetaLocation()</a></td>
                <td>Get file meta location.</td>
            </tr>
        </tbody>
    </table>
</div>

### Methods Details

##### <a name="methods-files-meta-update"></a> `update()`

Update file meta information.

**Examples**

```php
$flextype->container('media_files_meta')
            ->update('entries/movies/sg-1/season-5/episode-21/cover.jpg',
                     'title',
                     'Episode 21');
```

##### <a name="methods-files-meta-add"></a> `add()`

Add file meta information.

**Examples**

```php
$flextype->container('media_files_meta')
            ->add('entries/movies/sg-1/season-5/episode-21/cover.jpg',
                     'tags',
                     'sg1');
```

##### <a name="methods-files-meta-delete"></a> `delete()`

Delete file meta information.

**Examples**

```php
$flextype->container('media_files_meta')
            ->delete('entries/movies/sg-1/season-5/episode-21/cover.jpg',
                     'tags');

```
##### <a name="methods-files-meta-getFileMetaLocation"></a> `getFileMetaLocation()`

Get file meta location.

**Examples**

```php
$flextype->container('media_files_meta')
            ->getFileMetaLocation('entries/movies/sg-1/season-5/episode-21/cover.jpg');
```

#### <a name="methods-folders-methods"></a> Media Folders

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
                <td><a href="#methods-folders-fetch">fetch()</a></td>
                <td>Fetch folder(s).</td>
            </tr>
            <tr>
                <td><a href="#methods-folders-fetchSingle">fetchSingle()</a></td>
                <td>Fetch single folder.</td>
            </tr>
            <tr>
                <td><a href="#methods-folders-fetchCollection">fetchCollection()</a></td>
                <td>Fetch folders collection.</td>
            </tr>
            <tr>
                <td><a href="#methods-folders-create">rename()</a></td>
                <td>Create folder.</td>
            </tr>
            <tr>
                <td><a href="#methods-folders-rename">rename()</a></td>
                <td>Rename folder.</td>
            </tr>
            <tr>
                <td><a href="#methods-folders-delete">delete()</a></td>
                <td>Delete folder.</td>
            </tr>
            <tr>
                <td><a href="#methods-folders-getDirLocation">getDirLocation()</a></td>
                <td>Get folder location.</td>
            </tr>
        </tbody>
    </table>
</div>

### Methods Details

##### <a name="methods-folders-fetch"></a> `fetch()`

Fetch folder(s).

**Examples**

```php
// Fetch single folder
$folder = $flextype
                ->media_folders
                ->fetch('entries/movies/sg-1/season-5/episode-21');

echo $folder['path'];
echo $folder['full_path'];
echo $folder['url'];
echo $folder['full_url'];

// Fetch folders collection
$folders = $flextype
                ->media_folders
                ->fetch('entries/movies/sg-1/season-5', true);
```

##### <a name="methods-folders-fetchSingle"></a> `fetchSingle()`

Fetch single folder.

**Examples**

```php
// Fetch single folder
$folder = $flextype
                ->media_folders
                ->fetchSingle('entries/movies/sg-1/season-5/episode-21');

echo $folder['path'];
echo $folder['full_path'];
echo $folder['url'];
echo $folder['full_url'];
```

##### <a name="folders-fetchCollection"></a> `fetchCollection()`

Fetch folders collection.

**Examples**

```php
// Fetch folders collection
$folders = $flextype
                ->media_folders
                ->fetchCollection('entries/movies/sg-1/season-5');
```

##### <a name="methods-folders-create"></a> `create()`

Create folder.

**Examples**

```php
$flextype->container('media_folders')
            ->create('entries/movies/sg-1/season-5/episode-22');
```

##### <a name="methods-folders-rename"></a> `rename()`

Rename folder.

**Examples**

```php
$flextype->container('media_folders')
            ->rename('entries/movies/sg-1/season-5/episode-22',
                            'entries/movies/sg-1/season-5/episode-23');
```

##### <a name="methods-folders-delete"></a> `delete()`

Delete folder.

**Examples**

```php
$flextype->container('media_folders')
            ->delete('entries/movies/sg-1/season-5/episode-23');
```

##### <a name="methods-folders-getDirLocation"></a> `getDirLocation()`

Get folder location.

**Examples**

```php
$flextype->container('media_folders')
            ->getDirLocation('entries/movies/sg-1/season-5/episode-23');
```

#### Media Folders Meta

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
                <td><a href="#methods-folders-meta-getDirMetaLocation">getDirMetaLocation()</a></td>
                <td>Get files directory meta location.</td>
            </tr>
        </tbody>
    </table>
</div>

### Methods Details

##### <a name="methods-folders-meta-getDirMetaLocation"></a> `getDirMetaLocation()`

Get files directory meta location.

**Examples**

```php
$flextype->container('media_folders_meta')
            ->getDirMetaLocation('entries/movies/sg-1/season-5/episode-23');
```
