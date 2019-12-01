<?php require_once("Functions/Functions.php");
$status=null;


if(IsPost()){
    extract($_POST);
    if(validation_required([$name,$last_name,$user_name,$phone_number,$password,$repeat_password])){
        if(validation_email($email)){
            $password= hash_hmac("sha256", $password ,"secert");
            $data=[
                "full_name"=> $name . " " . $last_name,
                "user_name"=> $user_name,
                "phone_number"=> $phone_number,
                "email"=> $email,
                "password"=> $password
            ];

//            print_r($data);
//            die();
             $conn=ConnectToDB();

            if( ! UserGet($user_name , $conn)){
                userSave($data , $conn)? redirect("Login.php"): $status="user not save please try again";
            }else {
                $status="this username is exists";
            }

        }else{
            $status="invalid email format";
        }
    }else{
        $status="one of the fields is empty";
    }
}

require_once("Views/Login.View.php");