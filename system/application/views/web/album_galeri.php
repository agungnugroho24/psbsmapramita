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
	#galeri{
		width: auto;
	}
</style>
<div id="isi-tengah">
<div class="title-learn">Album Galeri Kegiatan</div>
<?php
echo"Share this article on :";
	?>
	<script language="javascript">
document.write("<a href='http://twitter.com/home/?status=" + document.URL + "' target='_blank'>&#8226; Twitter</a> | <a href='http://www.facebook.com/share.php?u=" + document.URL + "' target='_blank'>&#8226; Facebook</a> | <a href='http://www.reddit.com/submit?url=" + document.URL + "' target='_blank'>&#8226; Reddit</a> | <a href='http://digg.com/submit?url=" + document.URL + "' target='_blank'>&#8226; Digg</a>");
</script>
	<?php
	echo"<br><br>";
foreach($album->result_array() as $b)
{
echo "<a href='".base_url()."index.php/web/galeri/".$b['id_album']."'><div id='album-besar'><div id='sub-album'><img src='".base_url()."system/application/views/web/images/album.png' border='0'></div><div id='sub-album'>".$b['nama_album']."</div></div></a>";
}
?>
<?php
echo "<table align='center'><tr><td>".$paginator."</td></tr></table>";
?>
</div>