---
title: Filter
breadcrumbs:
  1:
    title: "Rest API"
    link: "[url]/en/rest-api/"
  2:
    title: "Images"
    link: "[url]/en/rest-api/images/"
---

`filt`

Applies a filter effect to the image. Accepts `greyscale` or `sepia`.

##### Usage

<div class="file-header">Request</div>

```http
GET YOUR_APP_URL/api/images/entries/en/image.jpg?w=250&dpr=2&filt=greyscale&token=YOUR_IMAGES_TOKEN
GET YOUR_APP_URL/api/images/entries/en/image.jpg?w=250&dpr=2&filt=sepia&token=YOUR_IMAGES_TOKEN
```

##### Example

<div class="file-header">Request</div>

```http
GET [url]/api/images/entries/en/image.jpg?w=250&dpr=2&filt=greyscale&token=4864fb8e1ebe080e6e4ad5c4363083a6
GET [url]/api/images/entries/en/image.jpg?w=250&dpr=2&filt=sepia&token=4864fb8e1ebe080e6e4ad5c4363083a6
```

##### Result

<img width="200" class="inline" src="[url]/api/images/entries/en/image.jpg?w=200&dpr=2&filt=greyscale&token=4864fb8e1ebe080e6e4ad5c4363083a6">
<img width="200" class="inline" src="[url]/api/images/entries/en/image.jpg?w=200&dpr=2&filt=sepia&token=4864fb8e1ebe080e6e4ad5c4363083a6">
