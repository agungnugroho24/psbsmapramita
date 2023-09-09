<!DOCTYPE html>
<html>

<head>
<title>Lupa password</title>
<meta name='Author' content='Dewa'/>
<meta name='Description' content='PHP Mysql Forgot Password'/>
<link rel='stylesheet' type='text/css' href='bootstrap/bootstrap.css'/>
<link rel='stylesheet' type='text/css' href='bootstrap/megasoft.css'/>
<script src="js/jquery.min.js"></script>
<script language="javascript">
function checkPass()
{
    //Store the password field objects into variables ...
    var password = document.getElementById('password');
    var password2 = document.getElementById('password2');
    //Store the Confimation Message Object ...
    var message = document.getElementById('confirmMessage');
    //Set the colors we will be using ...
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    //Compare the values in the password field 
    //and the confirmation field
    if(password.value == password2.value){
        //The passwords match. 
        //Set the color to the good color and inform
        //the user that they have entered the correct password 
        password2.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Passwords Sama!"
    }else{
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
        password2.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Passwords Tidak Sama!"
    }
}  
</script>
</head>
<body>
<?php
// show all errors and warning
  ini_set('display_errors', 0);
  error_reporting(E_ALL);

$server = 'localhost';
$user_db = 'root';
$password_db = '';
$nama_db = 'sekolahan';
 
 
session_start(); //kuncinya ada disini, tulis diawal script sebelum menulis yang lain
 
/* Koneksi database*/
mysql_connect( $server, $user_db, $password_db ) or die( mysql_error() );
mysql_select_db( $nama_db ) or die( mysql_error() );

if (isset($_POST['nopen']))
{ 
  $id = mysql_real_escape_string($_POST['nopen']);
  $update= mysql_real_escape_string($_POST['password']);
  $update2= mysql_real_escape_string($_POST['password2']);

  $sql = mysql_query("UPDATE tb_psb_data SET password = '$update', password2 = '$update2' WHERE nopen='$id'");
if(! $sql )
{
  die('Password salah: ' . mysql_error());
}
echo "<script>window.alert('Password Berhasil Diganti');
        window.location=('../index.php/psb/login')</script>";;
}
?>
<div class='container-fluid' style='margin-top:20px;'>
	<?PHP include("inc/navbar.php"); ?>
<div class='row-fluid'>
	<div class='well'>

	<h4>Lupa Password </h4>
		<p>
		<form method="post" action="<?php $_PHP_SELF ?>">
		<label>Masukkan no. pendaftaran</label>
		<input type='text' name='nopen' id="nopen" class='span12' required>
		<label>Password baru</label>
		<input type='password' name='password' id="password" class='span12' required>
        <label>Konfirmasi password</label>
		<input type="password" name="password2" id="password2" class="panjang" required onkeyup="checkPass(); return false;">
		<span id="confirmMessage" class="confirmMessage"></span><br>
		<input type='submit' value='Reset' id="update" class='btn btn-primary'>
		<button type='button' value='Back' class='btn btn-primary' ><a href='../index.php/psb/login'><font color="#fff">Kembali</font></a></button>
		</form>
		</p>
	</div>
</div>
</div>
</body>
</html>