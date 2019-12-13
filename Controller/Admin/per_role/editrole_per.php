<?php

if ($u->__HasPermission("edit_roles")) {
    if (IsPost()) {

        extract( $_POST );

                if (Permission::edite_roleper( $role, $per)) {
                    return true;
                } else {
                    return false;
                }
                //error validation
        }

}else{
    return false;
}






