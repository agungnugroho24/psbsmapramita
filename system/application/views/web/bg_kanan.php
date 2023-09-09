<div id="isi-kanan">
<div id="bg-title">Agenda Terbaru</div>
<div id="bg-isi-widget">
<?php
	foreach($agenda->result_array() as $a)
	{
		echo "<li class='li-class'><a href='".base_url()."index.php/web/detagenda/".$a['id']."' onclick=\"return hs.htmlExpand(this, { objectType: 'iframe' } )\">".$a['title']."</a></li>";
	}
?><br />
<a href="<?php echo base_url(); ?>index.php/web/data/7"><div class="selanjutnya">Lihat Semua Agenda</div></a>
</div>
<div id="bg-bawah-widget"></div>





</div>
</div>
