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
                                    <label>Keterangan :</label>                                        
                                    <select name="judul" class="form-control">
                                        <option selected="" value="">Pilih Gelombang</option>
                                        <option value="Biaya Bangunan" <?php echo $this->allmod->activedata("Biaya Bangunan", @$redit[0]['ket'], 'selected'); ?>>Biaya Bangunan</option>
                                        <option value="Biaya SPP" <?php echo $this->allmod->activedata("Biaya SPP", @$redit[0]['ket'], 'selected'); ?>>Biaya SPP</option>
                                        <option value="Biaya Seragam" <?php echo $this->allmod->activedata("Biaya Seragam", @$redit[0]['ket'], 'selected'); ?>>Biaya Seragam</option>
                                        <option value="Biaya Penyelenggaraan Pendidikan (BPP)" <?php echo $this->allmod->activedata("Biaya Penyelenggaraan Pendidikan (BPP)", @$redit[0]['ket'], 'selected'); ?>>Biaya Penyelenggaraan Pendidikan (BPP)</option>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label>Biaya :</label>                                        
                                    <input type="text" class="form-control" name="biaya" value="<?php echo @$redit[0]["biaya"] ?>" required  />
                                </div>
                                
                                <div class="form-group">
                                    <label>Gelombang :</label>                                        
                                    <select name="gelombang" class="form-control">
                                        <option selected="" value="">Pilih Gelombang</option>
                                        <option value="1" <?php echo $this->allmod->activedata(1, @$redit[0]['gelombang'], 'selected'); ?>>1</option>
                                        <option value="2" <?php echo $this->allmod->activedata(2, @$redit[0]['gelombang'], 'selected'); ?>>2</option>
                                        <option value="3" <?php echo $this->allmod->activedata(3, @$redit[0]['gelombang'], 'selected'); ?>>3</option>
                                        <option value="4" <?php echo $this->allmod->activedata(4, @$redit[0]['gelombang'], 'selected'); ?>>4</option>
                                    </select>
                                </div>
								
                                                                                      
	                    </div>
	                    <div class="panel-footer clearfix">
                            <div class="pull-right"> <input type="hidden" value="1" name="submit" />
                                <button class="btn btn-info" type="submit"><i class="fa fa-check-square-o animated flip"></i> Simpan</button>                                        
                            </div>
							<div class="pull-right" style="margin-right:10px;">                                                                                    
                                <a href="<?php echo base_url()."psb/settings/" ?>">
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

     

      
   