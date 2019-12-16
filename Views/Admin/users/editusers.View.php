<?php include_once DIR.'/Views/Admin/Sections/Header.php'?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>ویرایش کاربر</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="#">خانه</a></li>
                        <li class="breadcrumb-item active">ویرایش کاربر</li>
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
                <form class="form-horizontal" method="post" action="/admin/editeuser/<?= $user['id'] ?>">

                    <div class="card-body">
<!--                        <div class="form-group">-->
<!--                            <label for="name" class="col-sm-2 control-label">نام دسترسی</label>-->
<!--                            <div class="col-sm-10">-->
<!--                                <input type="text" class="form-control" id="name" name="name" placeholder="نام دسترسی را وارد کنید" value="--><?//= $Permission['name'] ?><!--">-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="form-group">-->
<!--                            <label for="display_name" class="col-sm-2 control-label">نام قابل نمایش  </label>-->
<!---->
<!--                            <div class="col-sm-10">-->
<!--                                <input type="text" class="form-control" value="--><?//= $Permission['dispaly_name'] ?><!--" id="display_name" name="display_name" placeholder="نام قابل نمایش دسترسی را وارد کنید">-->
<!--                            </div>-->
<!--                        </div>-->
<!---->
<!--                        <div class="form-group">-->
<!--                            <label for="des" class="col-sm-2 control-label">توضیحات  </label>-->
<!--                            <div class="col-sm-10">-->
<!--                                <textarea name="des" id="" cols="100"  rows="5">--><?//= $Permission['des'] ?><!--</textarea>-->
<!--                            </div>-->
<!--                        </div>-->

                        <div class="form-group">
                            <label for="user_name" class="col-sm-2 control-label">نام کاربری</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control"  value="<?php echo $user['user_name'] ?>" id="user_name" name="user_name" placeholder="نام کاربری را وارد کنید">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="full_name" class="col-sm-2 control-label">نام قابل نمایش  </label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="<?php echo $user['full_name'] ?>" id="full_name" name="full_name" placeholder="نام قابل نمایش  را وارد کنید">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="phone_number" class="col-sm-2 control-label">شماره تماس  </label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="<?php echo $user['phone_number'] ?>" id="phone_number" name="phone_number" placeholder="شماره تماس را وارد کنید">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">ایمیل </label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="<?php echo $user['email'] ?>" id="email" name="email" placeholder="ایمیل را وارد کنید">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-sm-2 control-label">گذرواژه </label>

                            <div class="col-sm-10">
                                <input type="password" class="form-control"  id="password" name="password" placeholder="گذرواژه را وارد کنید ,">
                            </div>
                        </div>
                        <label for="per" class="col-sm-2 control-label">تعیین سطح دسترسی کاربر  </label>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable">
                            تغییر  سطح دسترسی
                        </button>
                        <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title"  id="exampleModalScrollableTitle">  سطح دسترسی کاربر  <p><?php echo $user['full_name'] ?></p></h5>
                                        <button type="button" class="close"  style="margin: 0" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">

                                        <!--                                        <div class="row">-->
                                        <!--                                            <div class="col-4">-->
                                        <!--                                                <div class="tab-content" id="nav-tabContent">-->
                                        <!--                                                    --><?php
                                        //                                                    foreach ($perr as $p){
                                        //
                                        //                                                        echo ' <div class="tab-pane fade show " id="list-'.$p['name'].'" role="tabpanel" aria-labelledby="list-'.$p['name'].'-list"><h6>'.$p['dispaly_name'].'</h6> <p>'.$p['des'].'</p></div>';
                                        //                                                    } ?>
                                        <!--                                                </div>-->
                                        <!--                                            </div>-->
                                        <!--                                            <div class="col-12">-->
                                        <!--                                                <div class="list-group" id="list-tab" role="tablist">-->
                                        <!--                                                    --><?php
                                        //                                                    foreach ($perr as $p){
                                        //                                                        if($p['status']==true) $se="selected"; else $se="";
                                        ////                                                        echo '<li class="list-group-item">'.$p['dispaly_name'].'<span>('.$p['des'].')</span> <input type="checkbox"  style="float: left" data-toggle="toggle"  name="status" data-onstyle="success" data-offstyle="danger" data-on="<i class=\'fa fa-check\'></i> " data-off="<i class=\'fa fa-times\'></i> " name="'.$p['id'].'"></li>';
                                        //                                                        echo ' <a class="list-group-item list-group-item-action" id="list-'.$p['name'].'-list" data-toggle="list" href="#list-'.$p['name'].'" role="tab" aria-controls="'.$p['name'].'">'.$p['dispaly_name'].' <input type="checkbox"  style="float: left" data-toggle="toggle"  name="status" data-onstyle="success" data-offstyle="danger" data-on="<i class=\'fa fa-check\'></i> " data-off="<i class=\'fa fa-times\'></i> " name="'.$p['id'].'"></li></a> ';
                                        //                                                    } ?>
                                        <!--                                                </div>-->
                                        <!--                                            </div>-->
                                        <!---->
                                        <!--                                        </div>-->


                                        <ul class="list-group list-group-flush">

                                            <?php
                                            foreach ($roll as $p){
                                                if($p['status']==true) $se="checked"; else $se="";
                                                echo '<li class="list-group-item">'.$p['display_name'].'  <input type="checkbox"  '.$se.' name="per" style="float: left"   data-toggle="toggle"   value="'.$p['id'].'" data-onstyle="success" data-offstyle="danger" data-on="<i class=\'fa fa-check\'></i> " data-off="<i class=\'fa fa-times\'></i> " > <p style="margin-top: 15px;font-size: 12px">'.$p['des'].'</p></li>';
                                            } ?>
                                        </ul>


                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">انصراف</button>
                                        <button type="button" class="btn btn-primary" onclick="save_rol(this)">ذخیره تغییرات</button>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                    <div class="card-footer">
                        <button type="submit" name="ok" class="btn btn-primary" >ثبت</button>
                        <button type="submit" name="close" class="btn btn-danger">انصراف</button>
                    </div>
                </form>


            </div>




        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>


<?php include_once DIR.'/Views/Admin/Sections/Footer.php'?>
<script>
    function save_rol(ob){
        var favorite = [];
        $.each($("input[name='per']:checked"), function(){
            favorite.push($(this).val());
        });
        $.ajax({
            url: "/admin/editeroleu/",
            method:'POST',
            data:{
                user:<?php echo $user['id'] ?>,
                roles:favorite
            }
        }).done(function(e) {
            Swal.fire(
                'تغییر کرد ',
                'سطح دسترسی کاربر با موفقیت تغییر کرد',
                'success'
            ).then((result)=>{
                document.location.reload(true);
            })
        });
    }
    $(document).ready(function(){

        $('select[multiple]').siblings('a.dpopggetvalues')
            .click(function( event ){
                event.preventDefault();

                alert(
                    'Selected Values: '
                    + $(this).siblings('select[multiple]').val()
                );
            });
    $(function () {
        $("#example1").DataTable({

            "dom":' <"search"fl><"top">rt<"bottom"ip><"clear">',
            "language": {
    "searchPlaceholder": "جتسجو کنید ..",
            "sEmptyTable":     "هیچ داده‌ای در جدول وجود ندارد",
            "sInfo":           "نمایش _START_ تا _END_ از _TOTAL_ ردیف",
            "sInfoEmpty":      "نمایش 0 تا 0 از 0 ردیف",
            "sInfoFiltered":   "(فیلتر شده از _MAX_ ردیف)",
            "sInfoPostFix":    "",
            "sInfoThousands":  ",",
            "sLengthMenu":     "نمایش _MENU_ ردیف",
            "sLoadingRecords": "در حال بارگزاری...",
            "sProcessing":     "در حال پردازش...",
            "sSearch":         "جستجو:",
            "sZeroRecords":    "رکوردی با این مشخصات پیدا نشد",
            "oPaginate": {
            "sFirst":    "برگه‌ی نخست",
                "sLast":     "برگه‌ی آخر",
                "sNext":     "بعدی",
                "sPrevious": "قبلی"
        },
            "oAria": {
            "sSortAscending":  ": فعال سازی نمایش به صورت صعودی",
                "sSortDescending": ": فعال سازی نمایش به صورت نزولی"
        }

            },
            "info" : false,
            "lengthChange" : false,


        });


    });
    });
</script>
