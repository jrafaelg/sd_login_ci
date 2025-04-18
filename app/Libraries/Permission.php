<?php

namespace App\Libraries;

class Permission
{


    public function __construct()
    {
        // Load the session library
        //$this->session = \Config\Services::session();
    }

    public function can($ability)
    {

        if (empty($ability)) {
            return false;
        }

        if (!is_array($ability)) {
            $ability = [$ability];
        }

        // colocando todas em minúsculo
        $ability = array_map('strtolower', $ability);

        // roles pode ser vazia, mas precisa estar definida, caso contrário
        // o usuário não está logado
        if (!session()->has('roles')) {
            return false;
        }

        $roles = session()->get('roles');

        // se o usuário tem a role admin, ele pode tudo
        if (in_array('admin', $roles)) {
            return true;
        }

        // permissions pode ser vazia, mas precisa estar definida, caso contrário
        // o usuário não está logado
        if (!session()->has('permissions')) {
            return false;
        }

        $permissions = session()->get('permissions');

        // $ability é um array, então vericamos com array_intersect
        // se existe algum elemento em comum entre $ability e $permissions
        if (count(array_intersect($ability, $permissions)) >= 1) {
            return true;
        }

        return false;
    }

    public function hasPermission($permission)
    {
        // Check if the user has the required permission
        $permissions = session()->get('permissions');
        return !empty($permissions) && in_array($permission, $permissions);
    }

    public function hasRole($role)
    {
        // Check if the user has the required role
        $roles = session()->get('roles');
        return !empty($roles) && in_array($role, $roles);
    }
}
