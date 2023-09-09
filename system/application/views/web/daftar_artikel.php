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
<div class="title-berita"><?php echo $judul; ?></div>
<div id="detail">
<?php
	foreach($isi->result_array() as $i)
	{
		if($judul=="Materi E-Learning")
		{
			$dir="tutorial";
			$dir2="dettutorial";
		}
		else if($judul=="Indexs Berita")
		{
			$dir="berita";
			$dir2="detberita";
		}
		$isi1 = substr($i['isi'],0,300);
		$isi = strip_tags($isi1);
		echo "<div id='sub-artikel'><h2><a href='".base_url()."index.php/web/".$dir2."/".$i['tipe_artikel']."/".$i['id_artikel']."'>".$i['judul']."</a></h2><div class='keterangan'>Artikel <b><i>".$i['tipe_artikel']."</i></b> - Kategori <b><i>".$i['nama_kat']."</i></b> | Diposting pada : <i>".$i['tanggal']." -|- ".$i['waktu']."</i></div>";
		echo"<img src='".base_url()."system/application/views/web/".$dir."/".$i['gambar']."' class='image' height='60'>".$isi.".....";
		echo"<a href='".base_url()."index.php/web/".$dir2."/".$i['tipe_artikel']."/".$i['id_artikel']."'><div class='selanjutnya'>Baca Selanjutnya</div></a></div>";
	}
echo "<table align='center'><tr><td>".$paginator."</td></tr></table>";
?>
</div>
</div>