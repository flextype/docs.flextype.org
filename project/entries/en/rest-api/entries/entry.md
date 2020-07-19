---
title: Entries
breadcrumbs:
  0:
    title: "Documentation"
    link: "[url]/en/"
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
    title: "Rename entry"
    link: "rename-entry"
  7:
    title: "Copy entry"
    link: "copy-entry"
  8:
    title: "Delete entry"
    link: "delete-entry"
---

The Flextype Entries API organized around Representational State Transfer (REST) for delivering entries from Flextype to apps, websites and other. Entries is delivered as JSON data.

### <a name="endpoints"></a> Endpoints

| Method | Endpoint | Description |
| --- | --- | --- |
| GET | /api/entries | Fetch entry(entries) |

### <a name="fetch-single-entry"></a> Fetch single entry

<div class="file-header">Request</div>
```http
GET /api/entries?id=YOUR_ENTRY_ID&token=YOUR_ENTRIES_TOKEN
```

##### Query

| Name | |  Description |
| --- | --- | --- |
| id | REQUIRED | Valid Entry ID (slug) |
| filter | OPTIONAL | A set of [valid arguments](http://docs.flextype.org/en/themes/entries-fetch) to search and sort specific needed entries. |
| token | REQUIRED | Valid Entries Token. |

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

| Name | |  Description |
| --- | --- | --- |
| id | REQUIRED | Valid Entry ID (slug) |
| filter | REQUIRED | A set of [valid arguments](#filtering) to search and sort specific needed entries. |
| token | REQUIRED | Valid Entries Token. |

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

##### Operator: Equal to

`eq` or `=`

Filter your entries by checking if your custom attribute (field) has a value that is equal to one of the values provided.

##### Use-cases

Get all content entries that is refered to another in a 1:N relationship or if you want to get all entries with a specific value in one of it's fields.

##### Examples

Fetch Movies Collection where **director** is equal to **Cathy Yan**

<div class="file-header">Request</div>
```http
GET /api/entries?id=movies&filter[where][key]=director&filter[where][expr]=eq&filter[where][value]=Cathy+Yan&token=6f047babd1894064fbf7662080a9a2f0
```

##### Operator: Not equal to

`neq` or `<>` or `!=`

Filter your entries by checking if your custom attribute (field) does not have a value that is equal to one of the values provided.

##### Examples

Fetch Movies Collection where **director** is not equal to **Cathy Yan**

<div class="file-header">Request</div>
```http
GET /api/entries?id=movies&filter[where][key]=director&filter[where][expr]=neq&filter[where][value]=Cathy+Yan&token=6f047babd1894064fbf7662080a9a2f0
```

##### Operator: Lower than

`lt` or `<`

Filter your entries by checking if your custom attribute (field) has a value that is lower than one of the values provided.

##### Examples

Fetch Movies Collection where **year** is lower than to **2019**

<div class="file-header">Request</div>
```http
GET /api/entries?id=movies&filter[where][key]=year&filter[where][expr]=lt&filter[where][value]=2019&token=6f047babd1894064fbf7662080a9a2f0
```

##### Operator: Greater than

`gt` or `>`

Filter your entries by checking if your custom attribute (field) has a value that is greater than one of the values provided.

##### Examples

Fetch Movies Collection where **year** is greater than to **2019**

<div class="file-header">Request</div>
```http
GET /api/entries?id=movies&filter[where][key]=year&filter[where][expr]=gt&filter[where][value]=2019&token=6f047babd1894064fbf7662080a9a2f0
```

##### Operator: Lower than or equal to

`lte` or `<=`

Filter your entries by checking if your custom attribute (field) has a value that is lower than or equal to one of the values provided.

##### Examples

Fetch Movies Collection where **year** is lower than or equal to **2019**

<div class="file-header">Request</div>
```http
GET /api/entries?id=movies&filter[where][key]=year&filter[where][expr]=lte&filter[where][value]=2019&token=6f047babd1894064fbf7662080a9a2f0
```

##### Operator: Greater than or equal to

`gte` or `>=`

Filter your entries by checking if your custom attribute (field) has a value that is greater than or equal to one of the values provided.

##### Examples

Fetch Movies Collection where **year** is greater than or equal to **2019**

<div class="file-header">Request</div>
```http
GET /api/entries?id=movies&filter[where][key]=year&filter[where][expr]=gte&filter[where][value]=2019&token=6f047babd1894064fbf7662080a9a2f0
```

##### Operator: Included in an array of values

`in`

Filter your entries by checking if your custom array attribute (field) contains one of the values provided. As soon as one of the provided values separated with, are in the array field, the entry object will be in the response.

##### Use-cases

Get all content entries that is refered to others in a N:N relationship or if you want to get all entries with a specific value in one of it's array fields.


##### Operator: Isn't included in an array of values

`nin`

Filter your entries by checking if your custom array attribute (field) is not contains one of the values provided.

##### Use-cases

Get all content entries that is not refered to others in a N:N relationship or if you want to get all entries with a specific value that is not in one of it's array fields.

##### Operator: Contains the substring

`contains` or `like`

Filter your entries by checking if your custom attribute (field) has a value that is "like" the value provided.

##### Operator: Member of

`member_of`

##### Operator: Start with

`start_with`

##### Operator: Ends with

`ends_with`


### <a name="create-entry"></a> Create entry

<div class="file-header">Request</div>
```http
POST /api/entries
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

### <a name="rename-entry"></a> Rename entry

<div class="file-header">Request</div>
```http
PUT /api/entries
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
```http
PUT /api/entries
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
