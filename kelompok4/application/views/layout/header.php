<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="icon" href="../../favicon.ico"> -->

    <title>E-Koperasi</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url() ?>bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>bootstrap/css/navbar-fixed-top.css" rel="stylesheet">

    <link href="<?php echo base_url() ?>bootstrap/css/bootstrap.css" rel="stylesheet">

    <link href="<?php echo base_url() ?>bootstrap/css/theme.css" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url() ?>bootstrap/font-awesome/css/font-awesome.min.css">

    <!-- Custom styles for this template -->
    <!-- <link href="<?php echo base_url() ?>bootstrap/css/jumbotron-narrow.css" rel="stylesheet"> -->

    <!-- ini datepicker -->
    <link rel="stylesheet" href="<?php echo base_url() ?>bootstrap/datepicker/css/datepicker.css">

    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet" />
    <!-- ini datatables -->
    <link rel="stylesheet" href="<?php echo base_url() ?>bootstrap/assets/css/jquery.dataTables.css">

    <link rel="stylesheet" href="<?php echo base_url() ?>bootstrap/notif/gaya.css" type="text/css">

    <link rel="shortcut icon" href="<?php echo base_url() ?>images/kop.png">

    <script type="text/javascript" src="<?php echo base_url() ?>bootstrap/notif/jquery-1.4.3.min.js"></script>
    <!-- <script type="text/javascript" src="<?php echo base_url() ?>bootstrap/notif/notifikasi.js"></script> -->
    <script type="text/javascript">
      var x = 1;

    function cek(){
        $.ajax({
            url: "<?php echo base_url() ?>welcome/cekpesan",
            cache: false,
            success: function(msg){
                $("#notifikasi").html(msg);
            }
        });
        var waktu = setTimeout("cek()",3000);
    }

    $(document).ready(function(){
        cek();
        $("#pesan").click(function(){
            $("#loading").show();
            if(x==1){
                $("#pesan").css("background-color","#efefef");
                x = 0;
            }else{
                $("#pesan").css("background-color","#428bca");
                x = 1;
            }
            $("#info").toggle();
            //ajax untuk menampilkan pesan yang belum terbaca
            $.ajax({
                url: "<?php echo base_url() ?>welcome/lihatpesan",
                cache: false,
                success: function(msg){
                    $("#loading").hide();
                    $("#konten-info").html(msg);
                }
            });

        });
        $("#content").click(function(){
            $("#info").hide();
            $("#pesan").css("background-color","#ffffff");
            x = 1;
        });
    });
    </script>

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo base_url() ?>bootstrap/js/ie-emulation-modes-warning.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo base_url() ?>bootstrap/js/ie10-viewport-bug-workaround.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]--></head>

  <body>

  <div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <ul class="nav navbar-nav">
        <li><a href="<?php echo base_url() ?>welcome/">E-KOPERASI</a></li>
      </ul>
      <!-- <h3 class="text-muted">Disposisi Surat</h3> -->
    <!-- <div class="gambar" align="right"><img class="img-responsive" src="<?php echo base_url() ?>images/header.png" alt=""></div> -->
        <ul class="nav nav-pills pull-right">          
            <?php if ($this->session->userdata('level')=='lt' || $this->session->userdata('level')=='organisasi') { ?>
          <li class="dropdown user-dropdown">
             <ul class="dropdown-menu">
                <li> </li>
                
              </ul>                
          </li>
          <li class="dropdown user-dropdown">
              <ul class="dropdown-menu">
                <li> </li>
                <li class="divider"></li>
                <li> </li>
              </ul>                
          </li>
          <li class="dropdown user-dropdown">
             <ul class="dropdown-menu">
                <li> </li>
                <li class="divider"></li>
                <li> </li>
              </ul>                
          </li>
                    <?php
                  }elseif($this->session->userdata('level')=='pimpinan'){
                    ?>

          <li class="dropdown user-dropdown">
             <ul class="dropdown-menu">
                <li> </li>
              </ul>                
          </li>
          <li class="dropdown user-dropdown">
              <ul class="dropdown-menu">
                <li> </li>
              </ul>                
          </li>
                    <?php
                  }
                  else{
                    echo "";
                  }
                  ?>
          <li class="dropdown user-dropdown">
            <ul class="dropdown-menu">
                <li> <li class="divider"></li>
                <li> </li>
              </ul>                
          </li>
          <li class="dropdown user-dropdown">
            <a href="<?php echo base_url() ?>admin/index" id="pesan">Admin <span id="notifikasi" class="badge"></span></a>
            <li class="dropdown user-dropdown">
            <a href="<?php echo base_url() ?>anggota/index" id="pesan">Anggota <span id="notifikasi" class="badge"></span></a>
            <li class="dropdown user-dropdown">
            <a href="<?php echo base_url() ?>jenis_simpan/index" id="pesan">Jenis Simpan <span id="notifikasi" class="badge"></span></a>
            <li class="dropdown user-dropdown">
            <a href="<?php echo base_url() ?>tbSimpan/index" id="pesan">Simpanan <span id="notifikasi" class="badge"></span></a>
            
            
            
            
            <li class="dropdown user-dropdown">
            
            
              <div id="info">
                <div id="loading"><br>Loading...<img src="<?php echo base_url() ?>bootstrap/notif/loading.gif"></div>
                <div id="konten-info"></div>
              </div>                
          </li>
          <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
               <?php echo  $this->session->userdata('username'); ?><b class="caret"></b></a>
                <ul class="dropdown-menu">
                 
                  <li><a href="<?php echo base_url() ?>welcome/profil_o"><em> </em></a></li>
                  
                  <li><a href="<?php echo base_url() ?>login/logout"><i class="fa fa-power-off"></i> Log Out </a></li>
                </ul>
            </li>
        </ul>
        <!-- <h3 class="text-muted">Disposisi Surat</h3> -->
    </div> <!-- /container -->
  </div>

  <div class="container">
     
  </div>