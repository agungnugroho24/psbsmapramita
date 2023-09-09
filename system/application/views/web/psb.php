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
	<link type="text/css" href="<?php echo base_url(); ?>system/application/views/web/css/base/ui.all.css" rel="stylesheet" />   
    <script type="text/javascript" src="<?php echo base_url(); ?>system/application/views/web/js/ui/ui.core.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>system/application/views/web/js/ui/ui.datepicker.js"></script>

<script type="text/javascript"> 
      $(document).ready(function(){
        $("#tanggal").datepicker({
		dateFormat  : "yy-mm-dd", 
          changeMonth : true,
          changeYear  : true
		  
        });
      });
      $(document).ready(function(){
        $("#tanggal1").datepicker({
		dateFormat  : "yy-mm-dd", 
          changeMonth : true,
          changeYear  : true
		  
        });
      });
    </script>
<script language="javascript">
function getkey(e)
{
if (window.event)
   return window.event.keyCode;
else if (e)
   return e.which;
else
   return null;
}
function goodchars(e, goods, field)
{
var key, keychar;
key = getkey(e);
if (key == null) return true;
 
keychar = String.fromCharCode(key);
keychar = keychar.toLowerCase();
goods = goods.toLowerCase();
 
// check goodkeys
if (goods.indexOf(keychar) != -1)
    return true;
// control keys
if ( key==null || key==0 || key==8 || key==9 || key==27 )
   return true;
    
if (key == 13) {
    var i;
    for (i = 0; i < field.form.elements.length; i++)
        if (field == field.form.elements[i])
            break;
    i = (i + 1) % field.form.elements.length;
    field.form.elements[i].focus();
    return false;
    };
// else return false
return false;
}
</script>
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
<div id="isi-tengah">
<div class="title-berita"><?php echo @$gaga ?></div>
<div id="detail">
<?php if(@$cekaktifPSB==0){
	echo "<h1>MAAF PENDAFTARAN BELUM DI BUKA,</h1>";

}else{ ?>
<h3>Gelombang <?php echo @$cekaktifPSB; ?></h3>
<input type="hidden" value="<?php echo @$cekaktifPSB; ?>" name="gelombang">
<?php
date_default_timezone_set('Asia/Jakarta');
					$today = date("Ymd");
					$today = date("H:i:s");
					$id_daftar=$dataid.date("y");	
/*pertama kita panggil colom yang akan kita gunakan untuk ID kita dengan menyaring nilai maksimum */
$sql ="SELECT max(nopen) as terakhir from tb_psb_data";
//mengecek hasil atau value yang dihasilkan dari query yang disimpan pada variable sql 
  $hasil = mysql_query($sql);
//memecah table hasil query
  $data = mysql_fetch_array($hasil);
//mengambil cell atau 1 kotak bagian dari table yaitu cell id_anggota yang dialiaskan terakhir
  $lastID = $data['terakhir'];
  // baca nomor urut  id transaksi terakhir
 $lastNoUrut = substr($lastID, 3, 9);
  // nomor urut ditambah 1
  $nextNoUrut = $lastNoUrut + 1;
  // membuat format nomor berikutnya
  $nextID = $id_daftar.sprintf("%03s",$nextNoUrut);					
?>
<form action="<?php echo base_url()."index.php/psb/daftar/".$dataid."/2" ?>" method="post">
<table style="width:100%;" class="jk">
<tr>
			<td bgcolor="" colspan="3" style="text-align:left;padding:10px;background:#000066;"><font color="white">
				<strong style="">DATA SISWA</strong></font>
			</td>
		</tr>
	<tr>
		<td width="230px"><b>No. Pendaftaran<font color='red'> *) Harap diingat</font></b></td>
		<td>:</td>
		<td> <span style="font-size:15px;"><?php echo @$nextID; ?> </span>
		<input type="hidden" placeholder="Terisi otomatis" readonly="" name="nopen" value="<?php echo @$nextID; ?>" class="sedang"></td>
	</tr><br><br>
	<tr>
		<td width="150px"><b>Kata sandi</b></td><td>:</td><td><input type="password" name="password" id="password" class="panjang" required></td>
	</tr>
	<tr>
		<td width="150px"><b>Konfirmasi Kata sandi</b></td><td>:</td><td><input type="password" name="password2" id="password2" class="panjang" required onkeyup="checkPass(); return false;">
		<span id="confirmMessage" class="confirmMessage"></span>
		</td>
	</tr>
	<tr><td><b>Nama siswa *</b></td><td>:</td><td><input type="text" id="nama" name="nama" class="pendek" required onKeyPress="return goodchars(event,'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ',this)"><br></td></tr>
	<tr><td><b>Jenis Kelamin *</b></td><td>:</td><td>
	<input type="radio" value="L" id="jk" name="jk">Laki-laki&nbsp;
	<input type="radio" value="P" id="jk" name="jk">Perempuan
	</td></tr>
	<tr><td><b>Tempat lahir *</b></td><td>:</td><td><input type="text" name="tempat_lahir" class="panjang" required onKeyPress="return goodchars(event,'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ',this)"></td></tr>
	<tr><td><b>Tanggal lahir *</b></td><td>:</td><td><input type="text" id="tanggal" name="tanggal_lahir" class="sedang" required></td></tr>
	<tr><td><b>Bahasa sehari - hari</b></td><td>:</td><td><input type="text" name="bhs" class="sedang" onKeyPress="return goodchars(event,'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ',this)"></td></tr>
	<tr><td><b>No. STTB</b></td><td>:</td><td><input type="text" name="no_sttb" class="sedang" onKeyPress="return goodchars(event,'0123456789',this)"></td></tr>
	<tr><td><b>Anak ke</b></td><td>:</td><td><input type="text" class="sedang" name="anak_ke" onKeyPress="return goodchars(event,'0123456789',this)" maxlength="2"></td></tr>
	<tr><td><b>Jumlah saudara</b></td><td>:</td><td><input type="text" name="jumsau" class="pendek" onKeyPress="return goodchars(event,'0123456789',this)" maxlength="2" required></td></tr>
	<tr><td><b>Tinggal bersama</b></td><td>:</td><td><input type="text" name="tglbrsama" class="pendek" required onKeyPress="return goodchars(event,'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ',this)"></td></tr>
	<tr><td><b>No. Tlp/Hp</b></td><td>:</td><td><input type="text" name="tlp" class="sedang" onKeyPress="return goodchars(event,'0123456789',this)" pattern="[0-9]{12,12}"  autocomplete="off"  maxlength="12"></td></tr>
	<tr><td><b>Alamat</b></td><td>:</td><td><textarea name="alamat" style="height: 125px" required></textarea></td></tr>
			<tr>
			<td bgcolor="" colspan="3" style="text-align:left;padding:10px;background:#000066;color:#fff">
				<strong style="">DATA ORANG TUA</strong></font>
			</td>
		</tr>
	<tr><td><b>Nama ayah</b></td><td>:</td><td><input type="text" name="namaayah" class="sedang" onKeyPress="return goodchars(event,'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ',this)"></td></tr>
	<tr><td><b>Pendidikan Ayah</b></td><td>:</td><td>
			<select name="pendidikan_ayah">
				<option selected="" value="">Pilih pendidikan</option>
				<option value="SD">SD</option>
				<option value="SMP">SMP</option>
				<option value="SMA/SMK">SMA/SMK</option>
				<option value="D3/S1">D3/S1</option>
			</select>
	</td></tr>
	<tr><td><b>Pekerjaan Ayah</b></td><td>:</td><td>
			<select name="pekerjaan_ayah">
				<option selected="" value="">Pilih pekerjaan</option>
				<option value="Peg. Swasta">Peg. Swasta</option>
				<option value="Peg. Negeri">Peg. Negeri</option>
				<option value="Wiraswasta">Wiraswasta</option>
			</select>
	</td></tr>
	<tr><td><b>Alamat ayah</b></td><td>:</td><td><input type="text" name="alamat_ayah" class="sedang" onKeyPress="return goodchars(event,'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ',this)"></td></tr>
	<tr><td><b>Nama ibu</b></td><td>:</td><td><input type="text" name="namaibu" class="sedang" onKeyPress="return goodchars(event,'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ',this)"></td></tr>
	<tr><td><b>Pendidikan ibu</b></td><td>:</td><td>
			<select name="pendidikan_ibu">
				<option selected="" value="">Pilih pendidikan</option>
				<option value="SD">SD</option>
				<option value="SMP">SMP</option>
				<option value="SMA/SMK">SMA/SMK</option>
				<option value="D3/S1">D3/S1</option>
			</select>
	</td></tr>
	<tr><td><b>Pekerjaan Ibu</b></td><td>:</td><td>
			<select name="pekerjaan_ibu">
				<option selected="" value="">Pilih pekerjaan</option>
				<option value="Peg. Swasta">Peg. Swasta</option>
				<option value="Peg. Negeri">Peg. Negeri</option>
				<option value="Ibu RT">Ibu RT</option>
			</select>
	</td></tr>
		<td width="150px"><b>No Tlp Orang tua</b></td><td>:</td><td><input type="text" name="tlportu" id="tlportu" class="sedang" required  onKeyPress="return goodchars(event,'0123456789',this)" pattern="[0-9]{12,12}"  autocomplete="off"  maxlength="12"  ></td>
	</tr>
	<tr><td><b>Alamat ibu</b></td><td>:</td><td><input type="text" name="alamat_ibu" class="sedang" onKeyPress="return goodchars(event,'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ',this)"></td></tr>
	<tr>
		<td colspan="3" style="text-align:right;">
			<input type="submit" value="Selanjutnya" class="spk">
		</td>
	</tr>
</table>
</form>
<?php } ?>

</div>
</div>
