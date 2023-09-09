<?PHP 
include("config.php"); 
if (isset($_SESSION['session_login_by_id'])){ //jika session loginnya ada maka lanjutkan
	$user_id = $_SESSION['session_login_by_id'];
	//dapatkan data user
	$sql = mysql_query("select * from users where id='$user_id'");
	$data = mysql_fetch_array($sql);
	$nama = $data['nama'];
	$email = $data['email'];
	$password = $data['pswd'];
	$pertanyaan = $data['pertanyaan'];
	$jawaban = $data['jawaban'];
}else{
	echo "Anda Harus Login terlebih dahulu untuk mengakses halaman ini <p> <a href='index.php'>Kembali</a>";
	exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<title>PHP Mysql Forgot Password - Megasoft Informer</title>
<meta name='Author' content='Dewa'/>
<meta name='Description' content='PHP Mysql Forgot Password'/>
<link rel='shortcut icon' type='image icon' href='favicon.ico'/>
<link rel='stylesheet' type='text/css' href='bootstrap/bootstrap.css'/>
<link rel='stylesheet' type='text/css' href='bootstrap/megasoft.css'/>
<script src="js/jquery.min.js"></script>
<body>
<div class='container-fluid' style='margin-top:20px;'>
	<?PHP include("inc/navbar.php"); ?>
<div class='row-fluid'>
	<!-- bagian home -->
	<div class='span12'>
	<div class='well'>
		<h4>Login As <?PHP echo $nama; ?></h4>
		<p>
		ID : <b><?PHP echo $user_id; ?></b><br>
		Nama : <b><?PHP echo $nama; ?></b><br>
		Email : <b><?PHP echo $email; ?></b><br>
		Password : <b><?PHP echo $password; ?></b><br>
		Pertanyaan : <b><?PHP echo $pertanyaan; ?></b><br>
		Jawaban Pertanyaan : <b><?PHP echo $jawaban; ?></b><br>
		<a href='logout.php'>Logout From This Site</a>
		</p>
	</div>
	<div class='well'>
	<h4>Mau Download Source code ini??, cek di sini</h4>
	<a href='http://blog.megasoft-id.com/article/contoh-program-forget-password-dengan-php-mysql/'>http://blog.megasoft-id.com/article/contoh-program-forget-password-dengan-php-mysql/</a>
	</div>
	</div>
	<!-- akhir home -->
	<?PHP include("inc/footer.php"); ?>
</div>
</div>
</body>
</html>