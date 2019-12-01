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
           if(insert_role($name,$display_name,$des,$status)=='00000'){
               alert("اوکی شد","دسترسی جدید با موفقیت ثبت شد","success");
               redirect('/admin/roles');
           }else{
               //view error
           }
        }else{
            include_once DIR . '/Views/Admin/roles/addRoles.View.php';
            alert("انا ","انا","warning");
        }
    }
}else{
    include_once DIR . '/Views/Admin/roles/addRoles.View.php';
}