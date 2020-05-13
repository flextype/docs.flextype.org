---
title: Entries
breadcrumbs:
  0:
    title: "Documentation"
    link: "[url]/en/"
  1:
    title: "API Reference"
    link: "[url]/en/api/"
  2:
    title: "Content Management API"
    link: "[url]/en/api/management/"
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
    title: "Rename entry"
    link: "rename-entry"
  7:
    title: "Copy entry"
    link: "copy-entry"
  8:
    title: "Delete entry"
    link: "delete-entry"
---

The Content Management API (CMA) for Entries is a read-write API for managing content.
You could use the CMA for several use cases, such as:

* Automatic imports from WordPress, Joomla, Drupal, and more.
* Integration with other backend systems, such as an e-commerce shop.
* Building custom editing experiences.

#### <a name="endpoints"></a> Endpoints
| Method | Endpoint | Description |
| --- | --- | --- |
| GET | /api/management/entries | Fetch entry(entries) |
| POST | /api/management/entries | Create entry |
| PATCH | /api/management/entries | Update entry |
| PUT | /api/management/entries | Rename entry |
| PUT | /api/management/entries/copy | Copy entry(entries) |
| DELETE | /api/management/entries | Delete entry |

<br>

### <a name="fetch-single-entry"></a> Fetch single entry

<div class="file-header">Request</div>
```http
GET /api/management/entries?id=YOUR_ENTRY_ID&token=YOUR_ENTRIES_MANAGEMENT_TOKEN
```

##### Query

| Name | |  Description |
| --- | --- | --- |
| id | REQUIRED | Valid Entry ID (slug) |
| filter | OPTIONAL | A set of [valid arguments](http://docs.flextype.org/en/themes/entries-fetch) to search and sort specific needed entries. |
| token | REQUIRED | Valid Content Management API token for Entries. |


##### Result

Returns the item object for the given unique identifier.

##### Examples

Fetch Movies Entry

<div class="file-header">Request</div>
```http
GET /api/management/entries?id=movies&token=6f047babd1894064fbf7662080a9a2f0
```

<br>

### <a name="fetch-entries-collection"></a> Fetch entries collection

<div class="file-header">Request</div>
```http
GET /api/management/entries?id=YOUR_ENTRY_ID&filter[]&token=YOUR_ENTRIES_MANAGEMENT_TOKEN
```

##### Query

| Name | |  Description |
| --- | --- | --- |
| id | REQUIRED | Valid Entry ID (slug) |
| filter | REQUIRED | A set of [valid arguments](http://docs.flextype.org/en/themes/entries-fetch) to search and sort specific needed entries. |
| token | REQUIRED | Valid Content Management API token for Entries. |

##### Result

Returns an array of item objects.

##### Examples

Fetch Movies Collection

<div class="file-header">Request</div>
```http
GET /api/management/entries?id=movies&filter[]&token=6f047babd1894064fbf7662080a9a2f0
```

Fetch Movies Collection where **director** is equal to **Cathy Yan**

<div class="file-header">Request</div>
```http
GET /api/management/entries?id=movies&filter[where][key]=director&filter[where][expr]=eq&filter[where][value]=Cathy+Yan&token=6f047babd1894064fbf7662080a9a2f0
```

Fetch Movies Collection where **director** is equal to **Cathy Yan** and where year is equal to **2020** and where genre is contains **action**

<div class="file-header">Request</div>
```http
GET /api/management/entries?id=movies&filter[where][key]=director&filter[where][expr]=eq&filter[where][value]=Cathy+Yan&filter[and_where][0][key]=year&filter[and_where][0][expr]=eq&filter[and_where][0][value]=2020&filter[and_where][1][key]=genre&filter[and_where][1][expr]=contains&filter[and_where][1][value]=drama&token=6f047babd1894064fbf7662080a9a2f0
```

<br>

### <a name="filtering"></a> Filtering

With the filter query you're able to search items in a collection that matches the filter's conditions.
Filtering for Content Management API is absolutely the same as it is for Content Delivery API.
Read about filtering: <a href="[url]/en/api/delivery/entries#filtering">here</a>

<br>

### <a name="create-entry"></a> Create entry

<div class="file-header">Request</div>
```http
POST /api/management/entries
```

##### Body

| Name | |  Description |
| --- | --- | --- |
| id | REQUIRED | Unique identifier of the entry. |
| token | REQUIRED | Valid Content Management API token for Entries. |
| access_token | REQUIRED | Valid Access token. |
| data | REQUIRED | Data to store for the entry. |

##### Result
Returns the entry item object for the entry item that was just created.

##### Examples

Create new entry **platform**

<div class="file-header">Request</div>
```http
POST /api/management/entries
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

<br>

### <a name="update-entry"></a> Update entry

<div class="file-header">Request</div>
```http
PATCH /api/management/entries
```

##### Body

| Name | |  Description |
| --- | --- | --- |
| id | REQUIRED | Unique identifier of the entry. |
| token | REQUIRED | Valid Content Management API token for Entries. |
| access_token | REQUIRED | Valid Access token. |
| data | REQUIRED | Data to store for the entry. |

##### Result
Returns the entry item object for the entry item that was just updated.

##### Examples

Update content for entry **platform**

<div class="file-header">Request</div>
```http
PATCH /api/management/entries
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

<br>

### <a name="rename-entry"></a> Rename entry

<div class="file-header">Request</div>
```plaintext
PUT /api/management/entries
```

##### Body

| Name | |  Description |
| --- | --- | --- |
| id | REQUIRED | Unique identifier of the entry. |
| new_id | REQUIRED | New Unique identifier of the entry. |
| token | REQUIRED | Valid Content Management API token for Entries. |
| access_token | REQUIRED | Valid Access token. |

##### Result
Returns the entry item object for the entry item that was just renamed.

##### Examples

Rename entry **platform** to the **the-platform**

<div class="file-header">Request</div>
```plaintext
PUT /api/management/entries
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
```plaintext
PUT /api/management/entries
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

<br>

### <a name="copy-entry"></a> Copy entry

<div class="file-header">Request</div>
```plaintext
PUT /api/management/entries/copy
```

##### Body

| Name | |  Description |
| --- | --- | --- |
| id | REQUIRED | Unique identifier of the entry. |
| new_id | REQUIRED | New Unique identifier of the entry. |
| token | REQUIRED | Valid Content Management API token for Entries. |
| access_token | REQUIRED | Valid Access token. |

##### Result
Returns the entry item object for the entry item that was just copied.

##### Examples

Copy for entry **movies/2019/the-platform** to **movies/horror/the-platform**

<div class="file-header">Request</div>
```json
PUT /api/management/entries
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
```plaintext
DELETE /api/management/entries
```

##### Body

| Name | |  Description |
| --- | --- | --- |
| id | REQUIRED | Unique identifier of the entry. |
| token | REQUIRED | Valid Content Management API token for Entries. |
| access_token | REQUIRED | Valid Access token. |

##### Result
Returns an empty body with HTTP status 204

##### Examples

Delete entry **movies/horror/the-platform**

<div class="file-header">Request</div>
```plaintext
DELETE /api/management/entries
```

<div class="file-header">Body</div>
```json
{
	"id": "movies/horror/the-platform",
	"token": "f3acf199a9ac120d3bfd604e1e382456",
	"access_token": "bbc4417d171e38099bd129aeca279018"
}
```
