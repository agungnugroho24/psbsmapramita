<div id="isi-tengah">

<div class="title-berita">Berita</div>
<div id="kemahasiswaan">
<?php
foreach($slide_akademik->result_array() as $s)
{
$isi = substr($s['isi'],0,140);
echo"<div id='akademik'>
<a href='".base_url()."index.php/web/detberita/".$s['tipe_artikel']."/".$s['id_artikel']."'><h4>".$s['judul']."</h4></a>
<h6>".$s['tanggal']." - ".$s['waktu']." | Kategori ".$s['nama_kat']." | oleh <b><i>".$s['username']."</i></b></h6>
<img src='".base_url()."system/application/views/web/berita/".$s['gambar']."' class='image' height='60'>
".$isi.".....<a href='".base_url()."index.php/web/detberita/".$s['tipe_artikel']."/".$s['id_artikel']."'><b>Baca Selanjutnya</b></a>
</div>";
}
?>
<?php
foreach($slide_kegiatan->result_array() as $s)
{
$isi = substr($s['isi'],0,140);
echo"<div id='akademik'>
<a href='".base_url()."index.php/web/detberita/".$s['tipe_artikel']."/".$s['id_artikel']."'><h4>".$s['judul']."</h4></a>
<h6>".$s['tanggal']." - ".$s['waktu']." | Kategori ".$s['nama_kat']." | oleh <b><i>".$s['username']."</i></b></h6>
<img src='".base_url()."system/application/views/web/berita/".$s['gambar']."' class='image' height='60'>
".$isi.".....<a href='".base_url()."index.php/web/detberita/".$s['tipe_artikel']."/".$s['id_artikel']."'><b>Baca Selanjutnya</b></a>
</div>";
}
?>
</div>
</div>