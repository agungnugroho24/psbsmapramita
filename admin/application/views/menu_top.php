  
                <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle pull-left margin left" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url()."admin"; ?>">
                </a>
            <!-- /.navbar-header -->
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-top-links navbar-right hidden-xs">
                
               
                <!-- /.dropdown -->
             
                <!-- /.dropdown -->
                

                <li class="dropdown">
                    <a class="dropdown-toggle user" data-toggle="dropdown" href="#">
                        <?php echo @$nama_lengkap ?>
                        <img src="<?php echo base_url(); ?>assets/images/user_default.png" alt="" data-src="<?php echo base_url(); ?>assets/images/user_default.png" data-src-retina="<?php echo base_url(); ?>assets/images/user_default.png" class="img-responsive img-circle user-img" style="width:20px;">
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user animated fadeInUp">
                        <li>
                             <div class="media">
                                <a class="pull-left" href="#">
                                    <img class="media-object user-profile-image img-circle" src="<?php echo base_url(); ?>assets/images/user_default.png" >
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading"><?php echo @$nama_lengkap ?></h4>
                                    
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url();?>" target="_BLANK"><i class="fa fa-tasks"></i>Lihat situs</a></li>
                       
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url()."login/offlog" ?>" class="text-danger"><i class="fa fa-sign-out fa-fw"></i> Keluar</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
                <li class="active" title="Logout"><a href="<?php echo base_url()."login/offlog" ?>" class="animated fadeIn trigger-sidebar"><i class="fa fa-sign-out"></i> </a></li>
            </ul>
            <!-- /.navbar-top-links -->

        </nav>