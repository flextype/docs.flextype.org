---
title: Menus
description: Create any kind of menu you need for your project.
on_this_page:
  0:
    title: "Main menu"
    link: "main-menu"
  1:
    title: "Sub menu"
    link: "sub-menu"
---

### <a name="main-menu"></a> Main menu

```twig
<ul class="navbar-nav">
    {% for item in entries.fetch('', {'order_by': {'field': 'menu_item_order', 'direction': 'asc'}}) %}
        {% if item.menu_item_title %}
            <li class="nav-item">
                <a class="nav-link {% if item.menu_item_url in entry.slug %}active{% endif %}"
                   href="{{ site_url() }}/{{ item.menu_item_url }}">
                   {{ item.menu_item_title }}
                </a>
            </li>
        {% endif %}
    {% endfor %}
</ul>
```

Result:
```html
<ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link active" href="//localhost:8888/flextype/home">
           Home
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="//localhost:8888/flextype/shop">
           Shop
        </a>
    </li>
</ul>
```

### <a name="sub-menu"></a> Sub menu

```twig
<ul class="navbar-nav">
    {% for item in entries.fetch('', {'order_by': {'field': 'menu_item_order', 'direction': 'asc'}}) %}
        {% if item.menu_item_title %}
            <li class="nav-item">
                <a class="nav-link {% if item.menu_item_url in entry.slug %}active{% endif %}" href="{{ site_url() }}/{{ item.menu_item_url }}">{{ item.menu_item_title }}</a>
                {% set menu_level_2 = entries.fetch(item.slug, {'order_by': {'field': 'menu_item_order', 'direction': 'asc'}}) %}
                {% if menu_level_2|length > 0 %}
                <ul>
                    {% for item_level_2 in menu_level_2 %}
                        {% if item_level_2.menu_item_title %}
                            <li>
                                <a class="nav-link {% if item_level_2.menu_item_url in entry.slug %}active{% endif %}" href="{{ site_url() }}/{{ item_level_2.menu_item_url }}">{{ item_level_2.menu_item_title }}</a>
                            </li>
                        {% endif %}
                    {% endfor %}
                </ul>
                {% endif %}
            </li>
        {% endif %}
    {% endfor %}
</ul>
```

Result:
```html
<ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link active" href="//localhost:8888/flextype/home">
            Home
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="//localhost:8888/flextype/shop">
            Shop
        </a>
        <ul>
            <li class="nav-item">
                <a class="nav-link" href="//localhost:8888/flextype/shop/bicycle">
                    Bicycle
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="//localhost:8888/flextype/shop/bicycle">
                    Longboard
                </a>
            </li>
        </ul>
    </li>
</ul>
```
