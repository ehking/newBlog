
<footer class="main-footer">
    <strong>CopyLeft &copy; 2018 .</strong>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script


<script src="../../../Style/plugins/jquery/jquery.min.js"></script>


<script src="../../../Style/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../../../Style/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../../Style/plugins/fastclick/fastclick.js"></script>

<!-- AdminLTE App -->
<script src="../../../Style/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../../Style/dist/js/demo.js"></script>
<script src="../../../Style/sw/sw.js"></script>
<script src="../../../Style/Style.js"></script>

<script src="../../../Style/plugins/datatables/jquery.dataTables.js"></script>
<script src="../../../Style/plugins/datatables/dataTables.bootstrap4.js"></script>
<script src="../../../Style/dist/js/jquery.multiselect.js"></script>
<script src="../../../Style/dist/js/val.js"></script>

<!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.6/js/mdb.min.js"></script>-->

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
