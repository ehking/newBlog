<?php include_once DIR.'/Views/Admin/Sections/Header.php'?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>تغییر دسترسی</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="#">خانه</a></li>
                        <li class="breadcrumb-item active">تغییر دسترسی</li>
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
                <form class="form-horizontal" method="post" action="/admin/editerole/<?= $role['id'] ?>">

                    <div class="card-body">
                        <div class="form-group">
                            <input type="checkbox"  <?php echo $role['status']==1 ? "checked":"" ?> data-toggle="toggle"  name="status" data-onstyle="success" data-offstyle="danger" data-on="<i class='fa fa-check'></i> فعال" data-off="<i class='fa fa-times'></i> غیرفعال">
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">نام دسترسی</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" name="name" placeholder="نام دسترسی را وارد کنید" value="<?= $role['name'] ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="display_name" class="col-sm-2 control-label">نام قابل نمایش  </label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="<?= $role['display_name'] ?>" id="display_name" name="display_name" placeholder="نام قابل نمایش دسترسی را وارد کنید">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="des" class="col-sm-2 control-label">توضیحات  </label>
                            <div class="col-sm-10">
                                <textarea name="des" id="" cols="100"  rows="5"><?= $role['Des'] ?></textarea>
                            </div>
                        </div>
                    </div>
                    <label for="per" class="col-sm-2 control-label">سطح دسترسی  گروه  </label>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable">
                       تغییر  سطح دسترسی
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title"  id="exampleModalScrollableTitle">   سطح دسترسی های گروه  <p><?php echo $role['name'] ?></p></h5>
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
                                        foreach ($perr as $p){
                                            if($p['status']==true) $se="checked"; else $se="";
                                            echo '<li class="list-group-item">'.$p['dispaly_name'].'  <input type="checkbox"  '.$se.' name="per" style="float: left"   data-toggle="toggle"   value="'.$p['id'].'" data-onstyle="success" data-offstyle="danger" data-on="<i class=\'fa fa-check\'></i> " data-off="<i class=\'fa fa-times\'></i> " > <p style="margin-top: 15px;font-size: 12px">'.$p['des'].'</p></li>';
                                        } ?>
                                    </ul>


                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">انصراف</button>
                                    <button type="button" class="btn btn-primary" onclick="save_per(this)">ذخیره تغییرات</button>
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
    function save_per(ob){
        var favorite = [];
        $.each($("input[name='per']:checked"), function(){
            favorite.push($(this).val());
        });
        $.ajax({
            url: "/admin/editerolep/",
            method:'POST',
            data:{
                role:<?php echo $role['id'] ?>,
                per:favorite
            }
        }).done(function(e) {
            Swal.fire(
                'تغییر کرد ',
                'سطح دسترسی ها با موفقیت تغییر کرد',
                'success'
            ).then((result)=>{
                document.location.reload(true);
            })
        });
    }
    $(document).ready(function(){

    // $(function () {
    //     $('select[multiple].active.3col').multiselect({
    //         columns: 2,
    //         placeholder: 'انتخاب سطح دسترسی',
    //         search: false,
    //         searchOptions: {
    //             'default': 'Search States'
    //         },
    //         selectAll: true,
    //         texts:{
    //             'selectAll':'انتخاب همه',
    //             'unselectAll':'غیرفعال سازی همه'
    //         }
    //     });
    //
    // });
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
