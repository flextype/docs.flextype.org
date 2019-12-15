---
title: Navigation
description: You can customize Admin Panel navigation by adding your own navigation items.
---

You can customize Admin Panel navigation by adding your own navigation items.

### Adding navigation item

```php
$flextype->registry->set('admin_navigation.content.entries',
                         [
                             'title' => '<i class="fas fa-database"></i>' . __('admin_entries'),
                             'link' => $flextype->router->pathFor('admin.entries.index'),
                             'attributes' => ['class' => 'nav-link']
                         ]);
```
