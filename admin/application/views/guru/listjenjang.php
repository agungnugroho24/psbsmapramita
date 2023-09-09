
<div id="page-wrapper">
<div class="row">
	<div class="col-md-9">
		<div class="page-header" style="height:100px;">
			<h3 class="heading pull-left"><i class="fa fa-list animated bounceIn"></i> Data Jenjang Pendidikan</h3>
		</div>
	</div>

	
    <!-- /.col-lg-12 -->
</div>
<div class="breadcrumb" style="height:35px;">
	<div class="pull-left" >
		Data Guru > Jenjang Pendidikan
	</div>
	<div class="pull-right" >
		<span style="font-size:18px;">
			<a href="<?php echo base_url()."guru/addjenjang" ?>">
                <button class="btn btn-info btn-xs" type="button" >
                    <i class="fa  fa-plus-square fa-fw"></i> Add Jenjang
                </button>
            </a>
			
		</span>
	</div>
</div>
<!-- /.row -->
 <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                     
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Jenjang</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no=0; foreach ($variable as $key => $value) { $no++; ?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $value["jenjang"] ?></td>
                                            <td> 
                                                <a href="<?php echo base_url()."guru/addjenjang/".$value["idjenjang"] ?>">
                                                        <i class="fa fa-pencil-square" style="cursor:pointer;"></i>
                                                        <span style="font-size:11px;">Edit</span>
                                                </a>
                                                &nbsp;&nbsp;
                                                <a href="<?php echo base_url()."guru/jenjang/".$value["idjenjang"] ?>"  onClick="return confirm('anda yakin hapus ??');">
                                                    <i class="fa fa-trash-o" style="cursor:pointer;"></i> 
                                                    <span style="font-size:11px;">Hapus</span>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>

<!-- Kategori Popup -->
                            <div class="modal fade" id="categ" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Add Category Product</h4>
                                        </div>
                                        <div class="modal-body">
                                            <form action="" method="post">
												<div class="panel panel-default">
														
														<div class="panel-body">
															<div class="form-group">
																<div class="input-group">
																	<span class="input-group-addon">Category Name</span>
																	<input type="text" name="categprod" class="form-control">
																</div>
															</div>
															<div class="form-group pull-right">
                                                                <input type="hidden" name="submit" value="1" />
																<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
																<button class="btn btn-info" type="submit">Save changes</button>
															</div>
														</div>
													</div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
<!-- /.Kategori Popup -->
