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
                                    <label>Album :</label>                                        
                                    <select class="form-control" name="album"  required >
                                        <?php foreach ($albums as $key => $value) { ?>
                                            <option value="<?php echo @$value["id_album"] ?>"><?php echo @$value["nama_album"] ?></option>
                                        <?php } ?>
                                    </select>
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
                                <a href="<?php echo base_url()."gallery" ?>">
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

     

      
   