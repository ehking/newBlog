<?php include_once DIR.'/Views/Admin/Sections/Header.php'?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>کاربران</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="#">خانه</a></li>
                        <li class="breadcrumb-item active">کاربران</li>
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
                <h3 class="card-title">کاربران</h3>

                <a href="/admin/addusers" ><button class="btn btn-primary float-left">اضافه کردن کاربر</button></a>
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
                                <th>نام کاربری </th>
                                <th>نام کامل</th>
                                <th>شماره تماس</th>
                                <th> ایمیل</th>
                                <th>#</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            if($users){
                                foreach ($users as $user){
                                    echo "<tr>";
                                    echo "<td>".$user['id']."</td>";
                                    echo "<td>".$user['user_name']."</td>";
                                    echo "<td>".$user['full_name']."</td>";

                                    echo "<td>".$user['phone_number']."</td>";
                                    echo "<td>".$user['email']."</td>";
                                        echo "<td style='text-align: center'><button class='btn btn-danger' name='".$user['id']."' onclick='del(this)'><i class='fa fa-close'></i>  حذف </button>
                                          <a href='/admin/editeuser/".$user['id']."'><button class='btn  btn-warning'> <i class='fa fa-edit'></i>  ویرایش </button></a>";
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
               title: ' حذفش بکنم؟؟',
               text: 'آیا از حذف داده مورد نظر مطمين هستی؟؟؟',
               icon: 'warning',
               showCancelButton: true,
               confirmButtonColor: '#3085d6',
               cancelButtonColor: '#d33',
               cancelButtonText:"انصراف",
               confirmButtonText: 'آرع حذفش کن'
           }).then((result) => {
               if (result.value) {
                   $.ajax({
                       url: "/admin/deluser/"+ob.name,
                   }).done(function() {
                       Swal.fire(
                           'حذف شد ',
                           'با موفقیت حذف شد',
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
