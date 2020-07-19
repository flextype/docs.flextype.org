---
title: Crop
breadcrumbs:
  0:
    title: "Documentation"
    link: "[url]/en/"
  1:
    title: "Rest API"
    link: "[url]/en/rest-api/"
  2:
    title: "Images"
    link: "[url]/en/rest-api/images/"
---

`crop`

Crops the image to specific dimensions prior to any other resize operations.<br>
Required format: `width, height, x, y`.

##### Usage

<div class="file-header">Request</div>
```http
GET YOUR_APP_URL/api/images/en/image.jpg?crop=2000,2000,600,655&token=YOUR_IMAGES_TOKEN
```

##### Example

<div class="file-header">Request</div>
```http
GET [url]/api/images/en/image.jpg?crop=2000,2000,600,655&token=4864fb8e1ebe080e6e4ad5c4363083a6
```

##### Result

<img width="200" class="inline" src="[url]/api/images/en/image.jpg?crop=2000,2000,600,655&token=4864fb8e1ebe080e6e4ad5c4363083a6">
