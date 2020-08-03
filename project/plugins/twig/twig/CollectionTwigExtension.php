<?php

declare(strict_types=1);

/**
 * Flextype (https://flextype.org)
 * Founded by Sergey Romanenko and maintained by Flextype Community.
 */

namespace Flextype\Plugin\Twig\Twig;

use Twig_Extension;
use Twig_SimpleFunction;
use Twig_Extension_GlobalsInterface;

class CollectionTwigExtension extends Twig_Extension
{
    /**
     * Flextype Dependency Container
     */
    private $flextype;

    /**
     * Constructor
     */
    public function __construct($flextype)
    {
        $this->flextype = $flextype;
    }

    /**
     * Callback for twig.
     *
     * @return array
     */
    public function getFunctions() : array
    {
        return [
            new Twig_SimpleFunction('collect', [$this, 'collect']),
        ];
    }

    public function collect($items)
    {
        return collect($items);
    }
}
