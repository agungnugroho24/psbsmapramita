<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>SMA Pramita Tangerang | Pendaftaran Siswa Online</title>
<link href="<?php echo base_url(); ?>system/application/views/web/images/lgs.png" rel="shortcut icon" />
<link href="<?php echo base_url(); ?>system/application/views/web/css/style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>system/application/views/web/css/highslide.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo base_url(); ?>system/application/views/web/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>system/application/views/web/js/dropdown.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>system/application/views/web/js/jquery.cycle.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>system/application/views/web/js/slideshow.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>system/application/views/web/js/highslide-with-html.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>system/application/views/web/js/transisi.js"></script>
<script type="text/javascript">
hs.graphicsDir = '<?php echo base_url(); ?>system/application/views/web/images/';
hs.outlineType = 'rounded-white';
hs.wrapperClassName = 'draggable-header';

</script>
</head>

<body>
<div id="kulit-luar">
<div id="header">

</div>
<div id="menu-bawah">
<div class="menu-bottom" id="nav-bawah">
	<ul>
<?php
	if(!isset($_SESSION["userlog"])){ ?>
	<li>
		<a href="<?php echo base_url()."../html/index.php" ?>">Beranda</a>
	</li>
	<li>
		<a href="<?php echo base_url()."index.php/psb/login" ?>">Login Calon Siswa</a>
	</li>
	<li>
		<a href="<?php echo base_url()."admin" ?>" target="_BLANK">Admin</a>
	</li>
	<?php
	}
	else{ ?>
	<li>
		<a href="<?php echo base_url()."index.php/login/datasiswa" ?>">Data Siswa</a>
	</li>
	<li>
		<a href="<?php echo base_url()."index.php/login/dataortu" ?>">Data Orang Tua</a>
	</li>
	<li>
		<a href="<?php echo base_url()."index.php/login/datapay" ?>">Data Pembayaran</a>
	</li>
	<li>
		<a href="<?php echo base_url()."index.php/login/datahasil" ?>">Data Hasil</a>
	</li>
	<li>
		<a href="<?php echo base_url()."index.php/login/logout" ?>">Logout</a>
	</li>

	<?php

	}
		/*foreach($menu_bawah->result_array() as $mb)
		{
			echo "<li><a href='".base_url()."index.php/web/data/".$mb['id']."'>".$mb['title']."</a></li>";
		}*/
	?>
    	
	</ul>
</div>
<div id="bawah-menu"><img src="<?php echo base_url(); ?>system/application/views/web/images/bawah-menu.png" /></div>
</div>
