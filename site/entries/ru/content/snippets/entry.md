---
title: Фрагменты
description: Snippets are some sort of extensions written on PHP/HTML/JS languages that add different features on the site.
---

Snippets are some sort of extensions written on PHP/HTML/JS languages that add different features on the site.

Snippets are stored in `/site/snippets/` directory. You can edit snippets manually using any text editor or via the Admin panel in the snippets section.

### Using snippets in the entry content

You can display snippet in the entry content with a shortcode `snippets_exec` like this:

<div class="hljs-shortcode">
    <input value='&#91;snippets_exec id="snippet-name"&#93;'>
</div>

### Using snippets in the templates

Display a snippet in the template by it's name:

```twig
{{ snippets.exec('snippet-name')|raw }}
```
