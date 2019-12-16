<?php

if ($u->__HasPermission("edit_permission")){

    if(IsPost()){
        extract($_POST);
        if (isset($close)){
            redirect('/admin/permission');
            return;
        }else{
            if(validation_required([$name,$display_name,$des])) {

                if(Permission::edit_Permission($req[3],$name,$display_name,$des)=='00000'){
                    alert("اوکی شد","دسترسی جدید با موفقیت تغییر کرد","success");
                    redirect('/admin/permission');

                }else{
                    //view error
                }
            }else{
                include_once DIR . '/Views/Admin/permission/addPermission.View.php';
                //error validation
            }
        }
    }else{
        $Permission=Permission::get_Permission($req[3]);

        if(!$Permission){
            redirect('/404');
            return;
        }

        include_once DIR . '/Views/Admin/permission/editPermission.View.php';
    }
}else{

    require DIR . '/Views/Error/403.php';
}






