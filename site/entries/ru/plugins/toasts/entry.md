---
title: Toast Notifications
---

Simple notification messages that displays on the screen like toast popping out of a toaster.

### Creating toast notifications

```php
$flextype['flash']->addMessage('error', 'Error message here');
$flextype['flash']->addMessage('success', 'Success message here');
$flextype['flash']->addMessage('warning', 'Warning message here');
```

### Creating toast notifications inside controller

```php
$this->flash->addMessage('error', 'Error message here');
$this->flash->addMessage('success', 'Success message here');
$this->flash->addMessage('warning', 'Warning message here');
```


### Display toast notifications in twig templates

<div class="file-header"><i class="far fa-file-alt"></i> /site/plugins/admin/views/partials/messenger.html</div>

```twig
<script type="text/javascript">
    Messenger.options = {
        extraClasses: 'messenger-fixed messenger-on-bottom messenger-on-right',
        theme: 'flat'
    }

    {% for message in flash()['success'] %}
        Messenger().post({ type: "success", message : "{{ message }}", hideAfter: '3' });
    {% endfor %}

    {% for message in flash()['warning'] %}
        Messenger().post({ type: "warning", message : "{{ message }}", hideAfter: '3' });
    {% endfor %}

    {% for message in flash()['error'] %}
        Messenger().post({ type: "error", message : "{{ message }}", hideAfter: '3' });
    {% endfor %}
</script>
```
