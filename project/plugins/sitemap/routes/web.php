<?php

namespace Flextype;

$flextype->get('/' . $flextype->container('registry')->get('plugins.sitemap.settings.route'), 'SitemapController:index')->setName('sitemap.index');
