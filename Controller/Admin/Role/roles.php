<?php

if ($u->__HasPermission("view_roles")){
    $roles=Role::get_all();
    include_once DIR . '/Views/Admin/roles/Roles.View.php';
}else{
    require DIR . '/Views/Error/403.php';
}
