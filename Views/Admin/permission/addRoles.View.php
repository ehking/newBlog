<?php include_once DIR.'/Views/Admin/Sections/Header.php'?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>اضافه کردن دسترسی</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="#">خانه</a></li>
                        <li class="breadcrumb-item active">صفحه خالی</li>
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
                <form class="form-horizontal" method="post" action="/admin/addrole">
                    <div class="card-body">
                        <div class="form-group">
                            <input type="checkbox" checked data-toggle="toggle"  name="status" data-onstyle="success" data-offstyle="danger" data-on="<i class='fa fa-check'></i> فعال" data-off="<i class='fa fa-times'></i> غیرفعال">
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">نام دسترسی</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" name="name" placeholder="نام دسترسی را وارد کنید">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="display_name" class="col-sm-2 control-label">نام قابل نمایش  </label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="display_name" name="display_name" placeholder="نام قابل نمایش دسترسی را وارد کنید">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="des" class="col-sm-2 control-label">توضیحات  </label>
                            <div class="col-sm-10">
                                <textarea name="des" id="" cols="100"  rows="5"></textarea>
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

