<style type="text/css">
	#isi-kanan{
		margin-top: 30px;
	}
	#isi-tengah{
		margin: 25px; width: 680px;
	}
	a{
		text-decoration: none;
		color: #666;
	}
	a:hover{
		color: #000;
	}
	#detail{
		width: auto;
	}
	.jk input[type='text'],input[type='password'],input[type='number']{
		border: 1px solid #ccc;
		padding: 5px;
		width: 100%;
	}
	.spk{
		background: #ccc;
		border: 1px solid #ccc;
		padding: 5px;
		cursor: pointer;
	}
	textarea{
		border: 1px solid #ccc;
		padding: 5px;
		width: 100%;
	}

</style>
<form action="" method="post">
<div id="isi-tengah">
<div id="detail">
<div style="height:80px;">
	<img src="<?php echo base_url()."system/application/views/web/images/logopramita.png" ?>" style="width:80px;" align="left" />
	<div style="text-align:center;">
		<h1>PENDAFTARAN SISWA BARU</h1>
		Data Anda Telah Kami Terima. Kami Akan Melakukan Penyeleksian Siswa/i Baru. <br/>
		Untuk Melihat Pengumuman, Estimasi Biaya,  <br/>
		Silahkan login dengan menggunakan Nomor Pendaftaran dan password anda. <br/>
		<hr style="border:2px solid #ccc;"/>
	</div>
</div>
<table style="font-size:16px;width:100%;">
	<tr>
		<td colspan="3" align="right" style="font-size:11px;">Tangerang, <?php echo @$tampil[0]["tdsd"] ?></td>
	</tr>
	<tr>
		<td style="width:30%"><?php echo @$tampil[0]["nopen"] ?></td>
		<td>:</td>
		<td><?php echo @$tampil[0]["nopen"] ?></td>
	</tr>
	<tr>
		<td>Nama Siswa/i</td>
		<td>:</td>
		<td><?php echo @$tampil[0]["nama"] ?></td>
	</tr>
	<tr>
		<td>Tempat, Tgl Lahir</td>
		<td>:</td>
		<td><?php echo @$tampil[0]["tempat_lahir"].", ".@$tampil[0]["tanggal_lahir"] ?></td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td>:</td>
		<td><?php if(@$tampil[0]["jk"]=="P"){echo "Perempuan";}elseif(@$tampil[0]["jk"]=="L"){echo "Laki-Laki";}else{echo"-";} ?></td>
	</tr>
	<tr>
		<td colspan="3"><hr style="border:1px solid #ccc;" /></td>
	</tr>
	<tr>
		<td>Nama Ayah</td>
		<td>:</td>
		<td><?php echo @$tampil[0]["namaayah"] ?></td>
	</tr>
	<tr>
		<td>Nama Ibu</td>
		<td>:</td>
		<td><?php echo @$tampil[0]["namaibu"] ?></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td>:</td>
		<td><?php echo @$tampil[0]["alamat"] ?></td>
	</tr>
	<tr>
		<td>Nomor Telp/Hp</td>
		<td>:</td>
		<td><?php echo @$tampil[0]["tlp"] ?></td>
	</tr>
</table>
<p>Terima Kasih Telah Mendaftarkan Anak anda di sekolah kami, pilihan tepat untuk melangsung pendidikan di tempat kami. <br/>
Silahkan <a href="" onclick="window.print()"><strong>cetak</strong></a>. Data ini Sebagai Bukti Pendaftaran.</p>
</div>
</div>
</form>