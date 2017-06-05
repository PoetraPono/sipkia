<!DOCTYPE html>
<html lang="en">
<head>        
    <!-- META SECTION -->
    <title>SIPKIA</title>            
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="icon" href="<?php echo site_url("assets")."/";?>favicon.ico" type="image/x-icon" />
    <!-- END META SECTION -->

    <!-- CSS INCLUDE -->  
    <?php 
    include("assets/temaPuskesmas.php") ;
    ?>
    <!-- EOF CSS INCLUDE -->
    <script src="<?php echo base_url()?>jschart/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>jschart/highcharts.js" type="text/javascript"></script>

</head>
<body>
    <!-- START PAGE CONTAINER -->
    <div class="page-container">
        <!-- START PAGE SIDEBAR -->
        <?php 
        include("assets/menuPuskesmas.php") ;
        ?>
        <!-- END PAGE SIDEBAR -->

        <!-- PAGE CONTENT -->
        <div class="page-content">
            <!-- START X-NAVIGATION VERTICAL -->
            <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                <!-- TOGGLE NAVIGATION -->
                <li class="xn-icon-button">
                    <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                </li>
                <!-- END TOGGLE NAVIGATION -->
                <!-- SIGN OUT -->
                <li class="xn-icon-button pull-right" >
                    <a style="width:100px;"href="#" class="mb-control" data-box="#mb-signout">Logout&nbsp<span class="fa fa-sign-out"></span></a>                        
                </li> 
                <!-- END SIGN OUT -->
                <!-- MESSAGES -->

            </ul>
            <!-- END X-NAVIGATION VERTICAL -->                     
            <?php 
            if ($bulan==1) {
                $bulanString="Januari";
            } else if ($bulan==2){
                $bulanString="Februari";
            }else if ($bulan==3){
                $bulanString="Maret";
            }else if ($bulan==4){
                $bulanString="April";
            }else if ($bulan==5){
                $bulanString="Mei";
            }else if ($bulan==6){
                $bulanString="Juni";
            }else if ($bulan==7){
                $bulanString="Juli";
            }else if ($bulan==8){
                $bulanString="Agustus";
            }else if ($bulan==9){
                $bulanString="September";
            }else if ($bulan==10){
                $bulanString="Oktober";
            }else if ($bulan==11){
                $bulanString="November";
            }else if ($bulan==12){
                $bulanString="Desember";
            }
            ?>
            <!-- PAGE TITLE -->
            <div class="page-title">                    
                <h2><span class="fa fa-arrow-circle-o-left"></span>&nbsp Pemetaan PWS-KIA Kecamatan Tumpang Tahun <?php echo $tahun; ?> Bulan <?php echo $bulanString; ?></h2>
            </div>
            <!-- END PAGE TITLE --> 

            <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">  
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default tabs">
                            <ul class="nav nav-tabs nav-justified">
                                <li class="active"><a href="#tabIbu" data-toggle="tab">Cakupan Ibu</a></li>
                                <li><a href="#tabBayi" data-toggle="tab">Cakupan Neonatus dan Bayi</a></li>
                                <li><a href="#tabAnak" data-toggle="tab">Cakupan Balita dan Anak</a></li>
                            </ul>
                            <div class="panel-body tab-content">
                                <div class="tab-pane active" id="tabIbu">
                                    <!-- START VERTICAL TABS WITH HEADING -->
                                    <div class="panel panel-default nav-tabs-vertical">                   
                                        <div class="tabs">
                                            <ul class="nav nav-tabs">
                                                <li class="active"><a href="#tab1" data-toggle="tab">K1</a></li>
                                                <li><a href="#tab2" data-toggle="tab">K4</a></li>
                                                <li><a href="#tab3" data-toggle="tab">Deteksi Risti</a></li>
                                                <li><a href="#tab4" data-toggle="tab">Resti Kom</a></li>
                                                <li><a href="#tab5" data-toggle="tab">Kom Keb</a></li>
                                                <li><a href="#tab6" data-toggle="tab">Persalinan Nakes</a></li>
                                                <li><a href="#tab7" data-toggle="tab">Persalinan Faskes</a></li>
                                                <li><a href="#tab8" data-toggle="tab">Pelayanan Nifas</a></li>
                                            </ul>

                                            <div class="panel-body tab-content">
                                                <div class="tab-pane active" id="tab1">
                                                    <div class="row"> 
                                                        <div class="col-md-6">
                                                            <!-- START DATATABLE EXPORT -->
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading">
                                                                    <div class="btn-group pull-left">
                                                                        <button class="btn btn-info" data-toggle="dropdown"><i class="glyphicon glyphicon-time"></i>Bulan <?php echo $bulanString; ?></button>
                                                                        <ul class="dropdown-menu">
                                                                            <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/1"?>"> Januari</a></li>
                                                                            <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/2"?>"> Februari</a></li>
                                                                            <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/3"?>"> Maret</a></li>
                                                                            <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/4"?>"> April</a></li>
                                                                            <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/5"?>"> Mei</a></li>
                                                                            <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/6"?>"> Juni</a></li>
                                                                            <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/7"?>"> Juli</a></li>
                                                                            <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/8"?>"> Agustus</a></li>
                                                                            <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/9"?>"> September</a></li>
                                                                            <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/10"?>"> Oktober</a></li>
                                                                            <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/11"?>"> November</a></li>
                                                                            <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/12"?>"> Desember</a></li>
                                                                        </ul>
                                                                    </div>

                                                                    <div class="btn-group pull-right">
                                                                        <button class="btn btn-danger" data-toggle="dropdown"><i class="fa fa-bars"></i> Export Data</button>
                                                                        <ul class="dropdown-menu">
                                                                            <li class="divider"></li>
                                                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'csv',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/csv.png' width="24"/> CSV</a></li>
                                                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'txt',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/txt.png' width="24"/> TXT</a></li>
                                                                            <li class="divider"></li>
                                                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'excel',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/xls.png' width="24"/> XLS</a></li>
                                                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'doc',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/word.png' width="24"/> Word</a></li>
                                                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'powerpoint',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/ppt.png' width="24"/> PowerPoint</a></li>
                                                                            <li class="divider"></li>
                                                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'png',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/png.png' width="24"/> PNG</a></li>
                                                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'pdf',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/pdf.png' width="24"/> PDF</a></li>
                                                                        </ul>
                                                                    </div>                                    
                                                                </div>
                                                                <div class="panel-body">
                                                                    <table id="customers2" class="table table-hover table-bordered" align="center">
                                                                        <thead>
                                                                            <tr>
                                                                                <tr>
                                                                                    <?php foreach ($target as $row): ?>
                                                                                        <th rowspan="2">Desa</th>
                                                                                        <th colspan="3">K1 (<?php echo $row->K1;?>%)</th>
                                                                                    <?php endforeach ?>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th scope="col">Cakupan Terhadap Target</th>
                                                                                    <th scope="col">Terhadap Cakupan Bulan Lalu</th>
                                                                                    <th scope="col">Status Cakupan</th>
                                                                                </tr>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <?php foreach ($data as $row):
                                                                            $Status="";
                                                                            if ($row->K1Status=="Baik") {
                                                                                $Status='class="success"';
                                                                            } else if ($row->K1Status=="Kurang") {
                                                                                $Status='class="warning"';
                                                                            } else if ($row->K1Status=="Cukup") {
                                                                                $Status='class="active"';
                                                                            }else if ($row->K1Status=="Jelek") {
                                                                                $Status='class="danger"';
                                                                            }
                                                                            ?>
                                                                            <tr <?php echo $Status; ?>style="font-size:10pt;">
                                                                                <th><?php echo ucfirst($row->desa); ?></th>
                                                                                <td><?php echo $row->K1Target; ?></td>
                                                                                <td><?php echo $row->K1Lalu; ?></td>
                                                                                <td><?php echo $row->K1Status; ?></td>
                                                                            </tr>
                                                                        <?php endforeach ?>           
                                                                    </tbody>
                                                                </table>                                    
                                                            </div>
                                                        </div>
                                                        <!-- END DATATABLE EXPORT -->
                                                    </div>
                                                    <div class="col-md-6">
                                                        <!-- START BAR CHART -->
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading">
                                                                <h3 class="panel-title">Diagram Cakupan</h3>                                
                                                            </div>
                                                            <div class="panel-body">
                                                               <div id="diagramKecamatan-K1" style="width:400px"></div>
                                                           </div>
                                                       </div>
                                                       <!-- END BAR CHART -->
                                                   </div>
                                               </div>

                                           </div>
                                           <div class="tab-pane" id="tab2">
                                            <div class="row"> 
                                                <div class="col-md-6">
                                                    <!-- START DATATABLE EXPORT -->
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <div class="btn-group pull-left">
                                                                <button class="btn btn-info" data-toggle="dropdown"><i class="glyphicon glyphicon-time"></i>Bulan <?php echo $bulanString; ?></button>
                                                                <ul class="dropdown-menu">
                                                                    <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/1"?>"> Januari</a></li>
                                                                    <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/2"?>"> Februari</a></li>
                                                                    <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/3"?>"> Maret</a></li>
                                                                    <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/4"?>"> April</a></li>
                                                                    <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/5"?>"> Mei</a></li>
                                                                    <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/6"?>"> Juni</a></li>
                                                                    <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/7"?>"> Juli</a></li>
                                                                    <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/8"?>"> Agustus</a></li>
                                                                    <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/9"?>"> September</a></li>
                                                                    <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/10"?>"> Oktober</a></li>
                                                                    <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/11"?>"> November</a></li>
                                                                    <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/12"?>"> Desember</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="btn-group pull-right">
                                                                <button class="btn btn-danger" data-toggle="dropdown"><i class="fa fa-bars"></i> Export Data</button>
                                                                <ul class="dropdown-menu">
                                                                    <li class="divider"></li>
                                                                    <li><a href="#" onClick ="$('#customers2').tableExport({type:'csv',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/csv.png' width="24"/> CSV</a></li>
                                                                    <li><a href="#" onClick ="$('#customers2').tableExport({type:'txt',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/txt.png' width="24"/> TXT</a></li>
                                                                    <li class="divider"></li>
                                                                    <li><a href="#" onClick ="$('#customers2').tableExport({type:'excel',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/xls.png' width="24"/> XLS</a></li>
                                                                    <li><a href="#" onClick ="$('#customers2').tableExport({type:'doc',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/word.png' width="24"/> Word</a></li>
                                                                    <li><a href="#" onClick ="$('#customers2').tableExport({type:'powerpoint',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/ppt.png' width="24"/> PowerPoint</a></li>
                                                                    <li class="divider"></li>
                                                                    <li><a href="#" onClick ="$('#customers2').tableExport({type:'png',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/png.png' width="24"/> PNG</a></li>
                                                                    <li><a href="#" onClick ="$('#customers2').tableExport({type:'pdf',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/pdf.png' width="24"/> PDF</a></li>
                                                                </ul>
                                                            </div>                                    
                                                        </div>
                                                        <div class="panel-body">
                                                            <table id="customers2" class="table table-hover table-bordered" align="center">
                                                                <thead>
                                                                    <tr>
                                                                        <tr>
                                                                            <?php foreach ($target as $row): ?>
                                                                                <th rowspan="2">Desa</th>
                                                                                <th colspan="3">K4 (<?php echo $row->K4;?>%)</th>
                                                                            <?php endforeach ?>

                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="col">Cakupan Terhadap Target</th>
                                                                            <th scope="col">Terhadap Cakupan Bulan Lalu</th>
                                                                            <th scope="col">Status Cakupan</th>
                                                                        </tr>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php foreach ($data as $row):
                                                                    $Status="";
                                                                    if ($row->K4Status=="Baik") {
                                                                        $Status='class="success"';
                                                                    } else if ($row->K4Status=="Kurang") {
                                                                        $Status='class="warning"';
                                                                    } else if ($row->K4Status=="Cukup") {
                                                                        $Status='class="active"';
                                                                    }else if ($row->K4Status=="Jelek") {
                                                                        $Status='class="danger"';
                                                                    }
                                                                    ?>
                                                                    <tr <?php echo $Status; ?>style="font-size:10pt;">
                                                                        <th><?php echo ucfirst($row->desa); ?></th>
                                                                        <td><?php echo $row->K4Target; ?></td>
                                                                        <td><?php echo $row->K4Lalu; ?></td>
                                                                        <td><?php echo $row->K4Status; ?></td>
                                                                    </tr>
                                                                <?php endforeach ?>           
                                                            </tbody>
                                                        </table>                                    
                                                    </div>
                                                </div>
                                                <!-- END DATATABLE EXPORT -->
                                            </div>
                                            <div class="col-md-6">
                                                <!-- START BAR CHART -->
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h3 class="panel-title">Diagram Cakupan</h3>                                
                                                    </div>
                                                    <div class="panel-body">
                                                        <div id="diagramKecamatan-K4" style="width:400px"></div>
                                                    </div>
                                                </div>
                                                <!-- END BAR CHART -->
                                            </div>
                                        </div>

                                    </div>
                                    <div class="tab-pane" id="tab3">
                                        <div class="row"> 
                                            <div class="col-md-6">
                                                <!-- START DATATABLE EXPORT -->
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <div class="btn-group pull-left">
                                                            <button class="btn btn-info" data-toggle="dropdown"><i class="glyphicon glyphicon-time"></i>Bulan <?php echo $bulanString; ?></button>
                                                            <ul class="dropdown-menu">
                                                                <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/1"?>"> Januari</a></li>
                                                                <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/2"?>"> Februari</a></li>
                                                                <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/3"?>"> Maret</a></li>
                                                                <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/4"?>"> April</a></li>
                                                                <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/5"?>"> Mei</a></li>
                                                                <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/6"?>"> Juni</a></li>
                                                                <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/7"?>"> Juli</a></li>
                                                                <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/8"?>"> Agustus</a></li>
                                                                <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/9"?>"> September</a></li>
                                                                <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/10"?>"> Oktober</a></li>
                                                                <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/11"?>"> November</a></li>
                                                                <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/12"?>"> Desember</a></li>
                                                            </ul>
                                                        </div>

                                                        <div class="btn-group pull-right">
                                                            <button class="btn btn-danger" data-toggle="dropdown"><i class="fa fa-bars"></i> Export Data</button>
                                                            <ul class="dropdown-menu">
                                                                <li class="divider"></li>
                                                                <li><a href="#" onClick ="$('#customers2').tableExport({type:'csv',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/csv.png' width="24"/> CSV</a></li>
                                                                <li><a href="#" onClick ="$('#customers2').tableExport({type:'txt',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/txt.png' width="24"/> TXT</a></li>
                                                                <li class="divider"></li>
                                                                <li><a href="#" onClick ="$('#customers2').tableExport({type:'excel',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/xls.png' width="24"/> XLS</a></li>
                                                                <li><a href="#" onClick ="$('#customers2').tableExport({type:'doc',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/word.png' width="24"/> Word</a></li>
                                                                <li><a href="#" onClick ="$('#customers2').tableExport({type:'powerpoint',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/ppt.png' width="24"/> PowerPoint</a></li>
                                                                <li class="divider"></li>
                                                                <li><a href="#" onClick ="$('#customers2').tableExport({type:'png',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/png.png' width="24"/> PNG</a></li>
                                                                <li><a href="#" onClick ="$('#customers2').tableExport({type:'pdf',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/pdf.png' width="24"/> PDF</a></li>
                                                            </ul>
                                                        </div>                                    
                                                    </div>
                                                    <div class="panel-body">
                                                        <table id="customers2" class="table table-hover table-bordered" align="center">
                                                            <thead>
                                                                <tr>
                                                                    <tr>
                                                                        <?php foreach ($target as $row): ?>
                                                                            <th rowspan="2">Desa</th>
                                                                            <th colspan="3">Deteksi Resti (<?php echo $row->deteksiResti;?>%)</th>
                                                                        <?php endforeach ?>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="col">Cakupan Terhadap Target</th>
                                                                        <th scope="col">Terhadap Cakupan Bulan Lalu</th>
                                                                        <th scope="col">Status Cakupan</th>
                                                                    </tr>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php foreach ($data as $row):
                                                                $Status="";
                                                                if ($row->deteksiRestiStatus=="Baik") {
                                                                    $Status='class="success"';
                                                                } else if ($row->deteksiRestiStatus=="Kurang") {
                                                                    $Status='class="warning"';
                                                                } else if ($row->deteksiRestiStatus=="Cukup") {
                                                                    $Status='class="active"';
                                                                }else if ($row->deteksiRestiStatus=="Jelek") {
                                                                    $Status='class="danger"';
                                                                }
                                                                ?>
                                                                <tr <?php echo $Status; ?>style="font-size:10pt;">
                                                                    <th><?php echo ucfirst($row->desa); ?></th>
                                                                    <td><?php echo $row->deteksiRestiTarget; ?></td>
                                                                    <td><?php echo $row->deteksiRestiLalu; ?></td>
                                                                    <td><?php echo $row->deteksiRestiStatus; ?></td>
                                                                </tr>
                                                            <?php endforeach ?>           
                                                        </tbody>
                                                    </table>                                    
                                                </div>
                                            </div>
                                            <!-- END DATATABLE EXPORT -->
                                        </div>
                                        <div class="col-md-6">
                                            <!-- START BAR CHART -->
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title">Diagram Cakupan</h3>                                
                                                </div>
                                                <div class="panel-body">
                                                    <div id="diagramKecamatan-deteksiResti" style="width:400px"></div>
                                                </div>
                                            </div>
                                            <!-- END BAR CHART -->
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab4">
                                    <div class="row"> 
                                        <div class="col-md-6">

                                            <!-- START DATATABLE EXPORT -->
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <div class="btn-group pull-left">
                                                        <button class="btn btn-info" data-toggle="dropdown"><i class="glyphicon glyphicon-time"></i>Bulan <?php echo $bulanString; ?></button>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/1"?>"> Januari</a></li>
                                                            <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/2"?>"> Februari</a></li>
                                                            <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/3"?>"> Maret</a></li>
                                                            <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/4"?>"> April</a></li>
                                                            <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/5"?>"> Mei</a></li>
                                                            <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/6"?>"> Juni</a></li>
                                                            <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/7"?>"> Juli</a></li>
                                                            <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/8"?>"> Agustus</a></li>
                                                            <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/9"?>"> September</a></li>
                                                            <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/10"?>"> Oktober</a></li>
                                                            <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/11"?>"> November</a></li>
                                                            <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/12"?>"> Desember</a></li>
                                                        </ul>
                                                    </div>       
                                                    <div class="btn-group pull-right">
                                                        <button class="btn btn-danger" data-toggle="dropdown"><i class="fa fa-bars"></i> Export Data</button>
                                                        <ul class="dropdown-menu">
                                                            <li class="divider"></li>
                                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'csv',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/csv.png' width="24"/> CSV</a></li>
                                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'txt',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/txt.png' width="24"/> TXT</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'excel',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/xls.png' width="24"/> XLS</a></li>
                                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'doc',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/word.png' width="24"/> Word</a></li>
                                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'powerpoint',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/ppt.png' width="24"/> PowerPoint</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'png',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/png.png' width="24"/> PNG</a></li>
                                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'pdf',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/pdf.png' width="24"/> PDF</a></li>
                                                        </ul>
                                                    </div>                                    
                                                </div>
                                                <div class="panel-body">
                                                    <table id="customers2" class="table table-hover table-bordered" align="center">
                                                        <thead>
                                                            <tr>
                                                                <tr>
                                                                    <?php foreach ($target as $row): ?>
                                                                        <th rowspan="2">Desa</th>
                                                                        <th colspan="3">Kom Keb (<?php echo $row->komKeb;?>%)</th>
                                                                    <?php endforeach ?>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="col">Cakupan Terhadap Target</th>
                                                                    <th scope="col">Terhadap Cakupan Bulan Lalu</th>
                                                                    <th scope="col">Status Cakupan</th>
                                                                </tr>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php foreach ($data as $row):
                                                            $Status="";
                                                            if ($row->restiKomStatus=="Baik") {
                                                                $Status='class="success"';
                                                            } else if ($row->restiKomStatus=="Kurang") {
                                                                $Status='class="warning"';
                                                            } else if ($row->restiKomStatus=="Cukup") {
                                                                $Status='class="active"';
                                                            }else if ($row->restiKomStatus=="Jelek") {
                                                                $Status='class="danger"';
                                                            }
                                                            ?>
                                                            <tr <?php echo $Status; ?>style="font-size:10pt;">
                                                                <th><?php echo ucfirst($row->desa); ?></th>
                                                                <td><?php echo $row->restiKomTarget; ?></td>
                                                                <td><?php echo $row->restiKomLalu; ?></td>
                                                                <td><?php echo $row->restiKomStatus; ?></td>
                                                            </tr>
                                                        <?php endforeach ?>           
                                                    </tbody>
                                                </table>                                    
                                            </div>
                                        </div>
                                        <!-- END DATATABLE EXPORT -->
                                    </div>
                                    <div class="col-md-6">
                                        <!-- START BAR CHART -->
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">Diagram Cakupan</h3>                                
                                            </div>
                                            <div class="panel-body">
                                                <div id="diagramKecamatan-restiKom" style="width:400px"></div>
                                            </div>
                                        </div>
                                        <!-- END BAR CHART -->
                                    </div>
                                </div> 
                            </div>  
                            <div class="tab-pane" id="tab5">
                                <div class="row"> 
                                    <div class="col-md-6">
                                        <!-- START DATATABLE EXPORT -->
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <div class="btn-group pull-left">
                                                    <button class="btn btn-info" data-toggle="dropdown"><i class="glyphicon glyphicon-time"></i>Bulan <?php echo $bulanString; ?></button>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/1"?>"> Januari</a></li>
                                                        <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/2"?>"> Februari</a></li>
                                                        <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/3"?>"> Maret</a></li>
                                                        <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/4"?>"> April</a></li>
                                                        <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/5"?>"> Mei</a></li>
                                                        <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/6"?>"> Juni</a></li>
                                                        <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/7"?>"> Juli</a></li>
                                                        <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/8"?>"> Agustus</a></li>
                                                        <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/9"?>"> September</a></li>
                                                        <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/10"?>"> Oktober</a></li>
                                                        <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/11"?>"> November</a></li>
                                                        <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/12"?>"> Desember</a></li>
                                                    </ul>
                                                </div>       
                                                <div class="btn-group pull-right">
                                                    <button class="btn btn-danger" data-toggle="dropdown"><i class="fa fa-bars"></i> Export Data</button>
                                                    <ul class="dropdown-menu">
                                                        <li class="divider"></li>
                                                        <li><a href="#" onClick ="$('#customers2').tableExport({type:'csv',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/csv.png' width="24"/> CSV</a></li>
                                                        <li><a href="#" onClick ="$('#customers2').tableExport({type:'txt',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/txt.png' width="24"/> TXT</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="#" onClick ="$('#customers2').tableExport({type:'excel',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/xls.png' width="24"/> XLS</a></li>
                                                        <li><a href="#" onClick ="$('#customers2').tableExport({type:'doc',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/word.png' width="24"/> Word</a></li>
                                                        <li><a href="#" onClick ="$('#customers2').tableExport({type:'powerpoint',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/ppt.png' width="24"/> PowerPoint</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="#" onClick ="$('#customers2').tableExport({type:'png',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/png.png' width="24"/> PNG</a></li>
                                                        <li><a href="#" onClick ="$('#customers2').tableExport({type:'pdf',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/pdf.png' width="24"/> PDF</a></li>
                                                    </ul>
                                                </div>                                    
                                            </div>
                                            <div class="panel-body">
                                                <table id="customers2" class="table table-hover table-bordered" align="center">
                                                    <thead>
                                                        <tr>
                                                            <tr>
                                                                <?php foreach ($target as $row): ?>
                                                                    <th rowspan="2">Desa</th>
                                                                    <th colspan="3">Kom Keb (<?php echo $row->komKeb;?>%)</th>
                                                                <?php endforeach ?>
                                                            </tr>
                                                            <tr>
                                                                <th scope="col">Cakupan Terhadap Target</th>
                                                                <th scope="col">Terhadap Cakupan Bulan Lalu</th>
                                                                <th scope="col">Status Cakupan</th>
                                                            </tr>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($data as $row):
                                                        $Status="";
                                                        if ($row->komKebStatus=="Baik") {
                                                            $Status='class="success"';
                                                        } else if ($row->komKebStatus=="Kurang") {
                                                            $Status='class="warning"';
                                                        } else if ($row->komKebStatus=="Cukup") {
                                                            $Status='class="active"';
                                                        }else if ($row->komKebStatus=="Jelek") {
                                                            $Status='class="danger"';
                                                        }
                                                        ?>
                                                        <tr <?php echo $Status; ?>style="font-size:10pt;">
                                                            <th><?php echo ucfirst($row->desa); ?></th>
                                                            <td><?php echo $row->komKebTarget; ?></td>
                                                            <td><?php echo $row->komKebLalu; ?></td>
                                                            <td><?php echo $row->komKebStatus; ?></td>
                                                        </tr>
                                                    <?php endforeach ?>           
                                                </tbody>
                                            </table>                                    
                                        </div>
                                    </div>
                                    <!-- END DATATABLE EXPORT --> 
                                </div>
                                <div class="col-md-6">
                                    <!-- START BAR CHART -->
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Diagram Cakupan</h3>                                
                                        </div>
                                        <div class="panel-body">
                                            <div id="diagramKecamatan-komKeb" style="width:400px"></div>
                                        </div>
                                    </div>
                                    <!-- END BAR CHART -->
                                </div>
                            </div>
                        </div>  
                        <div class="tab-pane" id="tab6">
                            <div class="row"> 
                                <div class="col-md-6">
                                    <!-- START DATATABLE EXPORT -->
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="btn-group pull-left">
                                                <button class="btn btn-info" data-toggle="dropdown"><i class="glyphicon glyphicon-time"></i>Bulan <?php echo $bulanString; ?></button>
                                                <ul class="dropdown-menu">
                                                    <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/1"?>"> Januari</a></li>
                                                    <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/2"?>"> Februari</a></li>
                                                    <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/3"?>"> Maret</a></li>
                                                    <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/4"?>"> April</a></li>
                                                    <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/5"?>"> Mei</a></li>
                                                    <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/6"?>"> Juni</a></li>
                                                    <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/7"?>"> Juli</a></li>
                                                    <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/8"?>"> Agustus</a></li>
                                                    <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/9"?>"> September</a></li>
                                                    <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/10"?>"> Oktober</a></li>
                                                    <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/11"?>"> November</a></li>
                                                    <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/12"?>"> Desember</a></li>
                                                </ul>
                                            </div>     
                                            <div class="btn-group pull-right">
                                                <button class="btn btn-danger" data-toggle="dropdown"><i class="fa fa-bars"></i> Export Data</button>
                                                <ul class="dropdown-menu">
                                                    <li class="divider"></li>
                                                    <li><a href="#" onClick ="$('#customers2').tableExport({type:'csv',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/csv.png' width="24"/> CSV</a></li>
                                                    <li><a href="#" onClick ="$('#customers2').tableExport({type:'txt',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/txt.png' width="24"/> TXT</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#" onClick ="$('#customers2').tableExport({type:'excel',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/xls.png' width="24"/> XLS</a></li>
                                                    <li><a href="#" onClick ="$('#customers2').tableExport({type:'doc',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/word.png' width="24"/> Word</a></li>
                                                    <li><a href="#" onClick ="$('#customers2').tableExport({type:'powerpoint',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/ppt.png' width="24"/> PowerPoint</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#" onClick ="$('#customers2').tableExport({type:'png',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/png.png' width="24"/> PNG</a></li>
                                                    <li><a href="#" onClick ="$('#customers2').tableExport({type:'pdf',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/pdf.png' width="24"/> PDF</a></li>
                                                </ul>
                                            </div>                                    
                                        </div>
                                        <div class="panel-body">
                                            <table id="customers2" class="table table-hover table-bordered" align="center">
                                                <thead>
                                                    <tr>
                                                        <tr>
                                                            <?php foreach ($target as $row): ?>
                                                                <th rowspan="2">Desa</th>
                                                                <th colspan="3">Persalinan Nakes (<?php echo $row->persalinanNakes;?>%)</th>
                                                            <?php endforeach ?>
                                                        </tr>
                                                        <tr>
                                                            <th scope="col">Cakupan Terhadap Target</th>
                                                            <th scope="col">Terhadap Cakupan Bulan Lalu</th>
                                                            <th scope="col">Status Cakupan</th>
                                                        </tr>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($data as $row):
                                                    $Status="";
                                                    if ($row->persalinanNakesStatus=="Baik") {
                                                        $Status='class="success"';
                                                    } else if ($row->persalinanNakesStatus=="Kurang") {
                                                        $Status='class="warning"';
                                                    } else if ($row->persalinanNakesStatus=="Cukup") {
                                                        $Status='class="active"';
                                                    }else if ($row->persalinanNakesStatus=="Jelek") {
                                                        $Status='class="danger"';
                                                    }
                                                    ?>
                                                    <tr <?php echo $Status; ?>style="font-size:10pt;">
                                                        <th><?php echo ucfirst($row->desa); ?></th>
                                                        <td><?php echo $row->persalinanNakesTarget; ?></td>
                                                        <td><?php echo $row->persalinanNakesLalu; ?></td>
                                                        <td><?php echo $row->persalinanNakesStatus; ?></td>
                                                    </tr>
                                                <?php endforeach ?>           
                                            </tbody>
                                        </table>                                    
                                    </div>
                                </div>
                                <!-- END DATATABLE EXPORT --> 
                            </div>
                            <div class="col-md-6">
                                <!-- START BAR CHART -->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Diagram Cakupan</h3>                                
                                    </div>
                                    <div class="panel-body">
                                        <div id="diagramKecamatan-persalinanNakes" style="width:400px"></div>
                                    </div>
                                </div>
                                <!-- END BAR CHART -->
                            </div>
                        </div>
                    </div>  
                    <div class="tab-pane" id="tab7">
                        <div class="row"> 
                            <div class="col-md-6">
                                <!-- START DATATABLE EXPORT -->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <div class="btn-group pull-left">
                                            <button class="btn btn-info" data-toggle="dropdown"><i class="glyphicon glyphicon-time"></i>Bulan <?php echo $bulanString; ?></button>
                                            <ul class="dropdown-menu">
                                                <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/1"?>"> Januari</a></li>
                                                <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/2"?>"> Februari</a></li>
                                                <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/3"?>"> Maret</a></li>
                                                <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/4"?>"> April</a></li>
                                                <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/5"?>"> Mei</a></li>
                                                <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/6"?>"> Juni</a></li>
                                                <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/7"?>"> Juli</a></li>
                                                <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/8"?>"> Agustus</a></li>
                                                <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/9"?>"> September</a></li>
                                                <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/10"?>"> Oktober</a></li>
                                                <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/11"?>"> November</a></li>
                                                <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/12"?>"> Desember</a></li>
                                            </ul>
                                        </div>       
                                        <div class="btn-group pull-right">
                                            <button class="btn btn-danger" data-toggle="dropdown"><i class="fa fa-bars"></i> Export Data</button>
                                            <ul class="dropdown-menu">
                                                <li class="divider"></li>
                                                <li><a href="#" onClick ="$('#customers2').tableExport({type:'csv',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/csv.png' width="24"/> CSV</a></li>
                                                <li><a href="#" onClick ="$('#customers2').tableExport({type:'txt',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/txt.png' width="24"/> TXT</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#" onClick ="$('#customers2').tableExport({type:'excel',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/xls.png' width="24"/> XLS</a></li>
                                                <li><a href="#" onClick ="$('#customers2').tableExport({type:'doc',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/word.png' width="24"/> Word</a></li>
                                                <li><a href="#" onClick ="$('#customers2').tableExport({type:'powerpoint',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/ppt.png' width="24"/> PowerPoint</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#" onClick ="$('#customers2').tableExport({type:'png',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/png.png' width="24"/> PNG</a></li>
                                                <li><a href="#" onClick ="$('#customers2').tableExport({type:'pdf',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/pdf.png' width="24"/> PDF</a></li>
                                            </ul>
                                        </div>                                    
                                    </div>
                                    <div class="panel-body">
                                        <table id="customers2" class="table table-hover table-bordered" align="center">
                                            <thead>
                                                <tr>
                                                    <tr>
                                                        <?php foreach ($target as $row): ?>
                                                            <th rowspan="2">Desa</th>
                                                            <th colspan="3">Persalinan Faskes (<?php echo $row->persalinanFaskes;?>%)</th>
                                                        <?php endforeach ?>
                                                    </tr>
                                                    <tr>
                                                        <th scope="col">Cakupan Terhadap Target</th>
                                                        <th scope="col">Terhadap Cakupan Bulan Lalu</th>
                                                        <th scope="col">Status Cakupan</th>
                                                    </tr>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($data as $row):
                                                $Status="";
                                                if ($row->persalinanFaskesStatus=="Baik") {
                                                    $Status='class="success"';
                                                } else if ($row->persalinanFaskesStatus=="Kurang") {
                                                    $Status='class="warning"';
                                                } else if ($row->persalinanFaskesStatus=="Cukup") {
                                                    $Status='class="active"';
                                                }else if ($row->persalinanFaskesStatus=="Jelek") {
                                                    $Status='class="danger"';
                                                }
                                                ?>
                                                <tr <?php echo $Status; ?>style="font-size:10pt;">
                                                    <th><?php echo ucfirst($row->desa); ?></th>
                                                    <td><?php echo $row->persalinanFaskesTarget; ?></td>
                                                    <td><?php echo $row->persalinanFaskesLalu; ?></td>
                                                    <td><?php echo $row->persalinanFaskesStatus; ?></td>
                                                </tr>
                                            <?php endforeach ?>           
                                        </tbody>
                                    </table>                                    
                                </div>
                            </div>
                            <!-- END DATATABLE EXPORT --> 
                        </div>
                        <div class="col-md-6">
                            <!-- START BAR CHART -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Diagram Cakupan</h3>                                
                                </div>
                                <div class="panel-body">
                                    <div id="diagramKecamatan-persalinanFaskes" style="width:400px"></div>
                                </div>
                            </div>
                            <!-- END BAR CHART -->
                        </div>
                    </div>
                </div>  
                <div class="tab-pane" id="tab8">
                    <div class="row"> 
                        <div class="col-md-6">
                            <!-- START DATATABLE EXPORT -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="btn-group pull-left">
                                        <button class="btn btn-info" data-toggle="dropdown"><i class="glyphicon glyphicon-time"></i>Bulan <?php echo $bulanString; ?></button>
                                        <ul class="dropdown-menu">
                                            <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/1"?>"> Januari</a></li>
                                            <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/2"?>"> Februari</a></li>
                                            <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/3"?>"> Maret</a></li>
                                            <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/4"?>"> April</a></li>
                                            <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/5"?>"> Mei</a></li>
                                            <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/6"?>"> Juni</a></li>
                                            <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/7"?>"> Juli</a></li>
                                            <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/8"?>"> Agustus</a></li>
                                            <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/9"?>"> September</a></li>
                                            <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/10"?>"> Oktober</a></li>
                                            <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/11"?>"> November</a></li>
                                            <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/12"?>"> Desember</a></li>
                                        </ul>
                                    </div>      
                                    <div class="btn-group pull-right">
                                        <button class="btn btn-danger" data-toggle="dropdown"><i class="fa fa-bars"></i> Export Data</button>
                                        <ul class="dropdown-menu">
                                            <li class="divider"></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'csv',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/csv.png' width="24"/> CSV</a></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'txt',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/txt.png' width="24"/> TXT</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'excel',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/xls.png' width="24"/> XLS</a></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'doc',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/word.png' width="24"/> Word</a></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'powerpoint',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/ppt.png' width="24"/> PowerPoint</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'png',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/png.png' width="24"/> PNG</a></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'pdf',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/pdf.png' width="24"/> PDF</a></li>
                                        </ul>
                                    </div>                                    
                                </div>
                                <div class="panel-body">
                                    <table id="customers2" class="table table-hover table-bordered" align="center">
                                        <thead>
                                            <tr>
                                                <tr>
                                                    <?php foreach ($target as $row): ?>
                                                        <th rowspan="2">Desa</th>
                                                        <th colspan="3">Nifas(<?php echo $row->pelayananNifas;?>%)</th>
                                                    <?php endforeach ?>
                                                </tr>
                                                <tr>
                                                    <th scope="col">Cakupan Terhadap Target</th>
                                                    <th scope="col">Terhadap Cakupan Bulan Lalu</th>
                                                    <th scope="col">Status Cakupan</th>
                                                </tr>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($data as $row):
                                            $Status="";
                                            if ($row->pelayananNifasStatus=="Baik") {
                                                $Status='class="success"';
                                            } else if ($row->pelayananNifasStatus=="Kurang") {
                                                $Status='class="warning"';
                                            } else if ($row->pelayananNifasStatus=="Cukup") {
                                                $Status='class="active"';
                                            }else if ($row->pelayananNifasStatus=="Jelek") {
                                                $Status='class="danger"';
                                            }
                                            ?>
                                            <tr <?php echo $Status; ?>style="font-size:10pt;">
                                                <th><?php echo ucfirst($row->desa); ?></th>
                                                <td><?php echo $row->pelayananNifasTarget; ?></td>
                                                <td><?php echo $row->pelayananNifasLalu; ?></td>
                                                <td><?php echo $row->pelayananNifasStatus; ?></td>
                                            </tr>
                                        <?php endforeach ?>           
                                    </tbody>
                                </table>                                    
                            </div>
                        </div>
                        <!-- END DATATABLE EXPORT --> 

                    </div>
                    <div class="col-md-6">
                        <!-- START BAR CHART -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Diagram Cakupan</h3>                                
                            </div>
                            <div class="panel-body">
                                <div id="diagramKecamatan-pelayananNifas" style="width:400px"></div>
                            </div>
                        </div>
                        <!-- END BAR CHART -->
                    </div>
                </div>
            </div>  <!-- Tab 8 -->
        </div> <!--  -->
    </div>
</div>                        
<!-- END VERTICAL TABS WITH HEADING -->
</div>
<div class="tab-pane" id="tabBayi">
    <!-- START VERTICAL TABS WITH HEADING -->
    <div class="panel panel-default nav-tabs-vertical">                   
        <div class="tabs">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab9" data-toggle="tab">KN1</a></li>
                <li><a href="#tab10" data-toggle="tab">KN Lengkap</a></li>
                <li><a href="#tab11" data-toggle="tab">Neonatal Kom</a></li>
                <li><a href="#tab12" data-toggle="tab">Bayi Paripurna</a></li>
            </ul>
            <div class="panel-body tab-content">
                <div class="tab-pane active" id="tab9">
                    <div class="row"> 
                        <div class="col-md-6">
                            <!-- START DATATABLE EXPORT -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="btn-group pull-left">
                                        <button class="btn btn-info" data-toggle="dropdown"><i class="glyphicon glyphicon-time"></i>Bulan <?php echo $bulanString; ?></button>
                                        <ul class="dropdown-menu">
                                            <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/1"?>"> Januari</a></li>
                                            <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/2"?>"> Februari</a></li>
                                            <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/3"?>"> Maret</a></li>
                                            <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/4"?>"> April</a></li>
                                            <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/5"?>"> Mei</a></li>
                                            <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/6"?>"> Juni</a></li>
                                            <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/7"?>"> Juli</a></li>
                                            <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/8"?>"> Agustus</a></li>
                                            <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/9"?>"> September</a></li>
                                            <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/10"?>"> Oktober</a></li>
                                            <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/11"?>"> November</a></li>
                                            <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/12"?>"> Desember</a></li>
                                        </ul>
                                    </div>       
                                    <div class="btn-group pull-right">
                                        <button class="btn btn-danger" data-toggle="dropdown"><i class="fa fa-bars"></i> Export Data</button>
                                        <ul class="dropdown-menu">
                                            <li class="divider"></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'csv',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/csv.png' width="24"/> CSV</a></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'txt',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/txt.png' width="24"/> TXT</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'excel',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/xls.png' width="24"/> XLS</a></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'doc',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/word.png' width="24"/> Word</a></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'powerpoint',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/ppt.png' width="24"/> PowerPoint</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'png',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/png.png' width="24"/> PNG</a></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'pdf',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/pdf.png' width="24"/> PDF</a></li>
                                        </ul>
                                    </div>                                    
                                </div>
                                <div class="panel-body">
                                    <table id="customers2" class="table table-hover table-bordered" align="center">
                                        <thead>
                                            <tr>
                                                <tr>
                                                    <?php foreach ($target as $row): ?>
                                                        <th rowspan="2">Desa</th>
                                                        <th colspan="3">KN1 (<?php echo $row->KN1;?>%)</th>
                                                    <?php endforeach ?>
                                                </tr>
                                                <tr>
                                                    <th scope="col">Cakupan Terhadap Target</th>
                                                    <th scope="col">Terhadap Cakupan Bulan Lalu</th>
                                                    <th scope="col">Status Cakupan</th>
                                                </tr>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($data as $row):
                                            $Status="";
                                            if ($row->KN1Status=="Baik") {
                                                $Status='class="success"';
                                            } else if ($row->KN1Status=="Kurang") {
                                                $Status='class="warning"';
                                            } else if ($row->KN1Status=="Cukup") {
                                                $Status='class="active"';
                                            }else if ($row->KN1Status=="Jelek") {
                                                $Status='class="danger"';
                                            }
                                            ?>
                                            <tr <?php echo $Status; ?>style="font-size:10pt;">
                                                <th><?php echo ucfirst($row->desa); ?></th>
                                                <td><?php echo $row->KN1Target; ?></td>
                                                <td><?php echo $row->KN1Lalu; ?></td>
                                                <td><?php echo $row->KN1Status; ?></td>
                                            </tr>
                                        <?php endforeach ?>           
                                    </tbody>
                                </table>                                    
                            </div>
                        </div>
                        <!-- END DATATABLE EXPORT -->
                    </div>
                    <div class="col-md-6">
                        <!-- START BAR CHART -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Diagram Cakupan</h3>                                
                            </div>
                            <div class="panel-body">
                                <div id="diagramKecamatan-KN1" style="width:400px"></div>
                            </div>
                        </div>
                        <!-- END BAR CHART -->
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="tab10">
                <div class="row"> 
                    <div class="col-md-6">
                        <!-- START DATATABLE EXPORT -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="btn-group pull-left">
                                    <button class="btn btn-info" data-toggle="dropdown"><i class="glyphicon glyphicon-time"></i>Bulan <?php echo $bulanString; ?></button>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/1"?>"> Januari</a></li>
                                        <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/2"?>"> Februari</a></li>
                                        <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/3"?>"> Maret</a></li>
                                        <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/4"?>"> April</a></li>
                                        <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/5"?>"> Mei</a></li>
                                        <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/6"?>"> Juni</a></li>
                                        <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/7"?>"> Juli</a></li>
                                        <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/8"?>"> Agustus</a></li>
                                        <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/9"?>"> September</a></li>
                                        <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/10"?>"> Oktober</a></li>
                                        <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/11"?>"> November</a></li>
                                        <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/12"?>"> Desember</a></li>
                                    </ul>
                                </div>      
                                <div class="btn-group pull-right">
                                    <button class="btn btn-danger" data-toggle="dropdown"><i class="fa fa-bars"></i> Export Data</button>
                                    <ul class="dropdown-menu">
                                        <li class="divider"></li>
                                        <li><a href="#" onClick ="$('#customers2').tableExport({type:'csv',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/csv.png' width="24"/> CSV</a></li>
                                        <li><a href="#" onClick ="$('#customers2').tableExport({type:'txt',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/txt.png' width="24"/> TXT</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#" onClick ="$('#customers2').tableExport({type:'excel',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/xls.png' width="24"/> XLS</a></li>
                                        <li><a href="#" onClick ="$('#customers2').tableExport({type:'doc',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/word.png' width="24"/> Word</a></li>
                                        <li><a href="#" onClick ="$('#customers2').tableExport({type:'powerpoint',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/ppt.png' width="24"/> PowerPoint</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#" onClick ="$('#customers2').tableExport({type:'png',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/png.png' width="24"/> PNG</a></li>
                                        <li><a href="#" onClick ="$('#customers2').tableExport({type:'pdf',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/pdf.png' width="24"/> PDF</a></li>
                                    </ul>
                                </div>                                    
                            </div>
                            <div class="panel-body">
                                <table id="customers2" class="table table-hover table-bordered" align="center">
                                    <thead>
                                        <tr>
                                            <tr>
                                                <?php foreach ($target as $row): ?>
                                                    <th rowspan="2">Desa</th>
                                                    <th colspan="3">KN Lengkap (<?php echo $row->KNLengkap;?>%)</th>
                                                <?php endforeach ?>
                                            </tr>
                                            <tr>
                                                <th scope="col">Cakupan Terhadap Target</th>
                                                <th scope="col">Terhadap Cakupan Bulan Lalu</th>
                                                <th scope="col">Status Cakupan</th>
                                            </tr>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($data as $row):
                                        $Status="";
                                        if ($row->KNLengkapStatus=="Baik") {
                                            $Status='class="success"';
                                        } else if ($row->KNLengkapStatus=="Kurang") {
                                            $Status='class="warning"';
                                        } else if ($row->KNLengkapStatus=="Cukup") {
                                            $Status='class="active"';
                                        }else if ($row->KNLengkapStatus=="Jelek") {
                                            $Status='class="danger"';
                                        }
                                        ?>
                                        <tr <?php echo $Status; ?>style="font-size:10pt;">
                                            <th><?php echo ucfirst($row->desa); ?></th>
                                            <td><?php echo $row->KNLengkapTarget; ?></td>
                                            <td><?php echo $row->KNLengkapLalu; ?></td>
                                            <td><?php echo $row->KNLengkapStatus; ?></td>
                                        </tr>
                                    <?php endforeach ?>           
                                </tbody>
                            </table>                                    
                        </div>
                    </div>
                    <!-- END DATATABLE EXPORT -->

                </div>
                <div class="col-md-6">
                    <!-- START BAR CHART -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Diagram Cakupan</h3>                                
                        </div>
                        <div class="panel-body">
                            <div id="diagramKecamatan-KNlengkap" style="width:400px"></div>
                        </div>
                    </div>
                    <!-- END BAR CHART -->
                </div>
            </div>
        </div>
        <div class="tab-pane" id="tab11">
            <div class="row"> 
                <div class="col-md-6">
                   <!-- START DATATABLE EXPORT -->
                   <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="btn-group pull-left">
                            <button class="btn btn-info" data-toggle="dropdown"><i class="glyphicon glyphicon-time"></i>Bulan <?php echo $bulanString; ?></button>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/1"?>"> Januari</a></li>
                                <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/2"?>"> Februari</a></li>
                                <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/3"?>"> Maret</a></li>
                                <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/4"?>"> April</a></li>
                                <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/5"?>"> Mei</a></li>
                                <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/6"?>"> Juni</a></li>
                                <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/7"?>"> Juli</a></li>
                                <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/8"?>"> Agustus</a></li>
                                <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/9"?>"> September</a></li>
                                <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/10"?>"> Oktober</a></li>
                                <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/11"?>"> November</a></li>
                                <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/12"?>"> Desember</a></li>
                            </ul>
                        </div>      
                        <div class="btn-group pull-right">
                            <button class="btn btn-danger" data-toggle="dropdown"><i class="fa fa-bars"></i> Export Data</button>
                            <ul class="dropdown-menu">
                                <li class="divider"></li>
                                <li><a href="#" onClick ="$('#customers2').tableExport({type:'csv',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/csv.png' width="24"/> CSV</a></li>
                                <li><a href="#" onClick ="$('#customers2').tableExport({type:'txt',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/txt.png' width="24"/> TXT</a></li>
                                <li class="divider"></li>
                                <li><a href="#" onClick ="$('#customers2').tableExport({type:'excel',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/xls.png' width="24"/> XLS</a></li>
                                <li><a href="#" onClick ="$('#customers2').tableExport({type:'doc',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/word.png' width="24"/> Word</a></li>
                                <li><a href="#" onClick ="$('#customers2').tableExport({type:'powerpoint',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/ppt.png' width="24"/> PowerPoint</a></li>
                                <li class="divider"></li>
                                <li><a href="#" onClick ="$('#customers2').tableExport({type:'png',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/png.png' width="24"/> PNG</a></li>
                                <li><a href="#" onClick ="$('#customers2').tableExport({type:'pdf',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/pdf.png' width="24"/> PDF</a></li>
                            </ul>
                        </div>                                    
                    </div>
                    <div class="panel-body">
                        <table id="customers2" class="table table-hover table-bordered" align="center">
                            <thead>
                                <tr>
                                    <tr>
                                        <?php foreach ($target as $row): ?>
                                            <th rowspan="2">Desa</th>
                                            <th colspan="3">Neonatal Komplikasi (<?php echo $row->neonatalKomplikasi;?>%)</th>
                                        <?php endforeach ?>
                                    </tr>
                                    <tr>
                                        <th scope="col">Cakupan Terhadap Target</th>
                                        <th scope="col">Terhadap Cakupan Bulan Lalu</th>
                                        <th scope="col">Status Cakupan</th>
                                    </tr>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data as $row):
                                $Status="";
                                if ($row->neonatalKomplikasiStatus=="Baik") {
                                    $Status='class="success"';
                                } else if ($row->neonatalKomplikasiStatus=="Kurang") {
                                    $Status='class="warning"';
                                } else if ($row->neonatalKomplikasiStatus=="Cukup") {
                                    $Status='class="active"';
                                }else if ($row->neonatalKomplikasiStatus=="Jelek") {
                                    $Status='class="danger"';
                                }
                                ?>
                                <tr <?php echo $Status; ?>style="font-size:10pt;">
                                    <th><?php echo ucfirst($row->desa); ?></th>
                                    <td><?php echo $row->neonatalKomplikasiTarget; ?></td>
                                    <td><?php echo $row->neonatalKomplikasiLalu; ?></td>
                                    <td><?php echo $row->neonatalKomplikasiStatus; ?></td>
                                </tr>
                            <?php endforeach ?>           
                        </tbody>
                    </table>                                    
                </div>
            </div>
            <!-- END DATATABLE EXPORT -->

        </div>
        <div class="col-md-6">
            <!-- START BAR CHART -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Diagram Cakupan</h3>                                
                </div>
                <div class="panel-body">
                    <div id="diagramKecamatan-neonatalKomplikasi" style="width:400px"></div>
                </div>
            </div>
            <!-- END BAR CHART -->
        </div>
    </div>
</div>
<div class="tab-pane" id="tab12">
    <div class="row"> 
        <div class="col-md-6">
            <!-- START DATATABLE EXPORT -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="btn-group pull-left">
                        <button class="btn btn-info" data-toggle="dropdown"><i class="glyphicon glyphicon-time"></i>Bulan <?php echo $bulanString; ?></button>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/1"?>"> Januari</a></li>
                            <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/2"?>"> Februari</a></li>
                            <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/3"?>"> Maret</a></li>
                            <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/4"?>"> April</a></li>
                            <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/5"?>"> Mei</a></li>
                            <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/6"?>"> Juni</a></li>
                            <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/7"?>"> Juli</a></li>
                            <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/8"?>"> Agustus</a></li>
                            <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/9"?>"> September</a></li>
                            <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/10"?>"> Oktober</a></li>
                            <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/11"?>"> November</a></li>
                            <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/12"?>"> Desember</a></li>
                        </ul>
                    </div>       
                    <div class="btn-group pull-right">
                        <button class="btn btn-danger" data-toggle="dropdown"><i class="fa fa-bars"></i> Export Data</button>
                        <ul class="dropdown-menu">
                            <li class="divider"></li>
                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'csv',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/csv.png' width="24"/> CSV</a></li>
                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'txt',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/txt.png' width="24"/> TXT</a></li>
                            <li class="divider"></li>
                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'excel',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/xls.png' width="24"/> XLS</a></li>
                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'doc',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/word.png' width="24"/> Word</a></li>
                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'powerpoint',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/ppt.png' width="24"/> PowerPoint</a></li>
                            <li class="divider"></li>
                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'png',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/png.png' width="24"/> PNG</a></li>
                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'pdf',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/pdf.png' width="24"/> PDF</a></li>
                        </ul>
                    </div>                                    
                </div>
                <div class="panel-body">
                    <table id="customers2" class="table table-hover table-bordered" align="center">
                        <thead>
                            <tr>
                                <tr>
                                    <?php foreach ($target as $row): ?>
                                        <th rowspan="2">Desa</th>
                                        <th colspan="3">Bayi Paripurna(<?php echo $row->bayiParipurna;?>%)</th>
                                    <?php endforeach ?>
                                </tr>
                                <tr>
                                    <th scope="col">Cakupan Terhadap Target</th>
                                    <th scope="col">Terhadap Cakupan Bulan Lalu</th>
                                    <th scope="col">Status Cakupan</th>
                                </tr>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data as $row):
                            $Status="";
                            if ($row->bayiParipurnaStatus=="Baik") {
                                $Status='class="success"';
                            } else if ($row->bayiParipurnaStatus=="Kurang") {
                                $Status='class="warning"';
                            } else if ($row->bayiParipurnaStatus=="Cukup") {
                                $Status='class="active"';
                            }else if ($row->bayiParipurnaStatus=="Jelek") {
                                $Status='class="danger"';
                            }
                            ?>
                            <tr <?php echo $Status; ?>style="font-size:10pt;">
                                <th><?php echo ucfirst($row->desa); ?></th>
                                <td><?php echo $row->bayiParipurnaTarget; ?></td>
                                <td><?php echo $row->bayiParipurnaLalu; ?></td>
                                <td><?php echo $row->bayiParipurnaStatus; ?></td>
                            </tr>
                        <?php endforeach ?>           
                    </tbody>
                </table>                                    
            </div>
        </div>
        <!-- END DATATABLE EXPORT -->

    </div>
    <div class="col-md-6">
        <!-- START BAR CHART -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Diagram Cakupan</h3>                                
            </div>
            <div class="panel-body">
                <div id="diagramKecamatan-bayiParipurna" style="width:400px"></div>
            </div>
        </div>
        <!-- END BAR CHART -->
    </div>
</div> 
</div>  
</div> <!--  -->
</div>
</div>                        
<!-- END VERTICAL TABS WITH HEADING -->
</div>
<div class="tab-pane" id="tabAnak">
    <!-- START VERTICAL TABS WITH HEADING -->
    <div class="panel panel-default nav-tabs-vertical">                   
        <div class="tabs">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab13" data-toggle="tab">Balita Paripurna</a></li>
                <li><a href="#tab14" data-toggle="tab">Apras Paripurna</a></li>
                <li><a href="#tab15" data-toggle="tab">Balita MTBS</a></li>
            </ul>
            <div class="panel-body tab-content">
                <div class="tab-pane active" id="tab13">
                    <div class="row"> 
                        <div class="col-md-6">
                            <!-- START DATATABLE EXPORT -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="btn-group pull-left">
                                        <button class="btn btn-info" data-toggle="dropdown"><i class="glyphicon glyphicon-time"></i>Bulan <?php echo $bulanString; ?></button>
                                        <ul class="dropdown-menu">
                                            <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/1"?>"> Januari</a></li>
                                            <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/2"?>"> Februari</a></li>
                                            <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/3"?>"> Maret</a></li>
                                            <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/4"?>"> April</a></li>
                                            <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/5"?>"> Mei</a></li>
                                            <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/6"?>"> Juni</a></li>
                                            <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/7"?>"> Juli</a></li>
                                            <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/8"?>"> Agustus</a></li>
                                            <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/9"?>"> September</a></li>
                                            <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/10"?>"> Oktober</a></li>
                                            <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/11"?>"> November</a></li>
                                            <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/12"?>"> Desember</a></li>
                                        </ul>
                                    </div>       
                                    <div class="btn-group pull-right">
                                        <button class="btn btn-danger" data-toggle="dropdown"><i class="fa fa-bars"></i> Export Data</button>
                                        <ul class="dropdown-menu">
                                            <li class="divider"></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'csv',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/csv.png' width="24"/> CSV</a></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'txt',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/txt.png' width="24"/> TXT</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'excel',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/xls.png' width="24"/> XLS</a></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'doc',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/word.png' width="24"/> Word</a></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'powerpoint',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/ppt.png' width="24"/> PowerPoint</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'png',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/png.png' width="24"/> PNG</a></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'pdf',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/pdf.png' width="24"/> PDF</a></li>
                                        </ul>
                                    </div>                                    
                                </div>
                                <div class="panel-body">
                                    <table id="customers2" class="table table-hover table-bordered" align="center">
                                        <thead>
                                            <tr>
                                                <tr>
                                                    <?php foreach ($target as $row): ?>
                                                        <th rowspan="2">Desa</th>
                                                        <th colspan="3">Balita Paripurna (<?php echo $row->balitaParipurna;?>%)</th>
                                                    <?php endforeach ?>
                                                </tr>
                                                <tr>
                                                    <th scope="col">Cakupan Terhadap Target</th>
                                                    <th scope="col">Terhadap Cakupan Bulan Lalu</th>
                                                    <th scope="col">Status Cakupan</th>
                                                </tr>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php foreach ($data as $row):
                                           $Status="";
                                           if ($row->balitaParipurnaStatus=="Baik") {
                                            $Status='class="success"';
                                        } else if ($row->balitaParipurnaStatus=="Kurang") {
                                            $Status='class="warning"';
                                        } else if ($row->balitaParipurnaStatus=="Cukup") {
                                            $Status='class="active"';
                                        }else if ($row->balitaParipurnaStatus=="Jelek") {
                                            $Status='class="danger"';
                                        }
                                        ?>
                                        <tr <?php echo $Status; ?>style="font-size:10pt;">
                                            <th><?php echo ucfirst($row->desa); ?></th>
                                            <td><?php echo $row->balitaParipurnaTarget; ?></td>
                                            <td><?php echo $row->balitaParipurnaLalu; ?></td>
                                            <td><?php echo $row->balitaParipurnaStatus; ?></td>
                                        </tr>
                                    <?php endforeach ?>           
                                </tbody>
                            </table>                                    
                        </div>
                    </div>
                    <!-- END DATATABLE EXPORT -->

                </div>
                <div class="col-md-6">
                    <!-- START BAR CHART -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Diagram Cakupan</h3>                                
                        </div>
                        <div class="panel-body">
                            <div id="diagramKecamatan-balitaParipurna" style="width:400px"></div>
                        </div>
                    </div>
                    <!-- END BAR CHART -->
                </div>
            </div>
        </div>
        <div class="tab-pane" id="tab14">
            <div class="row"> 
                <div class="col-md-6">
                    <!-- START DATATABLE EXPORT -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="btn-group pull-left">
                                <button class="btn btn-info" data-toggle="dropdown"><i class="glyphicon glyphicon-time"></i>Bulan <?php echo $bulanString; ?></button>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/1"?>"> Januari</a></li>
                                    <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/2"?>"> Februari</a></li>
                                    <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/3"?>"> Maret</a></li>
                                    <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/4"?>"> April</a></li>
                                    <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/5"?>"> Mei</a></li>
                                    <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/6"?>"> Juni</a></li>
                                    <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/7"?>"> Juli</a></li>
                                    <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/8"?>"> Agustus</a></li>
                                    <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/9"?>"> September</a></li>
                                    <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/10"?>"> Oktober</a></li>
                                    <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/11"?>"> November</a></li>
                                    <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/12"?>"> Desember</a></li>
                                </ul>
                            </div>       
                            <div class="btn-group pull-right">
                                <button class="btn btn-danger" data-toggle="dropdown"><i class="fa fa-bars"></i> Export Data</button>
                                <ul class="dropdown-menu">
                                    <li class="divider"></li>
                                    <li><a href="#" onClick ="$('#customers2').tableExport({type:'csv',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/csv.png' width="24"/> CSV</a></li>
                                    <li><a href="#" onClick ="$('#customers2').tableExport({type:'txt',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/txt.png' width="24"/> TXT</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#" onClick ="$('#customers2').tableExport({type:'excel',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/xls.png' width="24"/> XLS</a></li>
                                    <li><a href="#" onClick ="$('#customers2').tableExport({type:'doc',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/word.png' width="24"/> Word</a></li>
                                    <li><a href="#" onClick ="$('#customers2').tableExport({type:'powerpoint',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/ppt.png' width="24"/> PowerPoint</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#" onClick ="$('#customers2').tableExport({type:'png',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/png.png' width="24"/> PNG</a></li>
                                    <li><a href="#" onClick ="$('#customers2').tableExport({type:'pdf',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/pdf.png' width="24"/> PDF</a></li>
                                </ul>
                            </div>                                    
                        </div>
                        <div class="panel-body">
                            <table id="customers2" class="table table-hover table-bordered" align="center">
                                <thead>
                                    <tr>
                                        <tr>
                                            <?php foreach ($target as $row): ?>
                                                <th rowspan="2">Desa</th>
                                                <th colspan="3">Apras Paripurna (<?php echo $row->aprasParipurna;?>%)</th>
                                            <?php endforeach ?>
                                        </tr>
                                        <tr>
                                            <th scope="col">Cakupan Terhadap Target</th>
                                            <th scope="col">Terhadap Cakupan Bulan Lalu</th>
                                            <th scope="col">Status Cakupan</th>
                                        </tr>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data as $row):
                                    $Status="";
                                    if ($row->aprasParipurnaStatus=="Baik") {
                                        $Status='class="success"';
                                    } else if ($row->aprasParipurnaStatus=="Kurang") {
                                        $Status='class="warning"';
                                    } else if ($row->aprasParipurnaStatus=="Cukup") {
                                        $Status='class="active"';
                                    }else if ($row->aprasParipurnaStatus=="Jelek") {
                                        $Status='class="danger"';
                                    }
                                    ?>
                                    <tr <?php echo $Status; ?>style="font-size:10pt;">
                                        <th><?php echo ucfirst($row->desa); ?></th>
                                        <td><?php echo $row->aprasParipurnaTarget; ?></td>
                                        <td><?php echo $row->aprasParipurnaLalu; ?></td>
                                        <td><?php echo $row->aprasParipurnaStatus; ?></td>
                                    </tr>
                                <?php endforeach ?>           
                            </tbody>
                        </table>                                    
                    </div>
                </div>
                <!-- END DATATABLE EXPORT -->

            </div>
            <div class="col-md-6">
                <!-- START BAR CHART -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Diagram Cakupan</h3>                                
                    </div>
                    <div class="panel-body">
                        <div id="diagramKecamatan-aprasParipurna" style="width:400px"></div>
                    </div>
                </div>
                <!-- END BAR CHART -->
            </div>
        </div>
    </div>
    <div class="tab-pane" id="tab15">
        <div class="row"> 
            <div class="col-md-6">
                <!-- START DATATABLE EXPORT -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="btn-group pull-left">
                            <button class="btn btn-info" data-toggle="dropdown"><i class="glyphicon glyphicon-time"></i>Bulan <?php echo $bulanString; ?></button>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/1"?>"> Januari</a></li>
                                <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/2"?>"> Februari</a></li>
                                <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/3"?>"> Maret</a></li>
                                <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/4"?>"> April</a></li>
                                <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/5"?>"> Mei</a></li>
                                <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/6"?>"> Juni</a></li>
                                <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/7"?>"> Juli</a></li>
                                <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/8"?>"> Agustus</a></li>
                                <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/9"?>"> September</a></li>
                                <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/10"?>"> Oktober</a></li>
                                <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/11"?>"> November</a></li>
                                <li><a href="<?php echo base_url()."C_Puskesmas/lihatPemetaanKecamatan/".$tahun."/12"?>"> Desember</a></li>
                            </ul>
                        </div>       
                        <div class="btn-group pull-right">
                            <button class="btn btn-danger" data-toggle="dropdown"><i class="fa fa-bars"></i> Export Data</button>
                            <ul class="dropdown-menu">
                                <li class="divider"></li>
                                <li><a href="#" onClick ="$('#customers2').tableExport({type:'csv',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/csv.png' width="24"/> CSV</a></li>
                                <li><a href="#" onClick ="$('#customers2').tableExport({type:'txt',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/txt.png' width="24"/> TXT</a></li>
                                <li class="divider"></li>
                                <li><a href="#" onClick ="$('#customers2').tableExport({type:'excel',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/xls.png' width="24"/> XLS</a></li>
                                <li><a href="#" onClick ="$('#customers2').tableExport({type:'doc',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/word.png' width="24"/> Word</a></li>
                                <li><a href="#" onClick ="$('#customers2').tableExport({type:'powerpoint',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/ppt.png' width="24"/> PowerPoint</a></li>
                                <li class="divider"></li>
                                <li><a href="#" onClick ="$('#customers2').tableExport({type:'png',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/png.png' width="24"/> PNG</a></li>
                                <li><a href="#" onClick ="$('#customers2').tableExport({type:'pdf',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/pdf.png' width="24"/> PDF</a></li>
                            </ul>
                        </div>                                    
                    </div>
                    <div class="panel-body">
                        <table id="customers2" class="table table-hover table-bordered" align="center">
                            <thead>
                                <tr>
                                    <tr>
                                        <?php foreach ($target as $row): ?>
                                            <th rowspan="2">Desa</th>
                                            <th colspan="3">Balita Sakit di MTBS (<?php echo $row->balitaSakit;?>%)</th>
                                        <?php endforeach ?>
                                    </tr>
                                    <tr>
                                        <th scope="col">Cakupan Terhadap Target</th>
                                        <th scope="col">Terhadap Cakupan Bulan Lalu</th>
                                        <th scope="col">Status Cakupan</th>
                                    </tr>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data as $row):
                                $Status="";
                                if ($row->balitaSakitStatus=="Baik") {
                                    $Status='class="success"';
                                } else if ($row->balitaSakitStatus=="Kurang") {
                                    $Status='class="warning"';
                                } else if ($row->balitaSakitStatus=="Cukup") {
                                    $Status='class="active"';
                                }else if ($row->balitaSakitStatus=="Jelek") {
                                    $Status='class="danger"';
                                }
                                ?>
                                <tr <?php echo $Status; ?>style="font-size:10pt;">
                                    <th><?php echo ucfirst($row->desa); ?></th>
                                    <td><?php echo $row->balitaSakitTarget; ?></td>
                                    <td><?php echo $row->balitaSakitLalu; ?></td>
                                    <td><?php echo $row->balitaSakitStatus; ?></td>
                                </tr>
                            <?php endforeach ?>           
                        </tbody>
                    </table>                                    
                </div>
            </div>
            <!-- END DATATABLE EXPORT -->

        </div>
        <div class="col-md-6">
            <!-- START BAR CHART -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Diagram Cakupan</h3>                                
                </div>
                <div class="panel-body">
                    <div id="diagramKecamatan-balitaSakit" style="width:400px"></div>
                </div>
            </div>
            <!-- END BAR CHART -->
        </div>
    </div> 
</div>  
</div> <!--  -->
</div>
</div>                        
<!-- END VERTICAL TABS WITH HEADING -->

</div>    <!-- tab anak  -->           
</div>
</div>                                         
<!-- END JUSTIFIED TABS -->

</div>
</div>

</div>         
<!-- END PAGE CONTENT WRAPPER -->

</div>            
<!-- END PAGE CONTENT -->
</div>
<!-- END PAGE CONTAINER -->    

<!-- MESSAGE BOX LOGOUT-->
<div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
    <div class="mb-container">
        <div class="mb-middle">
            <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
            <div class="mb-content">
                <p>Anda yakin mau keluar dari sistem?</p>                    
                <p>Tekan Tidak jika anda ingin melanjutkan pekerjaan. Tekan Ya untuk keluar dari sistem.</p>
            </div>
            <div class="mb-footer">
                <div class="pull-right">
                    <a href="<?php echo site_url("C_Login/logout") ?>" class="btn btn-success btn-lg">Ya</a>
                    <button class="btn btn-default btn-lg mb-control-close">Tidak</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END MESSAGE BOX-->

<!-- START PRELOADS -->
<audio id="audio-alert" src="<?php echo site_url("assets")."/";?>audio/alert.mp3" preload="auto"></audio>
<audio id="audio-fail" src="<?php echo site_url("assets")."/";?>audio/fail.mp3" preload="auto"></audio>
<!-- END PRELOADS -->                      

<!-- START SCRIPTS -->
<!-- START PLUGINS -->
<script type="text/javascript" src="<?php echo site_url("assets")."/";?>js/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo site_url("assets")."/";?>js/plugins/jquery/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo site_url("assets")."/";?>js/plugins/bootstrap/bootstrap.min.js"></script>        
<!-- END PLUGINS -->

<!-- START THIS PAGE PLUGINS-->        
<script type='text/javascript' src='<?php echo site_url("assets")."/";?>js/plugins/icheck/icheck.min.js'></script>
<script type="text/javascript" src="<?php echo site_url("assets")."/";?>js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
<script type="text/javascript" src="<?php echo site_url("assets")."/";?>js/plugins/datatables/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo site_url("assets")."/";?>js/plugins/tableexport/tableExport.js"></script>
<script type="text/javascript" src="<?php echo site_url("assets")."/";?>js/plugins/tableexport/jquery.base64.js"></script>
<script type="text/javascript" src="<?php echo site_url("assets")."/";?>js/plugins/tableexport/html2canvas.js"></script>
<script type="text/javascript" src="<?php echo site_url("assets")."/";?>js/plugins/tableexport/jspdf/libs/sprintf.js"></script>
<script type="text/javascript" src="<?php echo site_url("assets")."/";?>js/plugins/tableexport/jspdf/jspdf.js"></script>
<script type="text/javascript" src="<?php echo site_url("assets")."/";?>js/plugins/tableexport/jspdf/libs/base64.js"></script>        
<!-- END THIS PAGE PLUGINS-->  
<!-- THIS PAGE PLUGINS -->
<script type="text/javascript" src="<?php echo site_url("assets")."/";?>js/plugins/bootstrap/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="<?php echo site_url("assets")."/";?>js/plugins/bootstrap/bootstrap-timepicker.min.js"></script>
<script type="text/javascript" src="<?php echo site_url("assets")."/";?>js/plugins/bootstrap/bootstrap-colorpicker.js"></script>
<script type="text/javascript" src="<?php echo site_url("assets")."/";?>js/plugins/bootstrap/bootstrap-file-input.js"></script>
<script type="text/javascript" src="<?php echo site_url("assets")."/";?>js/plugins/bootstrap/bootstrap-select.js"></script>
<script type="text/javascript" src="<?php echo site_url("assets")."/";?>js/plugins/tagsinput/jquery.tagsinput.min.js"></script>

<!-- END THIS PAGE PLUGINS --> 

<!-- START TEMPLATE -->
<script type="text/javascript" src="<?php echo site_url("assets")."/";?>js/settings.js"></script>

<script type="text/javascript" src="<?php echo site_url("assets")."/";?>js/plugins.js"></script>        
<script type="text/javascript" src="<?php echo site_url("assets")."/";?>js/actions.js"></script>

<!-- END TEMPLATE -->
<!-- END SCRIPTS -->                 
<?php include("assets/diagramPemetaanKecamatan.php") ;?>

</body>
</html>








