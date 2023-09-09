<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<script src="js/bootstrap.mid.js"></script>
</head>

		<script>
		$(document).ready(function() {
    var table = $('#example').DataTable();
    var tt = new $.fn.dataTable.TableTools( table );
 
    $( tt.fnContainer() ).insertBefore('div.dataTables_wrapper');
} );
		
		</script>

<body>
	<div class="container">
		<div class="row">
			</br>
			</br>
		</div>
		<div class="row">
			<p>
			<a href ="create.php" button class="btn btn-success">Create</button></a>
				
			</p>
			<table class="table table-striped table-bordered" >
				<thead>
					<tr>
						<th>Id</th>
						<th>Gelombang</th>
						<th width="50px">Id psb</th>
						<th width="120px">Biaya bangunan</th>
						<th width="80px">Biaya SPP</th>
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
						    echo '<td width=250>';
                            echo '<a class="btn" href="read.php?id='.$row['idpembayaran'].'">Info</a>';
                                echo '  ';
                               echo '<a class="btn btn-success" target="blank" href="update.php?idpembayaran='.$row['idpembayaran'].'">Update</a>';
                                echo '  ';
                                echo '<a class="btn btn-danger" href="delete.php?idpembayaran='.$row['idpembayaran'].'">Delete</a>';
                                echo '</td>';
						}
						Database::disconnect();
					?>
				</tbody>
			</table>
		</div>
</body>
</html>