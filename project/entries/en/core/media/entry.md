---
title: Media
breadcrumbs:
  1:
    title: "Core Concepts"
    link: "[url]/en/core/"
on_this_page:
  -
    title: "Files Methods"
    link: "files-methods"
    level2:
      -
        title: "upload()"
        link: "files-upload"
      -
        title: "fetch()"
        link: "files-fetch"
      -
        title: "fetchSingle()"
        link: "files-fetchSingle"
      -
        title: "fetchCollection()"
        link: "files-fetchCollection"
      -
        title: "rename()"
        link: "files-rename"
      -
        title: "delete()"
        link: "files-delete"
      -
        title: "has()"
        link: "files-has"
      -
        title: "getFileLocation()"
        link: "files-getFileLocation"
  -
    title: "Files Meta Methods"
    link: "files-meta-methods"
    level2:
      -
        title: "update()"
        link: "files-meta-update"
      -
        title: "add()"
        link: "files-meta-add"
      -
        title: "delete()"
        link: "files-meta-delete"
      -
        title: "getFileMetaLocation()"
        link: "files-meta-getFileMetaLocation"
  -
    title: "Folders Methods"
    link: "folders-methods"
    level2:
      -
        title: "fetch()"
        link: "folders-fetch"
      -
        title: "fetchSingle()"
        link: "folders-fetchSingle"
      -
        title: "fetchCollection()"
        link: "folders-fetchCollection"
      -
        title: "create()"
        link: "folders-create"
      -
        title: "rename()"
        link: "folders-rename"
      -
        title: "delete()"
        link: "folders-delete"
      -
        title: "getDirLocation()"
        link: "folders-getDirLocation"
  -
    title: "Folders Meta Methods"
    link: "folders-methods"
    level2:
      -
        title: "getDirMetaLocation()"
        link: "folders-meta-getDirMetaLocation"
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
                <td><a href="#files-upload"><code>upload()</code></a></td>
                <td>Upload media file.</td>
            </tr>
            <tr>
                <td><a href="#files-fetch"><code>fetch()</code></a></td>
                <td>Fetch file(s).</td>
            </tr>
            <tr>
                <td><a href="#files-fetchSingle"><code>fetchSingle()</code></a></td>
                <td>Fetch single file.</td>
            </tr>
            <tr>
                <td><a href="#files-fetchCollection"><code>fetchCollection()</code></a></td>
                <td>Fetch files collection.</td>
            </tr>
            <tr>
                <td><a href="#files-rename"><code>rename()</code></a></td>
                <td>Rename file.</td>
            </tr>
            <tr>
                <td><a href="#files-delete"><code>delete()</code></a></td>
                <td>Delete file.</td>
            </tr>
            <tr>
                <td><a href="#files-has"><code>has()</code></a></td>
                <td>Check whether a file exists.</td>
            </tr>
            <tr>
                <td><a href="#files-getFileLocation"><code>getFileLocation()</code></a></td>
                <td>Get file location.</td>
            </tr>
        </tbody>
    </table>
</div>

##### <a name="files-upload"></a> `upload()`

Upload media file.

**Examples**

```php
$flextype->media_files->upload($_FILES['file'],
                                            '/entries/movies/sg-1/season-5/episode-21/');
```

##### <a name="files-fetch"></a> `fetch()`

Fetch file(s).

**Examples**

```php
// Fetch single image
$cover = $flextype
                ->media_files
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
                ->media_files
                ->fetch('entries/movies/sg-1/season-5/episode-21/images/');

```

##### <a name="files-fetchSingle"></a> `fetchSingle()`

Fetch single file.

**Examples**

```php
// Fetch single image
$cover = $flextype
                ->media_files
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

##### <a name="files-fetchCollection"></a> `fetchCollection()`

Fetch files collection.

**Examples**

```php
// Fetch images collection
$images = $flextype
                ->media_files
                ->fetchCollection('entries/movies/sg-1/season-5/episode-21');

```
##### <a name="files-rename"></a> `rename()`

Rename file.

**Examples**

```php
$flextype->media_files
            ->rename('entries/movies/sg-1/season-5/episode-21/cover.jpg',
                          'entries/movies/sg-1/season-5/episode-21/cover-image.jpg');
```

##### <a name="files-delete"></a> `delete()`

Delete file.

**Examples**

```php
$flextype->media_files
            ->delete('entries/movies/sg-1/season-5/episode-21/cover-image.jpg');
```

##### <a name="files-has"></a> `has()`

Check whether a file exists.

**Examples**

```php
if ($flextype->media_files
            ->has('entries/movies/sg-1/season-5/episode-21/cover-image.jpg')) {
    // do something...
}
```

##### <a name="files-getFileLocation"></a> `getFileLocation()`

Get file location.

**Examples**

```php
$flextype->media_files
            ->getFileLocation('entries/movies/sg-1/season-5/episode-21/cover-image.jpg');
```

#### Media Files Meta

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
                <td><a href="#files-meta-update"><code>update()</code></a></td>
                <td>Update file meta information.</td>
            </tr>
            <tr>
                <td><a href="#files-meta-add"><code>add()</code></a></td>
                <td>Add file meta information.</td>
            </tr>
            <tr>
                <td><a href="#files-meta-delete"><code>delete()</code></a></td>
                <td>Delete file meta information.</td>
            </tr>
            <tr>
                <td><a href="#files-meta-getFileMetaLocation"><code>getFileMetaLocation()</code></a></td>
                <td>Get file meta location.</td>
            </tr>
        </tbody>
    </table>
</div>

##### <a name="files-meta-update"></a> `update()`

Update file meta information.

**Examples**

```php
$flextype->media_files_meta
            ->update('entries/movies/sg-1/season-5/episode-21/cover.jpg',
                     'title',
                     'Episode 21');
```

##### <a name="files-meta-add"></a> `add()`

Add file meta information.

**Examples**

```php
$flextype->media_files_meta
            ->add('entries/movies/sg-1/season-5/episode-21/cover.jpg',
                     'tags',
                     'sg1');
```

##### <a name="files-meta-delete"></a> `delete()`

Delete file meta information.

**Examples**

```php
$flextype->media_files_meta
            ->delete('entries/movies/sg-1/season-5/episode-21/cover.jpg',
                     'tags');

```
##### <a name="files-meta-getFileMetaLocation"></a> `getFileMetaLocation()`

Get file meta location.

**Examples**

```php
$flextype->media_files_meta
            ->getFileMetaLocation('entries/movies/sg-1/season-5/episode-21/cover.jpg');
```

#### <a name="folders-methods"></a> Media Folders

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
                <td><a href="#folders-fetch"><code>fetch()</code></a></td>
                <td>Fetch folder(s).</td>
            </tr>
            <tr>
                <td><a href="#folders-fetchSingle"><code>fetchSingle()</code></a></td>
                <td>Fetch single folder.</td>
            </tr>
            <tr>
                <td><a href="#folders-fetchCollection"><code>fetchCollection()</code></a></td>
                <td>Fetch folders collection.</td>
            </tr>
            <tr>
                <td><a href="#folders-create"><code>rename()</code></a></td>
                <td>Create folder.</td>
            </tr>
            <tr>
                <td><a href="#folders-rename"><code>rename()</code></a></td>
                <td>Rename folder.</td>
            </tr>
            <tr>
                <td><a href="#folders-delete"><code>delete()</code></a></td>
                <td>Delete folder.</td>
            </tr>
            <tr>
                <td><a href="#folders-getDirLocation"><code>getDirLocation()</code></a></td>
                <td>Get folder location.</td>
            </tr>
        </tbody>
    </table>
</div>

##### <a name="folders-fetch"></a> `fetch()`

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

##### <a name="folders-fetchSingle"></a> `fetchSingle()`

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

##### <a name="folders-create"></a> `create()`

Create folder.

**Examples**

```php
$flextype->media_folders
            ->create('entries/movies/sg-1/season-5/episode-22');
```

##### <a name="folders-rename"></a> `rename()`

Rename folder.

**Examples**

```php
$flextype->media_folders
            ->rename('entries/movies/sg-1/season-5/episode-22',
                            'entries/movies/sg-1/season-5/episode-23');
```

##### <a name="folders-delete"></a> `delete()`

Delete folder.

**Examples**

```php
$flextype->media_folders
            ->delete('entries/movies/sg-1/season-5/episode-23');
```

##### <a name="folders-getDirLocation"></a> `getDirLocation()`

Get folder location.

**Examples**

```php
$flextype->media_folders
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
                <td><a href="#folders-meta-getDirMetaLocation"><code>getDirMetaLocation()</code></a></td>
                <td>Get files directory meta location.</td>
            </tr>
        </tbody>
    </table>
</div>

##### <a name="folders-meta-getDirMetaLocation"></a> `getDirMetaLocation()`

Get files directory meta location.

**Examples**

```php
$flextype->media_folders_meta
            ->getDirMetaLocation('entries/movies/sg-1/season-5/episode-23');
```
