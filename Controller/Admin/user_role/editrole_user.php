<?php

if ($u->__HasPermission("edit_roles")) {
    if (IsPost()) {

        extract( $_POST );

                if (Role::edite_roleuser($user, $roles)) {
                    return true;
                } else {
                    return false;
                }
                //error validation
        }

}else{
    return false;
}






