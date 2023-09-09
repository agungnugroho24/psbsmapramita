<?PHP
include("config.php");
unset($_SESSION['session_login_by_id']);
session_destroy();
header("location:index.php");
?>