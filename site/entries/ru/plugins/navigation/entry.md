---
title: Navigation
---

You can customize Admin Panel navigation by adding your own navigation items.

### Adding navigation item

```php
$flextype->registry->set('admin_navigation.content.entries', ['title' => '<i class="fas fa-database"></i>' . __('admin_entries'), 'link' => $flextype->router->pathFor('admin.entries.index'), 'attributes' => ['class' => 'nav-link']]);
$flextype->registry->set('admin_navigation.extends.fieldsets', ['title' => '<i class="far fa-list-alt"></i>' . __('admin_fieldsets'), 'link' => $flextype->router->pathFor('admin.fieldsets.index'), 'attributes' => ['class' => 'nav-link']]);
$flextype->registry->set('admin_navigation.extends.themes', ['title' => '<i class="fas fa-palette"></i>' . __('admin_themes'), 'link' => $flextype->router->pathFor('admin.themes.index'), 'attributes' => ['class' => 'nav-link']]);
$flextype->registry->set('admin_navigation.extends.snippets', ['title' => '<i class="far fa-file-code"></i>' . __('admin_snippets'), 'link' => $flextype->router->pathFor('admin.snippets.index'), 'attributes' => ['class' => 'nav-link']]);
$flextype->registry->set('admin_navigation.extends.plugins', ['title' => '<i class="fas fa-plug"></i>' . __('admin_plugins'), 'link' => $flextype->router->pathFor('admin.plugins.index'), 'attributes' => ['class' => 'nav-link']]);
$flextype->registry->set('admin_navigation.settings.tools', ['title' => '<i class="fas fa-toolbox"></i>' . __('admin_tools'), 'link' => $flextype->router->pathFor('admin.tools.index'), 'attributes' => ['class' => 'nav-link']]);
$flextype->registry->set('admin_navigation.settings.settings', ['title' => '<i class="fas fa-cog"></i>' . __('admin_settings'), 'link' => $flextype->router->pathFor('admin.settings.index'), 'attributes' => ['class' => 'nav-link']]);
```
