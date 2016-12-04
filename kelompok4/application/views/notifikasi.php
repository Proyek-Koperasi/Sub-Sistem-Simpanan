<?php
session_start();
//misal anda login sebagai user dengan id=budi
// $_SESSION['userid'] = "budi";
?>
<html>
<head>
<title>Notifikasi</title>
<link rel="stylesheet" href="<?php echo base_url() ?>bootstrap/notif/gaya.css" type="text/css">
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
            $("#pesan").css("background-color","#4B59a9");
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
        $("#pesan").css("background-color","#4B59a9");
        x = 1;
    });
});



</script>
</head>

<body topmargin="0" leftmargin="0">
<div id="kepala">
<span id="pesan">
Pesan
<span id="notifikasi"></span>
</span>
<span id="home"><a href="<?php echo base_url() ?>welcome/notifikasi" class="home">Home</a></span>
</div>
<div id="info">
    <div id="loading"><br>Loading...<img src="<?php echo base_url() ?>bootstrap/notif/loading.gif"></div>
    <div id="konten-info">
    </div>
</div>

<div id="content">
<h1>Selamat Datang</h1>
<h2><?php echo  $this->session->userdata('username'); ?></h2>ini halaman utama
<p>
<script>
function buka(){
open('<?php echo base_url() ?>welcome/formpesan','form','menubar=no,width=300,height=300');
}
</script>
[ <a href="#" onClick="buka()">Tes kirim pesan</a> ]
</div>
</body>

</html></style>
