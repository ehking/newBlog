<?php

if ($u->__HasPermission("del_roles")){
    Permission::del_Permission($req[3]);
}else{
    require DIR . '/Views/Error/403.php';
}





