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
  <title>Modern Estate | Add Broker</title>

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
  .main1{
    width:70%;
    border:0px solid lightgray;
    border-radius:4px 4px 0 0;
    margin-left:15%;
    box-shadow:0px 0px 5px gray;
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
            <h1 class="m-0">Add BRoker</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Add Broker</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="main1">
    <div class="card-header">
            <h3 class="card-title">Add Details</h3>
            </div>
<form method="POST">
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Your Name</label>
                <input type="text" id="inputName" name="name" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="inputmail">Your E-mail</label>
                <input type="text" id="inputmail" name="mail" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="inputp1">Create Password</label>
                <input type="password" id="inputp1" name="p1" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="inputp2">Retype Password</label>
                <input type="password" id="inputp2" name="p2" class="form-control" required>
              </div>
             
              <div class="form-group">
                  <button type="submit" name="sub" class="btn btn-primary" >Submit</button>
                </div>
              </div>
</form>
            <!-- /.card-body -->
          </div>
        </div>
    
<?php
if (isset($_POST['sub'])) {
        $rname = $_POST['name'];
        $email =$_POST['mail'];
        $p1 =$_POST['p1'];
        $p2 =$_POST['p2'];
        $role=0;
        date_default_timezone_set('Asia/calcutta');
        $a=date('Y-m-d H:i:s');
        $check_email = mysqli_query($con, "SELECT EMAIL FROM login_table where EMAIL = '$email' ");
    
    if(mysqli_num_rows($check_email) > 0)
    {
     echo "<script>alert('Email Already Exists!')</script>";
    }
  else{
        if ($p1==$p2) 
        {
          $hash=password_hash($p1,PASSWORD_DEFAULT);
        $query = "INSERT INTO login_table(NAME,EMAIL,PASSWORD,ROLE,STATUS)
         VALUES ('$rname','$email','$hash',2,1)";
         $sql = mysqli_query($con,$query);
          if($sql){
            echo "<script>alert('Broker Registered Succesfully')</script>";
          }
          else{
            echo '<script>alert("Something Went Wrong")</script>';
          }
        }
      else
      {
        echo '<script>alert("Password do not Match")</script>'; 
      }
    }
}
      ?>
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
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
</body>
</html>
<?php
}
?>