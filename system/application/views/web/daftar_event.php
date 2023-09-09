<style type="text/css">
	#isi-kanan{
		margin-top: 30px;
	}
	#isi-tengah{
		margin: 25px; width: 680px;
	}
	#detail{
		width: auto;
	}
	a{
		text-decoration: none;
		color: #666;
	}
	a:hover{
		color: #000;
	}
</style>
<div id="isi-tengah">
<div id="title-event"><?php echo $judul; ?></div>
<div id="detail">
<?php
	foreach($isi->result_array() as $i)
	{
		echo "<div id='sub-artikel'><h2>".$i['title']."</h2><div class='keterangan'>Artikel <b><i>".$i['type']."</i></b> - Penulis <b><i>".$i['username']."</i></b> | Diposting pada : <i>".$i['posting_date']."</i></div>";
		echo $i['content'];
		echo"</div>";
	}
echo "<table align='center'><tr><td>".$paginator."</td></tr></table>";
?>
</div>
</div>