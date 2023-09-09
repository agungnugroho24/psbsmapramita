<div id="page-wrapper">
<div class="row">
    <div class="page-header" style="height:100px;">
        <h3 class="heading pull-left"><i class="fa fa-pencil-square-o animated flip"></i> <?php echo @$headtit; ?>  </h3>
        
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
 <div class="row">
            	<div class="col-md-12">
            		<div class="panel panel-default">
            			<div class="panel-heading">
            				<?php echo @$headtit; ?>
            			</div>
						<?php echo @$valid; ?>
            			<div class="panel-body">
	            			<form id="validate2" method="POST" action="" novalidate="novalidate" enctype="multipart/form-data" >
                            
                                <div class="form-group">
                                    <label>Nama Guru :</label>                                        
                                    <input type="text" class="form-control" name="judul" value="<?php echo @$redit[0]["nama_gurustaff"] ?>" required/>
                                </div>
                                <div class="form-group">
                                    <label>Jenis Kelamin :</label>                                        
                                    <input type="radio" value="L" name="jk">Laki-laki&nbsp;
                                    <input type="radio" value="P" name="jk">Perempuan
                                </div>
                                <div class="form-group">
                                    <label>No. Telp :</label>                                        
                                    <input type="text" class="form-control" name="tlp" value="<?php echo @$redit[0]["telepon"] ?>" required maxlength="12" />
                                </div>
                                <div class="form-group">
                                    <label>Email :</label>                                        
                                    <input type="text" class="form-control" name="email" value="<?php echo @$redit[0]["email"] ?>" required  />
                                </div>
                                <div class="form-group">
                                    <label>Mengajar :</label>
                                    <select class="form-control" name="jenjangs">
                                        <?php  foreach ($datajenjang as $key => $value) { ?>
                                            <option <?php echo $this->allmod->activedata(@$value["idmatpel"],@$redit[0]["idmatpel"],"selected") ?> value="<?php echo @$value["idmatpel"] ?>"><?php echo @$value["matpel"] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Status Perkawinan :</label>                                        
                                    <select name="status_kawin" class="form-control">
                                        <option selected="" value="">Pilih status</option>
                                        <option value="Menikah">Menikah</option>
                                        <option value="Belum Menikah">Belum menikah</option>
                                        <option value="Duda">Duda</option>
                                        <option value="Janda">Janda</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Posisi :</label>                                        
                                    <select name="posisi" class="form-control">
                                        <option selected="" value="">Pilih Posisi</option>
                                        <option value="guru">Guru</option>
                                        <option value="Staff">Staff</option>
                                    </select>
                                </div>
								
								<!--<div class="form-group">
                                    <label>Foto Guru :</label> 
                                    <br/>                                     
                                    <input id="uploadFile" placeholder="Choose File" readonly="readonly" name="datafile" style="padding:0px 5px;"  value="" />
									<div class="fileUploads btn btn-primary">
										<span>Upload</span>
										<input id="uploadBtn" type="file" class="upload" name="uploadfile" />
									</div>
                                </div>-->
                                                                                      
	                    </div>
	                    <div class="panel-footer clearfix">
                            <div class="pull-right"> <input type="hidden" value="1" name="submit" />
                                <button class="btn btn-info" type="submit"><i class="fa fa-check-square-o animated flip"></i> Simpan</button>                                        
                            </div>
							<div class="pull-right" style="margin-right:10px;">                                                                                    
                                <a href="<?php echo base_url()."guru/dataguru/" ?>">
                                <button class="btn btn-success" type="button"><i class="fa fa-mail-reply animated flip"></i> Kembali</button>                                        
                                </a>
                            </div>
                        </div>
                        </form>
	                </div>
            	</div>
            </div>


 </div>
        <!-- /#page-wrapper -->

     

      
   