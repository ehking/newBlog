<?php


function get_all(){
    $conn=ConnectToDB();
    $sql= $conn->prepare('select * from Roles');
    $sql->execute();
   $roles= $sql->fetchAll(PDO::FETCH_ASSOC);
   return $roles ? $roles:false;
}
function insert_role($name,$display_name,$des,$status){
    $conn=ConnectToDB();
    $sql= $conn->prepare('insert into Roles (name,display_name,Des,status) values (:name,:display_name,:Des,:status)');
    $sql->bindParam("name",$name);
    $sql->bindParam("display_name",$display_name);
    $sql->bindParam("Des",$des);
    $sql->bindParam("status",$status);
    $sql->execute();
    return $sql->errorCode();
}

function del_role($id){
    $conn=ConnectToDB();
    $sql= $conn->prepare('DELETE FROM Roles where id=:id');
    $sql->bindParam("id",$id);
    $sql->execute();
    return $sql->errorCode();
}

function get_role($id){
    $conn=ConnectToDB();
    $sql= $conn->prepare('select * from Roles where id=:id limit 1');
    $sql->bindParam('id',$id);
    $sql->execute();
    $roles= $sql->fetch(PDO::FETCH_ASSOC);
    if ($sql->rowCount()>0){
        return $roles;
    }else{
        return false;
    }

}

function edit_role($id,$name,$display_name,$des,$status){
    $conn=ConnectToDB();
    $sql= $conn->prepare('update Roles set name=:name ,display_name=:display_name,Des=:Des,status=:status where id=:id');
    $sql->bindParam("id",$id);
    $sql->bindParam("name",$name);
    $sql->bindParam("display_name",$display_name);
    $sql->bindParam("Des",$des);
    $sql->bindParam("status",$status);
    $sql->execute();
    return $sql->errorCode();
}
