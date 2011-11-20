<?php

/**
 * This file is part of the Geocoder package.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @license    MIT License
 */

namespace Geocoder\Cache;

/**
 * @author William Durand <william.durand1@gmail.com>
 */
interface CacheInterface
{
    /**
     * Stores a value with a unique key.
     *
     * @param string $key   A unique key.
     * @param mixed $value  A value.
     */
    function store($key, $value);

    /**
     * Retrieves a value identified by its key.
     *
     * @return mixed    A value.
     */
    function retrieve($key);
}
