---
title: Brightness
breadcrumbs:
  1:
    title: "Rest API"
    link: "[url]/en/rest-api/"
  2:
    title: "Images"
    link: "[url]/en/rest-api/images/"
---

`bri`

Adjusts the image brightness. Use values between `-100` and `+100`, where `0` represents no change.

##### Usage

<div class="file-header">Request</div>
```http
GET YOUR_APP_URL/api/images/entries/en/image.jpg?bri=-50&token=YOUR_IMAGES_TOKEN
GET YOUR_APP_URL/api/images/entries/en/image.jpg?bri=50&token=YOUR_IMAGES_TOKEN
```

##### Example

<div class="file-header">Request</div>
```http
GET [url]/api/images/entries/en/image.jpg?bri=-50&token=4864fb8e1ebe080e6e4ad5c4363083a6
GET [url]/api/images/entries/en/image.jpg?bri=50&token=4864fb8e1ebe080e6e4ad5c4363083a6
```

##### Result

<img width="200" class="inline" src="[url]/api/images/entries/en/image.jpg?bri=-50&token=4864fb8e1ebe080e6e4ad5c4363083a6">
<img width="200" class="inline" src="[url]/api/images/entries/en/image.jpg?bri=50&token=4864fb8e1ebe080e6e4ad5c4363083a6">
