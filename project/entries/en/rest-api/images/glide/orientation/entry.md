---
title: Orientation
breadcrumbs:
  1:
    title: "Rest API"
    link: "[url]/en/rest-api/"
  2:
    title: "Images"
    link: "[url]/en/rest-api/images/"
---

`or`

Rotates the image. Accepts auto, `0`, `90`, `180` or `270`. Default is `auto`. The auto option uses Exif data to automatically orient images correctly.

##### Usage

<div class="file-header">Request</div>

```http
GET YOUR_APP_URL/api/images/entries/en/image.jpg?or=0&token=YOUR_IMAGES_TOKEN
GET YOUR_APP_URL/api/images/entries/en/image.jpg?or=90&token=YOUR_IMAGES_TOKEN
GET YOUR_APP_URL/api/images/entries/en/image.jpg?or=180&token=YOUR_IMAGES_TOKEN
GET YOUR_APP_URL/api/images/entries/en/image.jpg?or=270&token=YOUR_IMAGES_TOKEN
```

##### Example

<div class="file-header">Request</div>

```http
GET [url]/api/images/entries/en/image.jpg?or=0&token=4864fb8e1ebe080e6e4ad5c4363083a6
GET [url]/api/images/entries/en/image.jpg?or=90&token=4864fb8e1ebe080e6e4ad5c4363083a6
GET [url]/api/images/entries/en/image.jpg?or=180&token=4864fb8e1ebe080e6e4ad5c4363083a6
GET [url]/api/images/entries/en/image.jpg?or=270&token=4864fb8e1ebe080e6e4ad5c4363083a6
```

##### Result

<img width="200" class="inline" src="[url]/api/images/entries/en/image.jpg?or=0&token=4864fb8e1ebe080e6e4ad5c4363083a6">
<img width="200" class="inline" src="[url]/api/images/entries/en/image.jpg?or=90&token=4864fb8e1ebe080e6e4ad5c4363083a6">
<img width="200" class="inline" src="[url]/api/images/entries/en/image.jpg?or=180&token=4864fb8e1ebe080e6e4ad5c4363083a6">
<img width="200" class="inline" src="[url]/api/images/entries/en/image.jpg?or=270&token=4864fb8e1ebe080e6e4ad5c4363083a6">
