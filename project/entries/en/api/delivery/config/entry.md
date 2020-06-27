---
title: Config
breadcrumbs:
  0:
    title: "Documentation"
    link: "[url]/en/"
  1:
    title: "API Reference"
    link: "[url]/en/api/"
  2:
    title: "Content Delivery API"
    link: "[url]/en/api/delivery/"
---

The Content Delivery API (CDA) for Config is a read-only API organized around Representational State Transfer (REST) for delivering config values from Flextype to apps, websites and other media. Config values is delivered as JSON data.

#### Endpoints

| Method | Endpoint | Description |
| --- | --- | --- |
| GET | /api/delivery/config | Fetch config item |

### Fetch config item

<div class="file-header">Request</div>
```plaintext
GET /api/delivery/config?config=YOUR_CONFIG&key=YOUR_CONFIG_ITEM_ID&token=YOUR_CONFIG_DELIVERY_TOKEN
```

##### Query

| name | |  Description |
| --- | --- | --- |
| config | REQUIRED | Unique identifier of the config namespace. |
| key | REQUIRED | Unique identifier of the config item. |
| token | REQUIRED | Valid Content Delivery API token for Config. |

##### Result

An array of config item objects.

##### Examples

Fetch Flextype Version from Flextype Config

<div class="file-header">Request</div>
```http
GET /api/delivery/config?config=flextype&id=timezone&token=efe1e36e4d60fcd547e22eb9f795dff9
```

<div class="file-header flex justify-between"><div>Response</div> <div class="text-right">200 OK</div></div>
```json
{
    "data": {
        "key": "timezone",
        "value": "UTC"
    }
}
```
