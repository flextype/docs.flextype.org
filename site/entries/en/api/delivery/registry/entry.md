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

#### Endpoints

| Method | Endpoint | Description |
| --- | --- | --- |
| GET | /api/delivery/registry | Fetch registry item |

<br>

### Fetch registry item

```
GET /api/delivery/registry?id=YOUR_REGISTRY_ITEM_ID&token=YOUR_REGISTRY_DELIVERY_TOKEN
```

##### Query

| name | |  Description |
| --- | --- | --- |
| id | REQUIRED | Valid Entry ID (slug) |
| token | REQUIRED | Valid Content Delivery API token for Registry. |

##### Result

An array of registry item objects.

##### Examples

Fetch Flextype Timezone from Flextype Registry

```
GET /api/delivery/registry?id=flextype.settings.timezone&token=efe1e36e4d60fcd547e22eb9f795dff9
```