<?php
// show all errors and warning
  ini_set('display_errors', 0);
  error_reporting(E_ALL);
  
    require 'database.php';
 
    $idpembayaran = null;
    if ( !empty($_GET['idpembayaran'])) {
        $idpembayaran = $_REQUEST['idpembayaran'];
    }
     
    if ( null==$idpembayaran ) {
        header("Location: http://localhost/smapramita/psbfelis/admin/psb/settings/");
    }
     
    if ( !empty($_POST)) {
        // keep track validation errors
        $idpembayaran = null;
        $gelombang = null;
        $idpsb = null;
		$biayabangunan = null;
        $biayaspp = null;
        $biayaseragam = null;
		$bpp = null;
         
        // keep track post values
        $idpembayaran = $_POST['idpembayaran'];
        $gelombang = $_POST['gelombang'];
        $idpsb = $_POST['idpsb'];
		$biayabangunan = $_POST['biayabangunan'];
        $biayaspp = $_POST['biayaspp'];
        $biayaseragam = $_POST['biayaseragam'];
		$bpp = $_POST['bpp'];
         
        // validate input
        $valid = true;
        if (empty($idpembayaran)) {
            $idpembayaranError = 'Please enter id pembayaran';
            $valid = false;
        }
         
        if (empty($gelombang)) {
            $gelombangError = 'Please enter gelombang';
            $valid = false;
        }
         
        if (empty($idpsb)) {
            $idpsbError = 'Please enter Mobile id psb';
            $valid = false;
        }
		if (empty($biayabangunan)) {
            $biayabangunanError = 'Please enter biaya bangunan';
            $valid = false;
        }
		if (empty($biayaspp)) {
            $biayasppError = 'Please enter biaya spp';
            $valid = false;
        }
		if (empty($biayaseragam)) {
            $biayaseragamError = 'Please enter biaya spp';
            $valid = false;
        }
		if (empty($bpp)) {
            $bppError = 'Please enter biaya penyelenggaraan pendidikan';
            $valid = false;
        }
         
        // update data
        if ($valid) {
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "UPDATE pembayaran set gelombang = ?, idpsb = ?, biayabangunan =?, biayaspp = ?, biayaseragam =?, bpp = ? WHERE idpembayaran = ?";
            $q = $pdo->prepare($sql);
            $q->execute(array($gelombang,$idpsb,$biayabangunan,$biayaspp,$biayaseragam,$bpp,$idpembayaran));
            Database::disconnect();
            header("Location: http://localhost/smapramita/psbfelis/admin/psb/settings/");
        }
    } else {
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM pembayaran where idpembayaran = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($idpembayaran));
        $data = $q->fetch(PDO::FETCH_ASSOC);
        $gelombang = $data['gelombang'];
        $idpsb = $data['idpsb'];
		$biayabangunan = $data['biayabangunan'];
        $biayaspp = $data['biayaspp'];
        $biayaseragam = $data['biayaseragam'];
		$bpp = $data['bpp'];
        Database::disconnect();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>
 
<body>
    <div class="container">
     
                <div class="span10 offset1">
                    <div class="row">
                        <h3>Update data pembayaran</h3>
                    </div>
             
                    <form class="form-horizontal" action="update.php?id=<?php echo $id?>" method="post">
                      <div class="control-group <?php echo !empty($idpembayaranError)?'error':'';?>">
                        <label class="control-label">Id pembayaran</label>
                        <div class="controls">
                            <input name="idpembayaran" type="text"  placeholder="idpembayaran" value="<?php echo !empty($idpembayaran)?$idpembayaran:'';?>">
                            <?php if (!empty($idpembayaranError)): ?>
                                <span class="help-inline"><?php echo $idpembayaranError;?></span>
                            <?php endif; ?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($gelombangError)?'error':'';?>">
                        <label class="control-label">Gelombang</label>
                        <div class="controls">
                            <input name="gelombang" type="text" placeholder="gelombang" value="<?php echo !empty($gelombang)?$gelombang:'';?>">
                            <?php if (!empty($gelombangError)): ?>
                                <span class="help-inline"><?php echo $gelombangError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($idpsbError)?'error':'';?>">
                        <label class="control-label">Id PSB</label>
                        <div class="controls">
                            <input name="idpsb" type="text"  placeholder="idpsb" value="<?php echo !empty($idpsb)?$idpsb:'';?>">
                            <?php if (!empty($idpsbError)): ?>
                                <span class="help-inline"><?php echo $idpsbError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
					  <div class="control-group <?php echo !empty($biayabangunanError)?'error':'';?>">
                        <label class="control-label">Biaya bangunan</label>
                        <div class="controls">
                            <input name="biayabangunan" type="text"  placeholder="biayabangunan" value="<?php echo !empty($biayabangunan)?$biayabangunan:'';?>">
                            <?php if (!empty($biayabangunanError)): ?>
                                <span class="help-inline"><?php echo $biayabangunanError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
					  <div class="control-group <?php echo !empty($biayasppError)?'error':'';?>">
                        <label class="control-label">Biaya SPP</label>
                        <div class="controls">
                            <input name="biayaspp" type="text"  placeholder="biayaspp" value="<?php echo !empty($biayaspp)?$biayaspp:'';?>">
                            <?php if (!empty($biayasppError)): ?>
                                <span class="help-inline"><?php echo $biayasppError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
					  <div class="control-group <?php echo !empty($biayaseragamError)?'error':'';?>">
                        <label class="control-label">Biaya seragam</label>
                        <div class="controls">
                            <input name="biayaseragam" type="text"  placeholder="biayaseragam" value="<?php echo !empty($biayaseragam)?$biayaseragam:'';?>">
                            <?php if (!empty($biayaseragamError)): ?>
                                <span class="help-inline"><?php echo $biayaseragamError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
					  <div class="control-group <?php echo !empty($bppError)?'error':'';?>">
                        <label class="control-label">Biaya penyelenggaraan pendidikan</label>
                        <div class="controls">
                            <input name="bpp" type="text"  placeholder="bpp" value="<?php echo !empty($bpp)?$bpp:'';?>">
                            <?php if (!empty($bppError)): ?>
                                <span class="help-inline"><?php echo $bppError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
                      <div class="form-actions">
                          <button type="submit" class="btn btn-success">Update</button>
                          <a class="btn" href="http://localhost/smapramita/psbfelis/admin/psb/settings/">Kembali</a>
                        </div>
                    </form>
                </div>
                 
    </div> <!-- /container -->
  </body>
</html>
 