<?php


if (!isset( $_SESSION['user_id'] )) {
    if (IsPost()) {
        extract( $_POST );
        if (validation_required( [$username, $password] )) {
             $password = hash_hmac( "sha256", $password, "secert" );
            $conn = ConnectToDB();
            $user = userGet( $username );
            if ($user) {
                if ($password == $user['password']) {
                    setcookie( "user_name", $username, time() + 60 * 60 * 24 );
                    setcookie( "user_id", $user['id'], time() + 60 * 60 * 24 );
                    $_SESSION["user_name"] = $username;
                    $_SESSION["user_id"] = $user['id'];
                    redirect( "/" );
                } else {
                    alert( "خطا", "نام کاربری یا پسورد شما اشتباه میباشد!!!", "error" );
                    redirect( '/login' );
                }
            } else {
                alert( "خطا", "نام کاربری در سیستم وجود ندارد!!!", "error" );
                redirect( '/login' );
            }
        } else {
            alert( "خطا", "فیلد های مورد نظر را پر کنید!!!", "error" );
            redirect( '/login' );
        }
    } else {
        require_once("Views/Login.View.php");
    }
}else{
    redirect( "/admin/" );
}

