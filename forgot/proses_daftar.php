<?PHP
include("config.php");
if (isset($_POST['email'])){ //jika parameter email tidak kosong maka lanjutkan
	//mengambil data yang di kirimkan
	$email = $_POST['email'];
	$nama = $_POST['nama'];
	$pertanyaan = $_POST['pertanyaan'];
	$jawaban = $_POST['jawaban'];
	$password = md5($_POST['pswd']); //password di encrypt menggunakan md5
	//membuat key forgot
	$angka_acak = rand(0, 10000); //mendapatkan angka secra acak mulai dari 0 sampai 10.000
	$key_forgot = "$password-$email-$angka_acak";
	//sebelum melakukan pemasukan data ke database ada baiknya cek emailnya dulu sudah ada di database apa belum
	//pengecekan email di database
	$sql_cek_email = mysql_query("select * from users where email='$email'");
	if (mysql_num_rows($sql_cek_email) != 0){ //jika email di temukan di database maka akhiri
	echo "Email Yang anda gunakan sudah ada di database, harap gunakan email yang lainya<p><a href='index.php'>Kembali</a>";
	exit(); //akhiri cukup sampai di sini
	}
	//lakukan pemasukan data ke database
	$sql_daftar = mysql_query("insert into users values('', '$nama', '$password', '$email', '$pertanyaan', '$jawaban', '$key_forgot')");
	if ($sql_daftar){ //jika proses pendaftaran berhasil maka lanjutkan
		echo "Sukses Membuat akun baru dengan nama : <b>$nama</b> dan email : <b>$email</b><p>Klik di <a href='index.php'>sini</a> untuk login";
	}else{
		echo "Something Wrong :( <br><b>". mysql_error();
	}
}else{ //jika parameter email kosong maka akhiri
	echo "Access Forbiden!";
}
?>