<?php include_once DIR.'/Views/Admin/Sections/Header.php'?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>صفحه خالی</h1>
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
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">گروه های دسترسی</h3>

                <a href="/admin/addrole" ><button class="btn btn-primary float-left">اضافه کردن گروه دسترسی</button></a>
            </div>

            <div class="card-body">

                <div class="card">
<!--                    <input type="text" id="searchbox">-->
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped text-center">
                            <thead>
                            <tr>
                                <th>شماره</th>
                                <th>نام </th>
                                <th>نام دسترسی</th>
                                <th>وضعیت</th>
                                <th>توضیحات</th>
                                <th>#</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            if($permissions){
                                foreach ($permissions as $permission){
                                    echo "<tr>";
                                    echo "<td>".$permission['id']."</td>";
                                    echo "<td>".$permission['name']."</td>";
                                    echo "<td>".$permission['display_name']."</td>";
                                    echo $permission['status']==1 ? '<td><span class="badge badge-success">فعال</span></td>':'<td><span class="badge badge-danger">غیرفعال</span></td>';
                                    echo "<td>".$permission['Des']."</td>";
                                        echo "<td style='text-align: center'><button class='btn btn-danger' name='".$permission['id']."' onclick='del(this)'><i class='fa fa-close'></i>  حذف </button>
                                          <a href='/admin/editerole/".$permission['id']."'><button class='btn  btn-warning'> <i class='fa fa-edit'></i>  ویرایش </button></a>";
                                    echo "</tr>";
                                }
                            }

                            ?>

                            </tbody>

                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>


            </div>

        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>



<?php include_once DIR.'/Views/Admin/Sections/Footer.php'?>
<script>


       function  del(ob){
           Swal.fire({
               title: ' انا حذف!!!!!',
               text: 'داداش آیا موخوای حذف بشه نکن این کارارو, خطرناکه حسن!!!',
               icon: 'warning',
               showCancelButton: true,
               confirmButtonColor: '#3085d6',
               cancelButtonColor: '#d33',
               cancelButtonText:"نع نموخوام",
               confirmButtonText: 'ارع بابا'
           }).then((result) => {
               if (result.value) {
                   $.ajax({
                       url: "/admin/delrole/"+ob.name,
                   }).done(function() {
                       Swal.fire(
                           'حذف',
                           'خیالت راحت شد حذف شد',
                           'success'
                       ).then((result)=>{
                           document.location.reload(true);
                       })
                   });
               }
           })
        }

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
</script>
