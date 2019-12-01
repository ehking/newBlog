<?php
require_once DIR . '/Model/Role.php';

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
            if(edit_role($req[3],$name,$display_name,$des,$status)=='00000'){
                alert("اوکی شد","دسترسی جدید با موفقیت تغییر کرد","success");
                redirect('/admin/roles');

            }else{
                //view error
            }


        }else{
            include_once DIR . '/Views/Admin/roles/addRoles.View.php';
            //error validation
        }
    }
}else{
    $role=get_role($req[3]);
    if(!$role){
        redirect('/404');
    }
    include_once DIR . '/Views/Admin/roles/editRoles.View.php';
}



