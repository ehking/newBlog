<?php

if ($u->__HasPermission("view_permission")){
    $permissions=Permission::get_all_per();
    include_once DIR . '/Views/Admin/permission/Permission.View.php';
}else{
    require DIR . '/Views/Error/403.php';
}
