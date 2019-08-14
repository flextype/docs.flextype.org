---
title: Snippets
---

Snippets are extensions written on PHP/HTML/JS languages that add
different features on the site.

Snippets are stored in `/site/snippets/`  
You can edit snippets manually using any text editor or via the admin
panel in the snippets section.

### Using snippets in the content {#using-snippets-in-the-content}

You can display the snippet in the page with a shortcode like this:

    [snippet name="snippet_name"]

### Snippets can be displayed in the template {#snippets-can-be-displayed-in-the-template}

Display a snippet by its name:

    <?= Snippets::get('snippet_name') ?>
