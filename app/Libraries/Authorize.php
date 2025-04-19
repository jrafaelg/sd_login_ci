<?php

namespace App\Libraries;

use App\Models\PermissionModel;
use App\Models\RoleModel;

class Authorize
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


    public function getRolesByUser(?int $user_id): array
    {

        $roles = [];

        if (empty($user_id)) {
            return $roles;
        }

        $rolesModel = new RoleModel();
        $rolesFound = $rolesModel
            ->select('roles.id, roles.key')
            ->join('role_user', 'role_user.role_id = roles.id')
            ->join('users', 'users.id = role_user.user_id')
            ->where('users.id', $user_id)
            ->findAll();

        if (empty($rolesFound)) {
            return $roles;
        }

        // planificando o array retornado
        foreach ($rolesFound as $role) {
            $roles[$role['id']] = $role['key'];
        }

        return $roles;
    }

    public function getPermissionsByUser(?int $user_id = null): array
    {

        $permissions = [];

        if (empty($user_id)) {
            return $permissions;
        }

        $permissionsUserModel = new PermissionModel();
        $permissionsFound = $permissionsUserModel
            ->select('permissions.id, permissions.key')
            ->join('permission_user', 'permission_user.permission_id = permissions.id')
            ->join('users', 'users.id = permission_user.user_id')
            ->where('users.id', $user_id)
            ->findAll();


        if (empty($permissionsFound)) {
            return $permissions;
        }

        // planificando o array retornado
        foreach ($permissionsFound as $permission) {
            $permissions[$permission['id']] = $permission['key'];
        }

        return $permissions;
    }

    public function getPermissonsByRoles(array $roles_ids): array
    {
        $permissions = [];

        if (empty($roles_ids)) {
            return $permissions;
        }

        // pegando as chaves que são os IDs 
        // e ajustando apara a clausula IN do SQL
        $roles_keys = array_keys($roles_ids);

        $permissionsModel = new PermissionModel();
        $permissionsFound = $permissionsModel
            ->select('permissions.id, permissions.key')
            ->join('permission_role', 'permission_role.permission_id = permissions.id')
            ->join('roles', 'roles.id = permission_role.role_id')
            ->whereIn('roles.id', $roles_keys)
            ->findAll();

        if (empty($permissionsFound)) {
            return $permissions;
        }

        // planificando o array retornado
        foreach ($permissionsFound as $permission) {
            $permissions[$permission['id']] = $permission['key'];
        }

        return $permissions;
    }

    public function getPermissions(?int $user_id = null): array
    {

        $permissions = [];

        if (empty($user_id)) {
            return $permissions;
        }

        $roles = $this->getRolesByUser($user_id);


        $permissionsUser = $this->getPermissionsByUser($user_id);

        $permissionsRoles = $this->getPermissonsByRoles($roles);


        return $permissions =  [...$permissionsUser, ...$permissionsRoles];
    }
}
