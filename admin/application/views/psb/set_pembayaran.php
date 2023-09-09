<div id="page-wrapper">
<div class="row">
	<div class="col-md-9">
		<div class="page-header" style="height:100px;">
			<h3 class="heading pull-left"><i class="fa fa-list animated bounceIn"></i> Data Pembayaran</h3>
		</div>
	</div>

	
    <!-- /.col-lg-12 -->
</div>
<div class="breadcrumb" style="height:35px;">
	<div class="pull-left" >
        Data PSB > List Pembayaran
    </div>
	<div class="pull-right" >
		<span style="font-size:18px;">
			<a href="#">
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
						<th>Id</th>
						<th>Gelombang</th>
						<th width="70px">Id psb</th>
						<th width="120px">Biaya bangunan</th>
						<th width="100px">Biaya SPP</th>
						<th width="110px">Biaya seragam</th>
						<th>Biaya Penyelenggaraan Pendidikan (BPP)</th>
						<th>Actions</th>
					</tr>
				</thead>
                                   <tbody>
					<?php
						include 'database.php';
						$pdo = Database::connect();
						$sql = 'SELECT * FROM pembayaran';
						foreach ($pdo->query($sql) as $row){
							echo '<tr>';
							echo '<td>'. $row['idpembayaran'] . '</td>';
							echo '<td>'. $row['gelombang'] . '</td>';
							echo '<td>'. $row['idpsb'] . '</td>';
							echo '<td>'. $row['biayabangunan'] . '</td>';
							echo '<td>'. $row['biayaspp'] . '</td>';
							echo '<td>'. $row['biayaseragam'] . '</td>';
							echo '<td>'. $row['bpp'] . '</td>';
						    echo '<td width=150>';
                                echo '  ';
                                echo '<a class="btn btn-success" href="../../../Data_tables/update.php?idpembayaran='.$row['idpembayaran'].'">Update</a>';
                                echo '  ';
                                echo '<a class="btn btn-danger" href="../../../Data_tables/delete.php?idpembayaran='.$row['idpembayaran'].'">Delete</a>';
                                echo '</td>';
						}
						Database::disconnect();
					?>
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