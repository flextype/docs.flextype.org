<?php

declare(strict_types=1);

/**
 * Flextype (https://flextype.org)
 * Founded by Sergey Romanenko and maintained by Flextype Community.
 */

namespace Flextype\Plugin\Twig\Twig;

use Twig\Extension\AbstractExtension;
use Twig\Extension\GlobalsInterface;

class EmitterTwigExtension extends AbstractExtension implements GlobalsInterface
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
            'emitter' => new EmitterTwig($this->flextype),
        ];
    }
}

class EmitterTwig
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
     * Emitting event
     */
    public function emit($event)
    {
        return $this->flextype->container('emitter')->emit($event);
    }

    /**
     * Emitting events in batches
     */
    public function emitBatch(array $events)
    {
        return $this->flextype->container('emitter')->emitBatch($events);
    }
}
