---
title: Pixelate
breadcrumbs:
  1:
    title: "Rest API"
    link: "[url]/en/rest-api/"
  2:
    title: "Images"
    link: "[url]/en/rest-api/images/"
---

`pixel`

Applies a pixelation effect to the image. Use values between `0` and `1000`.

##### Usage

<div class="file-header">Request</div>
```http
GET YOUR_APP_URL/api/images/entries/en/image.jpg?pixel=0&token=YOUR_IMAGES_TOKEN
GET YOUR_APP_URL/api/images/entries/en/image.jpg?pixel=100&token=YOUR_IMAGES_TOKEN
GET YOUR_APP_URL/api/images/entries/en/image.jpg?pixel=1000&token=YOUR_IMAGES_TOKEN
```

##### Example

<div class="file-header">Request</div>
```http
GET [url]/api/images/entries/en/image.jpg?pixel=0&token=4864fb8e1ebe080e6e4ad5c4363083a6
GET [url]/api/images/entries/en/image.jpg?pixel=100&token=4864fb8e1ebe080e6e4ad5c4363083a6
GET [url]/api/images/entries/en/image.jpg?pixel=1000&token=4864fb8e1ebe080e6e4ad5c4363083a6
```

##### Result

<img width="200" class="inline" src="[url]/api/images/entries/en/image.jpg?pixel=0&token=4864fb8e1ebe080e6e4ad5c4363083a6">
<img width="200" class="inline" src="[url]/api/images/entries/en/image.jpg?pixel=100&token=4864fb8e1ebe080e6e4ad5c4363083a6">
<img width="200" class="inline" src="[url]/api/images/entries/en/image.jpg?pixel=1000&token=4864fb8e1ebe080e6e4ad5c4363083a6">
