<?php
if ($u->__HasPermission("add_Permission")){
    if(IsPost()){
        extract($_POST);
        if (isset($close)){
            redirect('/admin/permission');
            return;
        }else{
            if(validation_required([$name,$display_name,$des])) {
                if(Permission::insert_Permission($name,$display_name,$des)=='00000'){
                    alert("اوکی شد","دسترسی جدید با موفقیت ثبت شد","success");
                    redirect('/admin/permission');
                }else{
                    //view error
                }
            }else{
                include_once DIR . '/Views/Admin/permission/addPermission.View.php';
                alert("error ","error","warning");
            }
        }
    }else{
        include_once DIR . '/Views/Admin/permission/addPermission.View.php';
    }
}else{
    require DIR . '/Views/Error/403.php';
}

