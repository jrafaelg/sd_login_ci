<?php

/**
 * Common helper functions and constants for the application.
 *
 * @package App\Helpers
 */

/**
 * --------------------------------------------------------------------------
 * CONSTANTS
 * --------------------------------------------------------------------------
 */

defined('DATE_BR_FORMAT') || define('DATE_BR_FORMAT', 'dd/MM/Y');
defined('TIME_BR_FORMAT') || define('TIME_BR_FORMAT', 'HH:mm');
defined('DATE_TIME_BR_FORMAT') || define('DATE_TIME_BR_FORMAT', DATE_BR_FORMAT . ' ' . TIME_BR_FORMAT);

defined('DATE_DATABASE_FORMAT') || define('DATE_DATABASE_FORMAT', 'yyyy-mm-dd');
defined('TIME_DATABASE_FORMAT') || define('TIME_DATABASE_FORMAT', 'HH:i:ss');
defined('DATE_TIME_DATABASE_FORMAT') || define('DATE_TIME_DATABASE_FORMAT', DATE_DATABASE_FORMAT . ' ' . TIME_DATABASE_FORMAT);


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



if (! function_exists('parseDate')) {
    /**
     * Parse date from string to DateTime object
     *
     * @param string $date
     * @param string $format
     *
     * @return \CodeIgniter\I18n\Time|false
     */
    function parseDate(string $date, string $format = 'Y-m-d H:i:s')
    {
        $dateTime = \CodeIgniter\I18n\Time::parse($date, $format);

        if (!$dateTime) {
            return false;
        }

        return $dateTime;
    }
}

if (! function_exists('formatDate')) {
    /**
     * Format date from DateTime object to string
     *
     * @param \CodeIgniter\I18n\Time $dateTime
     * @param string $format
     *
     * @return string
     */
    function formatDate(\CodeIgniter\I18n\Time $dateTime, string $format = 'Y-m-d H:i:s'): string
    {
        return $dateTime->format($format);
    }
}
