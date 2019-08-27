---
title: Media
---

Entries can have any number and kind of images, videos, documents or other files.  
Those files are being stored directly in the entry folder.

### Getting list of images for entry in your template {#getting-list-of-images-for-entry-in-your-template}

    <?php $images = Filesystem::getFilesList(PATH['entries'] . '/portfolio', 'jpg') ?>
    

### Displaying images {#displaying-images}

    <?php foreach($images as $image): ?>
        <img src="<?= $entry['base_url'] . '/portfolio/' . basename($image); ?>" />
    <?php endforeach ?>
    

### Display images using the Glide/Intervention {#display-images-using-the-glideintervention}

The built-in Glide/Intervention library allows you to do manipulations with images and cache the images.

An example of using the Glide/Intervention library to resize images:

    <?php foreach($images as $image): ?>
        <img src="<?= Images::getImageUrl('portfolio/' . $image, ['w' => '670']) ?>" />
    <?php endforeach ?>
    

A complete list of available options, you can find here: <http://glide.thephpleague.com/1.0/api/quick-reference/>