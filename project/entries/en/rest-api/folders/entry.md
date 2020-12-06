---
title: Folders
breadcrumbs:
  1:
    title: "Rest API"
    link: "[url]/en/rest-api/"
on_this_page:
  0:
    title: "Endpoints"
    link: "endpoints"
  1:
    title: "Fetch single folder"
    link: "fetch-single-folder"
  2:
    title: "Fetch folders collection"
    link: "fetch-folders-collection"
  3:
    title: "Create folder"
    link: "create-folder"
  4:
    title: "Move folder"
    link: "move-folder"
  5:
    title: "Copy folder"
    link: "copy-folder"
  6:
    title: "Delete folder"
    link: "delete-folder"
---

The Flextype Folders API organized around Representational State Transfer (REST) for delivering folders from Flextype to apps, websites and other. Folders are delivered as JSON data.

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
                <td>/api/folders</td>
                <td>Fetch folder(folders)</td>
            </tr>
            <tr>
                <td>POST</td>
                <td>/api/folders</td>
                <td>Create folder</td>
            </tr>
            <tr>
                <td>PUT</td>
                <td>/api/folders</td>
                <td>Move folder</td>
            </tr>
            <tr>
                <td>PUT</td>
                <td>/api/folders/copy</td>
                <td>Copy folder</td>
            </tr>
            <tr>
                <td>DELETE</td>
                <td>/api/folders</td>
                <td>Delete folder</td>
            </tr>
        </tbody>
    </table>
</div>

### <a name="fetch-single-folder"></a> Fetch single Folder

<div class="file-header">Request</div>
```http
GET /api/folders?id=YOUR_FOLDER_ID&token=YOUR_FOLDERS_TOKEN
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
                <td>Folder path.</td>
            </tr>
            <tr>
                <td>collection</td>
                <td>OPTIONAL</td>
                <td>Collection or single.</td>
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

Returns the item object for the given unique identifier.

##### Examples

Fetch Movies Folder

<div class="file-header">Request</div>
```http
GET /api/folders?id=movies&token=6f047babd1894064fbf7662080a9a2f0
```

### <a name="fetch-folders-collection"></a> Fetch folders collection

<div class="file-header">Request</div>
```http
GET /api/entries?id=YOUR_FOLDER_ID&collection=true&token=YOUR_FOLDERS_TOKEN
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
                <td>Folder path.</td>
            </tr>
            <tr>
                <td>collection</td>
                <td>OPTIONAL</td>
                <td>Collection or single.</td>
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

<div class="file-header">Request</div>
```http
GET /api/folders?id=entries/movies&collection=true&token=6f047babd1894064fbf7662080a9a2f0
```

### <a name="create-folder"></a> Create folder

<div class="file-header">Request</div>
```http
POST /api/folders
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
                <td>New folder path.</td>
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
Returns the folder object for the folder that was just created.

##### Examples

Create new folder **entries/movies/platform**

<div class="file-header">Request</div>
```http
POST /api/folders
```

<div class="file-header">Body</div>
```json
{
	"path": "entries/movies/platform",
	"token": "f3acf199a9ac120d3bfd604e1e382456",
	"access_token": "bbc4417d171e38099bd129aeca279018"
}
```

<div class="file-header flex justify-between"><div>Response</div> <div class="text-right">200 OK</div></div>
```json
{
    "data": {
        "path": "entries/movies/platform",
        "full_path": "/htdocs/flextype/project/uploads/entries/movies/platform",
        "url": "project/uploads/entries/movies/platform",
        "full_url": "http://localhost:8888/flextype/project/uploads/entries/movies/platform"
    }
}
```

### <a name="move-folder"></a> Move folder

<div class="file-header">Request</div>
```http
PUT /api/folders
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
                <td>Unique identifier of the folder.</td>
            </tr>
            <tr>
                <td>new_path</td>
                <td>REQUIRED</td>
                <td>New Unique identifier of the folder.</td>
            </tr>
            <tr>
                <td>token</td>
                <td>REQUIRED</td>
                <td>Valid Entries token.</td>
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
Returns the folders object for the folders that was just moved.

##### Examples

Rename entry **entries/movies/platform** to the **entries/movies/the-platform**

<div class="file-header">Request</div>
```http
PUT /api/folders
```

<div class="file-header">Body</div>
```json
{
    "path": "entries/movies/platform",
    "new_path": "entries/movies/the-platform",
	"token": "f3acf199a9ac120d3bfd604e1e382456",
	"access_token": "bbc4417d171e38099bd129aeca279018"
}
```

<div class="file-header flex justify-between"><div>Response</div> <div class="text-right">200 OK</div></div>
```json
{
    "data": {
        "path": "entries/movies/the-platform",
        "full_path": "/htdocs/flextype/project/uploads/entries/movies/the-platform",
        "url": "project/uploads/entries/movies/the-platform",
        "full_url": "http://localhost:8888/flextype/project/uploads/entries/movies/the-platform"
    }
}
```

Move entry **entries/movies/the-platform** to the **entries/movies/2019/the-platform**

<div class="file-header">Request</div>
```http
PUT /api/folders
```

<div class="file-header">Body</div>
```json
{
	"path": "entries/movies/the-platform",
    "new_path": "entries/movies/2019/the-platform",
	"token": "f3acf199a9ac120d3bfd604e1e382456",
	"access_token": "bbc4417d171e38099bd129aeca279018"
}
```

<div class="file-header flex justify-between"><div>Response</div> <div class="text-right">200 OK</div></div>
```json
{
    "data": {
        "path": "entries/movies/2019/the-platform",
        "full_path": "/htdocs/flextype/project/uploads/entries/movies/2019/the-platform",
        "url": "project/uploads/entries/movies/2019/the-platform",
        "full_url": "http://localhost:8888/flextype/project/uploads/entries/movies/2019/the-platform"
    }
}
```

### <a name="copy-folder"></a> Copy folder

<div class="file-header">Request</div>
```http
PUT /api/folders/copy
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
                <td>Unique identifier of the folder.</td>
            </tr>
            <tr>
                <td>new_path</td>
                <td>REQUIRED</td>
                <td>New Unique identifier of the folder.</td>
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
Returns the folders object for the folders that was just copied.

##### Examples

Copy for entry **entries/movies/2019/the-platform** to **entries/movies/horror/the-platform**

<div class="file-header">Request</div>
```http
PUT /api/folders/copy
```

<div class="file-header">Body</div>
```json
{
	"path": "entries/movies/2019/the-platform",
    "new_path": "entries/movies/horror/the-platform",
	"token": "f3acf199a9ac120d3bfd604e1e382456",
	"access_token": "bbc4417d171e38099bd129aeca279018"
}
```

<div class="file-header flex justify-between"><div>Response</div> <div class="text-right">200 OK</div></div>
```json
{
    "data": {
        "path": "entries/movies/horror/the-platform",
        "full_path": "/htdocs/flextype/project/uploads/entries/movies/horror/the-platform",
        "url": "project/uploads/entries/movies/horror/the-platform",
        "full_url": "http://localhost:8888/flextype/project/uploads/entries/movies/horror/the-platform"
    }
}
```

### <a name="delete-folder"></a> Delete folder

<div class="file-header">Request</div>
```http
DELETE /api/folders
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
                <td>Unique identifier of the folder.</td>
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
