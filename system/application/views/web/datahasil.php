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
<div id="bg-detail-berita">Data Hasil</div>
<table class="f">
	<tr>
		<td>Nama Siswa</td>
		<td>:</td>
		<td><?php echo @$siswa[0]["nama"] ?></td>
	</tr>
	<tr>
		<td>Penerimaan</td>
		<td>:</td>
		<td>
			<?php 
				if(@$siswa[0]["status_psb"]==0){
					echo "Data Hasil Masih Di Proses";
				}
				else{
					echo "Anda Telah Di terima di Sekolah Tiara Aksara";
				}
			?>
		</td>
	</tr>
</table>
</div>
</div>
</form>