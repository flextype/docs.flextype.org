---
title: HTTP details
breadcrumbs:
  0:
    title: "Documentation"
    link: "[site_url]/en/"
  1:
    title: "API Reference"
    link: "[site_url]/en/api/"
---

### Cross-origin resource sharing

[CORS (Cross-origin resource sharing)](https://en.wikipedia.org/wiki/Cross-origin_resource_sharing) allows JavaScript web apps to make HTTP requests to other domains. This is important for third party web apps using Flextype, as without CORS, a JavaScript app hosted on example.com couldn't access our APIs because they're hosted on another.com which is a different domain.

CORS is [supported by all modern browsers](http://caniuse.com/cors). Read more about using CORS in this [tutorial](https://www.html5rocks.com/en/tutorials/cors/).

To allow JavaScript applications running inside browsers to interact with our APIs, we set the following HTTP response headers:

* Access-Control-Allow-Origin: `*`

Note: Allowing all origins is safe because all requests to manage content in the Flextype must include an access token.


### JSON format details

Contentful represents resources as [JSON](http://json.org/), encoded in UTF-8. Contentful represents dates and times as [Unix Timestamp](https://www.unixtimestamp.com).
