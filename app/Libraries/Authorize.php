<?php

namespace App\Libraries;

use App\Models\PermissionModel;
use App\Models\RoleModel;

class Authorize
{

    private $ttl = 60; // 1 minute
    private $session_uid = null;

    public function __construct()
    {

        //$this->ttl = config('Cache')->ttl ?? 60; // 1 minute
        $this->ttl = (int) env('cache.ttl', 60); // 1 minute
        $this->session_uid = service('auth')->getSessionUid() ?? null;
    }

    public function getLogedUserId()
    {
        // get the logged-in user id
        return getUser()['id'] ?? 0;
    }

    /**
     * Check if the user has the required permission or role.
     * @param string|array $ability
     * @return bool
     */
    public function can($ability): bool
    {

        if (empty($ability)) {
            return false;
        }

        // transformando em array, caso não seja
        $ability = is_array($ability) ? $ability : [$ability];

        // colocando todas em minúsculo
        $ability = array_map('strtolower', $ability);

        // Check if the user is logged in
        $user_id = $this->getLogedUserId() ?? null;
        if (empty($user_id)) {
            return false;
        }

        $roles = $this->getRoles($user_id);

        // se o usuário tem a role admin, ele pode tudo
        if (in_array('admin', $roles)) {
            return true;
        }

        $permissions = $this->getPermissions($user_id);

        // $ability é um array, então vericamos com array_intersect
        // se existe algum elemento em comum entre $ability e $permissions
        if (count(array_intersect($ability, $permissions)) >= 1) {
            return true;
        }

        return false;
    }

    /**
     * Check if the user has the required permission.
     * @param string $permission
     * @return bool
     */
    public function hasPermission($permission): bool
    {
        // Check if the user has the required permission
        $permissions = $this->getPermissions();
        return !empty($permissions) && in_array($permission, $permissions);
    }

    /**
     * Check if the user has the required role.
     * @param string $role
     * @return bool
     */
    public function hasRole($role): bool
    {
        // Check if the user has the required role
        $roles = $this->getRoles();
        return !empty($roles) && in_array($role, $roles);
    }


    /**
     * Get roles by user ID
     * @param int|null $user_id se null, pega o usuário logado
     * @return array
     */
    public function getRoles(?int $user_id = null): array
    {

        $roles = [];

        $user_id = $user_id ?? $this->getLogedUserId() ?? null;

        if (empty($user_id)) {
            return $roles;
        }

        $rolesFound = cache()->remember('roles_user_' . $user_id, $this->ttl, function () use ($user_id) {
            $rolesFound = model(RoleModel::class)
                ->select('roles.id, roles.key')
                ->join('role_user', 'role_user.role_id = roles.id')
                ->join('users', 'users.id = role_user.user_id')
                ->where('users.id', $user_id)
                ->findAll();

            return $rolesFound;
        });

        // se não encontrou nenhuma role, retorna vazio
        if (empty($rolesFound)) {
            return $roles;
        }

        // planificando o array retornado
        foreach ($rolesFound as $role) {
            $roles[$role['id']] = $role['key'];
        }

        return $roles;
    }

    /**
     * * Get permissions by user ID
     * @param int|null $user_id se null, pega o usuário logado
     * @return array
     */
    public function getPermissionsByUser(?int $user_id = null): array
    {

        $permissions = [];

        $user_id = $user_id ?? $this->getLogedUserId() ?? null;

        if (empty($user_id)) {
            return $permissions;
        }

        $permissionsFound = cache()->remember('permissions_user_' . $user_id, $this->ttl, function () use ($user_id) {
            $permissionsFound = model(PermissionModel::class)
                ->select('permissions.id, permissions.key')
                ->join('permission_user', 'permission_user.permission_id = permissions.id')
                ->join('users', 'users.id = permission_user.user_id')
                ->where('users.id', $user_id)
                ->findAll();
            return $permissionsFound;
        });

        if (empty($permissionsFound)) {
            return $permissions;
        }

        // planificando o array retornado
        foreach ($permissionsFound as $permission) {
            $permissions[$permission['id']] = $permission['key'];
        }

        return $permissions;
    }

    /**
     * Get permissions by roles IDs
     * @param array $roles_ids se null, retorna vazio
     * @return array
     */
    public function getPermissonsByRoles(array $roles_ids): array
    {
        $permissions = [];

        if (empty($roles_ids)) {
            return $permissions;
        }

        // get the logged in user ID
        $user_id = $this->getLogedUserId() ?? 0;

        // pegando as chaves que são os IDs
        // e ajustando apara a clausula IN do SQL
        $roles_keys = array_keys($roles_ids);

        $permissionsFound = cache()->remember('permissions_roles_' . $user_id, $this->ttl, function () use ($roles_keys) {
            $permissionsFound = model(PermissionModel::class)
                ->select('permissions.id, permissions.key')
                ->join('permission_role', 'permission_role.permission_id = permissions.id')
                ->join('roles', 'roles.id = permission_role.role_id')
                ->whereIn('roles.id', $roles_keys)
                ->findAll();
            return $permissionsFound;
        });

        if (empty($permissionsFound)) {
            return $permissions;
        }

        // planificando o array retornado
        foreach ($permissionsFound as $permission) {
            $permissions[$permission['id']] = $permission['key'];
        }

        return $permissions;
    }

    /**
     * Get permissions by user ID and your roles
     * @param int|null $user_id se null, pega o usuário logado
     * @return array
     */
    public function getPermissions(?int $user_id = null): array
    {

        $permissions = [];

        $user_id = $user_id ?? $this->getLogedUserId() ?? null;

        if (empty($user_id)) {
            return $permissions;
        }

        // $permissions = cache()->remember('permissions_' . $user_id, $this->ttl, function () use ($user_id) {

        //     $permissionsUser = $this->getPermissionsByUser($user_id);

        //     $roles = $this->getRoles($user_id);

        //     $permissionsRoles = $this->getPermissonsByRoles($roles);

        //     return [...$permissionsUser, ...$permissionsRoles];
        // });

        $permissionsUser = $this->getPermissionsByUser($user_id);

        $roles = $this->getRoles($user_id);

        $permissionsRoles = $this->getPermissonsByRoles($roles);

        return $permissions = [...$permissionsUser, ...$permissionsRoles];
    }
}
