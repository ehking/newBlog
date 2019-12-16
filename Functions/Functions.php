<?php
session_start();

function IsPost(){
    return $_SERVER["REQUEST_METHOD"] == "POST";
}

function ConnectToDB()
{
    $conn=null;
    try {
       return new PDO("mysql:host=localhost;dbname=auth", "root", "12345",array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
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

function userGet($user_name ) {
    $conn = ConnectToDB();
    $statment = $conn->prepare("SELECT * FROM users WHERE user_name = :user_name");
    $statment->bindParam("user_name" , $user_name );
    $statment->execute();

    $user = $statment->fetch(PDO::FETCH_ASSOC);
    return $user ? $user : false;
}
function userGetid($userid ) {
    $conn = ConnectToDB();
    $statment = $conn->prepare("SELECT * FROM users WHERE id = :id");
    $statment->bindParam("id" , $userid );
    $statment->execute();
    $user = $statment->fetch(PDO::FETCH_ASSOC);
    return $user ? $user : false;
}
function get_all_user() {
    $conn = ConnectToDB();
    $statment = $conn->prepare("SELECT * FROM users ");
    $statment->execute();
    $user=$statment->fetchAll(PDO::FETCH_ASSOC);
    return $user ? $user : false;
}

function insert_user($user_name, $full_name, $phone_number, $email,$password)
{
    $conn = ConnectToDB();
    $sql = $conn->prepare('insert into users (user_name,full_name,phone_number,email,password) values (:user_name,:full_name,:phone_number,:email,:password)');
    $sql->bindParam("user_name", $user_name);
    $sql->bindParam("full_name", $full_name);
    $sql->bindParam("phone_number", $phone_number);
    $sql->bindParam("email", $email);
    $sql->bindParam("password", $password);
    $sql->execute();
    return $sql->errorCode();
}

function edte_user($user_name, $full_name, $phone_number, $email,$password,$userid)
{
    $conn = ConnectToDB();
    $sql = $conn->prepare('Update users set  user_name=:user_name,full_name=:full_name,phone_number=:phone_number,email=:email,password=:password where id=:userid');
    $sql->bindParam("user_name", $user_name);
    $sql->bindParam("full_name", $full_name);
    $sql->bindParam("phone_number", $phone_number);
    $sql->bindParam("email", $email);
    $sql->bindParam("password", $password);
    $sql->bindParam("userid", $userid);
    $sql->execute();
    return $sql->errorCode();
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
function logout(){
   setcookie( "user_name",'',0);
    setcookie( "user_id", '', 0 );
    unset($_SESSION["user_name"]);
    unset($_SESSION["user_id"]);
    redirect('/login');
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

function __hasper($per){
    $conn = ConnectToDB();
    $statment = $conn->prepare("select permissions.name from roles as rol
    inner join role_user as ru on ru.role_id=rol.id
    inner join permission_role as p_r on p_r.role_id=rol.id
    inner join permissions as pr on pr.id=p_r.permission_id
    where ru.user_id=:userid and pr.name=:per");
    $statment->bindParam("userid" , $_SESSION['user_id'] );
    $statment->bindParam("per" , $per );
    $statment->execute();
    $has = $statment->fetch(PDO::FETCH_ASSOC);
    return $has ? true : false;
}

