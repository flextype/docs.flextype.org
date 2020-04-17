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
    title: "Management"
    link: "[site_url]/en/api/management/"
---

The Content Management API (CMA) for Entries is a read-write API for managing content.
You could use the CMA for several use cases, such as:

* Automatic imports from WordPress, Joomla, Drupal, and more.
* Integration with other backend systems, such as an e-commerce shop.
* Building custom editing experiences.

#### Endpoints
| Method | Endpoint | Description |
| --- | --- | --- |
| GET | /api/management/entries | Fetch entry(entries) |
| POST | /api/management/entries | Create entry |
| PATCH | /api/management/entries | Update entry |
| PUT | /api/management/entries | Rename entry |
| PUT | /api/management/entries/copy | Copy entry(entries) |
| DELETE | /api/management/entries | Delete entry |

<br>

### Fetch entry

```
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

```
GET /api/management/entries?id=movies&token=6f047babd1894064fbf7662080a9a2f0
```

<br>

### Fetch entries collection

```
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

```
GET /api/management/entries?id=movies&filter[]&token=6f047babd1894064fbf7662080a9a2f0
```

Fetch Movies Collection where **director** is equal to **Cathy Yan**
```
GET /api/management/entries?id=movies&filter[where][key]=director&filter[where][expr]=eq&filter[where][value]=Cathy+Yan&token=6f047babd1894064fbf7662080a9a2f0
```

Fetch Movies Collection where **director** is equal to **Cathy Yan** and where year is equal to **2020** and where genre is contains **action**

```
GET /api/management/entries?id=movies&filter[where][key]=director&filter[where][expr]=eq&filter[where][value]=Cathy+Yan&filter[and_where][0][key]=year&filter[and_where][0][expr]=eq&filter[and_where][0][value]=2020&filter[and_where][1][key]=genre&filter[and_where][1][expr]=contains&filter[and_where][1][value]=drama&token=6f047babd1894064fbf7662080a9a2f0
```

<br>

### Create entry

```
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
