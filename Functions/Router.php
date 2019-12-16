<?php

$req = explode( "/", REQUEST_URI );
require_once DIR . "/Model/Role.php";
require_once DIR . "/Model/Permission.php";

//$_SESSION["user_id"] = 1;
//admin Panel Router
if ($req[1] == "admin") {
    if (isset( $_SESSION['user_id'] )) {

        $user=userGet( $_SESSION['user_name'] );
        $u = Permission::getByUsername( $_SESSION["user_id"] );
        switch ($req[2]) {
            case '/' :
            case '' :
            if ($u->__HasPermission('view_dash')) {
                require DIR.'/Views/Admin/PersonalPage.View.php';
            }else{
                require DIR . '/Views/Error/403.php';
            }
                break;

                //role
            case 'roles' :
                require DIR . '/Controller/Admin/Role/roles.php';
                break;

            case 'addrole' :
                require DIR . '/Controller/Admin/Role/addroles.php';
                break;

            case 'editerole':
                require DIR . '/Controller/Admin/Role/editroles.php';
                break;

            case 'editerolep' :
                require DIR . '/Controller/Admin/per_role/editrole_per.php';
                break;

            case 'delrole':
                require DIR . '/Controller/Admin/Role/delroles.php';
                break;

            //Permission
            case 'permission':
                require DIR . '/Controller/Admin/Permission/permision.php';
                break;

            case 'addpermission' :
                require DIR . '/Controller/Admin/Permission/addpermision.php';
                break;

            case 'editepermission':
                require DIR . '/Controller/Admin/Permission/editpermision.php';
                break;

            case 'delpermission':
                require DIR . '/Controller/Admin/Permission/delpermision.php';
                break;

            case 'users':
                require DIR . '/Controller/Admin/User/users.php';
                break;

            case 'addusers' :
                require DIR . '/Controller/Admin/User/addusers.php';
                break;

            case 'editeuser':
                require DIR . '/Controller/Admin/User/editusers.php';
                break;

            case 'delusers':
                require DIR . '/Controller/Admin/User/delusers.php';
                break;

            case 'editeroleu' :
                require DIR . '/Controller/Admin/user_role/editrole_user.php';
                break;





            case '/404' :
            default:
                http_response_code( 404 );
                require DIR . '/Views/Error/404.php';
                break;
        }
    } else {
        redirect('/login');
        die();
    }
} else {
    if (isset( $_SESSION['user_id'] )) {
        $user = userGet( $_SESSION['user_name'] );
        $u = Permission::getByUsername( $_SESSION["user_id"] );
    }
    switch (REQUEST_URI) {
        case '/' :
        case '' :
            require DIR . '/Views/Site/index.php';
            break;
        case '/login':
            require DIR . '/Controller/Admin/Login.php';
            break;
        case '/logout':
            logout();
            break;
        case '/about' :
            require DIR . '/Views/about.php';
            break;
        default:
            http_response_code( 404 );
            require DIR . '/Views/Error/404.php';
            break;
    }
}

