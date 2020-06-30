---
title: Rest APIs
description: Flextype provides APIs organized around Representational State Transfer (REST) APIs for working with your content. Each of these APIs serve a different purpose, so which one to use depends on what you want to do.
breadcrumbs:
  0:
    title: "Documentation"
    link: "[url]/en/"
  1:
    title: "Concepts"
    link: "[url]/en/concepts/"
---

Flextype provides APIs organized around Representational State Transfer (REST) for working with your content. Each of these APIs serve a different purpose, so which one to use depends on what you want to do:

* If you're retrieving content to display to users in an app or website, use the <a href="[url]/en/api/delivery">Content Delivery API</a>.
* If you want to programmatically create or update content items, use the <a href="[url]/en/api/management">Content Management API</a>.
* If you want to retrieve and apply transformations to images stored in Flextype, use the <a href="[url]/en/api/images">Images API</a>.


### Content Delivery API

The Content Delivery API (CDA) is a read-only API organized around Representational State Transfer (REST) for delivering content from Flextype to apps, websites and other media. Content is delivered as JSON data.

For more details <a href="[url]/en/api/delivery">read the reference guide for the Content Delivery API</a>.

### Content Management API

The Content Management API (CMA), is a read-write API for managing content and it is organized around Representational State Transfer (REST).

You could use the CMA for several use cases, such as:

* Automatic imports from WordPress, Joomla, Drupal, and more.
* Integration with other backend systems, such as an e-commerce shop.
* Building custom editing experiences.

For more details <a href="[url]/en/api/management">read the reference guide for the Content Management API</a>.

### Images API

The Flextype Images API allows the retrieval and manipulation of image files referenced from Flextype site uploads directory to apps, websites and other media. Images are delivered as files.

For more details <a href="[url]/en/api/images">read the reference guide for the Images API</a>.
