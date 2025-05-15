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

defined('DATE_BR_FORMAT') || define('DATE_BR_FORMAT', 'd/m/Y');
defined('TIME_BR_FORMAT') || define('TIME_BR_FORMAT', 'H:i');
defined('DATE_TIME_BR_FORMAT') || define('DATE_TIME_BR_FORMAT', DATE_BR_FORMAT . ' ' . TIME_BR_FORMAT);

//Y-m-d H:i:s
defined('DATE_DATABASE_FORMAT') || define('DATE_DATABASE_FORMAT', 'Y-m-d');
defined('TIME_DATABASE_FORMAT') || define('TIME_DATABASE_FORMAT', 'H:i:s');
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

if (! function_exists('formatCnpjCpf')) {
    /**
     * check if user can do something
     *
     * @return string
     */
    function formatCnpjCpf($value)
    {

        // Check if the value is empty
        if (empty($value)) {
            return '';
        }

        // Remove all non-aphanumeric characters
        $cnpj_cpf = preg_replace("/\W|_/", '', $value);

        // $cnpj_cpf = str_split($cnpj_cpf);

        // [$a, $b, $c, $d, $e, $f, $g, $h, $i, $j, $k] = $cnpj_cpf;

        // $p1 = $a . $b . $c;
        // $p2 = $d . $e . $f;
        // $p3 = $g . $h . $i;
        // $p4 = $j . $k;

        // dump($p1);
        // dump($p2);
        // dump($p3);
        // dump($p4);

        if (strlen($cnpj_cpf) <= 11) {

            // prenchendo com zeros a esquerda
            $cnpj_cpf = sprintf("%011s", $cnpj_cpf);
            //$cnpj_cpf = str_pad((string)$cnpj_cpf, 11, "0", STR_PAD_LEFT);

            return preg_replace("/(\w{3})(\w{3})(\w{3})(\w{2})/", "\$1.\$2.\$3-\$4", $cnpj_cpf);
        }

        // prenchendo com zeros a esquerda
        $cnpj_cpf = sprintf("%014s", $cnpj_cpf);

        return preg_replace("/(\w{2})(\w{3})(\w{3})(\w{4})(\w{2})/", "\$1.\$2.\$3/\$4-\$5", $cnpj_cpf);
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
    function parseDate(string $date, ?string $tz = null): \CodeIgniter\I18n\Time|false
    {
        $dateTime = \CodeIgniter\I18n\Time::parse($date, $tz);

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
