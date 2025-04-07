<?php

if (! function_exists('dd')) {
    /**
     * dump and die
     * expose a variable.
     *
     * @param null $s
     *
     * @return bool|string|null
     */
    function dd($s = null, $default = null)
    {
        var_dump($s);
        exit;
    }
}
if (! function_exists('objToArray')) {
    /**
     * Convert object to array
     *
     * @param $object
     *
     * @return array
     */
    function objToArray($object)
    {
        return json_decode(json_encode($object), true);
    }
}
