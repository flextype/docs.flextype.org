---
title: Gamma
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

`gam`

Adjusts the image gamma. Use values between `0.1` and `9.99`.

##### Usage

<div class="file-header">Request</div>
```http
GET YOUR_APP_URL/api/images/en/image.jpg?gam=0.1&token=YOUR_IMAGES_TOKEN
GET YOUR_APP_URL/api/images/en/image.jpg?gam=9.99&token=YOUR_IMAGES_TOKEN
```

##### Example

<div class="file-header">Request</div>
```http
GET [url]/api/images/en/image.jpg?gam=0.1&token=4864fb8e1ebe080e6e4ad5c4363083a6
GET [url]/api/images/en/image.jpg?gam=9.99&token=4864fb8e1ebe080e6e4ad5c4363083a6
```

##### Result

<img width="200" class="inline" src="[url]/api/images/en/image.jpg?gam=0.1&token=4864fb8e1ebe080e6e4ad5c4363083a6">
<img width="200" class="inline" src="[url]/api/images/en/image.jpg?gam=9.99&token=4864fb8e1ebe080e6e4ad5c4363083a6">
