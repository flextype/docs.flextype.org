---
title: Device pixel ratio
breadcrumbs:
  0:
    title: "Documentation"
    link: "[url]/en/"
  1:
    title: "API Reference"
    link: "[url]/en/api/"
  2:
    title: "Images API"
    link: "[url]/en/api/images/"
---

`dpr`

The device pixel ratio is used to easily convert between CSS pixels and device pixels. This makes it possible to display images at the correct pixel density on a variety of devices such as Apple devices with Retina Displays and Android devices. You must specify either a width, a height, or both for this parameter to work. The default is 1. The maximum value that can be set for dpr is 8.

##### Usage

<div class="file-header">Request</div>
```http
GET YOUR_APP_URL/api/images/en/image.jpg?w=250&dpr=2&token=YOUR_IMAGES_TOKEN
```

##### Example

<div class="file-header">Request</div>
```http
GET [url]/api/images/en/image.jpg?w=250&dpr=2&token=4864fb8e1ebe080e6e4ad5c4363083a6
```

##### Result

<img width="200" class="inline" src="[url]/api/images/en/image.jpg?w=250&dpr=2&token=4864fb8e1ebe080e6e4ad5c4363083a6">
