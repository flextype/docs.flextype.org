---
title: Entries and Urls structure in Flextype
description: Entries are the fundamental building-blocks of your site. Each entry in Flextype should contains Entry Front Matter block in YAML format at the top of the file and Entry Content marked up using HTML + Markdown + Shortcodes at the bottom of the file.
breadcrumbs:
  0:
    title: "Documentation"
    link: "[url]/en/"
  1:
    title: "Concepts"
    link: "[url]/en/concepts/"
  2:
    title: "Entries"
    link: "[url]/en/concepts/entries/"
---


All content entries are located in the `/project/entries/` folder. Each entry file should be placed in its own folder.

Folder names should also be valid **slugs**. Slugs are entirely lowercase, with accented characters replaced by letters from the Latin alphabet and whitespace characters replaced by a dash or an underscore, to avoid being encoded.

| Physical Location                     | URL              |
| ------------------------------------- | ---------------- |
| project/entries/home/entry.md            | /                |
| project/entries/blog/my-post/entry.md    | /blog/my-post    |
| project/entries/a/very/long/url/entry.md | /a/very/long/url |
