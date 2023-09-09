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
<div id="bg-detail-berita">Data Siswa</div>
<table class="f">
	<tr>
		<td>Nama Siswa</td>
		<td>:</td>
		<td><?php echo @$siswa[0]["nama"] ?></td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td>:</td>
		<td><?php echo @$siswa[0]["jk"] ?></td>
	</tr>
	<tr>
		<td>Tempat, Tanggal Lahir</td>
		<td>:</td>
		<td><?php echo @$siswa[0]["tempat_lahir"].", ".date("d-M-Y",strtotime(@$siswa[0]["tanggal_lahir"])) ?></td>
	</tr>
	<tr>
		<td>Bahasa Sehari-hari</td>
		<td>:</td>
		<td><?php echo @$siswa[0]["bhs"] ?></td>
	</tr>
	<tr>
		<td>No. STTB</td>
		<td>:</td>
		<td><?php echo @$siswa[0]["no_sttb"] ?></td>
	</tr>
	<tr>
		<td>Anak Ke</td>
		<td>:</td>
		<td><?php echo @$siswa[0]["anak_ke"] ?></td>
	</tr>
	<tr>
		<td>Status dalam keluarga</td>
		<td>:</td>
		<td><?php echo @$siswa[0]["kdk"] ?></td>
	</tr>
	<tr>
		<td>Jumlah Saudara</td>
		<td>:</td>
		<td><?php echo @$siswa[0]["jumsau"] ?></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td>:</td>
		<td><?php echo @$siswa[0]["alamat"] ?></td>
	</tr>
</table>
</div>
</div>
</form>