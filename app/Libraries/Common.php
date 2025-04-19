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
        echo '<pre>';
        var_dump($s);
        echo '</pre>';
        exit;
    }
}

if (! function_exists('dump')) {
    /**
     * dump and die
     * expose a variable.
     *
     * @param null $s
     *
     * @return bool|string|null
     */
    function dump($s = null, $default = null)
    {
        echo '<pre>';
        var_dump($s);
        echo '</pre>';
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

if (! function_exists('flatten')) {
    function flatten(array $array)
    {
        $return = array();
        array_walk_recursive($array, function ($a, $b) use (&$return) {
            $return[] = $a . ' ' . $b;
        });
        return $return;
    }
}

if (! function_exists('getUser')) {
    /**
     * Get user from session
     *
     * @return array|object|null
     */
    function getUser()
    {
        return session()->get('user');
    }
}

if (! function_exists('getPermissions')) {
    /**
     * Get Permissions from session
     *
     * @return array|object|null
     */
    function getPermissions()
    {
        return session()->get('permissions');
    }
}

if (! function_exists('getRoles')) {
    /**
     * Get Roles from session
     *
     * @return array|object|null
     */
    function getRoles()
    {
        return session()->get('roles');
    }
}

if (! function_exists('cans')) {
    /**
     * check if user can do something
     *
     * @return bolean
     */
    function cans($ability)
    {


        if (is_null($ability)) {
            return false;
        }

        if (!is_array($ability)) {
            $ability = [$ability];
        }

        // colocando todas em minúsculo
        $ability = array_map('strtolower', $ability);

        if (!session()->has('roles')) {
            return false;
        }

        $roles = session()->get('roles');

        if (in_array('admin', $roles)) {
            return true;
        }

        if (!session()->has('permissions')) {
            return false;
        }

        $permissions = session()->get('permissions');

        // $ability é um array, então vericamos com array_intersect
        // se existe algum elemento em comum entre $ability e $permissions
        if (count(array_intersect($ability, $permissions)) >= 1) {
            return true;
        }
    }
}

if (! function_exists('can')) {
    /**
     * check if user can do something
     *
     * @return bolean
     */
    function can($ability)
    {
        $authorize = service('authorize');

        return $authorize->can($ability);
    }
}
