---
title: Registry
breadcrumbs:
  0:
    title: "Documentation"
    link: "[url]/en/"
  1:
    title: "Rest API"
    link: "[url]/en/rest-api/"
---

The Flextype Registry API organized around Representational State Transfer (REST) for delivering data from Flextype registry to apps, websites and other. Registry is delivered as JSON data.

#### Endpoints

| Method | Endpoint | Description |
| --- | --- | --- |
| GET | /api/registry | Fetch registry item |

### Fetch registry item

<div class="file-header">Request</div>
```plaintext
GET /api/registry?id=YOUR_REGISTRY_ITEM_ID&token=YOUR_REGISTRY_TOKEN
```

##### Query

| name | |  Description |
| --- | --- | --- |
| id | REQUIRED | Valid Entry ID (slug) |
| token | REQUIRED | Valid Content Delivery API token for Registry. |

##### Result

An array of registry item objects.

##### Examples

Fetch Flextype Version from Flextype Registry

<div class="file-header">Request</div>
```http
GET /api/registry?id=flextype.manifest.version&token=efe1e36e4d60fcd547e22eb9f795dff9
```

<div class="file-header flex justify-between"><div>Response</div> <div class="text-right">200 OK</div></div>
```json
{
    "data": {
        "key": "flextype.manifest.version",
        "value": "0.9.7"
    }
}
```
