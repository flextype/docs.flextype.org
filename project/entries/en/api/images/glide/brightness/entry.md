---
title: Brightness
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

`bri`

Adjusts the image brightness. Use values between `-100` and `+100`, where `0` represents no change.

Usage:

<div class="file-header">Request</div>
```http
GET YOUR_APP_URL/api/images/en/image.jpg?bri=-50&token=YOUR_IMAGES_TOKEN
GET YOUR_APP_URL/api/images/en/image.jpg?bri=50&token=YOUR_IMAGES_TOKEN
```

Example:

<div class="file-header">Request</div>
```http
GET [url]/api/images/en/image.jpg?bri=-50&token=4864fb8e1ebe080e6e4ad5c4363083a6
GET [url]/api/images/en/image.jpg?bri=50&token=4864fb8e1ebe080e6e4ad5c4363083a6
```

Result:

<img width="200" class="inline" src="[url]/api/images/en/image.jpg?bri=-50&token=4864fb8e1ebe080e6e4ad5c4363083a6">
<img width="200" class="inline" src="[url]/api/images/en/image.jpg?bri=50&token=4864fb8e1ebe080e6e4ad5c4363083a6">
