<?php

if ($u->__HasPermission("edit_users")){
    if(IsPost()){
        extract($_POST);
        if (isset($close)){
            redirect('/admin/users');
            return;
        }else{
            if(validation_required([$user_name,$full_name,$phone_number,$email])) {
                $password = hash_hmac( "sha256", $password, "secert" );
                if(edte_user($user_name,$full_name,$phone_number,$email,$password,$req[3])=='00000'){
                    alert("اوکی شد","دسترسی جدید با موفقیت تغییر کرد","success");
                    redirect('/admin/users');
                }else{
                    //view error
                }
            }else{
                include_once DIR . '/Views/Admin/users/addusers.View.php';
                //error validation
            }
        }
    }else{
        $user=userGetid($req[3]);
        $roles=Role::get_all();
        if(!$roles){
            redirect('/404');
            return;
        }
        $roleuser=Role::role_user($req[3]);
        $roll=array();
        foreach ($roles as $row){
            if (array_key_exists($row['name'],$roleuser)) {
                $roll[$row['name']] = array(
                    'id'=>$row['id'],
                    'name' => $row['name'],
                    'des' => $row['Des'],
                    'display_name' => $row['display_name'],
                    'status' => true
                );
            }
            else{
                $roll[$row['name']] = array(
                    'id'=>$row['id'],
                    'name' => $row['name'],
                    'des' => $row['Des'],
                    'display_name' => $row['display_name'],
                    'status' => false
                );
            }
        }
        include_once DIR . '/Views/Admin/users/editusers.View.php';
    }
}else{

    require DIR . '/Views/Error/403.php';
}






