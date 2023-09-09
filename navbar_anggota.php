 <?php include('session_anggota.php'); ?>
  <div class="navbar navbar-fixed-top navbar-inverse" >
            <div class="navbar-inner" style="list-style: none;
    background-image:-webkit-linear-gradient(top,#680000,#FF6103);
    background-color:#ffffff;
    margin: 0 auto;
	box-shadow:0 1px 3px rgba(0,0,0,.5);">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                    </a>
                    <span class="brand" href="#" ><strong style="color:#fff;">Perpustakaan SMAN 11 Jatake</strong></span>
                    <div class="nav-collapse collapse">
                        <strong style="color:#fff;"><ul class="nav pull-right">
						<?php $query= mysql_query("select * from tb_psb_data where nopen = '$session_id'")or die(mysql_error());
								$row = mysql_fetch_array($query);
						?>
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown" style="color:#fff;"> <i class="icon-user icon-large"></i><?php echo $row['nopen']." - ".$row['nama'];  ?> <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li class="divider"></li>
                                    <li>
                                        <a tabindex="-1" href="logout.php"><i class="icon-signout"></i>&nbsp;Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul></strong>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>