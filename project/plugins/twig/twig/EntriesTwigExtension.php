<?php

declare(strict_types=1);

/**
 * Flextype (https://flextype.org)
 * Founded by Sergey Romanenko and maintained by Flextype Community.
 */

namespace Flextype\Plugin\Twig\Twig;

use Twig_Extension;
use Twig_Extension_GlobalsInterface;

class EntriesTwigExtension extends Twig_Extension implements Twig_Extension_GlobalsInterface
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
     * Register Global variables in an extension
     */
    public function getGlobals()
    {
        return [
            'entries' => new EntriesTwig($this->flextype),
        ];
    }
}

class EntriesTwig
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
     * Fetch entry(entries)
     */
    public function fetch(string $path, bool $collection = false, array $filter = []) : array
    {
        return $this->flextype['entries']->fetch($path, $collection, $filter);
    }

    /**
     * Fetch single entry
     */
    public function fetchSingle(string $path) : array
    {
        return $this->flextype['entries']->fetch($path);
    }

    /**
     * Fetch entries collection
     */
    public function fetchCollection(string $path, array $filter = []) : array
    {
        return $this->flextype['entries']->fetchCollection($path, $filter);
    }
}
