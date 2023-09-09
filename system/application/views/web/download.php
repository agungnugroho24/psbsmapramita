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
<div class="title-learn">Download File / Berkas</div>
<div id="galeri">
<?php
echo"Share this article on :";
	?>
	<script language="javascript">
document.write("<a href='http://twitter.com/home/?status=" + document.URL + "' target='_blank'>&#8226; Twitter</a> | <a href='http://www.facebook.com/share.php?u=" + document.URL + "' target='_blank'>&#8226; Facebook</a> | <a href='http://www.reddit.com/submit?url=" + document.URL + "' target='_blank'>&#8226; Reddit</a> | <a href='http://digg.com/submit?url=" + document.URL + "' target='_blank'>&#8226; Digg</a>");
</script>
<table style="border: 1pt solid #CCCCCC;" width="100%" cellpadding="4" cellspacing="1" class="widget">
<tr align="center" bgcolor="#565656" style="color:#FFFFFF;"><td width="15"><b>No</b></td><td width="400"><b>Judul File</b></td><td width="55"><b>Action</b></td></tr>
	<?php
	echo"<br><br>";
$nomor=1;
foreach($isi->result_array() as $dwn)
{
if(($nomor%2)==0){
$warna="#f4f4f4";
} else{
$warna="#ccc";
}
$file = str_replace('media/file/','',$dwn['image_url']);
echo "<tr bgcolor=".$warna."><td align='center'>".$nomor."</td><td>".$dwn['title']."</td><td><a href='".base_url()."media/file/".$file."'>Download</a></td></tr>";
$nomor++;
}
?>
</table>
</div>
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />

<?php
echo "<table align='center'><tr><td>".$paginator."</td></tr></table>";
?>
</div>