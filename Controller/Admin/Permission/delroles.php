<?php

if ($u->__HasPermission("del_roles")){
    Role::del_role($req[3]);
}else{
    require DIR . '/Views/Error/403.php';
}






