---
title: Content Delivery API / Entries
---

The Content Delivery API (CDA) for Entries is a read-only API for delivering entries from Flextype to apps, websites and other media. Entries is delivered as JSON data.


### Endpoint

```plaintext
GET /api/delivery/entries
```

Params:
- id - Valid Entry ID (slug)
- args - A set of arguments to search and sort specific needed entries.
- token - Valid Content Delivery API token for Entries.

### Get single entry

```plaintext
GET /api/delivery/entries?id=YOUR_ENTRY_ID&token=YOUR_ENTRIES_TOKEN
```

##### Examples

Fetch Movies Entry

```plaintext
GET /api/delivery/entries?id=movies&token=6f047babd1894064fbf7662080a9a2f0
```

### Get entries collection

```plaintext
GET /api/delivery/entries?id=YOUR_ENTRY_ID&args[]&token=YOUR_ENTRIES_TOKEN
```

##### Examples

Fetch Movies Collection

```plaintext
GET /api/delivery/entries?id=movies&args[]&token=6f047babd1894064fbf7662080a9a2f0
```

Fetch Movies Collection where **director** is equals to **Cathy Yan**
```plaintext
GET /api/delivery/entries?id=movies&args[where][key]=director&args[where][expr]=eq&args[where][value]=Cathy+Yan&token=6f047babd1894064fbf7662080a9a2f0
```

Fetch Movies Collection where **director** is equals to **Cathy Yan** and where year is equals to **2020** and where genre is contains **action**

```plaintext
GET /api/delivery/entries?id=movies&args[where][key]=director&args[where][expr]=eq&args[where][value]=Cathy+Yan&args[and_where][0][key]=year&args[and_where][0][expr]=eq&args[and_where][0][value]=2020&args[and_where][1][key]=genre&args[and_where][1][expr]=contains&args[and_where][1][value]=drama&token=6f047babd1894064fbf7662080a9a2f0
```
