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

Errors share the same common attributes as other API resources. They have a sys property, where sys.type is always "Error" and a sys.id that identifies the exact error code (see table below) that occurred. They always have a message property which will be a short description of what went wrong.

Errors resulting from bad input (such as ValidationFailed errors) contain a details property. This property is structured data that indicates more precisely what was wrong with the input.
