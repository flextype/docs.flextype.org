<?php

declare(strict_types=1);

/**
 * Flextype (https://flextype.org)
 * Founded by Sergey Romanenko and maintained by Flextype Community.
 */

namespace Flextype\Plugin\Twig\Twig;

use Twig\Extension\AbstractExtension;
use Twig\Extension\GlobalsInterface;
use const PHP_VERSION;

class GlobalVarsTwigExtension extends AbstractExtension implements GlobalsInterface
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
     * Register Global variables in an extension
     */
    public function getGlobals() : array
    {
        return [
            'PATH_PROJECT' => PATH['project'],
            'PATH_CACHE' => PATH['cache'],
            'PATH_LOGS' => PATH['logs'],
            'PHP_VERSION' => PHP_VERSION
        ];
    }
}
