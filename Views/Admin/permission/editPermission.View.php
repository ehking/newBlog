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
                <form class="form-horizontal" method="post" action="/admin/editepermission/<?= $Permission['id'] ?>">

                    <div class="card-body">
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">نام دسترسی</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" name="name" placeholder="نام دسترسی را وارد کنید" value="<?= $Permission['name'] ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="display_name" class="col-sm-2 control-label">نام قابل نمایش  </label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="<?= $Permission['dispaly_name'] ?>" id="display_name" name="display_name" placeholder="نام قابل نمایش دسترسی را وارد کنید">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="des" class="col-sm-2 control-label">توضیحات  </label>
                            <div class="col-sm-10">
                                <textarea name="des" id="" cols="100"  rows="5"><?= $Permission['des'] ?></textarea>
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
    //function save_per(ob){
    //    var favorite = [];
    //    $.each($("input[name='per']:checked"), function(){
    //        favorite.push($(this).val());
    //    });
    //    $.ajax({
    //        url: "/admin/editerolep/",
    //        method:'POST',
    //        data:{
    //            role:<?php //echo $role['id'] ?>//,
    //            per:favorite
    //        }
    //    }).done(function(e) {
    //        Swal.fire(
    //            'حذف',
    //            'خیالت راحت شد حذف شد',
    //            'success'
    //        ).then((result)=>{
    //            document.location.reload(true);
    //        })
    //    });
    //}
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
