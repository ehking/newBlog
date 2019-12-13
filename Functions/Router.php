<?php

$req = explode( "/", REQUEST_URI );
require_once DIR . "/Model/Role.php";
require_once DIR . "/Model/Permission.php";

$_SESSION["user_name"] = 1;
//admin Panel Router
if ($req[1] == "admin") {
    if (isset( $_SESSION['user_name'] )) {
        $u = Permission::getByUsername( $_SESSION["user_name"] );
        switch ($req[2]) {
            case '/'   :
            case ''   :
                require DIR . '/Views/Admin/PersonalPage.View.php';
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


            case '/about' :
                require DIR . '/views/about.php';
                break;



            case '/404' :
            default:
                http_response_code( 404 );
                require DIR . '/Views/Error/404.php';
                break;
        }
    } else {
        require DIR . '/Views/404.php';
        die();
    }
} else {

    switch (REQUEST_URI) {
        case '/' :
            require DIR . '/Views/Site/index.php';
            break;
        case '' :
            require DIR . '/Views/Site/index.php';
            break;
        default:
            http_response_code( 404 );
            require DIR . '/Views/404.php';
            break;
    }
}

