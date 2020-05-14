---
title: Quality
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

`q`

Defines the quality of the image. Use values between `0` and `100`. Defaults to `90`. Only relevant if the format is set to `jpg` or `pjpg`.


##### Usage

<div class="file-header">Request</div>
```http
GET YOUR_APP_URL/api/images/en/image.jpg?q=100&token=YOUR_IMAGES_TOKEN
GET YOUR_APP_URL/api/images/en/image.jpg?q=65&token=YOUR_IMAGES_TOKEN
GET YOUR_APP_URL/api/images/en/image.jpg?q=25&token=YOUR_IMAGES_TOKEN
```

##### Example

<div class="file-header">Request</div>
```http
GET [url]/api/images/en/image.jpg?q=100&token=4864fb8e1ebe080e6e4ad5c4363083a6
GET [url]/api/images/en/image.jpg?q=65&token=4864fb8e1ebe080e6e4ad5c4363083a6
GET [url]/api/images/en/image.jpg?q=25&token=4864fb8e1ebe080e6e4ad5c4363083a6
```

##### Result

<img width="200" class="inline" src="[url]/api/images/en/image.jpg?q=100&token=4864fb8e1ebe080e6e4ad5c4363083a6">
<img width="200" class="inline" src="[url]/api/images/en/image.jpg?q=65&token=4864fb8e1ebe080e6e4ad5c4363083a6">
<img width="200" class="inline" src="[url]/api/images/en/image.jpg?q=25&token=4864fb8e1ebe080e6e4ad5c4363083a6">
