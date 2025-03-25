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
