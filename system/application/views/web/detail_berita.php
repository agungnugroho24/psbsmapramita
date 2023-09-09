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
</style>
<div id="isi-tengah">
<?php
foreach($detail->result_array() as $d)
{
	echo"<div id='bg-detail-berita'>".$d['judul']."</div>";
	echo"<div class='keterangan'>Artikel <b><i>".$d['tipe_artikel']."</i></b> - Kategori <b><i>".$d['nama_kat']."</i></b> | Diposting pada : <i>".$d['tanggal']." -|- ".$d['waktu']."</i><br>
	Share this article on ";
	?>
	<script language="javascript">
document.write("<a href='http://twitter.com/home/?status=" + document.URL + "' target='_blank'>&#8226; Twitter</a> | <a href='http://www.facebook.com/share.php?u=" + document.URL + "' target='_blank'>&#8226; Facebook</a> | <a href='http://www.reddit.com/submit?url=" + document.URL + "' target='_blank'>&#8226; Reddit</a> | <a href='http://digg.com/submit?url=" + document.URL + "' target='_blank'>&#8226; Digg</a>");
</script>
	<?php
	echo"</div>";
	$isi=nl2br($d['isi']);
	echo"<div id='detail'><img src='".base_url()."system/application/views/web/berita/".$d['gambar']."' class='image' width='300'>".$isi."</div>";
}
?>
</div>