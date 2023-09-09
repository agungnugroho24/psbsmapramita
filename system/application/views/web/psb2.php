<style type="text/css">
	#isi-kanan{
		margin-top: 30px;
	}
	#isi-tengah{
		margin: 25px; width: 680px;
	}
	a{
		text-decoration: none;
		color: #666;
	}
	a:hover{
		color: #000;
	}
	#detail{
		width: auto;
	}
	.jk input[type='text'],input[type='password'],input[type='number']{
		border: 1px solid #ccc;
		padding: 5px;
		width: 100%;
	}
	.spk{
		background: #ccc;
		border: 1px solid #ccc;
		padding: 5px;
		cursor: pointer;
	}
	textarea{
		border: 1px solid #ccc;
		padding: 5px;
		width: 100%;
	}

</style>
<form action="" method="post">
<div id="isi-tengah">
<div class="title-berita"><?php echo @$gaga ?>
<input type="hidden" name="submit" value="1">
</div>
<div id="detail">

<table style="width:100%;" class="jk">
<?php
	if(@$dataid==2 or @$dataid==1){
?>
		<tr>
			<td bgcolor="red" colspan="3" style="text-align:left;padding:10px;background:#ee6666;"><font color="white"><strong style="">Diisi oleh calon siswa TPQ, TK dan SDIT </strong></font></td>
		</tr>
<tr><td><b>Tanggal Pendaftaran</b></td><td>:</td><td><input type="text" readonly="" id="tanggal" name="tdsd" class="sedang" value="<?php echo date("d-m-Y") ?>"></td></tr>
<?php } ?>
<?php
	if(@$dataid==2 or @$dataid==1){}else{
?>
<?php if(@$dataid==3){ ?>
	<tr>
		<td bgcolor="red" colspan="3" style="text-align:left;padding:10px;background:#ee6666;"><font color="white"><strong style="">Diisi oleh calon siswa SDIT </strong></font></td>
	</tr>
	<tr><td><b>Tanggal Pendaftaran</b></td><td>:</td><td><input type="text" readonly=""  id="tanggal" name="tdsd" class="sedang" value="<?php echo date("d-m-Y") ?>"></td></tr>
    <tr><td><b>Asal TK</b></td><td>:</td><td><input type="text" name="tk" class="sedang"></td></tr>
	<tr><td><b>Tanggal ijazah TK</b></td><td>:</td><td><input type="text" name="tglijazahtk" class="sedang"></td></tr>
		<tr>
		<td bgcolor="red" colspan="3" style="text-align:left;padding:10px;background:#ee6666;"><font color="white"><strong style="">Khusus siswa pindahan </strong></font></td>
	</tr>
	<tr><td><b>Pindahan dari SD</b></td><td>:</td><td><input type="text" name="pindahansd" class="sedang"></td></tr>
    <tr><td><b>No. surat pindah</b></td><td>:</td><td><input type="text" name="nosurat" class="sedang"></td></tr>
<?php } ?>
<?php if(@$dataid==4){ ?>
	<tr>
		<td bgcolor="red" colspan="3" style="text-align:left;padding:10px;background:#ee6666;"><font color="white"><strong style="">Diisi oleh calon siswa SMPIT</strong></font></td>
	</tr>
	<tr><td><b>Tanggal Pendaftaran</b></td><td>:</td><td><input type="text" name="diterima" class="sedang" value="<?php echo date("d-m-Y") ?>"></td></tr>
    <tr><td><b>Di kelas</b></td><td>:</td><td><input type="text" name="dikelas" class="sedang"></td></tr>
	<tr><td><b>Asal sekolah SD *</b></td><td>:</td><td><input type="text" name="asalsekolah" class="sedang"></td></tr>
	<tr><td><b>No. ijazah</b></td><td>:</td><td><input type="text" name="noijazah" class="sedang"></td></tr>
	<tr><td><b>Nilai STTB / NEM</b></td><td>:</td><td><input type="text" name="nilai" class="sedang"></td></tr>
					
<?php } ?>	
<?php if(@$dataid==5){ ?>
	<tr>
		<td bgcolor="red" colspan="3" style="text-align:left;padding:10px;background:#ee6666;"><font color="white"><strong style="">Diisi oleh calon siswa SMA</strong></font></td>
	</tr><br><br>
	<tr><td><b>Tanggal Pendaftaran</b></td><td>:</td><td><input type="text" name="diterima" class="sedang" value="<?php echo date("d-m-Y") ?>"></td></tr>
	<tr><td><b>Asal sekolah SMP *</b></td><td>:</td><td><input type="text" name="asalsekolah" class="sedang"></td></tr>
	<tr><td><b>No. ijazah</b></td><td>:</td><td><input type="text" name="noijazah" class="sedang"></td></tr>
	<tr><td><b>Nilai STTB / NEM</b></td><td>:</td><td><input type="text" name="nilai" class="sedang"></td></tr>
<?php } ?>	
<?php } ?>	

	<tr><td style="border: 1px dashed #5b5b5b; padding: 20px;background: #fcffea;" colspan="3" ><b>Darimanakah anda mengetahui Pendaftaran ONLINE <a href=""></a></b><br><br>
	<input type="radio" value="Media Cetak" id="polling" name="polling_psb">Media Cetak<br><br>
	<input type="radio" value="Internet" id="polling" name="polling_psb">Internet<br><br>
	<input type="radio" value="Teman" id="polling" name="polling_psb">Teman<br><br>
	<input type="radio" value="Kerabat" id="polling" name="polling_psb">Kerabat<br><br>
	</td></tr>
	<tr>
		<td colspan="3" style="text-align:right;">
			<input type="button" value="Kembali" class="spk" onclick="window.back(-1)">
			<input type="submit" value="Simpan & Daftarkan" class="spk">
		</td>
	</tr>
</table>

</div>
</div>


<div class="transfor" style="display:none">
	<table style="width:100%;" class="jk">
<tr>
			<td bgcolor="" colspan="3" style="text-align:left;padding:10px;background:#000066;"><font color="white">
				<strong style="">DATA SISWA</strong></font>
			</td>
		</tr>
	
	<tr>
		<td width="150px"><b>Kata sandi</b></td><td>:</td><td>
		<input type="password" placeholder="Terisi otomatis" readonly="" name="nopen" value="<?php echo $this->input->post("nopen") ?>" class="sedang">
		<input type="text" placeholder="Terisi otomatis" readonly="" name="gelombang" value="<?php echo $this->input->post("gelombang") ?>" class="sedang">
		<input type="password" id="password" name="password" class="sedang" value="<?php echo $this->input->post("password") ?>">
		<input type="password" id="password2" name="password2" class="sedang" value="<?php echo $this->input->post("password2") ?>"></td>
	</tr>

	<tr><td><b>Nama siswa *</b></td><td>:</td><td><input type="text" id="nama" name="nama" class="pendek" value="<?php echo $this->input->post("nama") ?>" onKeyPress="return goodchars(event,'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',this)"><br>
	<small></small></td></tr>
	<tr><td><b>Jenis Kelamin *</b></td><td>:</td><td>
	<input type="text" value="<?php echo $this->input->post("jk") ?>" id="jk" name="jk">
	</td></tr>
	<tr><td><b>Tempat lahir *</b></td><td>:</td><td><input type="text" name="tempat_lahir" class="panjang" value="<?php echo $this->input->post("tempat_lahir") ?>" onKeyPress="return goodchars(event,'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',this)"></td></tr>
	<tr><td><b>Tanggal lahir *</b></td><td>:</td><td><input type="text" id="tanggal" name="tanggal_lahir" class="panjang hasDatepicker" value="<?php echo $this->input->post("tanggal_lahir") ?>"></td></tr>
	<tr><td><b>Bahasa sehari - hari</b></td><td>:</td><td><input type="text" name="bhs" class="sedang" value="<?php echo $this->input->post("bhs") ?>" onKeyPress="return goodchars(event,'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',this)"></td></tr>
	<tr><td><b>No. STTB</b></td><td>:</td><td><input type="number" name="no_sttb" class="sedang" value="<?php echo $this->input->post("no_sttb") ?>"></td></tr>
	<tr><td><b>Anak ke</b></td><td>:</td><td><input type="text" class="sedang" name="anak_ke" value="<?php echo $this->input->post("anak_ke") ?>"></td></tr>
	<tr><td><b>Jumlah saudara</b></td><td>:</td><td><input type="number" name="jumsau" class="pendek" value="<?php echo $this->input->post("jumsau") ?>"></td></tr>
	<tr><td><b>Tinggal bersama</b></td><td>:</td><td><input type="text" name="tglbrsama" class="pendek" value="<?php echo $this->input->post("tglbrsama") ?> "onKeyPress="return goodchars(event,'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',this)"></td></tr>
	<tr><td><b>No. Tlp/Hp</b></td><td>:</td><td><input type="text" name="tlp" class="sedang" onKeyPress="return goodchars(event,'0123456789',this)" pattern="[0-9]{12,12}"  autocomplete="off"  maxlength="12" value="<?php echo $this->input->post("tlp") ?>"></td></tr>
	<tr><td><b>Alamat</b></td><td>:</td><td><textarea name="alamat" style="height: 125px"><?php echo $this->input->post("alamat") ?></textarea></td></tr>

			<tr>
			<td bgcolor="" colspan="3" style="text-align:left;padding:10px;background:#000066;color:#fff;">
				<strong style="">DATA ORANG TUA</strong></font>
			</td>
		</tr>
	<tr><td><b>Nama ayah</b></td><td>:</td><td><input type="text" name="namaayah" class="sedang" value="<?php echo $this->input->post("namaayah") ?>"onKeyPress="return goodchars(event,'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',this)"></td></tr>
	<tr><td><b>Nama ibu</b></td><td>:</td><td><input type="text" name="namaibu" class="sedang" value="<?php echo $this->input->post("namaibu") ?>" onKeyPress="return goodchars(event,'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',this)"></td></tr>
	<tr><td><b>Nama wali</b></td><td>:</td><td><input type="text" name="namawali" class="sedang" value="<?php echo $this->input->post("namawali") ?>"onKeyPress="return goodchars(event,'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',this)"></td></tr>
	<tr><td><b>Pendidikan Ayah</b></td><td>:</td><td>
			
		<input type="text" value="<?php echo $this->input->post("pendidikan_ayah") ?>" id="jk" name="pendidikan_ayah">
	</td></tr>
	<tr><td><b>Pendidikan ibu</b></td><td>:</td><td>
			<input type="text" value="<?php echo $this->input->post("pendidikan_ibu") ?>" id="jk" name="pendidikan_ibu">
	</td></tr>
	<tr><td><b>Pendidikan wali</b></td><td>:</td><td>
			<input type="text" value="<?php echo $this->input->post("pendidikan_wali") ?>" id="jk" name="pendidikan_wali">
	</td></tr>
	<tr><td><b>Pekerjaan Ayah</b></td><td>:</td><td>
			<input type="text" value="<?php echo $this->input->post("pekerjaan_ayah") ?>" id="jk" name="pekerjaan_ayah">
	</td></tr>
	<tr><td><b>Pekerjaan Ibu</b></td><td>:</td><td>
			<input type="text" value="<?php echo $this->input->post("pekerjaan_ibu") ?>" id="jk" name="pekerjaan_ibu">
	</td></tr>
	<tr><td><b>Pekerjaan Wali</b></td><td>:</td><td>
			<input type="text" value="<?php echo $this->input->post("pekerjaan_ibu") ?>" id="jk" name="pekerjaan_wali">
	</td></tr>
	<tr><td><b>No Tlp Orang tua</b></td><td>:</td><td><input type="text" name="tlportu" class="sedang" onKeyPress="return goodchars(event,'0123456789',this)" pattern="[0-9]{12,12}"  autocomplete="off"  maxlength="12" value="<?php echo $this->input->post("tlportu") ?>"></td></tr>
	<tr><td><b>Alamat ayah</b></td><td>:</td><td><input type="text" name="alamat_ayah" class="sedang" value="<?php echo $this->input->post("alamat_ayah") ?>"></td></tr>
	<tr><td><b>Alamat ibu</b></td><td>:</td><td><input type="text" name="alamat_ibu" class="sedang" value="<?php echo $this->input->post("alamat_ibu") ?>"></td></tr>
	<tr><td><b>Alamat wali</b></td><td>:</td><td><input type="text" name="alamat_wali" class="sedang" value="<?php echo $this->input->post("alamat_wali") ?>" ></td></tr> 
	
</table>
</div>
</form>