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

### Get entries collection

```plaintext
GET /api/delivery/entries?id=YOUR_ENTRY_ID&args[]&token=YOUR_ENTRIES_TOKEN
```
