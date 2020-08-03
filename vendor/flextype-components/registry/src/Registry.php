<?php

declare(strict_types=1);

namespace Flextype\Component\Registry;

use Flextype\Component\Arrays\Arrays;

class Registry
{
    /**
     * Registry of variables
     *
     * @var array
     */
    private $registry = [];

    /**
     * Get all values in the register.
     *
     * @return array
     */
    public function all() : array
    {
        return $this->registry;
    }

    /**
     * Determine if the registry has a value for the given name.
     *
     * @param  string $key The key of the registry item to check for existence.
     */
    public function has(string $key) : bool
    {
        if (Arrays::has($this->registry, $key)) {
            return true;
        }

        return false;
    }

    /**
     * Set a value in the registry.
     *
     * @param  string          $key   The key of the value to store.
     * @param  string|int|null $value The value that needs to be stored.
     */
    public function set(string $key, $value = null) : void
    {
        Arrays::set($this->registry, $key, $value);
    }

    /**
     * Flush all values from the registry.
     */
    public function flush() : void
    {
        $this->registry = [];
    }

    /**
     * Delete a value from the registry.
     *
     * @param  string $key The key of the value to store.
     */
    public function delete(string $key) : void
    {
        Arrays::delete($this->registry, $key);
    }

    /**
     * Get item from the registry.
     *
     * @param  string $key     The name of the item to fetch.
     * @param  mixed  $default Default value
     *
     * @return string|array|null
     */
    public function get(string $key, $default = null)
    {
        return $this->has($key)
            ? Arrays::get($this->registry, $key, $default)
            : $default;
    }
}
