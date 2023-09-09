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
<div id="bg-detail-berita">Detail Pembayaran</div>
<table class="f">
<?php $total = 0;foreach ($siswa as $key => $value) { ?>
	<tr>
		<td>Biaya bangunan</td>
		<td>: <?php  echo @$value["biayabangunan"]?></td>
	</tr>
	<tr>
		<td>Biaya SPP</td>
		<td>: <?php  echo @$value["biayaspp"]?></td>
	</tr>
	<tr>
		<td>Biaya seragam</td>
		<td>: <?php  echo @$value["biayaseragam"]?></td>
	</tr>
	<tr>
		<td>Biaya penyelenggaraan pendidikan</td>
		<td>: <?php  echo @$value["bpp"]?></td>
	</tr>
<?php } ?>
	<tr>
		<td colspan="3"><hr style="border:1px solid #ccc;"></td>
	</tr>
	<tr>
	<td>Total</td>
		<td>: <?php  echo @$value["total"]?></td>
	</tr>
		<tr>
	<td><a href="../../kwitansi.php" target="blank">Cetak kwitansi</a></td>
	</tr>
</table>

</div>
</div>
</form>