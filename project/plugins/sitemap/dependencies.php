<?php

namespace Flextype\Plugin\Sitemap;

use Flextype\Plugin\Sitemap\Controllers\SitemapController;

$flextype['SitemapController'] = function ($container) {
    return new SitemapController($container);
};
