---
title: Errors
description: When something goes wrong with an API request, our server generates an error. The error message contains an appropriate HTTP status code in the header and a JSON response in the body.
breadcrumbs:
  0:
    title: "Documentation"
    link: "[site_url]/en/"
  1:
    title: "API Reference"
    link: "[site_url]/en/api/"
---
When something goes wrong with an API request, our server generates an error. The error message contains an appropriate HTTP status code in the header and a JSON response in the body.

### Error types

| HTTP status code | Error code | Description |
| --- | --- | --- |
| 401 Unauthorized | AccessTokenInvalid | Incorrect authentication credentials. |
| 404 Not Found | NotFound | The requested resource or endpoint could not be found. |
