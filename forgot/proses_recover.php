<?PHP
include("config.php");
if (isset($_POST['id'])){
	$id = mysql_real_escape_string($_POST['id']);
	$pswd_baru = md5($_POST['pswd']);
	//mulai memperbarui password
	$sql_update = mysql_query("update users set pswd='$pswd_baru' where id='$id'");
	echo "Sukses Mengubah Password Anda, <a href='index.php'>Silahkan Login Kembali</a>";
}else{
	echo "<h1>Access Forbiden!</h1>";
}
?>