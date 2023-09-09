<!-- /.navbar-static-top -->

        <nav id="menu" class="navbar-default navbar-static-side hidden-xs" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-user">
                        <div class="user-img">
                            <img src="<?php echo base_url(); ?>assets/images/logo-sd-it.png" alt="" data-src="<?php echo base_url(); ?>assets/images/user_default.png" data-src-retina="<?php echo base_url(); ?>assets/images/user_default.png" width="85" height="85" class="img-responsive animated bounceIn">
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
                        <a href="<?php echo base_url()."home/"; ?>"><i class="fa fa-desktop fa-fw"></i> Dashboard</a>
                    </li>
					
					<li class="<?php echo @$dg; ?>" >
                        <a href="tables.html"><i class="fa fa-users fa-fw"></i> Data Guru <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse ">
                            <li class="<?php echo @$lg; ?>">
                                <a href="<?php echo base_url()."guru/dataguru/" ?>">List Guru</a>
                            </li>
                            <li class="<?php echo @$mp; ?>">
                                <a href="<?php echo base_url()."guru/matpel/" ?>">Mata Pelajaran</a>
                            </li>
                              
                           
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li class="<?php echo @$jj; ?>">
                        <a href="<?php echo base_url()."guru/jenjang/" ?>"><i class="fa fa-location-arrow fa-fw"></i>SMA Pramita Tangerang</a>
                     </li>

                        <!-- /.nav-second-level -->
                    </li>
					<li class="<?php echo @$psb; ?>" >
                        <a href=""><i class="fa fa-pencil-square-o fa-fw"></i> PSB <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse ">
                            <li class="<?php echo @$lpTPQ; ?>">
                                <a href="<?php echo base_url()."psb/psbs/1" ?>">List PSB TPQ</a>
                            </li>
                            <li class="<?php echo @$lpTK; ?>">
                                <a href="<?php echo base_url()."psb/psbs/2" ?>">List PSB TK</a>
                            </li>
                            <li class="<?php echo @$lpSD; ?>">
                                <a href="<?php echo base_url()."psb/psbs/3" ?>">List PSB SD</a>
                            </li>
                            <li class="<?php echo @$lpSMP; ?>">
                                <a href="<?php echo base_url()."psb/psbs/4" ?>">List PSB SMP</a>
                            </li>
                            <li class="<?php echo @$lpSMK; ?>">
                                <a href="<?php echo base_url()."psb/psbs/5" ?>">List PSB SMK</a>
                            </li>
                            <li class="<?php echo @$hp; ?>">
                                <a href="<?php echo base_url()."psb/hasil/1" ?>">Hasil PSB TPQ</a>
                            </li>
							 <li class="<?php echo @$hp; ?>">
                                <a href="<?php echo base_url()."psb/hasil/2" ?>">Hasil PSB TK</a>
                            </li>
							 <li class="<?php echo @$hp; ?>">
                                <a href="<?php echo base_url()."psb/hasil/3" ?>">Hasil PSB SD</a>
                            </li>
							 <li class="<?php echo @$hp; ?>">
                                <a href="<?php echo base_url()."psb/hasil/4" ?>">Hasil PSB SMP</a>
                            </li>
							 <li class="<?php echo @$hp; ?>">
                                <a href="<?php echo base_url()."psb/hasil/5" ?>">Hasil PSB SMK</a>
                            </li>
                            <li class="<?php echo @$setting; ?>">
                                <a href="<?php echo base_url()."psb/setting/" ?>">Setting PSB</a>
                            </li>
                            <li class="<?php echo @$spm; ?>">
                                <a href="<?php echo base_url()."psb/settings/" ?>">Setting Pembayaran</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li class="<?php echo @$pgs; ?>">
                        <a href="<?php echo base_url()."pages"; ?>"><i class="fa fa-file-text-o fa-fw"></i> Pages</a>
                    </li>


                    <li class="<?php echo @$og; ?>">
                        <a href="<?php echo base_url()."v/pg/4"; ?>"><i class="fa fa-file-text-o fa-fw"></i> Organisasi</a>
                    </li>
                    <li class="<?php echo @$art; ?>">
                        <a href="<?php echo base_url()."artikel"; ?>"><i class="fa fa-file-text-o fa-fw"></i> Artikel</a>
                    </li>

                    <li class="<?php echo @$pgm; ?>">
                        <a href="<?php echo base_url()."pengumuman"; ?>"><i class="fa fa-file-text-o fa-fw"></i> Pengumuman</a>
                    </li>
                    <li class="<?php echo @$agenda; ?>">
                        <a href="<?php echo base_url()."agenda"; ?>"><i class="fa fa-file-text-o fa-fw"></i> Agenda</a>
                    </li>
                    <li class="<?php echo @$lpt; ?>">
                        <a href="<?php echo base_url()."report"; ?>"><i class="fa fa-paste fa-fw"></i> Reports</a>
                    </li>
                    </ul>
              
            </div>
            <!-- /.sidebar-collapse -->
        </nav>
        <!-- /.navbar-static-side -->