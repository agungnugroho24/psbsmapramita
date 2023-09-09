<div id="isi">
<div id="isi-kiri">

<div id="bg-title">Polling Bulan Ini</div>
<div id="bg-isi-widget">
<form method="post" action="<?php echo base_url(); ?>index.php/web/hasilpolling">
<?php
foreach($soal_polling->result_array() as $soal)
	{
		echo "<input type='hidden' name='id_soal' value='".$soal['id']."'>";
		echo "<h4><b>".$soal['soal']."</b></h4>";
	}
?>

<?php
foreach($jawaban_polling->result_array() as $jawaban)
	{
		echo "<span><input type='radio' name='polling' value='".$jawaban['id_jawaban']."' class='radio-class'> ".$jawaban['jawaban']."</span><br>";
	}
?>
<br /><span style="padding-left:25px;"><input type="submit" value="Pilih" class="poll"/> 
<a href="<?php echo base_url(); ?>index.php/web/lihathasil"><span class="poll">Lihat Hasil Polling</span></a></span><br />
</form>
</div>
<div id="bg-bawah-widget"></div>


</div>