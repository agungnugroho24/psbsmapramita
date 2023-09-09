<div id="page-wrapper">
<div class="row">
	<div class="col-md-9">
		<div class="page-header" style="height:100px;">
			<h3 class="heading pull-left"><i class="fa fa-list animated bounceIn"></i> DATA <?php echo @$rdt ?></h3>
		</div>
	</div>

	
    <!-- /.col-lg-12 -->
</div>
<div class="breadcrumb" style="height:35px;">
	<div class="pull-left" >
        PSB SD> LIST <?php echo @$rdt ?> 
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
                                            <th>No Pendaftaran</th>
                                            <th>Nama Siswa/i</th>
                                            <th>Kelamin</th>
                                            <th>Nama Ayah/Ibu/Wali</th>
                                            <th>No.Telp</th>
                                            <th>Tgl. Pendaftaran</th>
                                            <th>Pendaftaran</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($tampil as $key => $value) { ?>
                                        <tr>
                                            <td><?php echo @$value["nopen"] ?></td>
                                            <td><?php echo @$value["nama"] ?></td>
                                            <td><?php echo @$value["jk"] ?></td>
                                            <td><?php echo @$value["namaayah"]." / ".@$value["namaibu"]." / ".@$value["namawali"] ?></td>
                                            <td><?php echo @$value["tlp"] ?></td>
                                            <td><?php echo @$value["tdsd"] ?></td>
                                            <td><?php 
                                                if(@$value["idpsb"]==2){
                                                    echo "TK";
                                                } 
                                                
                                            ?>
                                            </td>
                                            <td>
                                                <a href="<?php echo base_url()."psb/terima/".@$value["nomor"]."/".@$page; ?>">
                                                    <?php if(@$value["status_psb"]==0){ ?>
                                                        <button type="button" class="btn btn-outline btn-success btn-xs"><i class="fa fa-crosshairs"></i> Terima</button>
                                                    <?php } ?>
                                                    <?php if(@$value["status_psb"]==1){ ?>
                                                        <button type="button" class="btn btn-outline btn-warning btn-xs"><i class="fa fa-crosshairs"></i> Tolak</button>
                                                    <?php } ?>
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