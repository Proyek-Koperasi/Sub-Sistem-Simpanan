<html>
<head>
<style type="text/css" media="print">
	table {border: solid 1px #000; border-collapse: collapse; width: 100%}
	tr { border: solid 1px #000; page-break-inside: avoid;}
	td { padding: 7px 5px; font-size: 10px}
	th {
		font-family:Arial;
		color:black;
		font-size: 11px;
		background-color:lightgrey;
	}
	thead {
		display:table-header-group;
	}
	tbody {
		display:table-row-group;
	}
	h3 { margin-bottom: -17px }
	h2 { margin-bottom: 0px }
</style>
<style type="text/css" media="screen">
	table {border: solid 1px #000; border-collapse: collapse; width: 100%}
	tr { border: solid 1px #000}
	th {
		font-family:Arial;
		color:black;
		font-size: 11px;
		background-color: #999;
		padding: 8px 0;
	}
	td { padding: 7px 5px;font-size: 10px}
	h3 { margin-bottom: -17px }
	h2 { margin-bottom: 0px }
</style>
<title>Cetak Transaksi Simpan</title>
</head>

<body onload="window.print()">
	<center><b style="font-size: 20px">DATA TRANSAKSI SIMPAN</b><br>
	</center><br>
	
	<table>
		<thead>
			<tr>
				     <th>No</th>
                     <th>Id Transaksi</th>
                     <th>Id Anggota</th>
                     <th>Nama</th>
                     <th>Jumlah Simpan</th>
                     <th>Jumlah Ambil</th>
                     <th>Total</th>
                     <th>Tanggal transaksi</th>
                     <th>Jenis simpanan</th>
			</tr>
		</thead>
		<tbody>
			<?php
        $no = 1; 
        foreach ($trans as $key) { 
         ?>
    <tr>
     <td><?php echo $no; ?></td>
    <td><?php echo$key->id_transaksi ?></td>
    <td><?php echo $key->id_anggota ?></td>
   <td><?php echo $key->nama ?></td>
    <td><?php echo $key->jml_simpan ?></td>
    <td><?php echo $key->jml_ambil ?></td>
    <td><?php echo $key->total ?></td>
    <td><?php echo $key->tgl_transaksi ?></td>
    <td><?php echo $key->jenis_simpan ?></td>

    <?php } ?>
		</tbody>
	</table>
</body>
</html>

