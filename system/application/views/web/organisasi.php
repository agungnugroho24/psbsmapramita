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
<div id="title-event">Organisasi Siswa</div>
<div id="detail">
<?php
	foreach($isi as $i)
	{
		echo "<div id='sub-artikel'><h2>".$i['title']."</h2>";
		echo $i['content'];
		echo"</div>";
	}	
?>
</div>
</div>