<?php

class  Permission
{

    private $roles;
    public  $user_id;

    public static function getByUsername($userid) {
        $sql = "SELECT * FROM users WHERE id = :username";
        $conn = ConnectToDB();
        $sth = $conn->prepare($sql);
        $sth->execute(array(":username" => $userid));
        $result = $sth->fetchAll();
        if (!empty($result)) {
            $Permission = new Permission();
            $Permission->user_id = $result[0]["id"];
            $Permission->initRoles();
            return $Permission;
        } else {
            return false;
        }
    }
    protected function initRoles() {
        $this->roles = array();
        $sql = "SELECT t1.role_id, t2.name FROM  role_user as t1
                JOIN roles as t2 ON t1.role_id = t2.id
                WHERE t1.user_id = :user_id";
        $conn = ConnectToDB();
        $sth = $conn->prepare($sql);
        $sth->execute(array(":user_id" => $this->user_id));
        while($row = $sth->fetch(PDO::FETCH_ASSOC)) {
            $this->roles[$row["name"]] = Role::getRolePerms($row["role_id"]);
        }

    }
    public  static  function edite_roleper($role_id,$per){
        $sql = "delete  FROM  permission_role 
                WHERE role_id = :roleid";
        $conn = ConnectToDB();
        $sth = $conn->prepare($sql);
        $sth->execute(array(":roleid" => $role_id));

        $stmt = $conn->prepare("INSERT INTO permission_role (permission_id, role_id) VALUES (:per,'$role_id')");
        try {
            $conn->beginTransaction();
            foreach ($per as $row)
            {
                $stmt->execute(array(":per" => $row));
            }
            $conn->commit();
            return true;
        }catch (Exception $e){
            $conn->rollback();
            return false;
        }
    }


    // check if user has a specific privilege
    public function __HasPermission($perm) {
        foreach ($this->roles as $role) {
            if ($role->hasPerm($perm)) {
                return true;
            }
        }
        return false;
    }


    public static   function get_all_per()
    {
        $conn = ConnectToDB();
        $sql = $conn->prepare('select * from permissions');
        $sql->execute();
        $roles = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $roles ? $roles : false;
    }

    public static   function get_permission_user()
    {
        $conn = ConnectToDB();
        $sql = $conn->prepare('select * from permissions');
        $sql->execute();
        $roles = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $roles ? $roles : false;
    }
}
