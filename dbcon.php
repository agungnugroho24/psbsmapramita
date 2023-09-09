<?php
mysql_select_db('sekolahan',mysql_connect('localhost','root',''))or die(mysql_error());

//fungsi format rupiah 
function format_rupiah($rp) {
	$hasil = "Rp." . number_format($rp, 0, "", ".") . ",00";
	return $hasil;
}
?>