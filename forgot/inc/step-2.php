	<!-- bagian step 2 -> untuk pemroses tipe forgot password -->
	<div class='span12'>
	<div class='well'>
		<h4>Lupa Password</h4>
		<p>
		<form action='forgot.php' method='post'>
			<?PHP
			//di step ke 2 ini agak sedikit panjang karena menggunakan 2 tipe yakni
			//tipe 1 = kirim kode reset password ke email
			//tipe 2 = jawab pertanyaan rahasia
			//dapatkan tipenya dulu
			if (isset($_POST['tipe'])){ //jika parameter tipe terset alias tidak kosong maka lanjutkan
				$tipe = $_POST['tipe'];
			}else{ //jika tipenya tidak ada maka exit saja
				echo "Maaf, Terjadi Kesalahan!";
			}
			//lalu validasikan emailnya
			if (isset($_POST['nopen'])){
				$nopen = $_POST['nopen'];
				$sql_val = mysql_query("select * from tb_psb_data where nopen='$nopen'");
				if (mysql_num_rows($sql_val) != 0){ //jika query berdasarkan email ada di database maka lanjut
					//di sinilah proses pengambilan data pertanyaan dari database
					$datanya = mysql_fetch_array($sql_val);
					$namaibu = $datanya['namaibu'];
					$id_user = $datanya['nomor'];
					$key_forgot = md5($datanya['key_forgot']);
					//jika tipe forgot password == 2 maka saatnya kode html beraksi
					if ($tipe == 2){
						echo 
						"
						<form action='forgot.php' method='post'>
						<p>
						Pertanyaan :
						</br>
						<b>Siapa nama ibu anda?</b>
						</br>
						Masukan Jawaban Anda : (<i>Huruf Besar Dan Kecil Berpengaruh Dalam Pemvalidasian Jawaban</i>)
						<textarea name='namaibu' row='5' class='span12' required></textarea>
						<input type='hidden' name='step' value='3'>
						<input type='hidden' name='namaibu' value='$namaibu'>
						<button class='btn btn-primary'>Lanjut &rarr;</button>
						</p>
						</form>
						";
					}
					//akhir tipe 2
					
					//jika tipe forgot password == 1 maka send email ke user
					if ($tipe == 1){
						//isi detai emailnya dulu
						$from = $email_admin; //email pengirim
						$to = $nopen; //email tujuan
						$subject = "Recover Password Anda di akun Megasoft"; //subject atau judulnya
						$headers = "From:". strip_tags($from)."\r\n";
						//messagenya bisa html
						$message = "
						Anda Baru saja mengirimkan kode reset akun anda di megasoft dan untuk meresetnya anda dapat menggunakan link berikut ini. $my_link/recover.php?id=$id_user&key=$key_forgot
						";
						//mulai melakukan pengiriman email
						$send = mail($to, $subject, $message, $headers);
						if ($send){ //jika pengiriman email berhasil maka
							echo "Kode Reset nopen Anda Sudah Di Kirimkan ke nopen anda yakni <b>$nopen</b><br> silahkan cek di inbox nopen anda";
						}else{ //jika gagal
							echo "Gagal Mengirimkan Kode Reset password ke nopen anda";
						}
					}
					//akhir tipe 1
				}else{
					echo "Nopen tidak di temukan di database!";
				}
			}else{
				echo "Masukan Nopen Terlebih dahulu!";
			}
			//akhir validasi email
			?>
		</form>
		</p>
	</div>
	</div>