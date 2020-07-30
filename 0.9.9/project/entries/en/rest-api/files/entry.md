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
    title: "Rename file"
    link: "rename-file"
  5:
    title: "Delete file"
    link: "delete-file"
  6:
    title: "Update file meta"
    link: "update-file-meta-infromation"
  7:
    title: "Add file meta"
    link: "update-file-meta-infromation"
  8:
    title: "Delete file meta"
    link: "delete-file-meta-infromation"
---

The Flextype Files API organized around Representational State Transfer (REST) for delivering files from Flextype to apps, websites and other. Folders are delivered as JSON data.

### <a name="endpoints"></a> Endpoints

| Method | Endpoint | Description |
| --- | --- | --- |
| GET | /api/files | Fetch file(files) |
| POST | /api/files | Upload file |
| PUT | /api/files | Rename file |
| DELETE | /api/files | Delete file |
| PATCH | /api/files/meta | Updates file meta information |
| POST | /api/files/meta | Updates file meta information |
| DELETE | /api/files/meta | Delete file meta information |

### <a name="fetch-single-file"></a> Fetch single file

<div class="file-header">Request</div>
```http
GET /api/files?id=YOUR_FILES_ID&token=YOUR_FILES_TOKEN
```

##### Query

| Name | |  Description |
| --- | --- | --- |
| path | REQUIRED | Files path. |
| token | REQUIRED | Valid Files Token. |

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

| Name | |  Description |
| --- | --- | --- |
| path | REQUIRED | Files folder path. |
| token | REQUIRED | Valid Folders Token. |

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

| Name | |  Description |
| --- | --- | --- |
| folder | REQUIRED | The folder you're targetting. |
| file | REQUIRED | Raw file data (multipart/form-data). |
| token | REQUIRED | Valid Files token. |
| access_token | REQUIRED | Valid Access token. |

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

### <a name="rename-file"></a> Rename file

<div class="file-header">Request</div>
```http
PUT /api/files
```

##### Body

| Name | |  Description |
| --- | --- | --- |
| path | REQUIRED | Unique identifier of the file. |
| new_path | REQUIRED | New Unique identifier of the file. |
| token | REQUIRED | Valid Files token. |
| access_token | REQUIRED | Valid Access token. |

##### Result
Returns the folders object for the file that was just renamed

##### Examples

Rename file **entries/movies/sg-1/season-5/episode-21/cover.jpg** to the **entries/movies/sg-1/season-5/episode-21/new-cover.jpg**

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

| Name | |  Description |
| --- | --- | --- |
| path | REQUIRED | Unique identifier of the file. |
| new_path | REQUIRED | New Unique identifier of the file. |
| token | REQUIRED | Valid Folders token. |
| access_token | REQUIRED | Valid Access token. |

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

### <a name="delete-folder"></a> Delete file

<div class="file-header">Request</div>
```http
DELETE /api/folders
```

##### Body

| Name | |  Description |
| --- | --- | --- |
| path | REQUIRED | Unique identifier of the folder. |
| token | REQUIRED | Valid Folders token. |
| access_token | REQUIRED | Valid Access token. |

##### Result
Returns an empty body with HTTP status 204

##### Examples

Delete entry **entires/movies/horror/the-platform**

<div class="file-header">Request</div>
```http
DELETE /api/folders
```

<div class="file-header">Body</div>
```json
{
	"id": "entries/movies/horror/the-platform",
	"token": "f3acf199a9ac120d3bfd604e1e382456",
	"access_token": "bbc4417d171e38099bd129aeca279018"
}
```
