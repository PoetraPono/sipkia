<div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a  href="<?php echo site_url();?>">SIPKIA</a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>
                    <li class="xn-profile">
                        <a href="#" class="profile-mini">
                            <img src="<?php echo site_url("assets/img/user")."/".$this->session->userdata('foto');?>" alt="John Doe"/>
                        </a>
                        <div class="profile">
                            <div class="profile-image">
                                <img src="<?php echo site_url("assets/img/user")."/".$this->session->userdata('foto');?>" alt="John Doe"/>
                            </div>
                            <div class="profile-data">
                                <div class="profile-data-name"><?php echo "Ibu ".$this->session->userdata('nama'); ?></div>
                                <div class="profile-data-title"><?php echo $this->session->userdata('jenisUser')." ".$this->session->userdata('desa');  ?></div>
                            </div>
                            <div class="profile-controls">
                                <a href="#" class="profile-control-left"><span class="fa fa-info"></span></a>
                                <a href="#" class="profile-control-right"><span class="fa fa-envelope"></span></a>
                            </div>
                        </div>                                                                        
                    </li>                   
                    <li class="">
                        <a href="<?php echo base_url()."C_Bidan/lihatRegister/".$this->session->userdata('desa')."/ibu"; ?>"><span class="glyphicon glyphicon-user"></span> <span class="xn-text">Kohort Ibu</span></a>
                    </li>
                    <li class="">
                        <a href="<?php echo base_url()."C_Bidan/lihatRegister/".$this->session->userdata('desa')."/bayi"; ?>"><span class="fa fa-user"></span> <span class="xn-text">Kohort Bayi</span></a>
                    </li>
                    <li class="">
                        <a href="<?php echo base_url()."C_Bidan/lihatRegister/".$this->session->userdata('desa')."/balita"; ?>"><span class="fa fa-users"></span> <span class="xn-text">Kohort Balita</span></a>
                    </li>
                    <li class="">
                        <a href="<?php echo base_url()."C_Bidan/lihatRegister/".$this->session->userdata('desa')."/apras"; ?>"><span class="fa fa-child"></span> <span class="xn-text">Kohort Apras</span></a>
                    </li>
                    <li class="">
                        <a href="<?php echo base_url()."C_Bidan/lihatRekapan/".$this->session->userdata('desa')."/".date('Y'); ?>"><span class="fa fa-files-o"></span> <span class="xn-text">Rekapan PWS KIA</span></a>
                    </li>
                    <li class="">
                        <a href="<?php echo base_url()."C_Bidan/lihatPemetaan/".$this->session->userdata('desa')."/".date('Y'); ?>"><span class="fa fa-bar-chart-o"></span> <span class="xn-text">Pemetaan PWS KIA</span></a>
                    </li>  
                </ul>
                <!-- END X-NAVIGATION -->
            </div>