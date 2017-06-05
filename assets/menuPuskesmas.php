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
                                <div class="profile-data-title">Pengelola KIA Kecamatan Tumpang</div>
                            </div>
                            <div class="profile-controls">
                                <a href="#" class="profile-control-left"><span class="fa fa-info"></span></a>
                                <a href="#" class="profile-control-right"><span class="fa fa-envelope"></span></a>
                            </div>
                        </div>                                                                        
                    </li>                   
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-file-text-o"></span> <span class="xn-text">Rekapan Desa</span></a>
                        <ul>
                            <li><a href="<?php echo base_url()."C_Bidan/lihatRekapan/tumpang/".date('Y'); ?>"><span class="fa fa-table"></span>Desa Tumpang</a></li>
                        </ul>
                        <ul>
                            <li><a href="<?php echo base_url()."C_Bidan/lihatRekapan/malangsuko/".date('Y'); ?>"><span class="fa fa-table"></span>Desa Malangsuko</a></li>
                        </ul>
                        <ul>
                            <li><a href="<?php echo base_url()."C_Bidan/lihatRekapan/jeru/".date('Y'); ?>"><span class="fa fa-table"></span>Desa Jeru</a></li>
                        </ul>
                        <ul>
                            <li><a href="<?php echo base_url()."C_Bidan/lihatRekapan/wringinsongo/".date('Y'); ?>"><span class="fa fa-table"></span>Desa Wringinsongo</a></li>
                        </ul>
                        <ul>
                            <li><a href="<?php echo base_url()."C_Bidan/lihatRekapan/bokor/".date('Y'); ?>"><span class="fa fa-table"></span>Desa Bokor</a></li>
                        </ul>
                        <ul>
                            <li><a href="<?php echo base_url()."C_Bidan/lihatRekapan/slamet/".date('Y'); ?>"><span class="fa fa-table"></span>Desa Slamet</a></li>
                        </ul>
                        <ul>
                            <li><a href="<?php echo base_url()."C_Bidan/lihatRekapan/kidal/".date('Y'); ?>"><span class="fa fa-table"></span>Desa Kidal</a></li>
                        </ul>
                        <ul>
                            <li><a href="<?php echo base_url()."C_Bidan/lihatRekapan/kambingan/".date('Y'); ?>"><span class="fa fa-table"></span>Desa Kambingan</a></li>
                        </ul>
                        <ul>
                            <li><a href="<?php echo base_url()."C_Bidan/lihatRekapan/ngingit/".date('Y'); ?>"><span class="fa fa-table"></span>Desa Ngingit</a></li>
                        </ul>
                        <ul>
                            <li><a href="<?php echo base_url()."C_Bidan/lihatRekapan/pandanajeng/".date('Y'); ?>"><span class="fa fa-table"></span>Desa Pandanajeng</a></li>
                        </ul>
                        <ul>
                            <li><a href="<?php echo base_url()."C_Bidan/lihatRekapan/pulungdowo/".date('Y'); ?>"><span class="fa fa-table"></span>Desa Pulungdowo</a></li>
                        </ul>
                        <ul>
                            <li><a href="<?php echo base_url()."C_Bidan/lihatRekapan/tulusbesar/".date('Y'); ?>"><span class="fa fa-table"></span>Desa Tulusbesar</a></li>
                        </ul>
                        <ul>
                            <li><a href="<?php echo base_url()."C_Bidan/lihatRekapan/benjor/".date('Y'); ?>"><span class="fa fa-table"></span>Desa Benjor</a></li>
                        </ul>
                        <ul>
                            <li><a href="<?php echo base_url()."C_Bidan/lihatRekapan/dampul/".date('Y'); ?>"><span class="fa fa-table"></span>Desa Dampul</a></li>
                        </ul>
                        <ul>
                            <li><a href="<?php echo base_url()."C_Bidan/lihatRekapan/duwet/".date('Y'); ?>"><span class="fa fa-table"></span>Desa Duwet</a></li>
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href=""><span class="fa fa-files-o"></span> <span class="xn-text">Rekapan Kecamatan</span></a>
                        <ul>
                            <li><a href="<?php echo base_url()."C_Puskesmas/lihatRekapanKecamatan/2014/1"; ?>"><span class="fa fa-table"></span>2014</a></li>
                        </ul>
                        <ul>
                            <li><a href="<?php echo base_url()."C_Puskesmas/lihatRekapanKecamatan/2015/1"; ?>"><span class="fa fa-table"></span>2015</a></li>
                        </ul>
                        <ul>
                            <li><a href="<?php echo base_url()."C_Puskesmas/lihatRekapanKecamatan/2016/1"; ?>"><span class="fa fa-table"></span>2016</a></li>
                        </ul>
                        <ul>
                            <li><a href="<?php echo base_url()."C_Puskesmas/lihatRekapanKecamatan/2017/1"; ?>"><span class="fa fa-table"></span>2017</a></li>
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-bar-chart-o"></span> <span class="xn-text">Pemetaan Desa</span></a>
                        <ul>
                            <li><a href="<?php echo base_url()."C_Bidan/lihatPemetaan/tumpang/".date('Y'); ?>"><span class="fa fa-book"></span>Desa Tumpang</a></li>
                        </ul>
                        <ul>
                            <li><a href="<?php echo base_url()."C_Bidan/lihatPemetaan/malangsuko/".date('Y'); ?>"><span class="fa fa-book"></span>Desa Malangsuko</a></li>
                        </ul>
                        <ul>
                            <li><a href="<?php echo base_url()."C_Bidan/lihatPemetaan/jeru/".date('Y'); ?>"><span class="fa fa-book"></span>Desa Jeru</a></li>
                        </ul>
                        <ul>
                            <li><a href="<?php echo base_url()."C_Bidan/lihatPemetaan/wringinsongo/".date('Y'); ?>"><span class="fa fa-book"></span>Desa Wringinsongo</a></li>
                        </ul>
                        <ul>
                            <li><a href="<?php echo base_url()."C_Bidan/lihatPemetaan/bokor/".date('Y'); ?>"><span class="fa fa-book"></span>Desa Bokor</a></li>
                        </ul>
                        <ul>
                            <li><a href="<?php echo base_url()."C_Bidan/lihatPemetaan/slamet/".date('Y'); ?>"><span class="fa fa-book"></span>Desa Slamet</a></li>
                        </ul>
                        <ul>
                            <li><a href="<?php echo base_url()."C_Bidan/lihatPemetaan/kidal/".date('Y'); ?>"><span class="fa fa-book"></span>Desa Kidal</a></li>
                        </ul>
                        <ul>
                            <li><a href="<?php echo base_url()."C_Bidan/lihatPemetaan/kambingan/".date('Y'); ?>"><span class="fa fa-book"></span>Desa Kambingan</a></li>
                        </ul>
                        <ul>
                            <li><a href="<?php echo base_url()."C_Bidan/lihatPemetaan/ngingit/".date('Y'); ?>"><span class="fa fa-book"></span>Desa Ngingit</a></li>
                        </ul>
                        <ul>
                            <li><a href="<?php echo base_url()."C_Bidan/lihatPemetaan/pandanajeng/".date('Y'); ?>"><span class="fa fa-book"></span>Desa Pandanajeng</a></li>
                        </ul>
                        <ul>
                            <li><a href="<?php echo base_url()."C_Bidan/lihatPemetaan/pulungdowo/".date('Y'); ?>"><span class="fa fa-book"></span>Desa Pulungdowo</a></li>
                        </ul>
                        <ul>
                            <li><a href="<?php echo base_url()."C_Bidan/lihatPemetaan/tulusbesar/".date('Y'); ?>"><span class="fa fa-book"></span>Desa Tulusbesar</a></li>
                        </ul>
                        <ul>
                            <li><a href="<?php echo base_url()."C_Bidan/lihatPemetaan/benjor/".date('Y'); ?>"><span class="fa fa-book"></span>Desa Benjor</a></li>
                        </ul>
                        <ul>
                            <li><a href="<?php echo base_url()."C_Bidan/lihatPemetaan/dampul/".date('Y'); ?>"><span class="fa fa-book"></span>Desa Dampul</a></li>
                        </ul>
                        <ul>
                            <li><a href="<?php echo base_url()."C_Bidan/lihatPemetaan/duwet/".date('Y'); ?>"><span class="fa fa-book"></span>Desa Duwet</a></li>
                        </ul>

                    </li>
                    <li class="xn-openable">
                        <a href=""><span class="fa fa-bar-chart-o"></span> <span class="xn-text">Pemetaan Kecamatan</span></a>
                        <ul>
                            <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/2014/1"; ?>"><span class="fa fa-book"></span>2014</a></li>
                        </ul>
                        <ul>
                            <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/2015/1"; ?>"><span class="fa fa-book"></span>2015</a></li>
                        </ul>
                        <ul>
                            <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/2016/1"; ?>"><span class="fa fa-book"></span>2016</a></li>
                        </ul>
                        <ul>
                            <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/2017/1"; ?>"><span class="fa fa-book"></span>2017</a></li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="<?php echo base_url()."C_Puskesmas/lihatUser"?>"><span class="fa fa-users"></span> <span class="xn-text">Kelola User</span></a>
                    </li>
                </ul>
                <!-- END X-NAVIGATION -->
            </div>