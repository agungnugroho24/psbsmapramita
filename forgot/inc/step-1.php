	<!-- bagian step 1 -> untuk pemilihan tipe forgot password -->
	<div class='span12'>
	<div class='well'>

	<h4>Lupa Password || <a href='../index.php'>Kembali</a></h4>
		<p>
		<form action='forgot.php' method='post'>
		<label>Pilih Tipe</label>
		<select name='tipe' class='span12'>
			<option value='2'>Gunakan Pertanyaan Rahasia Saya</option>
		</select>
		<label>Masukan Nomor pendaftaran Anda</label>
		<input type='text' name='nopen' class='span12' required>
		<input type='hidden' name='step' value='2'> <!-- untuk step 2 selanjutnya -->
		<input type='submit' value='Lanjut &rarr;' class='btn btn-primary'>
		</form>
		</p>
	</div>
	</div>