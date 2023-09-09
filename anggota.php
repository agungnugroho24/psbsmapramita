<?php include('header_anggota.php'); ?>
<?php include('navbar_anggota.php'); ?>
    <body style="background:url(img/white.jpg);">
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('buku_sidebar.php'); ?>
		
                <div class="span9" id="content">
                     <div class="row-fluid">
                        <!-- block -->
                        <div id="block_bg" class="block" style="margin-left:-50px; width:1000px;">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><strong style="color:#000;">Data buku</strong></div>
                            </div>
                            <div class="block-content collapse in" style="width:1100px:">
                                <div class="span12">
									<form>
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example" style="width:1100px:">
										<thead style="width:1100px:">
								    <tr style="width:1100px:">
										<th>No</th>
                                        <th>Judul_buku</th>                                 
                                        <th>Kategori</th>
										<th>Jumlah_buku</th>
										<th>Pengarang</th>
										<th>Penerbit</th>
										<th>Sumber_buku</th>
										<th>ISBN</th>
										<th>Tahun_terbit</th>
										<th>Tanggal</th>
										<th>Status</th>	
                                    </tr>
										</thead>
										<tbody>
											
												<?php
											$subject_query = mysql_query("select * from tb_psb_data")or die(mysql_error());
											while($row = mysql_fetch_array($subject_query)){
											$id = $row['nopen'];
											?>
										
											<tr>
													
									<td><?php echo $row['nopen']; ?></td>
                                   
										</tr>
											
											<?php } ?>   
                              
										</tbody>
									</table>
									</form>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>


                </div>
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>

</html>