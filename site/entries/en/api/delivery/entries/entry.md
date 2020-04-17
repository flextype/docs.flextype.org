---
title: Entries
breadcrumbs:
  0:
    title: "Documentation"
    link: "[site_url]/en/"
  1:
    title: "API"
    link: "[site_url]/en/api/"
  2:
    title: "Delivery"
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
```plaintext
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
```plaintext
GET /api/delivery/entries?id=movies&token=6f047babd1894064fbf7662080a9a2f0
```

<br>

### <a name="fetch-entries-collection"></a> Fetch entries collection

<div class="file-header">Request</div>
```plaintext
GET /api/delivery/entries?id=YOUR_ENTRY_ID&filter[]&token=YOUR_ENTRIES_DELIVERY_TOKEN
```

##### Query

| Name | |  Description |
| --- | --- | --- |
| id | REQUIRED | Valid Entry ID (slug) |
| filter | REQUIRED | A set of [valid arguments](http://docs.flextype.org/en/themes/entries-fetch) to search and sort specific needed entries. |
| token | REQUIRED | Valid Content Delivery API token for Entries. |

##### Result

Returns an array of item objects.

##### Examples

Fetch Movies Collection

<div class="file-header">Request</div>
```plaintext
GET /api/delivery/entries?id=movies&filter[]&token=6f047babd1894064fbf7662080a9a2f0
```

Fetch Movies Collection where **director** is equal to **Cathy Yan**

<div class="file-header">Request</div>
```plaintext
GET /api/delivery/entries?id=movies&filter[where][key]=director&filter[where][expr]=eq&filter[where][value]=Cathy+Yan&token=6f047babd1894064fbf7662080a9a2f0
```

Fetch Movies Collection where **director** is equal to **Cathy Yan** and where year is equal to **2020** and where genre is contains **action**

<div class="file-header">Request</div>
```plaintext
GET /api/delivery/entries?id=movies&filter[where][key]=director&filter[where][expr]=eq&filter[where][value]=Cathy+Yan&filter[and_where][0][key]=year&filter[and_where][0][expr]=eq&filter[and_where][0][value]=2020&filter[and_where][1][key]=genre&filter[and_where][1][expr]=contains&filter[and_where][1][value]=drama&token=6f047babd1894064fbf7662080a9a2f0
```

<br>

### <a name="filtering"></a> Filtering

With the filter query you're able to search items in a collection that matches the filter's conditions.

##### Filter Operators

| Operator  | Description |
| --- | --- |
| `eq` or `=` |  Equal to |
| `neq` or `<>` or `!=` | Not equal to |
| `lt` or `<` | Lower than |
| `gt` or `>` | Greater than |
| `lte` or `<=` | Lower than or equal to |
| `gte` or `>=` | Greater than or equal to |
| `in` | Included in an array of values |
| `nin` | Isn't included in an array of values |
| `contains` or `like` | Contains the substring |
| `member_of` | Member of |
| `start_with` | Start with |
| `ends_with` | Ends with |
