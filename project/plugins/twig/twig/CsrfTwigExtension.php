<?php

declare(strict_types=1);

/**
 * Flextype (https://flextype.org)
 * Founded by Sergey Romanenko and maintained by Flextype Community.
 */

namespace Flextype\Plugin\Twig\Twig;

use Twig\Extension\AbstractExtension;
use Twig\Extension\GlobalsInterface;

class CsrfTwigExtension extends AbstractExtension implements GlobalsInterface
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
        // CSRF token name and value
        $csrfNameKey  = $this->flextype->container('csrf')->getTokenNameKey();
        $csrfValueKey = $this->flextype->container('csrf')->getTokenValueKey();
        $csrfName     = $this->flextype->container('csrf')->getTokenName();
        $csrfValue    = $this->flextype->container('csrf')->getTokenValue();

        return [
            'csrf'   => [
                'keys' => [
                    'name'  => $csrfNameKey,
                    'value' => $csrfValueKey,
                ],
                'name'  => $csrfName,
                'value' => $csrfValue,
            ],
        ];
    }

    public function getName()
    {
        return 'slim/csrf';
    }

    /**
     * Returns a list of functions to add to the existing list.
     *
     * @return array
     */
    public function getFunctions() : array
    {
        return [
            new \Twig\TwigFunction('csrf', [$this, 'csrf'], ['is_safe' => ['html']]),
        ];
    }

    /**
     * CSRF
     */
    public function csrf() : string
    {
        return '<input type="hidden" name="' . $this->flextype->container('csrf')->getTokenNameKey() . '" value="' . $this->flextype->container('csrf')->getTokenName() . '">' .
               '<input type="hidden" name="' . $this->flextype->container('csrf')->getTokenValueKey() . '" value="' . $this->flextype->container('csrf')->getTokenValue() . '">';
    }
}
