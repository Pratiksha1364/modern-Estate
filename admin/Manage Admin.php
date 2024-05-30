<?php
include "connection.php";
session_start();
?>
<?php
if(!isset($_SESSION['gmail']))
{
  if (!isset($_GET['reload'])) {
    echo '<meta http-equiv=Refresh content="0;url=../login-v2.php">';
        }
}
else{
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modern Estate | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  <style>
  .tbl-box1{
    border:0px solid gray;
    margin:10px;
    border-radius:10px 10px 0px 0px;
    color:black;
  }
  .tbl-header1{
    background:white;
    border-radius:10px 10px 0 0;
    box-shadow:0px 0px 1px 0px black;
  }
  h5{
    padding:10px;
  }
  .main-tbl1{
    margin-left:0px;
    margin-top:-7px;

  }
  .main-tbl1 td{
    border-top:1px dotted black;
    /* border-right:1px dashed red; */
  }
  
  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed" >
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
   <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="100" width="100">
  </div>
  <!-- Navbar -->
 <?php
 include "adminheader.php";
 ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php
  include "adminsidemenu.php";
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage Admins</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Manage Admin</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <div class="card">
              <div class="card-header">
                <h3 class="card-title">Manage Users</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Name</th>
                      <th>Email Id</th>
                      <th>STATUS</th>
                      <th>Register Date</th>
                      <th>Manage</th>
                      <!-- <th style="width: 40px">Label</th> -->
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                  $query = "SELECT * FROM login_table WHERE ROLE=2 And STATUS=1 ORDER BY `DATE/TIME` DESC";
                  $result= mysqli_query($con,$query);
                  $i=1;
                  while ($value = mysqli_fetch_array($result)) {
                  ?>
                    <tr>
                      <td><?php echo $i++; ?></td>
                      <td><?php echo $value['NAME'];?></td>
                      <td><?php echo $value['EMAIL'];?></td>
                      <td><?php echo $value['STATUS'];?></td>
                      <td><?php echo date('d F Y ', strtotime($value['DATE/TIME']));?></td>
                      <td align="center" style="width: 15%">
                      <a href="?del=<?php echo $value['LOGIN_ID'];?>" onclick="return confirm('Are You Sure You Want to Delete This Record ?');"><button class="btn btn-warning"><i class="fas fa-trash"></i></button></a>                      </td>
                    </tr>
                    <?php
                      }
                      ?>
                      <?php
                      
                      if (isset($_GET['del'])) {
                        $querya="UPDATE login_table SET STATUS = '0' WHERE LOGIN_ID = ".$_GET['del']."";
                        $resulta=mysqli_query($con,$querya);
                        if ($resulta) {
                          if (!isset($_GET['reload'])) {
                            $_SESSION['gmail']=$lemail;
                            echo '<meta http-equiv=Refresh content="0;url=Manage Admin.php?reload=1">';
                                }
                        }
                      }
                     ?>
                  </tbody>
                </table>
              </div>

    <!-- /.content-header -->
    
</div>
                    </div>
  <!-- /.content-wrapper -->
  <?php
  include "adminfooter.php";
  ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="dist/js/demo.js"></script> -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
<?php
}
?>