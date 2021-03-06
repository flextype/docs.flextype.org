---
title: Format
breadcrumbs:
  1:
    title: "Rest API"
    link: "[url]/en/rest-api/"
  2:
    title: "Images"
    link: "[url]/en/rest-api/images/"
---

`fm`

Encodes the image to a specific format. Accepts `jpg`, `pjpg` (progressive jpeg), `png`, `gif` or `webp`. Defaults to jpg.

##### Usage

<div class="file-header">Request</div>

```http
GET YOUR_APP_URL/api/images/entries/en/image.jpg?fm=gif&token=YOUR_IMAGES_TOKEN
```

##### Example

<div class="file-header">Request</div>

```http
GET [url]/api/images/entries/en/image.jpg?fm=gif&token=4864fb8e1ebe080e6e4ad5c4363083a6
```

##### Result

<img width="200" class="inline" src="[url]/api/images/entries/en/image.jpg?fm=gif&token=4864fb8e1ebe080e6e4ad5c4363083a6">
