<?php require_once("Functions/Functions.php");

session_destroy();
if(isset($_COOKIE["user_name"]) && isset($_COOKIE["password"])){
    setcookie("user_name" , "" , time()-60);
    setcookie("password" , "" , time()-60);
}
redirect("Login.php");