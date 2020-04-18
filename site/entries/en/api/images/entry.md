---
title: Images API
description: The Flextype Images API allows the retrieval and manipulation of image files referenced from uploads.
breadcrumbs:
  0:
    title: "Documentation"
    link: "[site_url]/en/"
  1:
    title: "API"
    link: "[site_url]/en/api/"
on_this_page:
  0:
    title: "Endpoint"
    link: "endpoint"
  1:
    title: "Fetch image"
    link: "fetch-image"
  2:
    title: "Image manipulations"
    link: "displaying-images-in-the-template-glide-options"
---

The Flextype Images API allows the retrieval and manipulation of image files referenced from Flextype site uploads directory to apps, websites and other media. Images are delivered as files.

### <a name="endpoint"></a> Endpoint

| Method | Endpoint | Description |
| --- | --- | --- |
| GET | /api/images | Fetch image |

<br>

### <a name="fetch-image"></a> Fetch image

<div class="file-header">Request</div>
```plaintext
GET /api/images/{path:.+}?VALID_ARGUMENTS&token=YOUR_IMAGES_TOKEN
```

##### Parameters

| name | |  Description |
| --- | --- | --- |
| {path:.+} | REQUIRED | The file path with valid params for image manipulations. |

##### Query

| name | |  Description |
| --- | --- | --- |
| * | REQUIRED | [Valid arguments for images manipulation](#displaying-images-in-the-template-glide-options) |
| token | REQUIRED | Valid Images API token. |

##### Examples

Fetch image **venom-2** from upload directory **/movies/venom-2/**

<div class="file-header">Request</div>
```plaintext
GET /api/images/movies/venom-2/venom-2.jpg?token=c1fda5a94603a7296f3a0a5370cfe59f
```

Fetch image **venom-2** from upload directory **/movies/venom-2/** and do several image manipulations

<div class="file-header">Request</div>
```plaintext
GET /api/images/movies/venom-2/venom-2.jpg?w=100&&q=70&token=c1fda5a94603a7296f3a0a5370cfe59f
```

### <a name="displaying-images-in-the-template-glide-options"></a> A complete list of available options for Glide/Intervention
* [Orientation](./images/glide/orientation)
* [Flip](./images/glide/flip)
* [Crop](./images/glide/crop)
* [Width](./images/glide/width)
* [Height](./images/glide/height)
* [Fit](./images/glide/fit)
* [Device pixel ratio](./images/glide/device-pixel-ratio)
* [Brightness](./images/glide/brightness)
* [Contrast](./images/glide/contrast)
* [Gamma](./images/glide/gamma)
* [Sharpen](./images/glide/sharpen)
* [Blur](./images/glide/blur)
* [Pixelate](./images/glide/pixelate)
* [Filter](./images/glide/filter)
* [Border](./images/images/glide/border)
* [Quality](./images/glide/quality)
* [Format](./images/glide/format)
* [Relative dimensions](./images/glide/relative-dimensions)
* [Colors](./images/glide/colors)
