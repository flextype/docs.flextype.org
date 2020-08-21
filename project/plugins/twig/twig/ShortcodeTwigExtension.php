<?php

declare(strict_types=1);

/**
 * Flextype (http://flextype.org)
 * Founded by Sergey Romanenko and maintained by Flextype Community.
 */

namespace Flextype\Plugin\Twig\Twig;

use Twig\Extension\AbstractExtension;

class ShortcodeTwigExtension extends AbstractExtension
{
    /**
     * Flextype Application
     */
    protected $flextype;

    /**
     * Constructor
     */
    public function __construct($flextype)
    {
        $this->flextype = $flextype;
    }

    /**
     * Returns a list of filters to add to the existing list.
     *
     * @return array
     */
    public function getFilters() : array
    {
        return [
            new \Twig\TwigFilter('shortcode', [$this, 'shortcode']),
        ];
    }

    /**
     * Shorcode process
     */
    public function shortcode($value) : string
    {
        if (!empty($value)) {
            return $this->flextype->container('shortcode')->process($value);
        }

        return '';
    }
}
