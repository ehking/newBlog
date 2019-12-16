<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../Style/bootstrap.min.css">
    <link rel="stylesheet" href="../Style/dist/css/custom-style.css">
    <title>صفحه ورود</title>
</head>
<body>

<style>

    html, body {
        height: 100%;
    }
    body {
        margin: 0;
    }
    .container {
        display: flex;
        height: 100%;
        justify-content: center;
        align-items: center;
    }
    .loginWrapper {
        width: 450px;
        height: 400px;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: rgba(255,255,255,.75);
        border-radius: 8px;

    }
    .loginWrapper:after {
        background: url(../Style/img/sunset-1920x1080-bear-deer-8k-19715.jpg);
        content: "";
        opacity: 0.75;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        position: absolute;
        z-index: -1;
        background-position: bottom;
    }
    form {
        width: 100%;
        padding: 30px;
    }
</style>
<div class="container">
    <div class="loginWrapper">

        <form class="form-horizontal" role="form" action="/login" method="post">
            <h3 style="text-align: center">صفحه ورود <i class="fa"></i></h3>
            <div class="form-group">
                <label for="username" class="control-label col-sm-12 text-right">نام کاربری:</label>
                <div class="input-group col-sm-12">
                    <span class="input-group-addon glyphicon glyphicon-user"></span>
                    <input type="text" id="username" placeholder="username"  name="username" class="form-control" />
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="control-label col-sm-12 text-right">گذرواژه:</label>
                <div class="input-group col-sm-12">
                    <span class="input-group-addon glyphicon glyphicon-lock"></span>
                    <input type="password" id="password" placeholder="password"  name="password" class="form-control" />
                </div>
            </div>
            <div class="form-group">
                <div class="input-group col-sm-offset-3 col-sm-12">
                    <button type="submit" class="btn btn-block btn-success">ورود</button>
                </div>
            </div>
        </form>
    </div>
</div>
<script src="../Style/sw/sw.js"></script>
<?php

if(isset($_SESSION['alert'])){
    echo "<script>
Swal.fire({
  icon: '".$_SESSION['alert']['icon']."',
  title: '".$_SESSION['alert']['title']."',
  text: '".$_SESSION['alert']['msg']."',
  confirmButtonText: 'فهمیدم',
})
</script>";
    unset($_SESSION['alert']);
}
?>
</body>
</html>