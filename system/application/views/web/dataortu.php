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
	.f{
		font-size: 18px;
	}
	.f tr td{
		padding:5px;
	}
</style>
<form action="" method="post">
<div id="isi-tengah">
<div id="detail">
<div id="bg-detail-berita">Data Orang Tua</div>
<table class="f">
	<tr>
		<td>Nama Ayah</td>
		<td>:</td>
		<td><?php echo @$siswa[0]["namaayah"] ?></td>
	</tr>
	<tr>
		<td>Pendidikan Ayah</td>
		<td>:</td>
		<td><?php echo @$siswa[0]["pendidikan_ayah"] ?></td>
	</tr>
	<tr>
		<td>Pekerjaan Ayah</td>
		<td>:</td>
		<td><?php echo @$siswa[0]["pekerjaan_ayah"] ?></td>
	</tr>
	<tr>
		<td>Nama Ibu</td>
		<td>:</td>
		<td><?php echo @$siswa[0]["namaibu"] ?></td>
	</tr>
	<tr>
		<td>Pendidikan Ibu</td>
		<td>:</td>
		<td><?php echo @$siswa[0]["pendidikan_ibu"] ?></td>
	</tr>
	<tr>
		<td>Pekerjaan Ibu</td>
		<td>:</td>
		<td><?php echo @$siswa[0]["pekerjaan_ibu"] ?></td>
	</tr>
</table>
</div>
</div>
</form>