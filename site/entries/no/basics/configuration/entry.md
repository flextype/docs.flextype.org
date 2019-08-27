---
title: Configuration
---
Flextype allows you to configure your site in any way you can dream up, and it’s thanks to the powerful and flexible configuration options that make this possible.

You can update and create site configuration by editing file `/site/config/settings.json`

    {
      "title":"Flextype",
      "description":"Build fast, flexible, easier to manage websites with Flextype.",
      "keywords":"flextype, php, cms, flat-file cms, flat cms, flatfile cms, html",
      "robots":"index, follow",
      "author":{
        "email":"",
        "name":""
      },
      "timezone":"UTC",
      "charset":"UTF-8",
      "date_format":"F d Y H:i:s",
      "theme":"default",
      "locale":"en_US",
      "entries":{
        "main":"home",
        "media":{
          "upload_images_quality":70,
          "upload_images_width":1600,
          "upload_images_height":0,
          "accept_file_types":"gif, jpg, jpeg, png, ico, zip, tgz, txt, md, doc, docx, pdf, epub, xls,
           xlsx, ppt, pptx, mp3, ogg, wav, m4a, mp4, m4v, ogv, wmv, avi, webm, svg"
        },
        "error404":{
          "title":"Error 404",
          "description":"We're sorry but the page you are looking for doesn't appear to exist!",
          "content":"We're sorry but the page you are looking for doesn't appear to exist!",
          "template":"default"
        }
      },
      "errors":{
        "display":false
      },
      "cache":{
        "enabled":true,
        "prefix":"flextype",
        "driver":"auto",
        "lifetime":604800,
        "memcache":{
          "server":"localhost",
          "port":11211
        },
        "memcached":{
          "server":"localhost",
          "port":11211
        },
        "redis":{
          "socket":false,
          "password":false,
          "server":"localhost",
          "port":6379
        },
        "sqlite3":{
          "database":"flextype",
          "table":"flextype"
        }
      },
      "admin_panel":{
        "theme":"light"
      },
      "whoops" : {
        "editor": "atom",
        "page_title": "Error!"
      },
      "display_error_details": true,
      "add_content_length_header": true,
      "router_cache_file": false,
      "determine_route_before_app_middleware": false,
      "output_buffering": "append",
      "response_chunk_size": 4096,
      "http_version": "1.1",
      "twig": {
        "auto_reload": true
      },
      "slugify": {
          "separator": "-",
          "lowercase": true,
          "trim": true,
          "regexp": "/[^A-Za-z0-9]+/",
          "lowercase_after_regexp": false,
          "strip_tags": false
      },
      "image": {
        "driver": "gd"
      }
    }
    

Also you can update site setting in Admin Panel on the Settings page.