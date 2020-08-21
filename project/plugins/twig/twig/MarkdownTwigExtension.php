<?php

declare(strict_types=1);

/**
 * Flextype (https://flextype.org)
 * Founded by Sergey Romanenko and maintained by Flextype Community.
 */

namespace Flextype\Plugin\Twig\Twig;

use Twig\Extension\AbstractExtension;

class MarkdownTwigExtension extends AbstractExtension
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
            new \Twig\TwigFilter('markdown', [$this, 'markdown']),
        ];
    }

    /**
     * Markdown process
     */
    public function markdown($input, bool $cache = true) : string
    {
        if (!empty($input)) {
            return $this->flextype->container('markdown')->parse($input, $cache);
        }

        return '';
    }
}
