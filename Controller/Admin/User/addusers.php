<?php
if ($u->__HasPermission("add_users")){
    if(IsPost()){
        extract($_POST);
        if (isset($close)){
            redirect('/admin/users');
            return;
        }else{
            if(validation_required([$user_name,$full_name,$phone_number,$email,$password])) {
                $password = hash_hmac( "sha256", $password, "secert" );
                if(insert_user($user_name,$full_name,$phone_number,$email,$password)=='00000'){
                    alert("اوکی شد","دسترسی جدید با موفقیت ثبت شد","success");
                    redirect('/admin/users');
                }else{
                    //view error
                }
            }else{
                include_once DIR . '/Views/Admin/users/users.View.php';
                alert("error ","error","warning");
            }
        }
    }else{
        include_once DIR . '/Views/Admin/users/addusers.View.php';
    }
}else{
    require DIR . '/Views/Error/403.php';
}

