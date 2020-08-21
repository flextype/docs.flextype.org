<?php

declare(strict_types=1);

/**
 * Flextype (https://flextype.org)
 * Founded by Sergey Romanenko and maintained by Flextype Community.
 */

namespace Flextype\Plugin\Twig\Twig;

use Twig\Extension\AbstractExtension;

class YamlTwigExtension extends AbstractExtension
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
     * Returns a list of functions to add to the existing list.
     *
     * @return array
     */
    public function getFunctions() : array
    {
        return [
            new \Twig\TwigFunction('yaml_decode', [$this, 'decode']),
            new \Twig\TwigFunction('yaml_encode', [$this, 'encode']),
        ];
    }

    /**
     * Returns a list of filters to add to the existing list.
     *
     * @return array
     */
    public function getFilters() : array
    {
        return [
            new \Twig\TwigFilter('yaml_decode', [$this, 'decode']),
            new \Twig\TwigFilter('yaml_encode', [$this, 'encode']),
        ];
    }

    /**
     * Encode YAML
     */
    public function encode($input) : string
    {
        return $this->flextype->container('yaml')->encode($input);
    }

    /**
     * Decode YAML
     */
    public function decode(string $input, bool $cache = true)
    {
        return $this->flextype->container('yaml')->decode($input, $cache);
    }
}
