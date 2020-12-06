---
title: Entries
breadcrumbs:
  1:
    title: "Rest API"
    link: "[url]/en/rest-api/"
on_this_page:
  0:
    title: "Endpoints"
    link: "endpoints"
  1:
    title: "Fetch single entry"
    link: "fetch-single-entry"
  2:
    title: "Fetch entries collection"
    link: "fetch-entries-collection"
  3:
    title: "Filtering"
    link: "filtering"
  4:
    title: "Create entry"
    link: "create-entry"
  5:
    title: "Update entry"
    link: "update-entry"
  6:
    title: "Move entry"
    link: "move-entry"
  7:
    title: "Copy entry"
    link: "copy-entry"
  8:
    title: "Delete entry"
    link: "delete-entry"
---

The Flextype Entries API organized around Representational State Transfer (REST) for delivering entries from Flextype to apps, websites and other. Entries is delivered as JSON data.

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
                <td>/api/entries</td>
                <td>Fetch entry(entries)</td>
            </tr>
            <tr>
                <td>POST</td>
                <td>/api/entries</td>
                <td>Create entry</td>
            </tr>
            <tr>
                <td>PATCH</td>
                <td>/api/entries</td>
                <td>Update entry</td>
            </tr>
            <tr>
                <td>PUT</td>
                <td>/api/entries</td>
                <td>Move entry</td>
            </tr>
            <tr>
                <td>PUT</td>
                <td>/api/entries/copy</td>
                <td>Copy entry(entries)</td>
            </tr>
            <tr>
                <td>DELETE</td>
                <td>/api/entries</td>
                <td>Delete entry</td>
            </tr>
        </tbody>
    </table>
</div>

### <a name="fetch-single-entry"></a> Fetch single entry

<div class="file-header">Request</div>
```http
GET /api/entries?id=YOUR_ENTRY_ID&token=YOUR_ENTRIES_TOKEN
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
                <td>id</td>
                <td>REQUIRED</td>
                <td>Valid Entry ID (slug)</td>
            </tr>
            <tr>
                <td>filter</td>
                <td>OPTIONAL</td>
                <td>A set of <a href="#filtering">valid arguments</a> to search and sort specific needed entries.</td>
            </tr>
            <tr>
                <td>token</td>
                <td>REQUIRED</td>
                <td>Valid Entries Token.</td>
            </tr>
        </tbody>
    </table>
</div>

##### Result

Returns the item object for the given unique identifier.

##### Examples

Fetch Movies Entry

<div class="file-header">Request</div>
```http
GET /api/entries?id=movies&token=6f047babd1894064fbf7662080a9a2f0
```

### <a name="fetch-entries-collection"></a> Fetch entries collection

<div class="file-header">Request</div>
```http
GET /api/entries?id=YOUR_ENTRY_ID&filter[]&token=YOUR_ENTRIES_TOKEN
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
                <td>id</td>
                <td>REQUIRED</td>
                <td>Valid Entry ID (slug)</td>
            </tr>
            <tr>
                <td>filter</td>
                <td>REQUIRED</td>
                <td>A set of <a href="#filtering">valid arguments</a> to search and sort specific needed entries.</td>
            </tr>
            <tr>
                <td>token</td>
                <td>REQUIRED</td>
                <td>Valid Entries Token.</td>
            </tr>
        </tbody>
    </table>
</div>

##### Result

Returns an array of item objects.

##### Examples

Fetch Movies Collection

<div class="file-header">Request</div>
```http
GET /api/entries?id=movies&filter[]&token=6f047babd1894064fbf7662080a9a2f0
```

Fetch Movies Collection where **director** is equal to **Cathy Yan**

<div class="file-header">Request</div>
```http
GET /api/entries?id=movies&filter[where][key]=director&filter[where][expr]=eq&filter[where][value]=Cathy+Yan&token=6f047babd1894064fbf7662080a9a2f0
```

Fetch Movies Collection where **director** is equal to **Cathy Yan** and where year is equal to **2020** and where genre is contains **action**

<div class="file-header">Request</div>
```http
GET /api/entries?id=movies&filter[where][key]=director&filter[where][expr]=eq&filter[where][value]=Cathy+Yan&filter[and_where][0][key]=year&filter[and_where][0][expr]=eq&filter[and_where][0][value]=2020&filter[and_where][1][key]=genre&filter[and_where][1][expr]=contains&filter[and_where][1][value]=drama&token=6f047babd1894064fbf7662080a9a2f0
```

### <a name="filtering"></a> Filtering

With the filter query you're able to search items in a collection that matches the filter's conditions.

`filter` is an array of valid values for [collect_filter()](./collections#collect-filter) and [find_filter()](./finder#find-filter) functions.

### <a name="create-entry"></a> Create entry

<div class="file-header">Request</div>
```http
POST /api/entries
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
                <td>id</td>
                <td>REQUIRED</td>
                <td>Unique identifier of the entry.</td>
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
            <tr>
                <td>data</td>
                <td>REQUIRED</td>
                <td>Data to store for the entry.</td>
            </tr>
        </tbody>
    </table>
</div>

##### Result
Returns the entry item object for the entry item that was just created.

##### Examples

Create new entry **platform**

<div class="file-header">Request</div>
```http
POST /api/entries
```

<div class="file-header">Body</div>
```json
{
	"id": "movies/platform",
	"token": "f3acf199a9ac120d3bfd604e1e382456",
	"access_token": "bbc4417d171e38099bd129aeca279018",
	"data": {
		"title": "Platform",
		"content": "The Platform (Spanish: El hoyo, transl. The Hole) is a Spanish science fiction horror-thriller film, directed by Galder Gaztelu-Urrutia and released in 2019."
	}
}
```

<div class="file-header flex justify-between"><div>Response</div> <div class="text-right">200 OK</div></div>
```json
{
    "data": {
        "title": "Platform",
        "uuid": "7e724722-da2f-410f-abd2-f44fbea1f6f0",
        "published_at": 1587118620,
        "created_at": 1587118620,
        "published_by": "",
        "created_by": "",
        "routable": true,
        "visibility": "visible",
        "content": "The Platform (Spanish: El hoyo, transl. The Hole) is a Spanish science fiction horror-thriller film, directed by Galder Gaztelu-Urrutia and released in 2019.",
        "modified_at": 1587118658,
        "slug": "movies/platform"
    }
}
```

### <a name="update-entry"></a> Update entry

<div class="file-header">Request</div>
```http
PATCH /api/entries
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
                <td>id</td>
                <td>REQUIRED</td>
                <td>Unique identifier of the entry.</td>
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
            <tr>
                <td>data</td>
                <td>REQUIRED</td>
                <td>Data to store for the entry.</td>
            </tr>
        </tbody>
    </table>
</div>

##### Result
Returns the entry item object for the entry item that was just updated.

##### Examples

Update content for entry **platform**

<div class="file-header">Request</div>
```http
PATCH /api/entries
```

<div class="file-header">Body</div>
```json
{
	"id": "movies/platform",
	"token": "f3acf199a9ac120d3bfd604e1e382456",
	"access_token": "bbc4417d171e38099bd129aeca279018",
	"data": {
		"content": "A vertical prison with one cell per level. Two people per cell. One only food platform and two minutes per day to feed from up to down. An endless nightmare trapped in The Hole."
	}
}
```

<div class="file-header flex justify-between"><div>Response</div> <div class="text-right">200 OK</div></div>
```json
{
    "data": {
        "title": "Platform",
        "uuid": "7e724722-da2f-410f-abd2-f44fbea1f6f0",
        "published_at": 1587118620,
        "created_at": 1587118620,
        "published_by": "",
        "created_by": "",
        "routable": true,
        "visibility": "visible",
        "content": "A vertical prison with one cell per level. Two people per cell. One only food platform and two minutes per day to feed from up to down. An endless nightmare trapped in The Hole.",
        "modified_at": 1587119140,
        "slug": "movies/platform"
    }
}
```

### <a name="move-entry"></a> Move entry

<div class="file-header">Request</div>
```http
PUT /api/entries
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
                <td>id</td>
                <td>REQUIRED</td>
                <td>Unique identifier of the entry.</td>
            </tr>
            <tr>
                <td>new_id</td>
                <td>REQUIRED</td>
                <td>New Unique identifier of the entry.</td>
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
Returns the entry item object for the entry item that was just moved.

##### Examples

Move entry **platform** to the **the-platform**

<div class="file-header">Request</div>
```http
PUT /api/entries
```

<div class="file-header">Body</div>
```json
{
	"id": "movies/platform",
    "new_id": "movies/the-platform",
	"token": "f3acf199a9ac120d3bfd604e1e382456",
	"access_token": "bbc4417d171e38099bd129aeca279018"
}
```

<div class="file-header flex justify-between"><div>Response</div> <div class="text-right">200 OK</div></div>
```json
{
    "data": {
        "title": "Platform",
        "uuid": "7e724722-da2f-410f-abd2-f44fbea1f6f0",
        "published_at": 1587118620,
        "created_at": 1587118620,
        "published_by": "",
        "created_by": "",
        "routable": true,
        "visibility": "visible",
        "content": "A vertical prison with one cell per level. Two people per cell. One only food platform and two minutes per day to feed from up to down. An endless nightmare trapped in The Hole.",
        "modified_at": 1587119140,
        "slug": "movies/the-platform"
    }
}
```

Move entry **movies/the-platform** to the **movies/2019/the-platform**

<div class="file-header">Request</div>
```http
PUT /api/entries
```

<div class="file-header">Body</div>
```json
{
	"id": "movies/the-platform",
    "new_id": "movies/2019/the-platform",
	"token": "f3acf199a9ac120d3bfd604e1e382456",
	"access_token": "bbc4417d171e38099bd129aeca279018"
}
```

<div class="file-header flex justify-between"><div>Response</div> <div class="text-right">200 OK</div></div>
```json
{
    "data": {
        "title": "Platform",
        "uuid": "7e724722-da2f-410f-abd2-f44fbea1f6f0",
        "published_at": 1587118620,
        "created_at": 1587118620,
        "published_by": "",
        "created_by": "",
        "routable": true,
        "visibility": "visible",
        "content": "A vertical prison with one cell per level. Two people per cell. One only food platform and two minutes per day to feed from up to down. An endless nightmare trapped in The Hole.",
        "modified_at": 1587119140,
        "slug": "movies/2019/the-platform"
    }
}
```

### <a name="copy-entry"></a> Copy entry

<div class="file-header">Request</div>
```http
PUT /api/entries/copy
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
            <td>id</td>
            <td>REQUIRED</td>
            <td>Unique identifier of the entry.</td>
        </tr>
        <tr>
            <td>new_id</td>
            <td>REQUIRED</td>
            <td>New Unique identifier of the entry.</td>
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
Returns the entry item object for the entry item that was just copied.

##### Examples

Copy for entry **movies/2019/the-platform** to **movies/horror/the-platform**

<div class="file-header">Request</div>
```http
PUT /api/entries/copy
```

<div class="file-header">Body</div>
```json
{
	"id": "movies/2019/the-platform",
    "new_id": "movies/horror/the-platform",
	"token": "f3acf199a9ac120d3bfd604e1e382456",
	"access_token": "bbc4417d171e38099bd129aeca279018"
}
```

<div class="file-header flex justify-between"><div>Response</div> <div class="text-right">200 OK</div></div>
```json
{
    "data": {
        "title": "Platform",
        "uuid": "7e724722-da2f-410f-abd2-f44fbea1f6f0",
        "published_at": 1587118620,
        "created_at": 1587118620,
        "published_by": "",
        "created_by": "",
        "routable": true,
        "visibility": "visible",
        "content": "A vertical prison with one cell per level. Two people per cell. One only food platform and two minutes per day to feed from up to down. An endless nightmare trapped in The Hole.",
        "modified_at": 1587139514,
        "slug": "movies/horror/the-platform"
    }
}
```

### <a name="delete-entry"></a> Delete entry

<div class="file-header">Request</div>
```http
DELETE /api/entries
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
                <td>id</td>
                <td>REQUIRED</td>
                <td>Unique identifier of the entry.</td>
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
Returns an empty body with HTTP status 204

##### Examples

Delete entry **movies/horror/the-platform**

<div class="file-header">Request</div>
```http
DELETE /api/entries
```

<div class="file-header">Body</div>
```json
{
	"id": "movies/horror/the-platform",
	"token": "f3acf199a9ac120d3bfd604e1e382456",
	"access_token": "bbc4417d171e38099bd129aeca279018"
}
```
