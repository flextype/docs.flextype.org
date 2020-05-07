---
title: Navigation
description: You can customize Admin Panel navigation by adding your own navigation items.
---

You can customize Admin Panel left navigation by populating `plugins.admin.navigation` in one of categories `content` `extends` `system` `information` with your your own items.

Required fields:
- title
- icon
- link

### Example

```php
$flextype->registry->set('plugins.admin.navigation.content.entries',
                         [
                             'title' => __('admin_entries'),
                             'icon' => 'fas fa-database',
                             'link' => $flextype->router->pathFor('admin.entries.index')
                         ]);
```
