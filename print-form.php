<?php
session_start();
include 'dbcon.php';
include'session_anggota.php';
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
        <td colspan='3' align='center'>PERINCIAN PEMBAYARAN</td>
    </tr>
    <tr>
        <td width='20'><!-- margin kanan --><br></td>
        <td>
        <!-- Bagian Tengah / Isi -->
            <!-- tabel kontent -->
            <table style='font-family: "time news roman"; font-size: 12px;' border='0' cellpadding='3' cellspacing='1' width='100%'>
			 <tr>
			<?php $query= mysql_query("select * from tb_psb_data where nopen = '$session_id'")or die(mysql_error());
			$row = mysql_fetch_array($query);
			?>
               <tr>
		<td>Nama Siswa</td>
		<td>:</td>
		<td><?php echo $row["nama"] ?></td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td>:</td>
		<td><?php if($row["jk"]=="P"){echo "Perempuan";}elseif($row["jk"]=="L"){echo "Laki-Laki";}else{echo"-";} ?></td>
	</tr>
	<tr>
		<td>Tempat, Tanggal Lahir</td>
		<td>:</td>
		<td><?php echo $row["tempat_lahir"].", ".date("d-M-Y",strtotime($row["tanggal_lahir"])) ?></td>
	</tr>
	<tr>
		<td>Bahasa Sehari-hari</td>
		<td>:</td>
		<td><?php echo $row["bhs"] ?></td>
	</tr>
	<tr>
		<td>Anak Ke</td>
		<td>:</td>
		<td><?php echo $row["anak_ke"] ?></td>
	</tr>
	<tr>
		<td>Status dalam keluarga</td>
		<td>:</td>
		<td><?php echo $row["kdk"] ?></td>
	</tr>
	<tr>
		<td>Jumlah Saudara</td>
		<td>:</td>
		<td><?php echo $row["jumsau"] ?></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td>:</td>
		<td><?php echo $row["alamat"] ?></td>
	</tr>
	<tr>
		<td>Tlp</td>
		<td>:</td>
		<td><?php echo $row["tlp"] ?></td>
	</tr>
	<tr>
		<td>Nama Ayah</td>
		<td>:</td>
		<td><?php echo $row["namaayah"] ?></td>
	</tr>
	<tr>
		<td>Pendidikan Ayah</td>
		<td>:</td>
		<td><?php echo $row["pendidikan_ayah"] ?></td>
	</tr>
	<tr>
		<td>Pekerjaan Ayah</td>
		<td>:</td>
		<td><?php echo $row["pekerjaan_ayah"] ?></td>
	</tr>
	<tr>
		<td>Nama Ibu</td>
		<td>:</td>
		<td><?php echo $row["namaibu"] ?></td>
	</tr>
	<tr>
		<td>Pendidikan Ibu</td>
		<td>:</td>
		<td><?php echo $row["pendidikan_ibu"] ?></td>
	</tr>
	<tr>
		<td>Pekerjaan Ibu</td>
		<td>:</td>
		<td><?php echo $row["pekerjaan_ibu"] ?></td>
	</tr>
	<tr>
		<td>Tlp Ortu</td>
		<td>:</td>
		<td><?php echo $row["tlportu"] ?></td>
	</tr>
	<tr>
		<td>Nama Wali</td>
		<td>:</td>
		<td><?php echo $row["namawali"] ?></td>
	</tr>
	<tr>
		<td>Pendidikan Wali</td>
		<td>:</td>
		<td><?php echo $row["pendidikan_wali"] ?></td>
	</tr>
	<tr>
		<td>Pekerjaan Wali</td>
		<td>:</td>
		<td><?php echo $row["pekerjaan_wali"] ?></td>
	</tr>			
				
</table>
<br>
            <table style='font-family: "time news roman"; font-size: 12px;' border='0' cellpadding='3' cellspacing='1' width='100%'>
			 <tr>
			 
			<?php $sql= mysql_query("SELECT pembayaran.biayabangunan,pembayaran.biayaspp,pembayaran.biayaseragam,pembayaran.bpp,pembayaran.total,tb_psb_data.idpsb             
FROM pembayaran   
INNER JOIN tb_psb_data            
ON pembayaran.idpsb=tb_psb_data.idpsb         
WHERE tb_psb_data.nopen='$session_id'")or die(mysql_error());
		$r = mysql_fetch_array($sql);
			?>
               <tr>
		<td>Biaya bangunan</td>
		<td>:</td>
		<td><?php echo $r["biayabangunan"]; ?>
		</td>
	</tr>
	<tr>
		<td>Biaya SPP</td>
		<td>:</td>
		<td>
		<?php echo $r["biayaspp"]; ?>
		</td>
	</tr>
	<tr>
		<td>Biaya Seragam</td>
		<td>:</td>
		<td>
		<?php echo $r["biayaseragam"]; ?>
		</td>
	</tr>
	<tr>
		<td>Biaya Penyelenggaraan Pendidikan (BPP)</td>
		<td>:</td>
		<td>
		<?php echo $r["bpp"]; ?>
		</td>
	</tr>
	<tr>
		<td>Total</td>
		<td>:</td>
		<td>
		<?php echo $r["total"]; ?>
		</td>
	</tr>
</table>


	<table>
	<tr>
	<td>
     TANDA TERIMA BERKAS
	</td>
	</tr>
	<tr>
	<td align="left">
	Foto copy akte lahir
	</td>
	</tr>
	<tr>
	<td align="left">
	Foto copy ijazah
	</td>
	</tr>
	<tr>
	<td align="left">
	Foto copy STTB/NEM
	</td>
	</tr>
	<tr>
	<td align="left">
	Foto diri
	</td>
	</tr>
	<tr>
	<td align="left">
	Foto copy KTP Ayah & Ibu
	</td>
	</tr>
	<tr>
	<td align="left">
	Surat pindah & surat validasi <i>Khusus siswa pindahan</i>
	</td>
	</tr>
	<tr>
	<td align="left">
	<i>Serahkan semua berkas pendaftaran selambat-lambatnya 3 hari setelah pendaftaran</i>
	</td>
	</tr>
	</table>
<br><br><br><br><br>
	<table>
	<?php $today = date("d-M-Y");?>
	<tr>
	<td>
     Tangerang, <?php echo $today?>
	</td>
	</tr>
	<tr>
	<td align="center">
	Orang Tua atau Wali
	</td>
	</tr>
	<tr>
	<td><br><br><br><br>
	____________________
	</td>
	</tr>
	</table>
		<table style="margin-left:290px; margin-top:-115px;">
	<tr>
	<td align="center">
	Calon Siswa
	</td>
	</tr>
	<tr>
	<td><br><br><br><br>
	<?php echo $row["nama"] ?>
	</td>
	</tr>
	</table>
	
	<table style="margin-left:550px; margin-top:-118px;">
	<tr>
	<td align="center">
	Petugas
	</td>
	</tr>
	<tr>
	<td><br><br><br><br>
	____________________
	</td>
	</tr>
	</table>
</body>
    
</html>