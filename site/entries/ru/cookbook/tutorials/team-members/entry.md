---
title: Team Members
description: A Team Members setup with Flextype.
on_this_page:
  - 
    title: "Structure"
    link: "structure"
  - 
    title: "Create Team members fieldset"
    link: "create-team-members-fieldset"
  - 
    title: "Create Team Members entry"
    link: "create-team-members-entry"
  - 
    title: "Create Team Member fieldset"
    link: "create-team-members-fieldset"
  - 
    title: "Create Team Member entry(s)"
    link: "create-team-member-entry-s"
  - 
    title: "Create Team Members template"
    link: "create-team-members-template"
  - 
    title: "Create Team Member template"
    link: "create-team-member-template"
---

A Team Members setup with Flextype.<a name="structure"></a>

Structure:
<ul class="file-list">
    <li><i class="fas fa-folder"></i> site</li>
    <li class="file-list-level-2"><i class="fas fa-folder"></i> fieldsets</li>
    <li class="file-list-level-3"><i class="far fa-file-alt"></i> team-members.yaml</li>
    <li class="file-list-level-3"><i class="far fa-file-alt"></i> team-member.yaml</li>
    <li class="file-list-level-2"><i class="fas fa-folder"></i> themes</li>
    <li class="file-list-level-3"><i class="fas fa-folder"></i> default</li>
    <li class="file-list-level-4"><i class="fas fa-folder"></i> templates</li>
    <li class="file-list-level-5"><i class="far fa-file-alt"></i> team-members.html</li>
    <li class="file-list-level-5"><i class="far fa-file-alt"></i> team-member.html</li>
    <li class="file-list-level-2"><i class="fas fa-folder"></i> entries</li>
    <li class="file-list-level-3"><i class="fas fa-folder"></i> team-members</li>
    <li class="file-list-level-4"><i class="far fa-file-alt"></i> entry.md</li>
    <li class="file-list-level-4"><i class="fas fa-folder"></i> daniel-jackson</li>
    <li class="file-list-level-5"><i class="far fa-file-alt"></i> entry.md</li>
    <li class="file-list-level-4"><i class="fas fa-folder"></i> jack-o-neill</li>
    <li class="file-list-level-5"><i class="far fa-file-alt"></i> entry.md</li>
    <li class="file-list-level-4"><i class="fas fa-folder"></i> samantha-carter</li>
    <li class="file-list-level-5"><i class="far fa-file-alt"></i> entry.md</li>
    <li class="file-list-level-4"><i class="fas fa-folder"></i> teal-c</li>
    <li class="file-list-level-5"><i class="far fa-file-alt"></i> entry.md</li>
</ul>

<br>

### <a name="create-team-members-fieldset"></a> Create Team members fieldset

<div class="file-header"><i class="far fa-file-alt"></i> /site/fieldsets/team-members.yaml</div>

```yaml
title: Team Members
default_field: title
hide: false
icon: fas fa-users
sections:
  main:
    title: Main
    fields:
      title:
        title: admin_title
        type: text
        size: 12
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

#### <a name="create-team-members-entry"></a> Create Team Members entry

<div class="file-list"><i class="far fa-file-alt"></i> /site/entries/team-members/entry.md</div>

<img src="[base_url]/image/en/cookbook/tutorials/team-members/create-team-members.png?w=800&dpr=2&q=70" />

### <a name="create-team-member-fieldset"></a> Create Team Member fieldset

<div class="file-header"><i class="far fa-file-alt"></i> /site/fieldsets/team-member.yaml</div>

```yaml
title: 'Team Member'
default_field: title
icon: 'fas fa-user'
hide: false
sections:
  main:
    title: Main
    fields:
      title:
        title: Name
        type: text
        size: 6/12
      image:
        title: 'Profile Picture'
        type: media_select
        size: 6/12
      bio_summary:
        title: 'Bio Summary'
        type: text
        size: 12
      bio:
        title: Bio
        type: textarea
        size: 12
      job_title:
        title: 'Job Title'
        type: text
        size: 4/12
      email:
        title: Email
        type: text
        size: 4/12
      phone_number:
        title: 'Phone Number'
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

#### <a name="create-team-member-entry-s"></a> Create Team Member entry(s)

<div class="file-list"><i class="far fa-file-alt"></i> /site/entries/team-members/daniel-jackson/entry.md</div>

<img src="[base_url]/image/en/cookbook/tutorials/team-members/create-team-member.png?w=800&dpr=2&q=70" />

### <a name="create-team-members-template"></a> Create Team Members template

<div class="file-header"><i class="far fa-file-alt"></i> /site/themes/default/templates/team-members.html</div>

```twig
{% extends "themes/default/templates/partials/base.html" %}

{% block content %}
    <h2 class="text-center mb-5">{{ entry.title }}</h2>
    <div class="row">
      {% set members = entries.fetch('team-members', {}) %}
      {% for member in members %}
          <div class="col-sm-3 text-center">
            <div class="card">
              <div class="card-body">
                <img class="rounded mb-3" width="120" src="{{ base_url() }}/image/{{ member.slug }}/{{ member.image }}?w=220" alt="">
                <h5 class="card-title">{{ member.title }}</h5>
                <p class="card-text">{{ member.bio_summary }}</p>
                <a href="{{ base_url() }}/{{ member.slug }}" class="btn btn-primary">View Profile</a>
              </div>
            </div>
          </div>
      {% endfor %}
    </div>
{% endblock %}

```
<br>

<img src="[base_url]/image/en/cookbook/tutorials/team-members/team-members.png?w=800&dpr=2&q=70" />

### <a name="create-team-member-template"></a> Create Team Member template

<div class="file-header"><i class="far fa-file-alt"></i> /site/themes/default/templates/team-member.html</div>

```twig
{% extends "themes/default/templates/partials/base.html" %}

{% block content %}
    <img class="mb-5" src="{{ base_url() }}/image/{{ entry.slug }}/{{ entry.image }}?w=120" alt="">
    <h3>{{ entry.title }}</h3>
    <p>{{ entry.bio }}</p>
    <p>{{ entry.job_title }}</p>
    <p>{{ entry.email }}</p>
    <p>{{ entry.phone_number }}</p>
{% endblock %}

```

<img src="[base_url]/image/en/cookbook/tutorials/team-members/team-member.png?w=800&dpr=2&q=70" />
