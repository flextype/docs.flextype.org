---
title: Installation
description: Flextype is incredibly easy to set up and get running.
breadcrumbs:
  1:
    title: "Getting Started"
    link: "[url]/en/getting-started/"
on_this_page:
  -
    title: "Download and installation"
    link: "download-and-installation"
  -
    title: "Installation issues"
    link: "installation-issues"
---

Flextype is incredibly easy to set up and get running. Installation of Flextype is a simple process without any of hard routine of configuring databases, servers and etc...

### <a name="using-sftp"></a> Download and installation


1. We provide two downloadable packages for you to get started with:
  - [Flextype CMS](https://flextype.org/en/downloads) - package contains example of content, fieldsets, plugins, default theme and more. This package ideal for new users to explore many of Flextype's options and get to know the Flextype Admin Panel.
  - [Flextype Core](https://flextype.org/en/downloads) - package with a minimal Flextype setup with the basics you need to start a project from scratch. It is the ideal choice if you are already familiar with Flextype and want to start your project step-by-step.
2. Unzip the contents to a new folder on your local computer, and upload to your webhost using the (S)FTP client of your choice. After you’ve done this, create directory <code>project</code> and be sure to chmod the following directory to <code>755</code> (or <code>777</code>), so it is readable and writable by Flextype.<br>
3. Visit your new Flextype site in your browser at `yourdomain.com`
4. Visit the Flextype Admin Panel at `yourdomain.com/admin` and create admin account.

### <a name="installation-issues"></a> Installation issues

##### Broken subpages

Your homepage is working, but subpages won't open or lead to a server error?

1. Make sure that the .htaccess file is present in your Flextype folder.
2. Check if `mod_rewrite` is enabled on your server.
3. Please try setting the `RewriteBase` in the .htaccess file:

```
RewriteBase /
```

If you run Flextype in a subfolder, make sure to set the RewriteBase according to the name of your subfolder:

```
RewriteBase /my-subfolder/
```
