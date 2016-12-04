<html>

<!-- <link rel="shortcut icon" href="bootstrap/img/icon2.ico"> UNTUK ICON-->

<!-- Bootstrap core CSS -->
    <link href="<?php echo base_url() ?>bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- <link href="<?php echo base_url() ?>bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->

<!-- Custom CSS for the 'One Page Wonder' Template -->
<link href="<?php echo base_url() ?>bootstrap/css/sb-admin-login.css" rel="stylesheet">

 <link href="<?php echo base_url() ?>bootstrap/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<head>
  <title>E-Koperasi</title>
  <link rel="shortcut icon" href="<?php echo base_url() ?>images/kop.png">

</head>

<body class="login_user">
  <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="starter-template">
          <div class="nav">
            <div style="font-family: verdana;"><b>.:: SELAMAT DATANG ::.</b></div>
          </div>
        </div>
      </div>
  </div>
<!-- Konten -->
<div class="container-fluid" style="margin-top: 30px">
  <div class="row-fluid">
    <div style="width: 400px; margin: 0 auto">
      <div class="well well-sm">
        <img src="<?php echo base_url().'images/kop.png'; ?>" class="span3" style="display: inline; float: left; margin-right: 20px; margin-left: 20px; width: 100px; height: 100px">
        <h3 style="margin: 5px 0 0.4em 0; font-size: 21px; color: #000; font-weight: bold">E-KOPERASI</h3>
        <div style="color: #000; font-size: 13px" class="clearfix">SISTEM SIMPAN PADA KOPERASI 2016</div>
      </div>
    </div>
    
    <div class="well" style="width: 400px; margin: 20px auto; border: solid 1px #d9d9d9; padding: 30px 20px; border-radius: 8px">
    <form action="" method="post">
      <legend>Login Form</legend>  
      <?php if(isset($error))echo "<div class='alert alert-danger' role='alert'><i class='fa fa-exclamation-triangle'></i> ".$error."</div>"; ?>
      <div class="form-group input-group">
        <span class="input-group-addon"><i class="fa fa-user"></i></span>
        <input type="text" name="username" class="form-control" placeholder="Username" required>
      </div>

      <div class="form-group input-group">
        <span class="input-group-addon"><i class="fa fa-key"></i></span>
        <input type="password" name="password" class="form-control" placeholder="Password" required>
      </div>
      
      <div class="form-group">
        <input type="submit" name="ok" value="LOG IN" class="btn btn-primary form-control">
      </div>
    </form>
    </div><!--/span-->
  </div><!--/row-->

</div><!--/.fluid-container-->

<script src="bootstrap/js/jquery-1.10.2.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>

</body>

</html>