<?php

if ($u->__HasPermission("edit_roles")){

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
                if(Role::edit_role($req[3],$name,$display_name,$des,$status)=='00000'){
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
        $role=Role::get_role($req[3]);

        if(!$role){
            redirect('/404');
            return;
        }
        $per_all=Permission::get_all_per();
        $per=Role::getRolePerms($req[3]);
        $perr=array();
        foreach ($per_all as $row){
            if ($per->hasPerm($row['name'])) {
                $perr[$row['name']] = array(
                    'id'=>$row['id'],
                    'name' => $row['name'],
                    'des' => $row['des'],
                    'dispaly_name' => $row['dispaly_name'],
                    'status' => true
                );
            }
            else{
                $perr[$row['name']] = array(
                    'id'=>$row['id'],
                    'name' => $row['name'],
                    'des' => $row['des'],
                    'dispaly_name' => $row['dispaly_name'],
                    'status' => false
                );
            }
        }
        include_once DIR . '/Views/Admin/roles/editRoles.View.php';
    }
}else{

    require DIR . '/Views/Error/403.php';
}






