---
title: Media
---

Entries can have any number and kind of images, videos, documents or other files.  
Those files are being stored directly in the entry folder.

### Getting list of media files for entry in the template

```twig
{% set media = filesystem_list_contents(PATH_ENTRIES ~ '/' ~ entry.slug) %}
```

### Displaying images in the template

```twig
{% for image in media %}
    {% if image.extension == 'jpg' %}
        <img src="{{ base_url() }}/image/{{ entry.slug }}/{{ image.filename }}">
    {% endif %}
{% endfor %}
```

### Display images in the template using the Glide/Intervention

The built-in Glide/Intervention library allows you to do manipulations with images and cache the images.

An example of using the Glide/Intervention library to resize images:

```twig
{% for image in media %}
    {% if image.extension == 'jpg' %}
        <img src="{{ base_url() }}/image/{{ entry.slug }}/{{ image.filename }}?dpr=2&w=350&q=60">
    {% endif %}
{% endfor %}
```

### A complete list of available options

#### Orientation `or`

Rotates the image. Accepts auto, `0`, `90`, `180` or `270`. Default is `auto`. The auto option uses Exif data to automatically orient images correctly.

Example:

```twig
<img src="{{ base_url() }}/image/en/content/media/image.jpg?or=0">
<img src="{{ base_url() }}/image/en/content/media/image.jpg?or=90">
<img src="{{ base_url() }}/image/en/content/media/image.jpg?or=180">
<img src="{{ base_url() }}/image/en/content/media/image.jpg?or=270">
```

Result:

<img width="200" src="[base_url]/image/en/content/media/image.jpg?q=70&w=200&dpr=2&or=0">
<img width="200" src="[base_url]/image/en/content/media/image.jpg?q=70&w=200&dpr=2&or=90">
<img width="200" src="[base_url]/image/en/content/media/image.jpg?q=70&w=200&dpr=2&or=180">
<img width="200" src="[base_url]/image/en/content/media/image.jpg?q=70&w=200&dpr=2&or=270">

#### Flip `flip`

Flips the image. Accepts `v`, `h` and `both`.

Example:

```twig
<img src="{{ base_url() }}/image/en/content/media/image.jpg?flip=v">
<img src="{{ base_url() }}/image/en/content/media/image.jpg?flip=h">
<img src="{{ base_url() }}/image/en/content/media/image.jpg?flip=both">
```

Result:

<img width="200" src="[base_url]/image/en/content/media/image.jpg?q=70&w=200&dpr=2&flip=v">
<img width="200" src="[base_url]/image/en/content/media/image.jpg?q=70&w=200&dpr=2&flip=h">
<img width="200" src="[base_url]/image/en/content/media/image.jpg?q=70&w=200&dpr=2&flip=both">

#### Crop `crop`

Crops the image to specific dimensions prior to any other resize operations. Required format: `width, height, x, y`.

Example:

```twig
<img src="{{ base_url() }}/image/en/content/media/image.jpg?crop=2000,2000,600,655">
```

Result:

<img width="200" src="[base_url]/image/en/content/media/image.jpg?q=70&w=200&dpr=2&crop=2000,2000,600,655">

#### Width `w`

Sets the width of the image, in pixels.

Example:

```twig
<img src="{{ base_url() }}/image/en/content/media/image.jpg?w=100">
<img src="{{ base_url() }}/image/en/content/media/image.jpg?w=200">
<img src="{{ base_url() }}/image/en/content/media/image.jpg?w=300">
```

Result:

<img width="100" src="[base_url]/image/en/content/media/image.jpg?q=70&w=100&dpr=2">
<img width="200" src="[base_url]/image/en/content/media/image.jpg?q=70&w=200&dpr=2">
<img width="300" src="[base_url]/image/en/content/media/image.jpg?q=70&w=300&dpr=2">

#### Height `h`

Sets the height of the image, in pixels.

Example:

```twig
<img src="{{ base_url() }}/image/en/content/media/image.jpg?h=100">
<img src="{{ base_url() }}/image/en/content/media/image.jpg?h=200">
<img src="{{ base_url() }}/image/en/content/media/image.jpg?h=300">
```

Result:

<img height="100" src="[base_url]/image/en/content/media/image.jpg?q=70&h=100&dpr=2">
<img height="200" src="[base_url]/image/en/content/media/image.jpg?q=70&h=200&dpr=2">
<img height="300" src="[base_url]/image/en/content/media/image.jpg?q=70&h=300&dpr=2">

#### Fit `fit`

Sets how the image is fitted to its target dimensions.

**Accepts:**
* `contain` - Default. Resizes the image to fit within the width and height boundaries without cropping, distorting or altering the aspect ratio.
* `max`: Resizes the image to fit within the width and height boundaries without cropping, distorting or altering the aspect ratio, and will also not increase the size of the image if it is smaller than the output size.
* `fill` - Resizes the image to fit within the width and height boundaries without cropping or distorting the image, and the remaining space is filled with the background color. The resulting image will match the constraining dimensions.
* `stretch` - Stretches the image to fit the constraining dimensions exactly. The resulting image will fill the dimensions, and will not maintain the aspect ratio of the input image.
* `crop` - Resizes the image to fill the width and height boundaries and crops any excess image data. The resulting image will match the width and height constraints without distorting the image. See the crop section for more information.

Example:

```twig
<img src="{{ base_url() }}/image/en/content/media/image.jpg?w=300&h=300&fit=stretch">
```

Result:

<img height="200" src="[base_url]/image/en/content/media/image.jpg?q=70&w=100&h=200&dpr=2&fit=stretch">

#### Device pixel ratio `dpr`

The device pixel ratio is used to easily convert between CSS pixels and device pixels. This makes it possible to display images at the correct pixel density on a variety of devices such as Apple devices with Retina Displays and Android devices. You must specify either a width, a height, or both for this parameter to work. The default is 1. The maximum value that can be set for dpr is 8.

Example:

```twig
<img src="{{ base_url() }}/image/en/content/media/image.jpg?dpr=2">
```

Result:

<img width="200" src="[base_url]/image/en/content/media/image.jpg?q=70&w=200&h=200&dpr=2">

#### Brightness `bri`

Adjusts the image brightness. Use values between `-100` and `+100`, where `0` represents no change.

Example:

```twig
<img src="{{ base_url() }}/image/en/content/media/image.jpg?bri=-50">
<img src="{{ base_url() }}/image/en/content/media/image.jpg?bri=50">
```

Result:

<img width="200" src="[base_url]/image/en/content/media/image.jpg?q=70&w=200&dpr=2&bri=-50">
<img width="200" src="[base_url]/image/en/content/media/image.jpg?q=70&w=200&dpr=2&bri=50">

#### Contrast `con`

Adjusts the image contrast. Use values between `-100` and `+100`, where `0` represents no change.

Example:

```twig
<img src="{{ base_url() }}/image/en/content/media/image.jpg?con=-50">
<img src="{{ base_url() }}/image/en/content/media/image.jpg?con=50">
```

Result:

<img width="200" src="[base_url]/image/en/content/media/image.jpg?q=70&w=200&dpr=2&con=-50">
<img width="200" src="[base_url]/image/en/content/media/image.jpg?q=70&w=200&dpr=2&con=50">

#### Gamma `gam`

Adjusts the image gamma. Use values between `0.1` and `9.99`.

Example:

```twig
<img src="{{ base_url() }}/image/en/content/media/image.jpg?gam=0.1">
<img src="{{ base_url() }}/image/en/content/media/image.jpg?gam=9.99">
```

Result:

<img width="200" src="[base_url]/image/en/content/media/image.jpg?q=70&w=200&dpr=2&gam=0.1">
<img width="200" src="[base_url]/image/en/content/media/image.jpg?q=70&w=200&dpr=2&gam=9.99">

#### Sharpen `sharp`

Sharpen the image. Use values between `0` and `100`.

Example:

```twig
<img src="{{ base_url() }}/image/en/content/media/image.jpg?sharp=0">
<img src="{{ base_url() }}/image/en/content/media/image.jpg?sharp=50">
<img src="{{ base_url() }}/image/en/content/media/image.jpg?sharp=100">
```

Result:

<img width="200" src="[base_url]/image/en/content/media/image.jpg?q=70&w=200&dpr=2&sharp=0">
<img width="200" src="[base_url]/image/en/content/media/image.jpg?q=70&w=200&dpr=2&sharp=50">
<img width="200" src="[base_url]/image/en/content/media/image.jpg?q=70&w=200&dpr=2&sharp=100">

#### Blur `blur`

Adds a blur effect to the image. Use values between `0` and `100`.

Example:

```twig
<img src="{{ base_url() }}/image/en/content/media/image.jpg?blur=0">
<img src="{{ base_url() }}/image/en/content/media/image.jpg?blur=50">
<img src="{{ base_url() }}/image/en/content/media/image.jpg?blur=100">
```

Result:

<img width="200" src="[base_url]/image/en/content/media/image.jpg?q=70&w=200&dpr=2&blur=0">
<img width="200" src="[base_url]/image/en/content/media/image.jpg?q=70&w=200&dpr=2&blur=50">
<img width="200" src="[base_url]/image/en/content/media/image.jpg?q=70&w=200&dpr=2&blur=100">

#### Pixelate `pixel`

Applies a pixelation effect to the image. Use values between `0` and `1000`.

Example:

```twig
<img src="{{ base_url() }}/image/en/content/media/image.jpg?pixel=0">
<img src="{{ base_url() }}/image/en/content/media/image.jpg?pixel=5">
<img src="{{ base_url() }}/image/en/content/media/image.jpg?pixel=10">
```

Result:

<img width="200" src="[base_url]/image/en/content/media/image.jpg?q=70&w=200&dpr=2&pixel=0">
<img width="200" src="[base_url]/image/en/content/media/image.jpg?q=70&w=200&dpr=2&pixel=5">
<img width="200" src="[base_url]/image/en/content/media/image.jpg?q=70&w=200&dpr=2&pixel=10">

#### Filter `filt`

Applies a filter effect to the image. Accepts `greyscale` or `sepia`.

Example:

```twig
<img src="{{ base_url() }}/image/en/content/media/image.jpg?filt=greyscale">
<img src="{{ base_url() }}/image/en/content/media/image.jpg?filt=sepia">
```

Result:

<img width="200" src="[base_url]/image/en/content/media/image.jpg?q=70&w=200&dpr=2&filt=greyscale">
<img width="200" src="[base_url]/image/en/content/media/image.jpg?q=70&w=200&dpr=2&filt=sepia">


### Border `border`

Add a border to the image. Required format: `width, color, method`.

**Width**

Sets the border width in pixels, or using relative dimensions.

**Color**

Sets the border color. See supported colors for more information on the available color formats.

**Method**

Sets how the border will be displayed. Available options:

* `overlay` - Place border on top of image (default).
* `shrink` - Shrink image within border (canvas does not change).
* `expand` - Expands canvas to accommodate border.

Example:

```twig
<img src="{{ base_url() }}/image/en/content/media/image.jpg?border=10,5000,overlay">
<img src="{{ base_url() }}/image/en/content/media/image.jpg?border=10,FFCC33,expand">
```

Result:

<img width="200" src="[base_url]/image/en/content/media/image.jpg?q=70&w=200&dpr=2&border=10,5000,overlay">
<img width="200" src="[base_url]/image/en/content/media/image.jpg?q=70&w=200&dpr=2&border=10,FFCC33,expand">

#### Quality `q`

Defines the quality of the image. Use values between `0` and `100`. Defaults to `90`. Only relevant if the format is set to `jpg` or `pjpg`.

Example:

```twig
<img src="{{ base_url() }}/image/en/content/media/image.jpg?q=25">
<img src="{{ base_url() }}/image/en/content/media/image.jpg?q=70">
```

Result:

<img width="200" src="[base_url]/image/en/content/media/image.jpg?q=25&w=200&dpr=2">
<img width="200" src="[base_url]/image/en/content/media/image.jpg?q=70&w=200&dpr=2">

#### Format `fm`

Encodes the image to a specific format. Accepts `jpg`, `pjpg` (progressive jpeg), `png`, `gif` or `webp`. Defaults to jpg.

Example:

```twig
<img src="{{ base_url() }}/image/en/content/media/image.jpg?fm=gif">
```

Result:

<img width="200" src="[base_url]/image/en/content/media/image.jpg?q=70&w=200&dpr=2&fm=gif">

### Relative dimensions

Relative dimensions allow you to specify a width or height value as a percentage of the main image. This is helpful for features like watermarks and borders.

To use a relative dimension, simply provide a percentage as a number (between `0` and `100`), followed by a `w` (width) or `h` (height). For example, `5w` represents 5% of the width of the main image.

### Colors

Glide supports a variety of color formats. In addition to the 140 color names supported by all modern browsers (listed below), Glide accepts hexadecimal RGB and RBG alpha formats.

#### Hexadecimal

* 3 digit RGB: CCC
* 4 digit ARGB (alpha): 5CCC
* 6 digit RGB: CCCCCC
* 8 digit ARGB (alpha): 55CCCCCC

#### Color names

```yaml
aliceblue
antiquewhite
aqua
aquamarine
azure
beige
bisque
black
blanchedalmond
blue
blueviolet
brown
burlywood
cadetblue
chartreuse
chocolate
coral
cornflowerblue
cornsilk
crimson
cyan
darkblue
darkcyan
darkgoldenrod
darkgray
darkgreen
darkkhaki
darkmagenta
darkolivegreen
darkorange
darkorchid
darkred
darksalmon
darkseagreen
darkslateblue
darkslategray
darkturquoise
darkviolet
deeppink
deepskyblue
dimgray
dodgerblue
firebrick
floralwhite
forestgreen
fuchsia
gainsboro
ghostwhite
gold
goldenrod
gray
green
greenyellow
honeydew
hotpink
indianred
indigo
ivory
khaki
lavender
lavenderblush
lawngreen
lemonchiffon
lightblue
lightcoral
lightcyan
lightgoldenrodyellow
lightgray
lightgreen
lightpink
lightsalmon
lightseagreen
lightskyblue
lightslategray
lightsteelblue
lightyellow
lime
limegreen
linen
magenta
maroon
mediumaquamarine
mediumblue
mediumorchid
mediumpurple
mediumseagreen
mediumslateblue
mediumspringgreen
mediumturquoise
mediumvioletred
midnightblue
mintcream
mistyrose
moccasin
navajowhite
navy
oldlace
olive
olivedrab
orange
orangered
orchid
palegoldenrod
palegreen
paleturquoise
palevioletred
papayawhip
peachpuff
peru
pink
plum
powderblue
purple
rebeccapurple
red
rosybrown
royalblue
saddlebrown
salmon
sandybrown
seagreen
seashell
sienna
silver
skyblue
slateblue
slategray
snow
springgreen
steelblue
tan
teal
thistle
tomato
turquoise
violet
wheat
white
whitesmoke
yellow
yellowgreen
```


<!--
<http://glide.thephpleague.com/1.0/api/quick-reference/>
-->
