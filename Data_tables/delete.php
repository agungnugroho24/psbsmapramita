<?php
    require 'database.php';
    $idpembayaran = 0;
     
    if ( !empty($_GET['idpembayaran'])) {
        $idpembayaran = $_REQUEST['idpembayaran'];
    }
     
    if ( !empty($_POST)) {
        // keep track post values
        $idpembayaran = $_POST['idpembayaran'];
         
        // delete data
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "DELETE FROM pembayaran  WHERE idpembayaran = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($idpembayaran));
        Database::disconnect();
        header("Location: http://localhost/rinas/admin/psb/settings/");
         
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
                        <h3>Hapus data pembayaran</h3>
                    </div>
                     
                    <form class="form-horizontal" action="delete.php" method="post">
                      <input type="hidden" name="idpembayaran" value="<?php echo $idpembayaran;?>"/>
                      <p class="alert alert-error">Yakin dihapus?</p>
                      <div class="form-actions">
                          <button type="submit" class="btn btn-danger">Iya</button>
                          <a class="btn" href="http://localhost/rinas/admin/psb/settings/">Tidak</a>
                        </div>
                    </form>
                </div>
                 
    </div> <!-- /container -->
  </body>
</html>
