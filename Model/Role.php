<?php

class  Role
{
    protected $perm;

    public  function  __construct()
    {
        $this->perm=array();
    }

    public static function getRolePerms($role_id) {

        $role = new Role();
        $sql = "SELECT t2.name FROM permission_role as t1
                JOIN permissions as t2 ON t2.id = t1.permission_id
                WHERE t1.role_id = :role_id";
        $conn = ConnectToDB();
        $sth =  $conn->prepare($sql);
        $sth->execute(array(":role_id" => $role_id));


        while($row = $sth->fetch(PDO::FETCH_ASSOC)) {
            $role->perm[$row["name"]] = true;
        }
        return $role;
    }


    public function hasPerm($permission) {
        return isset($this->perm[$permission]);
    }


    public static function get_all()
    {
        $conn = ConnectToDB();
        $sql = $conn->prepare('select * from roles');
        $sql->execute();
        $roles = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $roles ? $roles : false;
    }


    public static function insert_role($name, $display_name, $des, $status)
    {
        $conn = ConnectToDB();
        $sql = $conn->prepare('insert into roles (name,display_name,Des,status) values (:name,:display_name,:Des,:status)');
        $sql->bindParam("name", $name);
        $sql->bindParam("display_name", $display_name);
        $sql->bindParam("Des", $des);
        $sql->bindParam("status", $status);
        $sql->execute();
        return $sql->errorCode();
    }

    public static function del_role($id)
    {
        $conn = ConnectToDB();
        $sql = $conn->prepare('DELETE FROM roles where id=:id');
        $sql->bindParam("id", $id);
        $sql->execute();
        return $sql->errorCode();
    }

    public static function get_role($id)
    {
        $conn = ConnectToDB();
        $sql = $conn->prepare('select * from roles where id=:id limit 1');
        $sql->bindParam('id', $id);
        $sql->execute();
        $roles = $sql->fetch(PDO::FETCH_ASSOC);
        if ($sql->rowCount() > 0) {
            return $roles;
        } else {
            return false;
        }

    }

    public static function edit_role($id, $name, $display_name, $des, $status)
    {
        $conn = ConnectToDB();
        $sql = $conn->prepare('update roles set name=:name ,display_name=:display_name,Des=:Des,status=:status where id=:id');
        $sql->bindParam("id", $id);
        $sql->bindParam("name", $name);
        $sql->bindParam("display_name", $display_name);
        $sql->bindParam("Des", $des);
        $sql->bindParam("status", $status);
        $sql->execute();
        return $sql->errorCode();
    }

}
