<?php
if ($u->__HasPermission("add_roles")){
    if(IsPost()){
        extract($_POST);
        if (isset($close)){
            redirect('/admin/roles');
            return;
        }else{
            if(validation_required([$name,$display_name,$des])) {
                if (isset($status))
                    $status=1;
                else
                    $status=0;
                if(Role::insert_role($name,$display_name,$des,$status)=='00000'){
                    alert("اوکی شد","دسترسی جدید با موفقیت ثبت شد","success");
                    redirect('/admin/roles');
                }else{
                    //view error
                }
            }else{
                include_once DIR . '/Views/Admin/roles/addRoles.View.php';
                alert("error ","error","warning");
            }
        }
    }else{
        include_once DIR . '/Views/Admin/roles/addRoles.View.php';
    }
}else{
    require DIR . '/Views/Error/403.php';
}

