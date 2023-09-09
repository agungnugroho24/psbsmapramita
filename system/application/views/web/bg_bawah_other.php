<div id="isi-bawah">
<div id="sub-isi-bawah">
<div class="title-berita">Berita</div>
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

<div id="sub-isi-bawah">
<div class="title-umum">Pengumuman Terbaru</div>
<?php
echo"<div id='sub-pengumuman'>";
foreach($pengumuman->result_array() as $p)
{
$isi = substr(@$p['isi'],0,130);
echo"<a href='".base_url()."index.php/web/detpengumuman/".$p['id']."' onclick=\"return hs.htmlExpand(this, { objectType: 'iframe' } )\"><div id='mini-sub-pengumuman'><img src='".base_url()."system/application/views/web/images/umum-icon.png' class='image'/>Pengumuman ".$p['title']."<br /><h3>
		Diposting tanggal ".$p['posting_date']."</h3></div></a>";
}
echo"</div>";
?>
<a href="<?php echo base_url(); ?>index.php/web/data/8"><div class="selanjutnya">Lihat Semua Pengumuman</div></a>
</div>


<div id="sub-isi-bawah">

</div>

<div id="menubawah"><?php
$ip = $_SERVER['REMOTE_ADDR'];
?>
Copyright &copy; SMA Pramita Tangerang || Anda berkunjung dengan IP Address :: <?php echo $ip; ?>
</div>
<div id="list-bawah">
SMA Pramita Tangerang<br />
</div>
</body>
</html>