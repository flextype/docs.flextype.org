---
title: Content Delivery API / Registry
---

The Content Delivery API (CDA) for Registry is a read-only API for delivering registry values from Flextype to apps, websites and other media. Registry values is delivered as JSON data.


### Endpoint

```plaintext
GET /api/delivery/registry
```

Params:
- id - Valid Registry Item ID (slug)
- token - Valid Content Delivery API token for Registry.

### Get registry item value

```plaintext
GET /api/delivery/registry?id=YOUR_REGISTRY_ITEM_ID&token=YOUR_REGISTRY_TOKEN
```

##### Examples

Fetch Flextype Timezone from Flextype Registry

```plaintext
GET /api/delivery/registry?id=flextype.timezone&token=efe1e36e4d60fcd547e22eb9f795dff9
```
