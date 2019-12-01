<?php


//AuthLogout();
$status=null;

if(IsPost()){
    extract($_POST);
    if(validation_required([$user_name,$password])){
        $password=  hash_hmac("sha256", $password ,"secert");
         $conn=ConnectToDB();
        $user=userGet($user_name,$conn);
        if($user){

          //  var_dump([$user]);
//            echo "<br>" , $user->full_name;

            if($password == $user->password){
                if($check==true){
                    setcookie("user_name" , $user_name , time()+ 60*60*24);
                    setcookie("password" , $password , time()+60*60*24);
                }
                $_SESSION["user_name"] = $user_name;
                redirect("personal_page.php");
            }
        }else {
            $status="this UserName not exists";
        }
    }
}

require_once("Views/Login.View.php");