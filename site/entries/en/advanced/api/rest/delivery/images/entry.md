---
title: Content Delivery API / Images
---

The Content Delivery API (CDA) for Images allows the retrieval and manipulation of image files referenced from Flextype uploads directory to apps, websites and other media. Images are delivered as files.


### Endpoint

```plaintext
GET /api/delivery/images
```

Params:
- Image file path
- [Valid arguments for images manipulation](http://docs.flextype.org/en/content/media)
- token - Valid Content Delivery API token for Images.

##### Examples

Fetch image `venom-2` from upload directory `/movies/venom-2/`

```plaintext
GET /api/delivery/images/movies/venom-2/venom-2.jpg?token=c1fda5a94603a7296f3a0a5370cfe59f
```

Fetch image `venom-2` from upload directory `/movies/venom-2/` and do several image manipulations

```plaintext
GET /api/delivery/images/movies/venom-2/venom-2.jpg?w=100&&q=70&token=c1fda5a94603a7296f3a0a5370cfe59f
```
