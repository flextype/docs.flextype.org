---
title: Наборы полей
---

Fieldsets are configuration files written in YAML for Admin Panel to create publish forms. Они определяют вашу модель контента. По сути, схема, которая определяет ваши поля, типы данных и интерфейс, используемый для их управления.

## Fields

Form fields are an essential part of the fieldsets and have very powerful options.

| Field type        | Description                                                                          |
|:----------------- |:------------------------------------------------------------------------------------ |
| text              | A standard, single-line input field.                                                 |
| textarea          | Simple text-input where multi-line plain text can be entered.                        |
| html              | A WYSIWYG HTML editor field.                                                         |
| hidden            | The hidden field is like the text field, except it's hidden from the content editor. |
| select            | A simple selectbox field.                                                            |
| template_select   | Template select field for selecting entry template.                                  |
| visibility_select | Visibility select field for selecting entry visibility state.                        |
| media_select      | Media select field for selection media for entry.                                    |
| tags              | An interactive tags input field.                                                     |
| datetimepicker    | A date time picker field.                                                            |

### Field properties

| Property   | Type   | Default | Description                                                                                                                        |
|:---------- |:------ |:------- |:---------------------------------------------------------------------------------------------------------------------------------- |
| title      | string |         | The field label title                                                                                                              |
| help       | string |         | Optional help text below the field                                                                                                 |
| size       | string | 12      | The width of the field in the field grid. Available widths: 1/12, 2/12, 3/12, 4/12, 5/12, 6/12, 7/12, 8/12, 9/12, 10/12, 11/12, 12 |
| default    | string |         | Default value for the field, which will be used when entry is created                                                              |
| attributes | array  |         | Any valid HTML attributes. For e.g. id, class, and etc...                                                                          |

### Example

```yaml
title: Default
default_field: title
icon: 'far fa-file-alt'
sections:
  main:
    title: Main
    fields:
      title:
        title: Title
        type: text
        size: 12
        help: "Lorem ipsum dolor sit amet, consectetur adipisicing elit"
      content:
        title: Content
        type: html
        size: 12
        help: "Lorem ipsum dolor sit amet, consectetur adipisicing elit"
      template:
        title: Template
        type: template_select
        size: 4/12
        help: "Lorem ipsum dolor sit amet, consectetur adipisicing elit"
      visibility:
        title: Visibility
        type: visibility_select
        size: 4/12
        help: "Lorem ipsum dolor sit amet, consectetur adipisicing elit"
      published_at:
        title: 'Published at'
        type: datetimepicker
        size: 4/12
        help: "Lorem ipsum dolor sit amet, consectetur adipisicing elit"
  seo:
    title: Seo
    fields:
      description:
        title: Description
        type: textarea
        size: 12
  menu:
    title: Menu
    fields:
      menu_item_title:
        title: Item title
        type: text
        size: 4/12
      menu_item_url:
        title: Item url
        type: text
        size: 4/12
      menu_item_target:
        title: Item target
        type: select
        options: { _self: _self, _blank: _blank, _parent: _parent, _top: _top }
        size: 4/12
      menu_item_order:
        title: Item order
        type: text
        size: 4/12
```
