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
	<!-- bagian login -->
	<div class='span5'>
	<div class='well'>
		<h4>Masuk/Login</h4>
		<p>
		<form action='proses_masuk.php' method='post'> <!-- aksinya ke proses_masuk.php -->
		<label>Email</label>
		<input type='text' name='email' class='span12' required/>
		<label>Password</label>
		<input type='password' name='pswd' class='span12' required/>
		<button class='btn btn-primary'>Masuk</button>
		<a href='forgot.php' class='pull-right'>Lupa Password?</a>
		</form>
		</p>
	</div>
	</div>
	<!-- akhir login -->
	
	<!-- bagian register -->
	<div class='span7'>
	<div class='well'>
		<h4>Daftar/Register</h4>
		<p>
		<form action='proses_daftar.php' method='post'> <!-- aksinya ke proses_daftar.php -->
		<label>Nama</label>
		<input type='text' name='nama' class='span12' required/>
		<label>Email</label>
		<input type='text' name='email' class='span12' required/>
		<label>Pertanyaan Rahasia (<i>untuk merecover password, jika anda lupa password anda</i>)</label>
		<select name='pertanyaan' class='span12'>
			<option>Siapa Nama Ayah Anda?</option>
			<option>Siapa Nama Ibu Anda?</option>
			<option>Apa Nama Hewan Peliharaan Anda?</option>
			<option>Apa Makanan Kesukaan Anda?</option>
			<option>Apa Hobi Anda?</option>
			<option>Apa Nama Sekolah Pertama Anda?</option>
			<option>Siapa Nama Pacar Pertama Anda?</option>
		</select>
		<label>Jawaban (<i>Dari Pertanyaan Di atas</i>)</label>
		<textarea name='jawaban' class='span12' required></textarea>
		<label>Password</label>
		<input type='password' name='pswd' class='span12' required/>
		<button class='btn btn-primary'><i class='icon icon-white icon-user'></i> Daftar</button>
		</form>
		</p>
	</div>
	</div>
	<!-- akhir register -->
	
</div>
</div>
</body>
</html>