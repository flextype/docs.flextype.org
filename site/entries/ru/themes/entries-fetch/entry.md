---
title: Entries fetch
---

### Expressions

* `eq` or `=` - Equals
* `neq` or `<>` - Not equals
* `lt` or `<` - Lower than
* `gt` or `>` - Greater than
* `lte` or `<=` - Lower than or equal to
* `gte` or `>=` - Greater than or equal to
* `in` - Included in an array of values
* `nin` - Isn't included in an array of values
* `contains` - Contains
* `member_of` - Member of
* `start_with` - Start with
* `ends_with` - Ends with

### where

Sets the where expression.

Example

Fetch blog posts where **category** is equals **bikes**

```
{% set posts = entries.fetchAll('blog', {
                                            'where': {
                                                'key': 'category',
                                                'expr': 'eq',
                                                'value': 'bikes'
                                            }
                                        }) %}

{% for post in posts %}
    <h3>{{ post.title }}</h3>
{% endfor %}
```

### and_where

Sets the and_where expression(s).

Example

Fetch blog posts where **category** is equals **bikes** and where **brand** is equals **GT** and where **color** is equals **red**

```
{% set posts = entries.fetchAll('blog', {
                                            'where': {
                                                'key': 'category',
                                                'expr': 'eq',
                                                'value': 'bikes'
                                            },
                                            'and_where': [
                                                {
                                                    'key': 'brand',
                                                    'expr': 'eq',
                                                    'value': 'GT'
                                                },
                                                {
                                                    'key': 'color',
                                                    'expr': 'eq',
                                                    'value': 'red'
                                                }
                                            ]
                                        }) %}

{% for post in posts %}
    <h3>{{ post.title }}</h3>
{% endfor %}
```


### or_where

Sets the or_where expression(s).

Example

Fetch blog posts where **brand** is equals **GT** or where **brand** is equals **Norco** or where **country** is equals **USA**

```
{% set posts = entries.fetchAll('blog', {
                                            'where': {
                                                'key': 'brand',
                                                'expr': 'eq',
                                                'value': 'GT'
                                            },
                                            'or_where': [
                                                {
                                                    'key': 'brand',
                                                    'expr': 'eq',
                                                    'value': 'Norco'
                                                },
                                                {
                                                    'key': 'country',
                                                    'expr': 'eq',
                                                    'value': 'USA'
                                                }
                                            ]
                                        }) %}

{% for post in posts %}
    <h3>{{ post.title }}</h3>
{% endfor %}
```

### set_first_result

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

### set_max_result

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

### order_by

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
