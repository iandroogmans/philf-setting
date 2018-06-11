<?php namespace Philf\Setting\interfaces;

/**
 * Class FallbackInterface
 * @package Philf\Setting\interfaces
 */
interface FallbackInterface {

    /**
     * @param $key
     * @return mixed
     */
    public function fallbackGet($key, $default = null);

    /**
     * @param $key
     * @return boolean
     */
    public function fallbackHas($key);

}