<?php

declare(strict_types=1);

/**
 * Flextype (https://flextype.org)
 * Founded by Sergey Romanenko and maintained by Flextype Community.
 */

namespace Flextype\Plugin\Twig\Twig;

use Twig\Extension\AbstractExtension;
use Twig\Extension\GlobalsInterface;
use Flextype\Component\Arrays\Arrays;

class ArraysTwigExtension extends AbstractExtension implements GlobalsInterface
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
            'arrays' => new ArraysTwig($this->flextype),
        ];
    }
}

class ArraysTwig
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
     * Sorts a multi-dimensional array by a certain column
     *
     * @param  array  $array     The source array
     * @param  string $field     The name of the column
     * @param  string $direction Order type DESC (descending) or ASC (ascending)
     * @param  const  $method    A PHP sort method flag or 'natural' for natural sorting, which is not supported in PHP by sort flags
     * @return array
     */
     public function sort(array $array, string $field, string $direction = 'ASC', $method = SORT_REGULAR) : array
     {
         return Arrays::sort($array, $field, $direction, $method);
     }

    /**
     * Sets an array value using "dot notation".
     *
     * @access  public
     * @param   array    $array  Array you want to modify
     * @param   string   $path   Array path
     * @param   mixed    $value  Value to set
     */
    public function set(array &$array, string $path, $value)
    {
        Arrays::set($array, $path, $value);
        return $array;
    }

    /**
     * Returns value from array using "dot notation".
     * If the key does not exist in the array, the default value will be returned instead.
     *
     * @param  array  $array   Array to extract from
     * @param  string $path    Array path
     * @param  mixed  $default Default value
     * @return mixed
     */
    public function get(array $array, string $path, $default = null)
    {
        return Arrays::get($array, $path, $default);
    }

    /**
     * Deletes an array value using "dot notation".
     *
     * @access  public
     * @param  array   $array Array you want to modify
     * @param  string  $path  Array path
     * @return bool
     */
    public function delete(array &$array, string $path) : bool
    {
        Arrays::delete($array, $path);
        return $array;
    }

    /**
     * Checks if the given dot-notated key exists in the array.
     *
     * @param  array   $array The search array
     * @param  mixed   $path  Array path
     * @return bool
     */
    public function has(array $array, $path) : bool
    {
        return Arrays::has($array, $path);
    }
}
