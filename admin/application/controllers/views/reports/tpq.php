<?php
session_start();
include 'koneksi.php';
    $query = mysql_query("select * from tb_psb_data where idpsb=1");
	$no = 1;
    $data = mysql_fetch_array($query)
?>
<html>
<head>
    <title>Print Formulir</title>
    <link rel='stylesheet' href='gaya.css'>

<html>
<head>
    <title>Print Formulir</title>
    <link rel='stylesheet' href='gaya.css'>
    <?php 
    echo "<script type='text/javascript'>javascript:window.print()</script>";
    ?>
</head>
<body>
<!-- tabel body -->
<table border='0' cellpadding='3' cellspacing='1' width='700' style='font-family: "time news roman"; font-size: 12px; background: #ffffff;'>
    <!-- kop -->
    <tr><td colspan='3'><?php include 'kop.php' ?></td></tr>
    <!-- kop -->
    <tr>
        <td colspan='3' align='center'></td>
    </tr>
    <tr>
        <td width='20'><!-- margin kanan --><br></td>
        <td>
        <!-- Bagian Tengah / Isi -->
            <!-- tabel kontent -->
            <table cellpadding="0" cellspacing="0" border="1" class="table" id="example" style="width:1200px:">
									<thead style="width:1200px:">
								    <tr style="width:1200px:">
										<th>No. Pendaftaran</th>
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
										<th>Nama Ayah/Ibu/Wali</th>
										<th>No. Tlp</th>
										<th>Tgl. Pendaftaran</th>
										<th>Pendaftaran</th>
										
                                    </tr>
										</thead>
										<tbody>
											
											<?php
											$subject_query = mysql_query("select * from tb_psb_data where idpsb=1")or die(mysql_error());
											while($row = mysql_fetch_array($subject_query)){
											$id = $row['nopen'];
											?>
										
											<tr>
													
									<td><?php echo $row['nopen']; ?></td>
                                    <td><?php echo $row['nama']; ?></td>
									<td><?php if($row["jk"]=="P"){echo "Perempuan";}elseif($row["jk"]=="L"){echo "Laki-Laki";}else{echo"-";} ?></td>
                                    <td><?php echo $row['namaayah']; ?>/<?php echo $row['namaibu']; ?>/<?php echo $row['namawali']; ?> </td> 
                                     <td><?php echo $row['tlp']; ?></td>
                                    <td><?php echo $row['tdsd'];?> </td>
									<td align="center"><?php if($row["idpsb"]==1){echo "TPQ";}?></td>
										</tr>
											
											<?php } ?>   
                              
										</tbody>
									</table>
        </td>
        <td width='20'><!-- margin kiri --></td>
    </tr>
</table>   
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<table style="margin-left:15px;">
	<?php $today = date("d-M-Y");?>
	<tr>
	<td>
     Tangerang, <?php echo $today?>
	</td>
	</tr>
	<tr>
	<td align="center">
	Kepala Sekolah
	</td>
	</tr>
	<tr>
	<td><br><br><br><br><br>
	____________________
	</td>
	</tr>
	</table>
		<table style="margin-left:500px; margin-top:-135px;">
	<tr>
	<td align="center">
	Petugas
	</td>
	</tr>
	<tr>
	<td><br><br><br><br><br>
	____________________
	</td>
	</tr>
	</table>
</body>
    
</html>