---
title: Files
breadcrumbs:
  1:
    title: "Rest API"
    link: "[url]/en/rest-api/"
on_this_page:
  0:
    title: "Endpoints"
    link: "endpoints"
  1:
    title: "Fetch single file"
    link: "fetch-single-file"
  2:
    title: "Fetch files collection"
    link: "fetch-files-collection"
  3:
    title: "Upload file"
    link: "upload-file"
  4:
    title: "Move file"
    link: "move-file"
  5:
    title: "Delete file"
    link: "delete-file"
  6:
    title: "Update file meta"
    link: "update-file-meta"
  7:
    title: "Add file meta"
    link: "add-file-meta"
  8:
    title: "Delete file meta"
    link: "delete-file-meta"
---

The Flextype Files API organized around Representational State Transfer (REST) for delivering files from Flextype to apps, websites and other. Folders are delivered as JSON data.

### <a name="endpoints"></a> Endpoints

<div class="table">
    <table>
        <thead>
            <tr>
                <th>Method</th>
                <th>Endpoint</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>GET</td>
                <td>/api/files</td>
                <td>Fetch file(files)</td>
            </tr>
            <tr>
                <td>POST</td>
                <td>/api/files</td>
                <td>Upload file</td>
            </tr>
            <tr>
                <td>PUT</td>
                <td>/api/files</td>
                <td>Move file</td>
            </tr>
            <tr>
                <td>DELETE</td>
                <td>/api/files</td>
                <td>Delete file</td>
            </tr>
            <tr>
                <td>PATCH</td>
                <td>/api/files/meta</td>
                <td>Updates file meta information</td>
            </tr>
            <tr>
                <td>POST</td>
                <td>/api/files/meta</td>
                <td>Add file meta information</td>
            </tr>
            <tr>
                <td>DELETE</td>
                <td>/api/files/meta</td>
                <td>Delete file meta information</td>
            </tr>
        </tbody>
    </table>
</div>

### <a name="fetch-single-file"></a> Fetch single file

<div class="file-header">Request</div>
```http
GET /api/files?id=YOUR_FILES_ID&token=YOUR_FILES_TOKEN
```

##### Query

<div class="table">
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th></th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>path</td>
                <td>REQUIRED</td>
                <td>Files path.</td>
            </tr>
            <tr>
                <td>token</td>
                <td>REQUIRED</td>
                <td>Valid Files Token.</td>
            </tr>
        </tbody>
    </table>
</div>

##### Result

Returns the item object for the given unique identifier.

##### Examples

Fetch file
`entries/movies/sg-1/season-5/episode-21/cover.jpg`

<div class="file-header">Request</div>
```http
GET /api/files?id=entries/movies/sg-1/season-5/episode-21/cover.jpg&token=6f047babd1894064fbf7662080a9a2f0
```

<div class="file-header flex justify-between"><div>Response</div> <div class="text-right">200 OK</div></div>
```http
{
    "data": {
        "title": "Episode 21",
        "filename": "cover.jpg",
        "basename": "cover",
        "extension": "jpg",
        "dirname": "/htdocs/flextype/project/uploads/entries/movies/sg-1/season-5/episode-21",
        "url": "project/uploads/entries/movies/sg-1/season-5/episode-21/cover.jpg",
        "full_url": "http://localhost:8888/flextype/project/uploads/entries/movies/sg-1/season-5/episode-21/cover.jpg"
    }
}
```

### <a name="fetch-files-collection"></a> Fetch files collection

<div class="file-header">Request</div>
```http
GET /api/files?id=YOUR_FILES_FOLDER_ID&collection=true&token=YOUR_FILES_TOKEN
```

##### Query

<div class="table">
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th></th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>path</td>
                <td>REQUIRED</td>
                <td>Files folder path.</td>
            </tr>
            <tr>
                <td>token</td>
                <td>REQUIRED</td>
                <td>Valid Folders Token.</td>
            </tr>
        </tbody>
    </table>
</div>

##### Result

Returns an array of item objects.

##### Examples

Fetch Movies Folders Collection
`entries/movies/sg-1/season-5/episode-21`

<div class="file-header">Request</div>
```http
GET /api/files?id=entries/movies/sg-1/season-5/episode-21&token=6f047babd1894064fbf7662080a9a2f0
```

<div class="file-header flex justify-between"><div>Response</div> <div class="text-right">200 OK</div></div>
```http
{
    "data": {
        "cover.jpg": {
            "title": "Episode 21",
            "filename": "cover.jpg",
            "basename": "cover",
            "extension": "jpg",
            "dirname": "/htdocs/flextype/project/uploads/entries/movies/sg-1/season-5/episode-21",
            "url": "project/uploads/entries/movies/sg-1/season-5/episode-21/cover.jpg",
            "full_url": "http://localhost:8888/flextype/project/uploads/entries/movies/sg-1/season-5/episode-21/cover.jpg"
        }
    }
}
```

### <a name="upload-file"></a> Upload file

<div class="file-header">Request</div>
```http
POST /api/files
```

##### Body

<div class="table">
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th></th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>folder</td>
                <td>REQUIRED</td>
                <td>The folder you're targetting.</td>
            </tr>
            <tr>
                <td>file</td>
                <td>REQUIRED</td>
                <td>Raw file data (multipart/form-data).</td>
            </tr>
            <tr>
                <td>token</td>
                <td>REQUIRED</td>
                <td>Valid Files token.</td>
            </tr>
            <tr>
                <td>access_token</td>
                <td>REQUIRED</td>
                <td>Valid Access token.</td>
            </tr>
        </tbody>
    </table>
</div>

##### Result
Returns the file object for the file that was just uploaded.

##### Examples

Upload new file to **entries/movies/sg-1/season-5/episode-21**

<div class="file-header">Request</div>
```http
POST /api/files
```

<div class="file-header">Body</div>
```http
curl -i -X POST \
  -H "Content-Type: multipart/form-data" \
  -F "token=efe1e36e4d60fcd547e22eb9f795dff92" \
  -F "access_token=efe1e36e4d60fcd547e22eb9f795dff91" \
  -F "folder=entries/movies/sg-1/season-5/episode-21" \
  -F "file=@/users/awilum/documents/new-covers/new-cover.jpg" \
  http://localhost:8888/flextype/api/files
```

<div class="file-header flex justify-between"><div>Response</div> <div class="text-right">200 OK</div></div>
```json
{
  "data": {
    "title": "New Cover",
    "description": "",
    "type": "image/jpeg",
    "filesize": 342298,
    "uploaded_on": 1596107422,
    "exif": {
      "html": "width=\"1600\" height=\"900\"",
      "Height": 900,
      "Width": 1600,
      "IsColor": 1
    },
    "filename": "new-cover.jpg",
    "basename": "new-cover",
    "extension": "jpg",
    "dirname": "/htdocs/flextype/project/uploads/entries/movies/sg-1/season-5/episode-21",
    "url": "project/uploads/entries/movies/sg-1/season-5/episode-21/new-cover.jpg",
    "full_url": "http://localhost:8888/flextype/project/uploads/entries/movies/sg-1/season-5/episode-21/new-cover.jpg"
  }
}
```

### <a name="move-file"></a> Move file

<div class="file-header">Request</div>
```http
PUT /api/files
```

##### Body

<div class="table">
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th></th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>path</td>
                <td>REQUIRED</td>
                <td>Unique identifier of the file.</td>
            </tr>
            <tr>
                <td>new_path</td>
                <td>REQUIRED</td>
                <td>New Unique identifier of the file.</td>
            </tr>
            <tr>
                <td>token</td>
                <td>REQUIRED</td>
                <td>Valid Files token.</td>
            </tr>
            <tr>
                <td>access_token</td>
                <td>REQUIRED</td>
                <td>Valid Access token.</td>
            </tr>
        </tbody>
    </table>
</div>

##### Result
Returns the folders object for the file that was just moved.

##### Examples

Move file **entries/movies/sg-1/season-5/episode-21/cover.jpg** to the **entries/movies/sg-1/season-5/episode-21/new-cover.jpg**

<div class="file-header">Request</div>
```http
PUT /api/files
```

<div class="file-header">Body</div>
```json
{
    "path": "entries/movies/sg-1/season-5/episode-21/cover.jpg",
    "new_path": "entries/movies/sg-1/season-5/episode-21/new-cover.jpg",
	"token": "f3acf199a9ac120d3bfd604e1e382456",
	"access_token": "bbc4417d171e38099bd129aeca279018"
}
```

<div class="file-header flex justify-between"><div>Response</div> <div class="text-right">200 OK</div></div>
```json
{
    "data": {
        "title": "Episode 21",
        "filename": "new-cover.jpg",
        "basename": "new-cover",
        "extension": "jpg",
        "dirname": "/htdocs/flextype/project/uploads/entries/movies/sg-1/season-5/episode-21",
        "url": "project/uploads/entries/movies/sg-1/season-5/episode-21/new-cover.jpg",
        "full_url": "http://localhost:8888/flextype/project/uploads/entries/movies/sg-1/season-5/episode-21/new-cover.jpg"
    }
}
```

Move file **entries/movies/sg-1/season-5/episode-21/cover.jpg** to the **entries/movies/sg-1/season-5/cover.jpg**

<div class="file-header">Request</div>
```http
PUT /api/files
```

<div class="file-header">Body</div>
```json
{
	"path": "entries/movies/sg-1/season-5/episode-21/cover.jpg",
    "new_path": "entries/movies/sg-1/season-5/cover.jpg",
	"token": "f3acf199a9ac120d3bfd604e1e382456",
	"access_token": "bbc4417d171e38099bd129aeca279018"
}
```

<div class="file-header flex justify-between"><div>Response</div> <div class="text-right">200 OK</div></div>
```json
{
    "data": {
        "title": "Episode 21",
        "filename": "cover.jpg",
        "basename": "cover",
        "extension": "jpg",
        "dirname": "/htdocs/flextype/project/uploads/entries/movies/sg-1/season-5",
        "url": "project/uploads/entries/movies/sg-1/season-5/cover.jpg",
        "full_url": "http://localhost:8888/flextype/project/uploads/entries/movies/sg-1/season-5/new-cover.jpg"
    }
}
```

### <a name="copy-file"></a> Copy File

<div class="file-header">Request</div>
```http
PUT /api/files/copy
```

##### Body

<div class="table">
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th></th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>path</td>
                <td>REQUIRED</td>
                <td>Unique identifier of the file.</td>
            </tr>
            <tr>
                <td>new_path</td>
                <td>REQUIRED</td>
                <td>New Unique identifier of the file.</td>
            </tr>
            <tr>
                <td>token</td>
                <td>REQUIRED</td>
                <td>Valid Folders token.</td>
            </tr>
            <tr>
                <td>access_token</td>
                <td>REQUIRED</td>
                <td>Valid Access token.</td>
            </tr>
        </tbody>
    </table>
</div>

##### Result
Returns the file object for the file that was just copied.

##### Examples

Copy for entry **entries/movies/sg-1/season-5/cover.jpg** to **entries/movies/sg-1/season-5/episode-21/cover.jpg**

<div class="file-header">Request</div>
```http
PUT /api/files/copy
```

<div class="file-header">Body</div>
```json
{
	"path": "entries/movies/sg-1/season-5/cover.jpg",
    "new_path": "entries/movies/sg-1/season-5/episode-21/cover.jpg",
	"token": "f3acf199a9ac120d3bfd604e1e382456",
	"access_token": "bbc4417d171e38099bd129aeca279018"
}
```

<div class="file-header flex justify-between"><div>Response</div> <div class="text-right">200 OK</div></div>
```json
{
    "data": {
        "title": "Episode 21",
        "filename": "cover.jpg",
        "basename": "cover",
        "extension": "jpg",
        "dirname": "/htdocs/flextype/project/uploads/entries/movies/sg-1/season-5/episode-21",
        "url": "project/uploads/entries/movies/sg-1/season-5/episode-21/cover.jpg",
        "full_url": "http://localhost:8888/flextype/project/uploads/entries/movies/sg-1/season-5/episode-21/cover-4.jpg"
    }
}
```

### <a name="delete-file"></a> Delete file

<div class="file-header">Request</div>
```http
DELETE /api/files
```

##### Body

<div class="table">
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th></th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>path</td>
                <td>REQUIRED</td>
                <td>Unique identifier of the file.</td>
            </tr>
            <tr>
                <td>token</td>
                <td>REQUIRED</td>
                <td>Valid Files token.</td>
            </tr>
            <tr>
                <td>access_token</td>
                <td>REQUIRED</td>
                <td>Valid Access token.</td>
            </tr>
        </tbody>
    </table>
</div>

##### Result
Returns an empty body with HTTP status 204

##### Examples

Delete entry **entries/movies/sg-1/season-5/episode-21/new-cover.jpg**

<div class="file-header">Request</div>
```http
DELETE /api/files
```

<div class="file-header">Body</div>
```json
{
	"id": "entries/movies/sg-1/season-5/episode-21/new-cover.jpg",
	"token": "f3acf199a9ac120d3bfd604e1e382456",
	"access_token": "bbc4417d171e38099bd129aeca279018"
}
```

### <a name="update-file-meta"></a> Update File Meta

<div class="file-header">Request</div>
```http
PUT /api/files
```

##### Body

<div class="table">
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th></th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>path</td>
                <td>REQUIRED</td>
                <td>Unique identifier of the file.</td>
            </tr>
            <tr>
                <td>field</td>
                <td>REQUIRED</td>
                <td>Field name.</td>
            </tr>
            <tr>
                <td>value</td>
                <td>REQUIRED</td>
                <td>Field value.</td>
            </tr>
            <tr>
                <td>token</td>
                <td>REQUIRED</td>
                <td>Valid Files token.</td>
            </tr>
            <tr>
                <td>access_token</td>
                <td>REQUIRED</td>
                <td>Valid Access token.</td>
            </tr>
        </tbody>
    </table>
</div>

##### Result
Returns the file object for the file that was just updated.

##### Examples

Update title for file **entries/movies/sg-1/season-5/cover.jpg**

<div class="file-header">Request</div>
```http
PATCH /api/files/meta
```

<div class="file-header">Body</div>
```json
{
    "field": "title",
    "value": "Season 5",
	"path": "entries/movies/sg-1/season-5/cover.jpg",
    "new_path": "entries/movies/sg-1/season-5/episode-21/cover.jpg",
	"token": "f3acf199a9ac120d3bfd604e1e382456",
	"access_token": "bbc4417d171e38099bd129aeca279018"
}
```

<div class="file-header flex justify-between"><div>Response</div> <div class="text-right">200 OK</div></div>
```json
{
    "data": {
        "title": "Season 5",
        "filename": "cover.jpg",
        "basename": "cover-4",
        "extension": "jpg",
        "dirname": "/htdocs/flextype/project/uploads/entries/movies/sg-1/season-5",
        "url": "project/uploads/entries/movies/sg-1/season-5/cover.jpg",
        "full_url": "http://localhost:8888/flextype/project/uploads/entries/movies/sg-1/season-5/cover.jpg"
    }
}
```

### <a name="add-file-meta"></a> Add File Meta

<div class="file-header">Request</div>
```http
POST /api/files
```

##### Body

<div class="table">
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th></th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>path</td>
                <td>REQUIRED</td>
                <td>Unique identifier of the file.</td>
            </tr>
            <tr>
                <td>field</td>
                <td>REQUIRED</td>
                <td>Field name.</td>
            </tr>
            <tr>
                <td>value</td>
                <td>REQUIRED</td>
                <td>Field value.</td>
            </tr>
            <tr>
                <td>token</td>
                <td>REQUIRED</td>
                <td>Valid Files token.</td>
            </tr>
            <tr>
                <td>access_token</td>
                <td>REQUIRED</td>
                <td>Valid Access token.</td>
            </tr>
        </tbody>
    </table>
</div>

##### Result
Returns the file object for the file that was just updated.

##### Examples

Add tags for file **entries/movies/sg-1/season-5/cover.jpg**

<div class="file-header">Request</div>
```http
PATCH /api/files/meta
```

<div class="file-header">Body</div>
```json
{
    "field": "tags",
    "value": "sg-1, season-5",
	"path": "entries/movies/sg-1/season-5/cover.jpg",
    "new_path": "entries/movies/sg-1/season-5/episode-21/cover.jpg",
	"token": "f3acf199a9ac120d3bfd604e1e382456",
	"access_token": "bbc4417d171e38099bd129aeca279018"
}
```

<div class="file-header flex justify-between"><div>Response</div> <div class="text-right">200 OK</div></div>
```json
{
    "data": {
        "title": "Season 5",
        "tags": "sg-1, season-5",
        "filename": "cover.jpg",
        "basename": "cover-4",
        "extension": "jpg",
        "dirname": "/htdocs/flextype/project/uploads/entries/movies/sg-1/season-5",
        "url": "project/uploads/entries/movies/sg-1/season-5/cover.jpg",
        "full_url": "http://localhost:8888/flextype/project/uploads/entries/movies/sg-1/season-5/cover.jpg"
    }
}
```


### <a name="delete-file-meta"></a> Delete File Meta

<div class="file-header">Request</div>
```http
DELETE /api/files
```

##### Body

<div class="table">
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th></th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>path</td>
                <td>REQUIRED</td>
                <td>Unique identifier of the file.</td>
            </tr>
            <tr>
                <td>field</td>
                <td>REQUIRED</td>
                <td>Field name.</td>
            </tr>
            <tr>
                <td>token</td>
                <td>REQUIRED</td>
                <td>Valid Files token.</td>
            </tr>
            <tr>
                <td>access_token</td>
                <td>REQUIRED</td>
                <td>Valid Access token.</td>
            </tr>
        </tbody>
    </table>
</div>

##### Result
Returns the file object for the file that was just updated.

##### Examples

Delete tags meta field for file **entries/movies/sg-1/season-5/cover.jpg**

<div class="file-header">Request</div>
```http
DELETE /api/files/meta
```

<div class="file-header">Body</div>
```json
{
    "field": "tags",
	"path": "entries/movies/sg-1/season-5/cover.jpg",
    "new_path": "entries/movies/sg-1/season-5/episode-21/cover.jpg",
	"token": "f3acf199a9ac120d3bfd604e1e382456",
	"access_token": "bbc4417d171e38099bd129aeca279018"
}
```

<div class="file-header flex justify-between"><div>Response</div> <div class="text-right">200 OK</div></div>
```json
{
    "data": {
        "title": "Season 5",
        "filename": "cover.jpg",
        "basename": "cover-4",
        "extension": "jpg",
        "dirname": "/htdocs/flextype/project/uploads/entries/movies/sg-1/season-5",
        "url": "project/uploads/entries/movies/sg-1/season-5/cover.jpg",
        "full_url": "http://localhost:8888/flextype/project/uploads/entries/movies/sg-1/season-5/cover.jpg"
    }
}
```
