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

The Content Delivery API (CDA) for Entries is a read-only API for delivering entries from Flextype to apps, websites and other media. Entries is delivered as JSON data.

<div class="file-header">Endpoint</div>
```
GET /api/delivery/entries
```

##### Query

| name | |  Description |
| --- | --- | --- |
| id | REQUIRED | Valid Entry ID (slug) |
| filter | OPTIONAL | A set of [valid arguments](http://docs.flextype.org/en/themes/entries-fetch) to search and sort specific needed entries. |
| token | REQUIRED | Valid Content Delivery API token for Entries. |

##### Result

An array of entry item(s) objects.


### Get single entry

```plaintext
GET /api/delivery/entries?id=YOUR_ENTRY_ID&token=YOUR_ENTRIES_DELIVERY_TOKEN
```

##### Examples

Fetch Movies Entry

```plaintext
GET /api/delivery/entries?id=movies&token=6f047babd1894064fbf7662080a9a2f0
```

### Get entries collection

```plaintext
GET /api/delivery/entries?id=YOUR_ENTRY_ID&filter[]&token=YOUR_ENTRIES_DELIVERY_TOKEN
```

##### Examples

Fetch Movies Collection

```plaintext
GET /api/delivery/entries?id=movies&filter[]&token=6f047babd1894064fbf7662080a9a2f0
```

Fetch Movies Collection where **director** is equal to **Cathy Yan**
```plaintext
GET /api/delivery/entries?id=movies&filter[where][key]=director&filter[where][expr]=eq&filter[where][value]=Cathy+Yan&token=6f047babd1894064fbf7662080a9a2f0
```

Fetch Movies Collection where **director** is equal to **Cathy Yan** and where year is equal to **2020** and where genre is contains **action**

```plaintext
GET /api/delivery/entries?id=movies&filter[where][key]=director&filter[where][expr]=eq&filter[where][value]=Cathy+Yan&filter[and_where][0][key]=year&filter[and_where][0][expr]=eq&filter[and_where][0][value]=2020&filter[and_where][1][key]=genre&filter[and_where][1][expr]=contains&filter[and_where][1][value]=drama&token=6f047babd1894064fbf7662080a9a2f0
```
