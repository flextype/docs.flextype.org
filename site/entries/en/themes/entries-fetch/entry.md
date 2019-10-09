---
title: Entries fetch
---

### Set first result

Skip a specific number of entries (especially useful for pagination).

Example

Fetch blog posts and set first result 2


```
{% set posts = entries.fetchAll('blog', {'set_first_result': 2}) %}

{% for post in posts %}
    <h3>{{ post.title }}</h3>
{% endfor %}
```

Result

```
<h3>Lorem ipsum dolor sit amet</h3>
<h3>Cillum dolore eu fugiat nulla pariatur</h3>
<h3>Excepteur sint occaecat cupidatat non proident</h3>
```

### Set max result

Limit the size of the returned results.

Example

Fetch blog posts and set max result 2

```
{% set posts = entries.fetchAll('blog', {'set_max_result': 2}) %}

{% for post in posts %}
    <h3>{{ post.title }}</h3>
{% endfor %}
```

Result

```
<h3>Ullamco laboris nisi ut aliquip</h3>
<h3>Allamco laboris nisi ut aliquip nisi ut aliquip</h3>
```

### Order by

Sort according to a specific field and direction.


Example

Fetch blog posts, order by field **title** and **asc**(ascending) direction

```
{% set posts = entries.fetchAll('blog', {
                                            'order_by': {
                                                'field': 'title',
                                                'direction': 'asc'
                                            }
                                        }) %}

{% for post in posts %}
    <h3>{{ post.title }}</h3>
{% endfor %}
```

Result

```
<h3>Allamco laboris nisi ut aliquip nisi ut aliquip</h3>
<h3>Cillum dolore eu fugiat nulla pariatur</h3>
<h3>Excepteur sint occaecat cupidatat non proident</h3>
<h3>Lorem ipsum dolor sit amet</h3>
<h3>Ullamco laboris nisi ut aliquip</h3>
```

Example

Fetch blog posts, order by field **title** and **desc**(descending) direction


```
{% set posts = entries.fetchAll('blog', {
                                            'order_by': {
                                                'field': 'title',
                                                'direction': 'desc'
                                            }
                                        }) %}

{% for post in posts %}
    <h3>{{ post.title }}</h3>
{% endfor %}
```

Result

```
<h3>Ullamco laboris nisi ut aliquip</h3>
<h3>Lorem ipsum dolor sit amet</h3>
<h3>Excepteur sint occaecat cupidatat non proident</h3>
<h3>Cillum dolore eu fugiat nulla pariatur</h3>
<h3>Allamco laboris nisi ut aliquip nisi ut aliquip</h3>
```
