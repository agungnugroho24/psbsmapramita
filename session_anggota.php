<?php

$session_id=$_SESSION['nopen'];

$user_query = mysql_query("select * from tb_psb_data where nopen = '$session_id'")or die(mysql_error());
$user_row = mysql_fetch_array($user_query);
$user_username = $user_row['nopen'];
?>