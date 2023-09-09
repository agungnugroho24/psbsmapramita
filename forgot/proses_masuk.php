<?PHP
include("config.php");
if (isset($_POST['email'])){ //jika parameter email tidak kosong maka lanjutkan
	//mengambil data yang di kirimkan
	$email = mysql_real_escape_string($_POST['email']);
	$password = md5($_POST['pswd']);
	//mulai melakukan proses validasi login
	$sql_login = mysql_query("select * from users where email='$email' and pswd='$password'");
	if (mysql_num_rows($sql_login) != 0){ //jika login berhasil maka
		$data_login = mysql_fetch_array($sql_login);
		$id_user = $data_login['id'];
		//buat session kemudian redirect ke home.php
		$_SESSION['session_login_by_id'] = $id_user;
		header("location:home.php");
	}else{ //jika login gagal
		echo "Email Or Password is Wrong!<br><a href='index.php'>Kembali</a>";
	}
}else{ //jika parameter email kosong maka akhiri
	echo "Access Forbiden!";
	exit();
}
?>