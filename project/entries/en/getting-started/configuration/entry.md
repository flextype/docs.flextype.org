---
title: Configuration
description: Flextype allows you to configure your site in any way you can dream up, and it’s thanks to the powerful and flexible configuration options that make this possible.
breadcrumbs:
  1:
    title: "Getting Started"
    link: "[url]/en/getting-started/"
---
Flextype allows you to configure your project in any way you can dream up, and it’s thanks to the powerful and flexible configuration options that make this possible.

All Flextype configuration files are written in YAML syntax with a `.yaml` file extension. YAML is very intuitive which makes it very easy to both read and write.

You can update and create project configuration by editing file `/project/config/settings.yaml`

<div class="file-header"><i class="far fa-file-alt"></i> /project/config/settings.yaml</div>
```
# Set the timezone to be used on the project.
# For a list of valid timezone settings, see:
# http://php.net/manual/en/timezones.php
timezone: UTC

# Charset
#
# Set internal character encoding.
#
# Currently the following names are supported:
# http://php.net/manual/en/function.mb-regex-encoding.php#121645
charset: UTF-8

# The locale that'll be used by the Flextype.
#
# Available locales to use: flextype/config/locales.yaml
locale: en_US

# Application URL
#
# Define custom application url
url: ''

# Valid date format
#
# - date_format: Valid date format
#
# - date_display_format: Valid date format to display
#
# Date format variants:
#
# d-m-Y H:i" - 02-02-2020 09:41
# Y-m-d H:i" - 2020-02-02 09:41
# m/d/Y h:i a - 02/02/2020 09:41 pm
# H:i d-m-Y - 09:41 02-02-2020
# h:i a m/d/Y - 09:41 pm 02/02/2020
date_format: 'd-m-Y H:i'
date_display_format: 'd-m-Y H:i'

# Display errors
#
# Please make sure to set false for error `display` in production!
#
# Displaying PHP errors on a public server can be a serious security risk:
#
# - Error messages are displayed with detailed information about the code structure (e.g. file path, class, method)
# - With Whoops enabled, there will be even more detailed information about the code structure
# - Detailed error messages for login failures could leak information to attackers
#
# In a production environment, always log errors to your PHP error logs.
#
# - display: Display errors or not.
errors:
  display: true

# Entries
#
# - extension: Set entries file extension
entries:
  extension: md

# Cache
#
# - enabled:         Set to true to enable caching
#
# - prefix:          Cache prefix string (prevents cache conflicts)
#
# - driver:          Available drivers: auto (will get one from installed cache drivers), apcu,
#                    apc, array, wincache, xcache, memcache, memcached, redis, file.
#
# - lifetime:        Lifetime of cached data in seconds
#
# - redis.socket:    Path to redis unix socket (e.g. /var/run/redis/redis.sock),
#                    false = use server and port to connect
#
# - redis.password   Redis password
#
# - redis.server     Redis server
#
# - redis.port       Redis port
#
# - memcache.server  Memcache server
#
# - memcache.port    Memcache port
#
# - memcached.server Memcached server
#
# - memcached.port   Memcached port
#
# - sqlite3.database SQLite3 Database
#
# - sqlite3.table    SQLite3 Table
cache:
  enabled: false
  prefix: flextype
  driver: auto
  lifetime: 604800
  memcache:
    server: localhost
    port: 11211
  memcached:
    server: localhost
    port: 11211
  redis:
    socket: false
    password: false
    server: localhost
    port: 6379
  sqlite3:
    database: flextype
    table: flextype

# Whoops
#
# Error handler framework for PHP.
#
# - editor: emacs, idea, macvim, phpstorm, sublime, textmate, xdebug, vscode, atom, espresso
#
# - page_title: page title
whoops:
  editor: atom
  page_title: Error!

# Slim
#
# - display_error_details: When true, additional information about exceptions are
#                          displayed by the default error handler.
#
# - add_content_length_header: When true, Slim will add a Content-Length header to
#                              the response. If you are using a runtime analytics tool,
#                              such as New Relic, then this should be disabled.
#
# - router_cache_file: Filename for caching the FastRoute routes. Must be set to
#                      a valid filename within a writeable directory. If the file
#                      does not exist, then it is created with the correct cache
#                      information on first run. Set to false to disable the FastRoute
#                      cache system.
#
# - determine_route_before_app_middleware: When true, the route is calculated before
#                                          any middleware is executed. This means that you
#                                          can inspect route parameters in middleware if you need to.
#
# - output_buffering: If false, then no output buffering is enabled.
#                     If 'append' or 'prepend', then any echo or print statements
#                     are captured and are either appended or prepended to the Response
#                     returned from the route callable.
#
# - response_chunk_size: Size of each chunk read from the Response body when sending to the browser.
#
# - http_version: The protocol version used by the Response object.
display_error_details: false
add_content_length_header: true
router_cache_file: false
determine_route_before_app_middleware: false
output_buffering: append
response_chunk_size: 4096
http_version: '1.1'

# Slugify
#
# - separator: By default Slugify will use dashes as separators.
#              If you want to use a different default separator,
#              you can set the separator option.
#
# - lowercase: By default Slugify will convert the slug to lowercase.
#              If you want to preserve the case of the string you can set the
#              lowercase option to false.
#
# - trim:      By default Slugify will remove leading and trailing separators before
#              returning the slug. If you do not want the slug to be trimmed you can
#              set the trim option to false.
#
# - regexp:    You can also change the regular expression that is used to replace
#              characters with the separator.
#
# - lowercase_after_regexp: Lowercasing is done before using the regular expression.
#                           If you want to keep the lowercasing behavior but your
#                           regular expression needs to match uppercase letters,
#                           you can set the lowercase_after_regexp option to true.
#
# - strip_tags: Adds in an option to go through strip_tags() in case the string contains HTML etc.
slugify:
  separator: "-"
  lowercase: true
  trim: true
  regexp: "/[^A-Za-z0-9]+/"
  lowercase_after_regexp: false
  strip_tags: false

# Image
#
# - driver: gd or imagick
image:
  driver: gd

# Shortcodes
#
# - extensions: Flextype Shortcodes Extension to load.
shortcodes:
  extensions: ['Entries', 'Registry', 'Url']

# CORS
#
# CORS (Cross-origin resource sharing) allows JavaScript web apps to make HTTP requests to other domains.
# This is important for third party web apps using Flextype, as without CORS, a JavaScript app hosted on example.com
# couldn't access our APIs because they're hosted on another.com which is a different domain.
#
# - enabled: Set to true to enable cors
#
# - origin:   The Access-Control-Allow-Origin response header indicates whether
#             the response can be shared with requesting code from the given origin.
#             read more: https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Access-Control-Allow-Origin
#
# - headers:  The Access-Control-Allow-Headers response header is used in response
#             to a preflight request which includes the Access-Control-Request-Headers
#             to indicate which HTTP headers can be used during the actual request.
#             read more: https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Access-Control-Allow-Headers
#
# - methods: The Access-Control-Allow-Methods response header specifies the method
#            or methods allowed when accessing the resource in response to a preflight request.
#            read more: https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Access-Control-Allow-Methods
#
# - expose:  The Access-Control-Expose-Headers response header indicates which headers
#            can be exposed as part of the response by listing their names.
#            read more: https://developer.mozilla.org/ru/docs/Web/HTTP/Headers/Access-Control-Expose-Headers
#
# - credentials: The Access-Control-Allow-Credentials response header tells browsers whether
#                to expose the response to frontend JavaScript code when the request's credentials
#                mode (Request.credentials) is include.
#                read more: https://developer.mozilla.org/ru/docs/Web/HTTP/Headers/Access-Control-Allow-Credentials
cors:
  enabled: true
  origin: "*"
  headers: ["X-Requested-With", "Content-Type", "Accept", "Origin", "Authorization"]
  methods: [GET, POST, PUT, DELETE, PATCH, OPTIONS]
  expose: []
  credentials: false

# Media
media:
  accept_file_types: 'gif, jpg, jpeg, png, ico, zip, tgz, txt, md, doc, docx, pdf, epub, xls, xlsx, ppt, pptx, mp3, ogg, wav, m4a, mp4, m4v, ogv, wmv, avi, webm, svg'
  max_file_size: 5000000
  safe_names: true
  image_width: 1600
  image_height: 0
  image_quality: 70
  max_image_width: null
  max_image_height: null

# Content APIs
api:
  entries:
    enabled: true
    default_token:
  registry:
    enabled: true
    default_token:
  config:
    enabled: true
    default_token:
  files:
    enabled: true
    default_token:
  images:
    enabled: true
    default_token:
```

### PHP constants

Your `index.php` file can define certain PHP constants, which Flextype bootstrap script will check for while loading and configuring Flextype.

| Name | Description |
| :------------- | :------------- |
| `FLEXTYPE_MINIMUM_PHP` | Define the application minimum supported PHP version. |
| `ROOT_DIR` | Define the path to the root directory (without trailing slash). |
| `PATH['project']` | Define the PATH to project (without trailing slash). |
| `PATH['cache']` | Define the PATH to project cache (without trailing slash). |
| `PATH['logs']` | Define the PATH to project logs (without trailing slash). |
