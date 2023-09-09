	<!-- bagian step 3 -> untuk melakukan validasi dari jawaban yang di masukan user -->
	<div class='span12'>
	<div class='well'>
		<h4>Lupa Password</h4>
		<p>
			<?PHP
			if (isset($_POST['step']) & isset($_POST['nopen'])){ //jika parameter step dan email tidak kosong maka lanjutkan
				$step = $_POST['step'];
				$nopen = $_POST['nopen'];
				//pengambilan data jawaban yang di tuliskan user
				$jawaban = $_POST['namaibu'];
					//mulai melakukan validasi jawaban
					$sql = mysql_query("select * from tb_psb_data where nopen='$nopen'");
					$datanya = mysql_fetch_array($sql);
					$jawaban_di_database = $datanya['jawaban']; //mengambil jawaban asli si user dari database
					$key = md5($datanya['key_forgot']); //mengambil key forgot user dari database
					$id_user = $datanya['nomor'];
					if ($jawaban == $jawaban_di_database){ //jika jawaban antara yang di masukan di step 2 dan jawaban di database sama maka lanjutkan
						echo "Berhasil Melakukan Recover Password Anda, Klik link Berikut ini untuk merecover password anda!<p><a href='recover.php?nomor=$id_user&key=$key'>$my_link/recover.php?nomor=$id_user&key=$key</a>";
					}else{ //jika jawaban salah
						echo "Jawaban Dari Pertanyaan Rahasia Anda Salah!";
					}
					//akhir validasi
			}else{ //jika parameter email dan step kosong maka
				echo "Gagal Karna Step Dan Nopen Tidak Valid!";
			}
			
			?>
		</p>
	</div>
	</div>