---
title: Authentication
description: When something goes wrong with an API request, our server generates an error. The error message contains an appropriate HTTP status code in the header and a JSON response in the body.
breadcrumbs:
  0:
    title: "Documentation"
    link: "[url]/en/"
  1:
    title: "API Reference"
    link: "[url]/en/api/"
---

To retrieve or store content with Flextype, you first need to authenticate your app with an token. Flextype offers three APIs, and each requires separate authentication.

We recommend using different access tokens for different environments in your development process. For example, use one for your production environment and another for staging or continuous integration. This allows you to revoke them individually in the future and manage your delivery channels independently.

You should send the authentication token to an API as a query parameter.

##### Examples

Fetch entries using Content Delivery API Token for Entries.
```http
GET /api/delivery/entries?id=YOUR_ENTRY_ID&token=YOUR_ENTRIES_DELIVERY_TOKEN
```

Fetch registry item using Content Delivery API Token for Registry.
```http
GET /api/delivery/registry?id=YOUR_REGISTRY_ITEM_ID&token=YOUR_REGISTRY_DELIVERY_TOKEN
```

Fetch image using Images API Token.
```http
GET /api/images/{path:.+}?VALID_ARGUMENTS&token=YOUR_IMAGES_TOKEN
```

Fetch entries using Content Management API Token for Entries.
```http
GET /api/management/entries?id=YOUR_ENTRY_ID&token=YOUR_ENTRIES_MANAGEMENT_TOKEN
```

### Content Delivery API

To access the Content Delivery API and fetch content from Flextype, you need a content delivery token.

### Content Management API

To access the Content Management API and store content created in your apps, you need a content management token. There are two types of content management tokens which you should use:

* Management token - Content Management API token.
* Access token - Valid Access token.

### Images API

To access the Image API and fetch images from Flextype, you need a images token.
