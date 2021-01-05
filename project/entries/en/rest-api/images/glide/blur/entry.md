---
title: Blur
breadcrumbs:
  1:
    title: "Rest API"
    link: "[url]/en/rest-api/"
  2:
    title: "Images"
    link: "[url]/en/rest-api/images/"
---

`blur`

Adds a blur effect to the image. Use values between `0` and `100`.

##### Usage

<div class="file-header">Request</div>
```http
GET YOUR_APP_URL/api/images/entries/en/content/media/image.jpg?blur=0&token=YOUR_IMAGES_TOKEN
GET YOUR_APP_URL/api/images/entries/en/content/media/image.jpg?blur=50&token=YOUR_IMAGES_TOKEN
GET YOUR_APP_URL/api/images/entries/en/content/media/image.jpg?blur=100&token=YOUR_IMAGES_TOKEN
```

##### Example

<div class="file-header">Request</div>
```http
GET [url]/api/images/entries/en/content/media/image.jpg?blur=0&token=4864fb8e1ebe080e6e4ad5c4363083a6
GET [url]/api/images/entries/en/content/media/image.jpg?blur=50&token=4864fb8e1ebe080e6e4ad5c4363083a6
GET [url]/api/images/entries/en/content/media/image.jpg?blur=100&token=4864fb8e1ebe080e6e4ad5c4363083a6
```

##### Result

<img width="200" class="inline" src="[url]/api/images/entries/en/image.jpg?q=70&w=200&dpr=2&blur=0&token=4864fb8e1ebe080e6e4ad5c4363083a6">
<img width="200" class="inline" src="[url]/api/images/entries/en/image.jpg?q=70&w=200&dpr=2&blur=50&token=4864fb8e1ebe080e6e4ad5c4363083a6">
<img width="200" class="inline" src="[url]/api/images/entries/en/image.jpg?q=70&w=200&dpr=2&blur=100&token=4864fb8e1ebe080e6e4ad5c4363083a6">
