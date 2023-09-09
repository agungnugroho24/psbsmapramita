<?php
    require 'database.php';
    $nopen = 0;
     
    if ( !empty($_GET['nopen'])) {
        $nopen = $_REQUEST['nopen'];
    }
     
    if ( !empty($_POST)) {
        // keep track post values
        $nopen = $_POST['nopen'];
         
        // delete data
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "DELETE FROM tb_psb_data  WHERE nopen = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($nopen));
        Database::disconnect();
        header("Location: home");
         
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
                      <input type="hidden" name="nopen" value="<?php echo $nopen;?>"/>
                      <p class="alert alert-error">Yakin dihapus?</p>
                      <div class="form-actions">
                          <button type="submit" class="btn btn-danger">Iya</button>
                          <a class="btn" href="home">Tidak</a>
                        </div>
                    </form>
                </div>
                 
    </div> <!-- /container -->
  </body>
</html>
