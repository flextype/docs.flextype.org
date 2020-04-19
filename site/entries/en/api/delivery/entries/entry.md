---
title: Entries
breadcrumbs:
  0:
    title: "Documentation"
    link: "[site_url]/en/"
  1:
    title: "API Reference"
    link: "[site_url]/en/api/"
  2:
    title: "Content Delivery API"
    link: "[site_url]/en/api/delivery/"
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
---

The Content Delivery API (CDA) for Entries is a read-only API organized around Representational State Transfer (REST) for delivering entries from Flextype to apps, websites and other media. Entries are delivered as JSON data.

### <a name="endpoints"></a> Endpoints

| Method | Endpoint | Description |
| --- | --- | --- |
| GET | /api/delivery/entries | Fetch entry(entries) |

<br>

### <a name="fetch-single-entry"></a> Fetch single entry

<div class="file-header">Request</div>
```http
GET /api/delivery/entries?id=YOUR_ENTRY_ID&token=YOUR_ENTRIES_DELIVERY_TOKEN
```

##### Query

| Name | |  Description |
| --- | --- | --- |
| id | REQUIRED | Valid Entry ID (slug) |
| filter | OPTIONAL | A set of [valid arguments](http://docs.flextype.org/en/themes/entries-fetch) to search and sort specific needed entries. |
| token | REQUIRED | Valid Content Delivery API token for Entries. |


##### Result

Returns the item object for the given unique identifier.

##### Examples

Fetch Movies Entry

<div class="file-header">Request</div>
```http
GET /api/delivery/entries?id=movies&token=6f047babd1894064fbf7662080a9a2f0
```

<br>

### <a name="fetch-entries-collection"></a> Fetch entries collection

<div class="file-header">Request</div>
```http
GET /api/delivery/entries?id=YOUR_ENTRY_ID&filter[]&token=YOUR_ENTRIES_DELIVERY_TOKEN
```

##### Query

| Name | |  Description |
| --- | --- | --- |
| id | REQUIRED | Valid Entry ID (slug) |
| filter | REQUIRED | A set of [valid arguments](#filtering) to search and sort specific needed entries. |
| token | REQUIRED | Valid Content Delivery API token for Entries. |

##### Result

Returns an array of item objects.

##### Examples

Fetch Movies Collection

<div class="file-header">Request</div>
```http
GET /api/delivery/entries?id=movies&filter[]&token=6f047babd1894064fbf7662080a9a2f0
```

Fetch Movies Collection where **director** is equal to **Cathy Yan**

<div class="file-header">Request</div>
```http
GET /api/delivery/entries?id=movies&filter[where][key]=director&filter[where][expr]=eq&filter[where][value]=Cathy+Yan&token=6f047babd1894064fbf7662080a9a2f0
```

Fetch Movies Collection where **director** is equal to **Cathy Yan** and where year is equal to **2020** and where genre is contains **action**

<div class="file-header">Request</div>
```http
GET /api/delivery/entries?id=movies&filter[where][key]=director&filter[where][expr]=eq&filter[where][value]=Cathy+Yan&filter[and_where][0][key]=year&filter[and_where][0][expr]=eq&filter[and_where][0][value]=2020&filter[and_where][1][key]=genre&filter[and_where][1][expr]=contains&filter[and_where][1][value]=drama&token=6f047babd1894064fbf7662080a9a2f0
```

<br>

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
GET /api/delivery/entries?id=movies&filter[where][key]=director&filter[where][expr]=eq&filter[where][value]=Cathy+Yan&token=6f047babd1894064fbf7662080a9a2f0
```

##### Operator: Not equal to

`neq` or `<>` or `!=`

Filter your entries by checking if your custom attribute (field) does not have a value that is equal to one of the values provided.

##### Examples

Fetch Movies Collection where **director** is not equal to **Cathy Yan**

<div class="file-header">Request</div>
```http
GET /api/delivery/entries?id=movies&filter[where][key]=director&filter[where][expr]=neq&filter[where][value]=Cathy+Yan&token=6f047babd1894064fbf7662080a9a2f0
```

##### Operator: Lower than

`lt` or `<`

Filter your entries by checking if your custom attribute (field) has a value that is lower than one of the values provided.

##### Examples

Fetch Movies Collection where **year** is lower than to **2019**

<div class="file-header">Request</div>
```plaintext
GET /api/delivery/entries?id=movies&filter[where][key]=year&filter[where][expr]=lt&filter[where][value]=2019&token=6f047babd1894064fbf7662080a9a2f0
```

##### Operator: Greater than

`gt` or `>`

Filter your entries by checking if your custom attribute (field) has a value that is greater than one of the values provided.

##### Examples

Fetch Movies Collection where **year** is greater than to **2019**

<div class="file-header">Request</div>
```http
GET /api/delivery/entries?id=movies&filter[where][key]=year&filter[where][expr]=gt&filter[where][value]=2019&token=6f047babd1894064fbf7662080a9a2f0
```

##### Operator: Lower than or equal to

`lte` or `<=`

Filter your entries by checking if your custom attribute (field) has a value that is lower than or equal to one of the values provided.

##### Examples

Fetch Movies Collection where **year** is lower than or equal to **2019**

<div class="file-header">Request</div>
```http
GET /api/delivery/entries?id=movies&filter[where][key]=year&filter[where][expr]=lte&filter[where][value]=2019&token=6f047babd1894064fbf7662080a9a2f0
```

##### Operator: Greater than or equal to

`gte` or `>=`

Filter your entries by checking if your custom attribute (field) has a value that is greater than or equal to one of the values provided.

##### Examples

Fetch Movies Collection where **year** is greater than or equal to **2019**

<div class="file-header">Request</div>
```http
GET /api/delivery/entries?id=movies&filter[where][key]=year&filter[where][expr]=gte&filter[where][value]=2019&token=6f047babd1894064fbf7662080a9a2f0
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
