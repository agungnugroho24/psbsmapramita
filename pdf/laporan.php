
<?php
set_include_path(get_include_path() . PATH_SEPARATOR . "/path/to/dompdf");
 
require_once "dompdf_config.inc.php";
 
$dompdf = new DOMPDF();
 
?>
 
 <?php
 $today = date("d-M-Y");
 $in = mysql_connect("localhost","root","");
 $q = mysql_select_db("sekolahan",$in);
 
if(!isset($_GET["s"])){
	$qu = mysql_query("select * from tb_psb_data ");
}
else{
	if(@$_GET["s"]=="sudah"){
		$qu = mysql_query("select * from tb_psb_data WHERE status_pembayaran='Lunas' ");
	}
	else if(@$_GET["s"]=="belum"){
		$qu = mysql_query("select * from tb_psb_data WHERE status_pembayaran='Belum Bayar' ");
	}
	else{
		$qu = mysql_query("select * from tb_psb_data ");
	}
}

$html=' <style>
	table{
		border-collapse:collapse;
	}
	table tr th,table tr td {
		border:1px solid #ccc;
	}
</style><div style="overflow:hidden">

                            <div align="center">
							
                                <h1 style="margin:0px;padding:0px;">PENDAFTARAN SISWA/I BARU</h1>
                                <h5 style="margin:0px;padding:0px;"><b>YAYASAN PENDIDIKAN DAN SOSIAL ISLAM TIARA AKSARA</b></h5>
                                <img align="left" style="width:80px; " src="../admin/assets/images/logo-sd-it.png">JL. Haji Mujahidin Arafah Komplek TNI angkatan darat laut daya tengara timur tengah Selatan<br>
                                No. Tlp : 092382423 / 023823823, Email : admin@tiaraaksara.com, Fax : 021-2923334
                                <hr style="border:2px solid #ccc;">
								
                            </div>
</div>';

$html.='<table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No Pendaftaran</th>
                                            <th>Nama Siswa/i</th>
                                            <th>Kelamin</th>
                                            <th>Nama Ayah/Ibu/Wali</th>
                                            <th>No.Telp</th>
                                            <th>Tgl. Pendaftaran</th>
                                            <th>Pembayaran</th>
                                        </tr>
                                    </thead>
                                    <tbody>';
while($m = mysql_fetch_assoc($qu)){ 
                                       $html.=' <tr>
                                            <td>'.$m["nopen"].'</td>
                                            <td>'.$m["nama"].'</td>
                                            <td>'.$m["jk"].'</td>
                                            <td>'.$m["namaayah"]." / ".$m["namaibu"].'</td>
                                            <td>'.$m["tlp"].'</td>
                                            <td>'.$m["tdsd"].'</td>
                                            <td>'.$m["status_pembayaran"].'</td>
                                            
                                        </tr>';
    } 
   $html.='</tbody>
    
    <div align="center">
	<br><br><br><br><br>					
     <table>
	
	<tr>
	<td>
    Tangerang,
	</td>
	</tr>
	<tr>
	<td align="center">
	Kepala sekolah
	</td>
	</tr>
	<tr>
	<td><br><br><br><br>
	____________________
	</td>
	</tr>
	</table>
		<table style="margin-left:390px; margin-top:-120px;">
	<tr>
	<td align="center">
	Petugas
	</td>
	</tr>
	<tr>
	<td><br><br><br><br>
	____________________
	</td>
	</tr>
	</table>
								
                            </div>
   </table>'; 
?>

<?php
$dompdf->load_html($html);
$dompdf->render();
$rand = rand();
$dompdf->stream("laporan_".$rand.".pdf");
?>