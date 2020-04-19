---
title: Authentication
description: When something goes wrong with an API request, our server generates an error. The error message contains an appropriate HTTP status code in the header and a JSON response in the body.
breadcrumbs:
  0:
    title: "Documentation"
    link: "[site_url]/en/"
  1:
    title: "API Reference"
    link: "[site_url]/en/api/"
---
To retrieve or store content with Flextype, you first need to authenticate your app with an token. Flextype offers three APIs, and each requires separate authentication.

We recommend using different access tokens for different environments in your development process. For example, use one for your production environment and another for staging or continuous integration. This allows you to revoke them individually in the future and manage your delivery channels independently.

You should send the authentication token to an API as a query parameter.

##### Examples

Fetch entries using Content Delivery API Token for Entries.
```plaintext
GET /api/delivery/entries?id=YOUR_ENTRY_ID&token=YOUR_ENTRIES_DELIVERY_TOKEN
```

Fetch registry item using Content Delivery API Token for Registry.
```plaintext
GET /api/delivery/registry?id=YOUR_REGISTRY_ITEM_ID&token=YOUR_REGISTRY_DELIVERY_TOKEN
```

Fetch image using Images API Token.
```plaintext
GET /api/images/{path:.+}?VALID_ARGUMENTS&token=YOUR_IMAGES_TOKEN
```

Fetch entries using Content Management API Token for Entries.
```plaintext
GET /api/management/entries?id=YOUR_ENTRY_ID&token=YOUR_ENTRIES_MANAGEMENT_TOKEN
```
