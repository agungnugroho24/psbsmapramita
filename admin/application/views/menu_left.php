<!-- /.navbar-static-top -->

        <nav id="menu" class="navbar-default navbar-static-side hidden-xs" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-user">
                        <div class="user-img">
                            </div>
                        <div class="user-info">
                            <div class="user-greet">SMA Pramita Tangerang</div>
                            <div class="user-name" style="color:#18bc9c;"><?php echo @$nama_lengkap; ?></div>
                            <div class="user-status animated bounceInLeft">
                                <span class="label label-success dropdown-toggle">Online</span>
                            </div>
                        </div>
                    </li>
                    
                    <li class="<?php echo @$dsb; ?>">
                        <a href="<?php echo base_url()."home/"; ?>"><i class="fa fa-desktop fa-fw"></i> Beranda</a>
                    </li>
				
                    <li class="<?php echo @$jj; ?>">
                        <a href="<?php echo base_url()."guru/jenjang/" ?>"><i class="fa fa-location-arrow fa-fw"></i>SMA Pramita Tangerang</a>
                     </li>

                        <!-- /.nav-second-level -->
                    </li>
					<li class="<?php echo @$psb; ?>" >
                        <a href=""><i class="fa fa-pencil-square-o fa-fw"></i> Pendaftaran <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse ">
							<li class="<?php echo @$lpSMK; ?>">
                                <a href="<?php echo base_url()."psb/psbs/5" ?>">Daftar pendaftaran SMA</a>
                            </li>
							 <li class="<?php echo @$hp; ?>">
                                <a href="<?php echo base_url()."psb/hasil/5" ?>">Hasil Pendaftaran SMA</a>
                            </li>
                            <li class="<?php echo @$setting; ?>">
                                <a href="<?php echo base_url()."psb/setting/" ?>">Pengaturan Pendaftaran</a>
                            </li>
                            <li class="<?php echo @$spm; ?>">
                                <a href="<?php echo base_url()."psb/settings/" ?>">Pengaturan Pembayaran</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li class="<?php echo @$lpt; ?>">
                        <a href="<?php echo base_url()."report"; ?>"><i class="fa fa-paste fa-fw"></i> Laporan</a>
                    </li>
                    </ul>
              
            </div>
            <!-- /.sidebar-collapse -->
        </nav>
        <!-- /.navbar-static-side -->