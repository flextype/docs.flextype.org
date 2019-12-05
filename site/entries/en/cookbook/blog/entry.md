---
title: Blog
---

A simple blog setup with Flextype.

Structure:
<ul class="file-list">
    <li><i class="fas fa-folder"></i> site</li>
    <li class="file-list-level-2"><i class="fas fa-folder"></i> fieldsets</li>
    <li class="file-list-level-3"><i class="far fa-file-alt"></i> blog.yaml</li>
    <li class="file-list-level-3"><i class="far fa-file-alt"></i> blog-post.yaml</li>
    <li class="file-list-level-2"><i class="fas fa-folder"></i> themes</li>
    <li class="file-list-level-3"><i class="fas fa-folder"></i> default</li>
    <li class="file-list-level-4"><i class="fas fa-folder"></i> templates</li>
    <li class="file-list-level-5"><i class="far fa-file-alt"></i> blog.html</li>
    <li class="file-list-level-5"><i class="far fa-file-alt"></i> blog-post.html</li>
    <li class="file-list-level-2"><i class="fas fa-folder"></i> entries</li>
    <li class="file-list-level-3"><i class="fas fa-folder"></i> blog</li>
    <li class="file-list-level-4"><i class="far fa-file-alt"></i> entry.md</li>
    <li class="file-list-level-4"><i class="fas fa-folder"></i> hello-world</li>
    <li class="file-list-level-5"><i class="far fa-file-alt"></i> entry.md</li>
</ul>

<br>

## Create blog fieldset

<div class="file-header"><i class="far fa-file-alt"></i> /site/fieldsets/blog.yaml</div>
```yaml
title: Blog
default_field: title
hide: false
sections:
  main:
    title: Main
    fields:
      title:
        title: admin_title
        type: text
        size: 12
      entries_limit:
        title: admin_entries_limit
        type: text
        size: 4/12
  seo:
    title: Seo
    fields:
      description:
        title: admin_description
        type: textarea
        size: 4/12
  settings:
    title: admin_settings
    fields:
      general_heading:
        title: admin_general
        type: heading
      description:
        title: admin_description
        type: textarea
        size: 12
        default: test!
      template:
        title: admin_template
        type: template_select
        size: 4/12
      visibility:
        title: admin_visibility
        type: visibility_select
        size: 4/12
      published_at:
        title: admin_published_at
        type: datetimepicker
        size: 4/12
      routable:
        title: admin_routable
        type: routable_select
        size: 4/12
      menu_heading:
        title: admin_menu
        type: heading
      menu_item_title:
        title: admin_menu_item_title
        type: text
        size: 4/12
      menu_item_url:
        title: admin_menu_item_url
        type: text
        size: 4/12
      menu_item_target:
        title: admin_menu_item_target
        type: select
        options: { _self: _self, _blank: _blank, _parent: _parent, _top: _top }
        size: 4/12
      menu_item_order:
        title: admin_menu_item_order
        type: text
        size: 4/12
```

<br>

### Blog entry

<div class="file-list"><i class="far fa-file-alt"></i> /site/entries/blog/entry.md</div>

<img src="[base_url]/image/en/cookbook/blog/create-blog.png?w=800&dpr=2&q=70" />

<br>

## Create blog post fieldset

<div class="file-header"><i class="far fa-file-alt"></i> /site/fieldsets/blog-post.yaml</div>
```yaml
title: Blog Post
default_field: title
hide: false
sections:
  main:
    title: Main
    fields:
      title:
        title: admin_title
        type: text
        size: 12
      summary:
        title: admin_summary
        type: html
        size: 12
      content:
        title: admin_content
        type: html
        size: 12
      tag:
        title: admin_tags
        type: tags
        size: 8/12
  seo:
    title: Seo
    fields:
      description:
        title: admin_description
        type: textarea
        size: 4/12
  settings:
    title: admin_settings
    fields:
      general_heading:
        title: admin_general
        type: heading
      description:
        title: admin_description
        type: textarea
        size: 12
        default: test!
      template:
        title: admin_template
        type: template_select
        size: 4/12
      visibility:
        title: admin_visibility
        type: visibility_select
        size: 4/12
      published_at:
        title: admin_published_at
        type: datetimepicker
        size: 4/12
      routable:
        title: admin_routable
        type: routable_select
        size: 4/12
      menu_heading:
        title: admin_menu
        type: heading
      menu_item_title:
        title: admin_menu_item_title
        type: text
        size: 4/12
      menu_item_url:
        title: admin_menu_item_url
        type: text
        size: 4/12
      menu_item_target:
        title: admin_menu_item_target
        type: select
        options: { _self: _self, _blank: _blank, _parent: _parent, _top: _top }
        size: 4/12
      menu_item_order:
        title: admin_menu_item_order
        type: text
        size: 4/12
```

<br>

### Blog post entry

<div class="file-list"><i class="far fa-file-alt"></i> /site/entries/blog/hello-world/entry.md</div>

<img src="[base_url]/image/en/cookbook/blog/create-blog-post.png?w=800&dpr=2&q=70" />

<br>

## Create blog template

<div class="file-header"><i class="far fa-file-alt"></i> /site/themes/default/templates/blog.html</div>
```twig
{% extends "themes/default/templates/partials/base.html" %}

{% block content %}
    <h1 class="text-center">{{ entry.title }}</h1>

    {# pagination #}

    {% set page = query.page %}
    {% set tag = query.tag %}

    {% set blog_posts_limit = entries.fetch('blog').entries_limit %}

    {% if tag %}
        {# @todo get count from cache! #}
        {% set blog_posts_length = entries.fetch('blog', {
                                                            'where': {
                                                                'key': 'tag',
                                                                'expr': 'contains',
                                                                'value': tag
                                                            },
                                                            'and_where': [{
                                                                'key': 'visibility',
                                                                'expr': 'nin',
                                                                'value': ['draft', 'hidden']
                                                            }]
                                                        })|length %}

        {% set blog_posts_pages = (blog_posts_length/blog_posts_limit)|round(0, 'ceil') %}
        {% if page < 1 %}
            {% set page = 1 %}
        {% elseif page > blog_posts_pages %}
            {% set page = blog_posts_pages %}
        {% endif %}
        {% set blog_posts_offset = (page-1)*blog_posts_limit %}
        {% if blog_posts_offset < 0 %}{% set blog_posts_offset = 0 %}{% endif %}

        {% set blog_posts = entries.fetch('blog', {
                                                    'where': {
                                                        'key': 'tag',
                                                        'expr': 'contains',
                                                        'value': tag
                                                    },
                                                    'and_where': [{
                                                        'key': 'visibility',
                                                        'expr': 'nin',
                                                        'value': ['draft', 'hidden']
                                                    }],
                                                    'order_by': {
                                                        'field': 'published_at',
                                                        'direction': 'desc'
                                                    },
                                                    'set_max_result': blog_posts_limit,
                                                    'set_first_result': blog_posts_offset
                                                }) %}
    {% else %}

        {# @todo get count from cache! #}
        {% set blog_posts_length = entries.fetch('blog', {
                                                            'where': {
                                                                'key': 'visibility',
                                                                'expr': 'nin',
                                                                'value': ['draft', 'hidden']
                                                            }
                                                        })|length %}

        {% set blog_posts_pages = (blog_posts_length/blog_posts_limit)|round(0, 'ceil') %}

        {% if page < 1 %}
            {% set page = 1 %}
        {% elseif page > blog_posts_pages %}
            {% set page = blog_posts_pages %}
        {% endif %}

        {% set blog_posts_offset = (page-1)*blog_posts_limit %}
        {% if blog_posts_offset < 0 %}{% set blog_posts_offset = 0 %}{% endif %}

        {% set blog_posts = entries.fetch('blog', {
                                                    'where': {
                                                        'key': 'visibility',
                                                        'expr': 'nin',
                                                        'value': ['draft', 'hidden']
                                                    },
                                                    'order_by': {
                                                        'field': 'published_at',
                                                        'direction': 'desc'
                                                    },
                                                    'set_max_result': blog_posts_limit,
                                                    'set_first_result': blog_posts_offset}) %}

    {% endif %}

    {# /pagination #}

    {% for post in blog_posts %}
        <a href="{{ post.slug }}" class="blog-post">
            <h3>{{ post.title }}</h3>
            <p>{{ post.summary|shortcode|raw}}</p>
            <div>{{ post.published_at|date(registry.settings.date_display_format) }}</div>
        </a>
    {% endfor %}

    {# pagination navigation #}
    <div class="text-center">
        {% if (page - 1) > 0 %}
            <a href="?page={{ page - 1 }}{% if tag %}&tag={{ tag }}{% endif %}">&larr;</a>
        {% endif %}
        {% if blog_posts_pages is not null and blog_posts_pages != 0 %}
            {{ page }} / {{ blog_posts_pages }}
        {% endif %}
        {% if (page) < blog_posts_pages %}
            <a href="?page={{ page + 1 }}{% if tag %}&tag={{ tag }}{% endif %}">&rarr;</a>
        {% endif %}
    </div>
    {# /pagination navigation #}
{% endblock %}
```
<br>

<img src="[base_url]/image/en/cookbook/blog/blog.png?w=800&dpr=2&q=70" />

## Create blog post template

<div class="file-header"><i class="far fa-file-alt"></i> /site/themes/default/templates/blog-post.html</div>
```twig
{% extends "themes/default/templates/partials/base.html" %}

{% block content %}
    <h1 class="text-center">{{ entry.title }}</h1>
    <div class="blog-post">
        {{ entry.content|shortcode|raw}}
    </div>
{% endblock %}
```

<br>

<img src="[base_url]/image/en/cookbook/blog/blog-post.png?w=800&dpr=2&q=70" />
