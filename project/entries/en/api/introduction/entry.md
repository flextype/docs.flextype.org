---
title: Introducion
breadcrumbs:
  0:
    title: "Documentation"
    link: "[url]/en/"
  1:
    title: "API Reference"
    link: "[url]/en/api/"
on_this_page:
  0:
    title: "Rest API's"
    link: "rest-apis"
  1:
    title: "Authentication"
    link: "authentication"
  2:
    title: "HTTP details"
    link: "http-details"
  3:
    title: "Errors"
    link: "errors"
---

## <a name="rest-apis"></a> Rest API's

Flextype provides APIs organized around <b>Re</b>presentational <b>S</b>tate <b>T</b>ransfer (REST) for working with your content.

#### Entries

The Flextype Entries API organized around Representational State Transfer (REST) for delivering entries from Flextype to apps, websites and other. Entries is delivered as JSON data.

For more details <a href="[url]/en/api/entries">read the reference guide for the Entries API</a>.

#### Registry

The Flextype Registry API organized around Representational State Transfer (REST) for delivering registry from Flextype to apps, websites and other. Entries is delivered as JSON data.

For more details <a href="[url]/en/api/registry">read the reference guide for the Registry API</a>.

#### Config

The Flextype Config API organized around Representational State Transfer (REST) for delivering Config from Flextype to apps, websites and other. Config is delivered as JSON data.

For more details <a href="[url]/en/api/config">read the reference guide for the Config API</a>.

#### Files

The Flextype Files API organized around Representational State Transfer (REST) for delivering Files from Flextype to apps, websites and other. Files is delivered as JSON data.

For more details <a href="[url]/en/api/files">read the reference guide for the Files API</a>.

#### Folders

The Flextype Folders API organized around Representational State Transfer (REST) for delivering Folders from Flextype to apps, websites and other. Folders is delivered as JSON data.

For more details <a href="[url]/en/api/folders">read the reference guide for the Folders API</a>.

#### Images

The Flextype Images API allows the retrieval and manipulation of image files referenced from Flextype site uploads directory to apps, websites and other media. Images are delivered as files.

For more details <a href="[url]/en/api/images">read the reference guide for the Images API</a>.


### <a name="authentication"></a> Authentication

To retrieve or store content with Flextype, you first need to authenticate your app with an token. Flextype offers three APIs, and each requires separate authentication.

We recommend using different access tokens for different environments in your development process. For example, use one for your production environment and another for staging or continuous integration. This allows you to revoke them individually in the future and manage your delivery channels independently.

You should send the authentication token `token` to an API as a query parameter for `GET` requests and for all `POST`, `PUT`, `PATCH`, `DELETE` requests you should send the access authentication token `access_token` to an API inside request body.

### <a name="http-details"></a> HTTP details

#### Cross-origin resource sharing

[CORS (Cross-origin resource sharing)](https://en.wikipedia.org/wiki/Cross-origin_resource_sharing) allows JavaScript web apps to make HTTP requests to other domains. This is important for third party web apps using Flextype, as without CORS, a JavaScript app hosted on example.com couldn't access our APIs because they're hosted on another.com which is a different domain.

CORS is [supported by all modern browsers](http://caniuse.com/cors). Read more about using CORS in this [tutorial](https://www.html5rocks.com/en/tutorials/cors/).

#### JSON format details

Flextype represents resources as [JSON](http://json.org/), encoded in UTF-8. Flextype represents dates and times as [Unix Timestamp](https://www.unixtimestamp.com).

### <a name="errors"></a> Errors

When something goes wrong with an API request, our server generates an error. The error message contains an appropriate HTTP status code in the header and a JSON response in the body.

#### Error types

| HTTP status code | Error code | Description |
| --- | --- | --- |
| 401 Unauthorized | AccessTokenInvalid | Incorrect authentication credentials. |
| 404 Not Found | NotFound | The requested resource or endpoint could not be found. |
