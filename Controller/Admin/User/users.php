<?php
if ($u->__HasPermission("view_users")){
    $users=get_all_user();
    include_once DIR . '/Views/Admin/users/users.View.php';
}else{
    require DIR . '/Views/Error/403.php';
}
