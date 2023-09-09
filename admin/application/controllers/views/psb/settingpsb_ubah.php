<div id="page-wrapper">
<div class="row">
    <div class="page-header" style="height:100px;">
        <h3 class="heading pull-left"><i class="fa fa-pencil-square-o animated flip"></i> <?php echo @$headtit.@$redit[0]["ket_psb"]; ?>  </h3>
        
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
 <div class="row">
            	<div class="col-md-12">
            		<div class="panel panel-default">
            			<div class="panel-heading">
            				<?php echo @$headtit.@$redit[0]["ket_psb"]; ?>
            			</div>
						<?php echo @$valid; ?>
            			<div class="panel-body">
	            			<form id="validate2" method="POST" action="" novalidate="novalidate" enctype="multipart/form-data" >
                            
                                <div class="form-group">
                                    <label>Tahun Ajaran :</label>                                        
                                    <input type="text" class="form-control" name="judul" value="<?php echo @$redit[0]["tahun_ajaran"] ?>"  placeholder="Tahun Ajaran Ex:2001/2005"/>
                                </div>
                                <div class="form-group">
                                    <label>Status :</label>                                        
                                    <select name="status" class="form-control">
                                        <option value="aktif">Aktif</option>
                                        <option value="tidak aktif">Tidak Aktif</option>
                                    </select>
                                </div>
                               <div class="form-group">
                                    <label for="reservation">Tanggal Pembukaan Gelombang 1 </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                        <input type="text" id="reservation" name="reservation" class="form-control" >
                                        <input type="hidden" id="s" name="submit" value="1" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Jumlah Penerimaan Siswa/i Gelombang 1 :</label>                                        
                                    <input type="text" class="form-control" name="quota1" value="<?php echo @$redit[0]["quota1"] ?>" placeholder="0" />
                                </div>
                                <div class="form-group">
                                    <label for="reservation">Tanggal Pembukaan Gelombang 2 </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                        <input type="text" id="reservation2" name="reservation2" class="form-control"  >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Jumlah Penerimaan Siswa/i Gelombang 2 :</label>                                        
                                    <input type="text" class="form-control" name="quota2" value="<?php echo @$redit[0]["quota2"] ?>"  placeholder="0" />
                                </div>
                                <div class="form-group">
                                    <label for="reservation">Tanggal Pembukaan Gelombang 3 </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                        <input type="text" id="reservation3" name="reservation3" class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Jumlah Penerimaan Siswa/i Gelombang 3 :</label>                                        
                                    <input type="text" class="form-control" name="quota3" value="<?php echo @$redit[0]["quota3"] ?>"  placeholder="0" />
                                </div>
                                <div class="form-group">
                                    <label for="reservation">Tanggal Pembukaan Gelombang 4 </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                        <input type="text" id="reservation4" name="reservation4" class="form-control"  >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Jumlah Penerimaan Siswa/i Gelombang 4 :</label>                                        
                                    <input type="text" class="form-control" name="quota4" value="<?php echo @$redit[0]["quota4"] ?>" placeholder="0" />
                                </div>
                                                                     
	                    </div>
	                    <div class="panel-footer clearfix">
                            <div class="pull-right"> <input type="hidden" value="1" name="submit" />
                                <button class="btn btn-info" type="submit"><i class="fa fa-check-square-o animated flip"></i> Simpan</button>                                        
                            </div>
							<div class="pull-right" style="margin-right:10px;">                                                                                    
                                <a href="<?php echo base_url()."psb/setting/" ?>">
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

     

      
   