<?php

namespace Flextype\Plugin\Sitemap;

use Flextype\Plugin\Sitemap\Controllers\SitemapController;

$flextype->container()['SitemapController'] = function () use ($flextype) {
    return new SitemapController($flextype);
};
