<div id="page-wrapper">
<div class="row">
    <div class="col-md-9">
        <div class="page-header" style="height:100px;">
            <h3 class="he<?php echo @$redit[0]["nama"] ?>ng pull-left"><i class="fa fa-list animated bounceIn"></i> Detail Data</h3>
        </div>
    </div>

    
    <!-- /.col-lg-12 -->
</div>

<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
                        <!-- /.panel-he<?php echo @$redit[0]["nama"] ?>ng -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <div style="overflow:hidden">
                            <img src="<?php echo base_url()."assets/images/logo-sd-it.png" ?>" style="width:100px;" align="left" />
                            <div align="center">
                                <h1 style="margin:0px;padding:0px;">PENDAFTARAN SISWA/I BARU</h1>
                                <h5 style="margin:0px;padding:0px;"><b>YAYASAN PENDIDIKAN DAN SOSIAL ISLAM TIARA AKSARA</b></h5>
                                JL. Haji Mujahidin Arafah Komplek TNI angkatan darat laut daya tengara timur tengah Selatan<br/>
                                No. Tlp : 092382423 / 023823823, Email : admin@tiaraaksara.com, Fax : 021-2923334
                                <hr style="border:2px solid #ccc;" />
                            </div>
                        </div>
                        <table style="width:100%">
                            <tr>
                                <td width="200">No. Pendaftaran</td>
                                <td width="20">:</td>
                                <td><?php echo @$redit[0]["nopen"] ?></td>
                            </tr>
                            <tr>
                                <td >Gelombang</td>
                                <td>:</td>
                                <td><?php echo @$redit[0]["gelombang"] ?></td>
                            </tr>
                        </table>
                        <br>
                        <table class="table table-hover" style="font-size:16px;">
                            <tr>
                                <td colspan="3" style="background:#ee6666;color:#fff;font-weight:bold;"> A. Data Siswa</td>
                            </tr>
                            <tr>
                                <td width="200">Nama Siswa/i</td>
                                <td width="20">:</td>
                                <td><?php echo @$redit[0]["nama"] ?></td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>:</td>
                                <td><?php echo @$redit[0]["jk"] ?></td>
                            </tr>
                            <tr>
                                <td>Tenpat, Tanggal Lahir</td>
                                <td>:</td>
                                <td><?php echo @$redit[0]["tempat_lahir"].", ".$redit[0]['tanggal_lahir'] ?></td>
                            </tr>
                            <tr>
                                <td>Bahasa Sehari-hari</td>
                                <td>:</td>
                                <td><?php echo @$redit[0]["bhs"] ?></td>
                            </tr>
                            <tr>
                                <td>No. STTB</td>
                                <td>:</td>
                                <td><?php echo @$redit[0]["no_sttb"] ?></td>
                            </tr>
                            <tr>
                                <td>Anak Ke</td>
                                <td>:</td>
                                <td><?php echo @$redit[0]["anak_ke"] ?></td>
                            </tr>
                            <tr>
                                <td>Kedudukan dalam keluarga</td>
                                <td>:</td>
                                <td><?php echo @$redit[0]["kdk"] ?></td>
                            </tr>
                            <tr>
                                <td>Jumlah Saudara</td>
                                <td>:</td>
                                <td><?php echo @$redit[0]["jumsau"] ?></td>
                            </tr>
                            <tr>
                                <td>Tinggal bersama</td>
                                <td>:</td>
                                <td><?php echo @$redit[0]["tglbrsama"] ?></td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>:</td>
                                <td><?php echo @$redit[0]["alamat"] ?></td>
                            </tr>
                            <tr>
                                <td>Jarak Sekolah</td>
                                <td>:</td>
                                <td><?php echo @$redit[0]["jarsek"] ?></td>
                            </tr>
                            <tr>
                                <td colspan="3" style="background:#ee6666;color:#fff;font-weight:bold;"> 
                                B. Data Orang Tua</td>
                            </tr>
                            <tr>
                                <td>Nama ayah</td>
                                <td>:</td>
                                <td><?php echo @$redit[0]["namaayah"] ?></td>
                            </tr>
                            <tr>
                                <td>Nama ibu</td>
                                <td>:</td>
                                <td><?php echo @$redit[0]["namaibu"] ?></td>
                            </tr>
                            <tr>
                                <td>Nama wali</td>
                                <td>:</td>
                                <td><?php echo @$redit[0]["namawali"] ?></td>
                            </tr>
                            <tr>
                                <td>Pendidikan Ayah</td>
                                <td>:</td>
                                <td><?php echo @$redit[0]["pendidikan_ayah"] ?></td>
                            </tr>
                            <tr>
                                <td>Pendidikan ibu</td>
                                <td>:</td>
                                <td><?php echo @$redit[0]["pendidikan_ibu"] ?></td>
                            </tr>
                            <tr>
                                <td>Pendidikan wali</td>
                                <td>:</td>
                                <td><?php echo @$redit[0]["pendidikan_wali"] ?></td>
                            </tr>
                            <tr>
                                <td>Pekerjaan Ayah</td>
                                <td>:</td>
                                <td><?php echo @$redit[0]["pekerjaan_ayah"] ?></td>
                            </tr>
                            <tr>
                                <td>Pekerjaan Ibu</td>
                                <td>:</td>
                                <td><?php echo @$redit[0]["pekerjaan_ibu"] ?></td>
                            </tr>
                            <tr>
                                <td>Pekerjaan Wali</td>
                                <td>:</td>
                                <td><?php echo @$redit[0]["pekerjaan_wali"] ?></td>
                            </tr>
                            <tr>
                                <td>Alamat Ayah</td>
                                <td>:</td>
                                <td><?php echo @$redit[0]["alamat_ayah"] ?></td>
                            </tr>
                            <tr>
                                <td>Alamat Ibu</td>
                                <td>:</td>
                                <td><?php echo @$redit[0]["alamat_Ibu"] ?></td>
                            </tr>
                            <tr>
                                <td>Alamat Wali</td>
                                <td>:</td>
                                <td><?php echo @$redit[0]["alamat_wali"] ?></td>
                            </tr>
                            <?php if(@$page==1 or @$page==2){ ?>
                            <tr>
                                <td colspan="3" style="background:#ee6666;color:#fff;font-weight:bold;"> 
                                Diisi Oleh Calon Siswa TPQ, TK  </td>
                            </tr>
                            <tr>
                                <td>Tanggal Pendaftaran</td>
                                <td>:</td>
                                <td><?php echo @$redit[0]["tdsd"] ?></td>
                            </tr>
                            <tr>
                                <td colspan="3">Darimanakah anda mengetahui PSB ONLINE YPSI - TIARA AKSARA : <b><?php echo @$redit[0]["polling_psb"] ?></b></td>
                                
                            </tr>
                            <?php } if(@$page==3){ ?>
                            <tr>
                                <td colspan="3" style="background:#ee6666;color:#fff;font-weight:bold;"> 
                                Diisi Oleh Calon Siswa SDIT</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>:</td>
                                <td><?php //echo @$redit[0]["nama"] ?></td>
                            </tr>
                            <tr>
                                <td colspan="3" style="background:#ee6666;color:#fff;font-weight:bold;"> 
                                Khusus Siswa Pindahan </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>:</td>
                                <td><?php //echo @$redit[0]["nama"] ?></td>
                            </tr>
                            <?php } if(@$page==4){ ?>
                            <tr>
                                <td colspan="3" style="background:#ee6666;color:#fff;font-weight:bold;"> 
                                Diisi Oleh Calon Siswa SMPIT </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>:</td>
                                <td><?php //echo @$redit[0]["nama"] ?></td>
                            </tr>
                            <?php } if(@$page==5){ ?>
                           <tr>
                                <td colspan="3" style="background:#ee6666;color:#fff;font-weight:bold;"> 
                                Diisi Oleh Calon Siswa SMK </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>:</td>
                                <td><?php //echo @$redit[0]["nama"] ?></td>
                            </tr>
                            <?php } ?>
                        </table>
                    </div>            
                </div>
                        <!-- /.panel-body -->
        </div>
                    <!-- /.panel -->
    </div>
                <!-- /.col-lg-12 -->
</div>