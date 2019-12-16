<?php

class  Permission
{

    public $roles;
    public  $user_id;

    public static function getByUsername($userid) {
        $sql = "SELECT id FROM users WHERE id = :userid";
        $conn = ConnectToDB();
        $sth = $conn->prepare($sql);
        $sth->execute(array(":userid" => $userid));
        $result = $sth->fetchAll();
        if (!empty($result)) {
            $Permission = new Permission();
            $Permission->user_id = $userid;
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


    public function __HasPermission($perm)
    {
        foreach ($this->roles as $role) {
            if ($role->hasPerm($perm)) {
                return true;
            }
        }
        return false;
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



    public static function insert_Permission($name, $display_name, $des)
    {
        $conn = ConnectToDB();
        $sql = $conn->prepare('insert into permissions (name,dispaly_name,Des) values (:name,:display_name,:Des)');
        $sql->bindParam(":name", $name);
        $sql->bindParam(":display_name", $display_name);
        $sql->bindParam(":Des", $des);
        $sql->execute();
        return $sql->errorCode();
    }

    public static function edit_Permission($id, $name, $display_name, $des)
    {
        $conn = ConnectToDB();
        $sql = $conn->prepare('update permissions set name=:name ,dispaly_name=:display_name,Des=:Des where id=:id');
        $sql->bindParam("id", $id);
        $sql->bindParam("name", $name);
        $sql->bindParam("display_name", $display_name);
        $sql->bindParam("Des", $des);
        $sql->execute();
        return $sql->errorCode();
    }

    public static function get_Permission($id)
    {
        $conn = ConnectToDB();
        $sql = $conn->prepare('select * from permissions where id=:id limit 1');
        $sql->bindParam('id', $id);
        $sql->execute();
        $permissions = $sql->fetch(PDO::FETCH_ASSOC);
        if ($sql->rowCount() > 0) {
            return $permissions;
        } else {
            return false;
        }

    }
    public static function del_Permission($id)
    {
        $conn = ConnectToDB();
        $sql = $conn->prepare('DELETE FROM permissions where id=:id');
        $sql->bindParam("id", $id);
        $sql->execute();
        return $sql->errorCode();
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
