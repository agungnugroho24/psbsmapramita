<div id="page-wrapper">
<div class="row">
	<div class="col-md-9">
		<div class="page-header" style="height:100px;">
			<h3 class="heading pull-left"><i class="fa fa-list animated bounceIn"></i> Data Gallery</h3>
		</div>
	</div>

	
    <!-- /.col-lg-12 -->
</div>
<div class="breadcrumb" style="height:35px;">
	<div class="pull-left" >
        Gallery > List Gallery
    </div>
	<div class="pull-right" >
		<span style="font-size:18px;">
			<a href="<?php echo base_url()."gallery/add" ?>">
                <button class="btn btn-info btn-xs" type="button" >
    				<i class="fa  fa-plus-square fa-fw"></i> Add Gallery
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
                                            <th>Judul</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no=0; foreach ($variable as $key => $value) { $no++; ?>
                                         <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><img src="../system/application/views/web/galeri/thumb/<?php echo $value["foto_kecil"] ?>" /></td>
                                            <td> 
                                                    <a href="<?php echo base_url()."gallery/add/".$value["id_foto"] ?>">
                                                            <i class="fa fa-pencil-square" style="cursor:pointer;"></i>
                                                            <span style="font-size:11px;">Edit</span>
                                                    </a>
                                                    &nbsp;&nbsp;
                                                    <a href="<?php echo base_url()."gallery/hapus/".$value["id_foto"] ?>"  onClick="return confirm('anda yakin hapus ??');">
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