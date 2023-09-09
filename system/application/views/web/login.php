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
	#detail input[type='text'],input[type='password']{
		width: auto;
		border:1px solid #ccc;
		padding: 5px;
	}

</style>
<script languange="javascript">
function test(s, p) {
		s = s.nodeType == 1 ? s.value : s;
		return s == '' || new RegExp(p).test(s);
}
function isEmail(s) {
		return test(s, '^[-!#$%&\'*+\\./0-9=?A-Z^_`a-z{|}~]+@[-!#$%&\'*+\\/0-9=?A-Z^_`a-z{|}~]+\.[-!#$%&\'*+\\./0-9=?A-Z^_`a-z{|}~]+$');
	}
function CekEmail(txt, alertid){
	var input = txt.value;
	var benar = isEmail(input);
	if(input=='')
		benar=false;
  	if(benar) { 
  		document.getElementById(alertid).style.display='none';
  		document.frmguestbook.simpan.disabled=false;
  	} else {
  		document.getElementById(alertid).style.display='';
  		document.frmguestbook.simpan.disabled=true;
  	}
}
function CekNama(txt, alertid) {
	var input = txt.value;
	var benar = false;
	if(input!='')
		benar=true;
	if(benar) { 
  		document.getElementById(alertid).style.display='none';
  		document.frmguestbook.simpan.disabled=false;
  	} else {
  		document.getElementById(alertid).style.display='';
  		document.frmguestbook.simpan.disabled=true;
  	}
}
function CekPesan(txt, alertid) {
	var input = txt.value;
	var benar = false;
	if(input!='')
		benar=true;
	if(benar) { 
  		document.getElementById(alertid).style.display='none';
  		document.frmguestbook.simpan.disabled=false;
  	} else {
  		document.getElementById(alertid).style.display='';
  		document.frmguestbook.simpan.disabled=true;
  	}
}
function dissabledButton() {
	document.frmguestbook.simpan.disabled=true;
}
window.onload = dissabledButton;
</script>
<div id="isi-tengah">
<div id="title-guestbook">Login Calon Siswa</div>
<div id="detail">
<form method="post" name="frmguestbook" action="<?php echo base_url(); ?>index.php/login">
<table style="border:1px dashed #999999; padding-left:10px;">
<tr><td width="100">No. Pendaftaran</td><td width="20">:</td><td><input class="input" name="nama" type="text" value="" size="50"  onchange="javascript:CekNama(this, 'alertnama');" onblur="javascript:CekNama(this, 'alertnama');">
 <div id="alertnama" style="display:none; width:360px;">No Pendaftaran tidak diijinkan kosong</div></td></tr>
<tr><td>Password</td><td>:</td><td><input class="input" id="asd" name="paswd" type="password" value="" size="50" >
 <div id="alertemail" style="display:none; ;width:360px;">Password anda tidak valid!</div></td></tr>
 							<tr>
							<td>
                                <a href="../../forgot/forgot.php"><b>Lupa password</b></a>
                            </td>
							</tr>

<tr><td valign="top"></td><td valign="top"></td><td>
<input type="submit" value="Login" class="poll" name="simpan" /> 
</td></tr>
<tr><td colspan="3"><br />
<!--<li class="li-class">Maaf pesan anda tidak langsung kami tampilkan karena pesan tersebut masih perlu kami administrasi terlebih dahulu.</li>
<li class="li-class">Terimakasih atas Anda telah mengisikan buku tamu pada web site kami</li>.</td></tr>-->
</table>
</form>
</div>
</div>