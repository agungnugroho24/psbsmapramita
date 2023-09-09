<table style="font-size:16px;" class="table table-hover">
	<tr>
		<td>No Pendaftaran</td>
		<td>:</td>
		<td><?php echo @$redit[0]['nopen'] ?></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><?php echo @$redit[0]['nama'] ?></td>
	</tr>
</table>
<br/>
<table style="font-size:16px;" class="table table-hover">
<?php $tg=0; foreach ($tampil as $key => $value) { ?>
	<tr>
		<td><?php echo @$value["ket"] ?></td>
		<td>:</td>
		<td><?php $rg = @$value["biaya"]; echo number_format(@$rg); $tg = $rg + $tg; ?></td>
	</tr>
<?php } ?>
	<tr>
		<td colspan="3" align="right"> Total : <?php echo number_format(@$tg); ?></td>
	</tr>
</table>