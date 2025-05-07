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
    function getUser(): array|object|null
    {
        $auth = service('auth');
        return $auth->getUser();
    }
}

if (! function_exists('getPermissions')) {
    /**
     * Get Permissions from session
     *
     * @return array|object|null
     */
    function getPermissions(): array|object|null
    {
        $authorize = service('authorize');

        return $authorize->getPermissions();
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
        $authorize = service('authorize');

        return $authorize->getRoles();
    }
}

if (! function_exists('isLoggedIn')) {
    /**
     * Check if user is logged in
     *
     * @return bool
     */
    function isLoggedIn(): bool
    {
        $auth = service('auth');

        return $auth->isLoggedIn();
    }
}

if (! function_exists('can')) {
    /**
     * check if user can do something
     *
     * @return bolean
     */
    function can($ability): bool
    {
        $authorize = service('authorize');

        return $authorize->can($ability);
    }
}

if (! function_exists('getSessionUid')) {
    /**
     * check if user can do something
     *
     * @return string
     */
    function getSessionUid(): string
    {
        $service = service('auth');

        return $service->getSessionUid();
    }
}

if (! function_exists('dateTimeBrFormat')) {

    /**
     * check if user can do something
     *
     * @return string
     */
    function dateTimeBrFormat(): string
    {
        $service = service('auth');

        return $service->getSessionId();
    }
}
