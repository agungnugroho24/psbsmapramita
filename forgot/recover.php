<?PHP 
include("config.php"); 
//cek user dah login belum, klu udah redirect aja ke home.php
if (isset($_SESSION['session_login_by_id'])){
header("location:home.php");
exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
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
	<!-- bagian tampilan well -->
	<div class='span12'>
	<div class='well'>
		<h4></h4>
		<p>
			<?PHP
			if (isset($_GET['nopen']) & isset($_GET['key'])){
				//dapatkan informasinya dulu
				$nopen = mysql_real_escape_string($_GET['namaibu']);
				$key_forgot = $_GET['key'];
				$sql =  mysql_query("select * from tb_psb_data where nopen='$nopen'");
				//cek idnya valid apa tidak (ada di database apa tidak)
				if (mysql_num_rows($sql)){ //jika idnya ada di db maka lanjutkan
					//mulai pengambilan data key_forgot yang ada di database
					$data = mysql_fetch_array($sql);
					$real_key_forgot = md5($data['key_forgot']);
					//mulai melakukan pemvalidasian key_forgot yang kirimkan dengan key_forgot yang ada di database
					if ($key_forgot == $real_key_forgot){
						//berhasil recover, maka lanjutkan ke proses pembuatan password baru
						//mulai html lagi
						echo "
						<form action='proses_recover.php' method='post'>
							Masukan Password Baru Untuk Akun Anda :
							<input type='password' name='password' class='span12' required/>
							<input type='hidden' name='nopen' value='$nopen'/>
							<button class='btn'>Perbarui Password</button>
						</form>
						";
					}else{ //jika keynya salah
						echo "Kode Konfirmasi Salah!";
					}
				}else{ //jika id tidak ada
					echo "Sorry, Access Forbiden For Nopen $nopen!";
				}
			}else{
				echo "Access Forbiden!";
				exit();
			}
			?>
		</p>
	</div>
	</div>
	<!-- akhir tampilan well -->
	<?PHP include("inc/footer.php"); ?>
</div>
</div>
</body>
</html>
