<?php
session_start();

function IsPost(){
    return $_SERVER["REQUEST_METHOD"] == "POST";
}

function ConnectToDB()
{
    $conn=null;
    try {
       return new PDO("mysql:host=localhost;dbname=Basij", "root", "12345",array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    } catch(PDOException $e){
        die($e->getMessage());
    }
}

function redirect($location) {
    header("Location: {$location}");
    die;
}

function validation_required($items) {
    $counter_error = 0;
    foreach ( $items as $item) {
        if( empty($item) )
            $counter_error++;
    }
    return $counter_error == 0;
}

function validation_email($email) {
    return filter_var($email , FILTER_VALIDATE_EMAIL);
}

function AuthLogin($location = "Login.php") {
    if( ! isset($_SESSION['user_name']) ) {
        $user_name = $_COOKIE['user_name'];
        $password = $_COOKIE['password'];
        if( isset($user_name) && isset($password) ) {
             $conn=ConnectToDB();
            $user = userGet($user_name , $conn);

            if($user) {
                if($password == $user->password) {
                    $_SESSION['username'] = $user_name;
                    redirect("PersonalPage.php");
                }
            }
        }
        redirect($location);
    }
}

function AuthLogout($location = "Login.php") {
    if( isset($_SESSION['username']) )
        redirect($location);
}

function userGet($user_name , $conn) {
    $statment = $conn->prepare("SELECT * FROM users WHERE user_name = :user_name");
    $statment->bindParam("user_name" , $user_name );
    $statment->execute();

    $user = $statment->fetch(PDO::FETCH_ASSOC);
    return $user ? $user : false;
}

function userSave($data , $conn) {
    extract($data);
    $statment = $conn->prepare("INSERT INTO users (full_name , user_name , phone_number, email , password ) VALUES (:full_name , :user_name , :phone_number, :email , :password )");
    $statment->bindParam("full_name" , $full_name );
    $statment->bindParam("user_name" , $user_name );
    $statment->bindParam("phone_number" , $phone_number );
    $statment->bindParam("email" , $email );
    $statment->bindParam("password" , $password );
    return $statment->execute() ? true : false;
}

function alert($title,$msg,$ico,$type=1){
    //ico=>success /error /warning /info /question
    $_SESSION['alert']=array(
      'title'=>$title,
        'msg'=>$msg,
        'icon'=>$ico,
        'type'=>$type
    );
}

