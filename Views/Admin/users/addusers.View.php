<?php include_once DIR.'/Views/Admin/Sections/Header.php'?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>اضافه کردن کاربر</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="#">خانه</a></li>
                        <li class="breadcrumb-item active">اضافه کردن کاربر</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">



        <!-- Default box -->


            <div class="card card-info">
<!--                <div class="card-header">-->
<!--                    <h3 class="card-title">فرم های عمودی</h3>-->
<!--                </div>-->
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" method="post" action="/admin/addusers">
                    <div class="card-body">

                        <div class="form-group">
                            <label for="user_name" class="col-sm-2 control-label">نام کاربری</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="user_name" name="user_name" placeholder="نام کاربری را وارد کنید">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="full_name" class="col-sm-2 control-label">نام قابل نمایش  </label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="full_name" name="full_name" placeholder="نام قابل نمایش  را وارد کنید">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="phone_number" class="col-sm-2 control-label">شماره تماس  </label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="شماره تماس  را وارد کنید">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">ایمیل </label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="email" name="email" placeholder="ایمیل را وارد کنید">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-sm-2 control-label">گذرواژه  </label>

                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="password" name="password" placeholder="گذرواژه را وارد کنید">
                            </div>
                        </div>

                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" name="ok" class="btn btn-primary">ثبت</button>
                        <button type="submit" name="close" class="btn btn-danger">انصراف</button>
                    </div>
                    <!-- /.card-footer -->
                </form>
            </div>

        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>



<?php include_once DIR.'/Views/Admin/Sections/Footer.php'?>

