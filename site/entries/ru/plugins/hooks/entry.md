---
title: Event Hooks
---

Hooks are a way for one piece of code to interact/modify another piece of code. They make up the foundation for how plugins and themes interact with Flextype.


## Available event hooks

### Core

| Name                        | Description                                                                                                          |
|:--------------------------- |:-------------------------------------------------------------------------------------------------------------------- |
| `onThemesInitialized`       | Fires when all enabled themes initialized.                                                                           |
| `onPluginsInitialized`      | Fires when all enabled plugins initialized.                                                                          |
| `onEntryAfterInitialized`   | Fires when current entry requested by fetchSingle() method has been loaded into the entry object.                    |
| `onEntriesAfterInitialized` | Fires when current entries collection requested by fetchCollection() method has been loaded into the entries object. |

<br>

### Admin plugin

| Name                 | Description                                                              |
|:-------------------- |:------------------------------------------------------------------------ |
| `onAdminThemeMeta`   | Fires when html header meta information are printed for all admin pages. |
| `onAdminThemeHeader` | Fires when html header information are printed for all admin pages.      |
| `onAdminThemeFooter` | Fires when html footer information are printed for all admin pages.      |

<br>

### Site plugin

| Name                          | Description                              |
|:----------------------------- |:---------------------------------------- |
| `onSiteEntryAfterInitialized` | Fires after site entry requested by URL. |

<br>

### Default theme

| Name            | Description                                                             |
|:--------------- |:----------------------------------------------------------------------- |
| `onThemeMeta`   | Fires when html header meta information are printed for all site pages. |
| `onThemeHeader` | Fires when html header information are printed for all site pages.      |
| `onThemeTail`   | Fires when html tail information are printed for all site pages.        |

<br>
