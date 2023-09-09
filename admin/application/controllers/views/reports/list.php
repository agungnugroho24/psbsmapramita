
<div id="page-wrapper">
<div class="row">
	<div class="col-md-9">
		<div class="page-header" style="height:100px;">
			<h3 class="heading pull-left"><i class="fa fa-list animated bounceIn"></i> Report Pendaftaran Siswa/i</h3>
		</div>
	</div>

	
    <!-- /.col-lg-12 -->
</div>
<div class="breadcrumb" style="height:35px;">
	<div class="pull-left" >
         Report Pendaftaran Siswa/i
    </div>
	
</div>
<!-- /.row -->
 <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                     
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table class="table table-hover">
                                <tr>
                                    <td colspan="2">
                                        Berdasarkan Tanggal
                                        <div class="form-group">
                                            <label for="reservation">Pilih Tanggal</label>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                <input type="text" id="reservation" name="reservation" class="form-control" >
                                                <input type="hidden" id="s" name="submit" value="1" class="form-control">
                                            </div>
                                        </div>
                                         <a href="http://localhost/rinas/pdf/laporan.php"><button title="1" data="1" id="pembayaran"  class="btn btn-outline btn-info btn-xs" type="button">
                                               Cetak PDF
                                        </button></a>

                                        <!--<button title="1" data="1" id="pembayaran"  class="btn btn-outline btn-info btn-xs" type="button">
                                               Cetak Excel
                                        </button>-->
                                    </td>
                                     
                                </tr>
                                <tr>
                                    <td>
                                        Berdasarkan Institusi:<br>
										<button title="1" data="1" id="pembayaran" type="button">
                                                   <a href="application/views/reports/tpq.php" target="blank">TPQ</a>
                                        </button>
										<button title="1" data="1" id="pembayaran" type="button">
                                                   <a href="application/views/reports/tk.php" target="blank">TK</a>
                                        </button>
										<button title="1" data="1" id="pembayaran" type="button">
                                                   <a href="application/views/reports/sd.php" target="blank">SD</a>
                                        </button>
										<button title="1" data="1" id="pembayaran" type="button">
                                                   <a href="application/views/reports/smp.php" target="blank">SMP</a>
                                        </button>
										<button title="1" data="1" id="pembayaran" type="button">
                                                   <a href="application/views/reports/sma.php" target="blank">SMK</a>
                                        </button>
                                    </td>
                                     <td>
								
                                        <!--<button title="1" data="1" id="pembayaran"  class="btn btn-outline btn-info btn-xs" type="button">
                                               Cetak Excel
                                        </button>-->
                                    </td>
                                </tr>
								
								<tr>
                                    <td>
                                        Semua Data PSB
                                    </td>
                                     <td>
                                        <a href="http://localhost/rinas/pdf/laporan.php">
                                            <button title="1" data="1" id="pembayaran"  class="btn btn-outline btn-info btn-xs" type="button">
                                                   Cetak PDF
                                            </button>
                                        </a>
                                        <!--<button title="1" data="1" id="pembayaran"  class="btn btn-outline btn-info btn-xs" type="button">
                                               Cetak Excel
                                        </button>-->
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        Berdasarkan Pembayaran (Sudah Bayar)
                                    </td>
                                     <td>
                                        <a href="http://localhost/rinas/pdf/laporan.php?s=belum">
                                        <button title="Cetak PDF TPQ" data="1" id="pembayaran" type="button">
                                                   <a href="application/views/reports/sdhbyrtpq.php" target="blank">Cetak PDF TPQ</a>
                                        </button>
										<button title="Cetak PDF TKI" data="1" id="pembayaran" type="button">
                                                   <a href="application/views/reports/sdhbyrtki.php" target="blank">Cetak PDF TKI</a>
                                        </button>
										<button title="Cetak PDF SDIT" data="1" id="pembayaran" type="button">
                                                   <a href="application/views/reports/sdhbyrsdit.php" target="blank">Cetak PDF SDIT</a>
                                        </button>
										<button title="Cetak PDF SMPIT" data="1" id="pembayaran" type="button">
                                                   <a href="application/views/reports/sdhbyrsmpit.php" target="blank">Cetak PDF SMPIT</a>
                                        </button>
										<button title="Cetak PDF SMK" data="1" id="pembayaran" type="button">
                                                   <a href="application/views/reports/sdhbyrsmk.php" target="blank">Cetak PDF SMK</a>
                                        </button>
                                        </a>

                                        <!--<button title="1" data="1" id="pembayaran"  class="btn btn-outline btn-info btn-xs" type="button">
                                               Cetak Excel
                                        </button>-->
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        Berdasarkan Pembayaran (Belum Bayar)
                                    </td>
                                    <td>
                                        <a href="http://localhost/rinas/pdf/laporan.php?s=belum">
                                        <button title="Cetak PDF TPQ" data="1" id="pembayaran" type="button">
                                                   <a href="application/views/reports/blmbyrtpq.php" target="blank">Cetak PDF TPQ</a>
                                        </button>
										<button title="Cetak PDF TKI" data="1" id="pembayaran" type="button">
                                                   <a href="application/views/reports/blmbyrtki.php" target="blank">Cetak PDF TKI</a>
                                        </button>
										<button title="Cetak PDF SDIT" data="1" id="pembayaran" type="button">
                                                   <a href="application/views/reports/blmbyrsdit.php" target="blank">Cetak PDF SDIT</a>
                                        </button>
										<button title="Cetak PDF SMPIT" data="1" id="pembayaran" type="button">
                                                   <a href="application/views/reports/blmbyrsmpit.php" target="blank">Cetak PDF SMPIT</a>
                                        </button>
										<button title="Cetak PDF SMK" data="1" id="pembayaran" type="button">
                                                   <a href="application/views/reports/blmbyrsmk.php" target="blank">Cetak PDF SMK</a>
                                        </button>
                                        </a>

                                        <!--<button title="1" data="1" id="pembayaran"  class="btn btn-outline btn-info btn-xs" type="button">
                                               Cetak Excel
                                        </button>-->
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>