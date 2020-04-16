---
title: Registry
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
---

The Content Delivery API (CDA) for Registry is a read-only API for delivering registry values from Flextype to apps, websites and other media. Registry values is delivered as JSON data.


### Endpoint

```plaintext
GET /api/delivery/registry
```

Params:
- id - Valid Registry Item ID
- token - Valid Content Delivery API token for Registry.

### Get registry item value

```plaintext
GET /api/delivery/registry?id=YOUR_REGISTRY_ITEM_ID&token=YOUR_REGISTRY_DELIVERY_TOKEN
```

##### Examples

Fetch Flextype Timezone from Flextype Registry

```plaintext
GET /api/delivery/registry?id=flextype.timezone&token=efe1e36e4d60fcd547e22eb9f795dff9
```
