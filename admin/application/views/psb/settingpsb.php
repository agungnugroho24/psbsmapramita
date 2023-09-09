<div id="page-wrapper">
<div class="row">
	<div class="col-md-9">
		<div class="page-header" style="height:100px;">
			<h3 class="heading pull-left"><i class="fa fa-list animated bounceIn"></i> Setting PSB</h3>
		</div>
	</div>

	
    <!-- /.col-lg-12 -->
</div>
<div class="breadcrumb" style="height:35px;">
	<div class="pull-left" >
        PSB > Setting PSB
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
                                            <th>PSB</th>
                                            <th>Tahun Ajaran</th>
                                            <th>Status PSB</th>
                                            <th>Tanggal Gelombang 1</th>
                                            <th>Tanggal Gelombang 2</th>
                                            <th>Tanggal Gelombang 3</th>
                                            <th>Tanggal Gelombang 4</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no=0; foreach ($variable as $key => $value) { $no++; ?>
                                       <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo @$value["ket_psb"] ?></td>
                                            <td><?php echo @$value["tahun_ajaran"] ?></td>
                                            <td><?php echo @$value["status"] ?></td>
                                            <td><?php 
                                                    if(@$value["status"]=="tidak aktif"){echo "-"; }else{echo @$value["tgl_mulai_g1"]." - ".@$value["tgl_akhir_g1"]; } 
                                                ?>
                                            </td>
                                            <td><?php 
                                                    if(@$value["status"]=="tidak aktif"){echo "-"; }else{echo @$value["tgl_mulai_g2"]." - ".@$value["tgl_akhir_g2"]; } 
                                                ?>
                                            </td>
                                            <td><?php 
                                                    if(@$value["status"]=="tidak aktif"){echo "-"; }else{echo @$value["tgl_mulai_g3"]." - ".@$value["tgl_akhir_g3"]; } 
                                                ?>
                                            </td>
                                            <td><?php 
                                                    if(@$value["status"]=="tidak aktif"){echo "-"; }else{echo @$value["tgl_mulai_g4"]." - ".@$value["tgl_akhir_g4"]; } 
                                                ?>
                                            </td>
                                            
                                            <td>
                                                <a href="<?php echo base_url()."psb/aksi/".$value["idsetpsb"]; ?>">
                                                    <button class="btn btn-outline btn-success btn-xs" type="button"><i class="fa fa-ban"></i> Aktifkan</button>
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