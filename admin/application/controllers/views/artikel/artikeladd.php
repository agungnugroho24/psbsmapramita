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
                                    <label>Judul :</label>                                        
                                    <input type="text" class="form-control" name="judul" value="<?php echo @$redit[0]['judul'] ?>" required/>
                                </div>

                                <div class="form-group">
                                    <label>Kategori :</label>                                        
                                    <select class="form-control" name="tipe" required/>
                                        <option value="1" <?php echo $this->allmod->activedata(1, @$redit[0]["id_kategori"], 'selected'); ?>>Berita Umum</option>
                                        <option value="2" <?php echo $this->allmod->activedata(2, @$redit[0]["id_kategori"], 'selected'); ?>>Berita Organisasi</option>
                                        <option value="5" <?php echo $this->allmod->activedata(3, @$redit[0]["id_kategori"], 'selected'); ?>>Berita Kegiatan</option>
                                    </select>
                                </div>

								<div class="form-group">
                                    <label>Deskripsi :</label>                                        
                                    	<textarea class="input-block-level" id="summernote" name="content" rows="18" style="width:100%"><?php echo @$redit[0]['isi'] ?></textarea>
                                </div>
								<div class="form-group">
                                    <label>Foto :</label>                                        
                                    <input id="uploadFile" placeholder="Choose File" readonly="readonly" name="datafile" style="padding:0px 5px;"  value="" />
									<div class="fileUploads btn btn-primary">
										<span>Upload</span>
										<input id="uploadBtn" type="file" class="upload" name="uploadfile" />
									</div>
                                </div>
                                                                                      
	                    </div>
	                    <div class="panel-footer clearfix">
                            <div class="pull-right"> <input type="hidden" value="1" name="submit" />
                                <button class="btn btn-info" type="submit"><i class="fa fa-check-square-o animated flip"></i> Simpan</button>                                        
                            </div>
							<div class="pull-right" style="margin-right:10px;">                                                                                    
                                <a href="<?php echo base_url()."admin/stockies/" ?>">
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