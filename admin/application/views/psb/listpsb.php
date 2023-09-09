<script type="text/javascript">
$(document).ready(function() {
    $('button[data-toggle="modal"]').on('click', function(){
            $('.modal-body').html("");
            $(".bb").attr("href", "");
            $(".bs").attr("href", "");
            var idmodal = $(this).attr("data");
            var d = $(this).attr("title");
            var sitenotif = "<?php echo base_url() ?>psb/popups"; //append id at end
            var sitenotifs = sitenotif + "/" + idmodal + "/" + d; //append id at end
            $('.modal-body').load(sitenotifs , {'page':"",'halamans':''}, function() { 
                //$('#loaderset').hide(); 
            });
            var bb = "<?php echo base_url() ?>psb/pp/belum/"+ d;
            $(".bb").attr("href", bb);
            $(".bs").attr("href","<?php echo base_url() ?>psb/pp/sudah/" + d);
    });
});
</script>
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
        PSB > LIST <?php echo @$rdt ?>
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
                                            <th>Pembayaran</th>
                                            <th>Action</th>
											<th>Hapus</th>
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
                                            <td>
                                            <?php 
                                                if(@$value["status_pembayaran"]=="Belum Bayar"){
                                                    $sb="btn-danger";
                                                }
                                                else if(@$value["status_pembayaran"]=="Lunas"){
                                                    $sb="btn-info";
                                                }
                                                else{
                                                    $sb="";
                                                }
                                            ?>

                                            <button type="button" class="btn btn-outline <?php echo @$sb ?> btn-xs" data-toggle="modal" data-target="#myModal" id="pembayaran" data="<?php echo @$value["gelombang"] ?>" title="<?php echo @$value["nomor"] ?>" >
                                                <?php echo @$value["status_pembayaran"] ?>
                                            </button>
                                            </td>
                                            <td>
                                                <a href="<?php echo base_url()."psb/detail/".@$value["nomor"]."/".@$page; ?>">
                                                    <i class="fa fa-crosshairs"></i>
                                                    Detail
                                                </a>
                                            </td>
											<td>
                                                </a>
                                                    &nbsp;&nbsp;
                                                    <a href="<?php echo base_url()."psb/datapsb/".$value["nopen"] ?>"  onClick="return confirm('anda yakin hapus ??');">
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
            <!-- Modal -->
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Detail Pembayaran</h4>
                                        </div>
                                        <div class="modal-body">
                                            xx
                                        </div>
                                        <div class="modal-footer">
                                            <a href="" class="bb"><button type="button" class="btn btn-danger">Belum Bayar</button></a>
                                            <a href="" class="bs"><button type="button" class="btn btn-info">Sudah Bayar</button></a>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->