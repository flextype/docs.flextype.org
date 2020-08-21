<?php

declare(strict_types=1);

/**
 * Flextype (https://flextype.org)
 * Founded by Sergey Romanenko and maintained by Flextype Community.
 */

namespace Flextype\Plugin\Twig\Twig;

use Twig\Extension\AbstractExtension;
use Twig\Extension\GlobalsInterface;

class EntriesTwigExtension extends AbstractExtension implements GlobalsInterface
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
            'entries' => new EntriesTwig($this->flextype),
        ];
    }
}

class EntriesTwig
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
     * Fetch entry(entries)
     */
    public function fetch(string $path, bool $collection = false, array $filter = []) : array
    {
        return $this->flextype->container('entries')->fetch($path, $collection, $filter);
    }

    /**
     * Fetch single entry
     */
    public function fetchSingle(string $path) : array
    {
        return $this->flextype->container('entries')->fetch($path);
    }

    /**
     * Fetch entries collection
     */
    public function fetchCollection(string $path, array $filter = []) : array
    {
        return $this->flextype->container('entries')->fetchCollection($path, $filter);
    }
}
