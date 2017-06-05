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
    <?php include("assets/temaPuskesmas.php");  ?>         
    <!-- EOF CSS INCLUDE -->                                      
</head>
<body>
    <!-- START PAGE CONTAINER -->
    <div class="page-container">

        <!-- START PAGE SIDEBAR -->
        <?php include("assets/menuPuskesmas.php") ?>
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
                $bulan="Januari";
            } else if ($bulan==2){
                $bulan="Februari";
            }else if ($bulan==3){
                $bulan="Maret";
            }else if ($bulan==4){
                $bulan="April";
            }else if ($bulan==5){
                $bulan="Mei";
            }else if ($bulan==6){
                $bulan="Juni";
            }else if ($bulan==7){
                $bulan="Juli";
            }else if ($bulan==8){
                $bulan="Agustus";
            }else if ($bulan==9){
                $bulan="September";
            }else if ($bulan==10){
                $bulan="Oktober";
            }else if ($bulan==11){
                $bulan="November";
            }else if ($bulan==12){
                $bulan="Desember";
            }
             ?>                     
            <!-- PAGE TITLE -->
            <div class="page-title">                    
                <h2><span class="fa fa-arrow-circle-o-left"></span>&nbsp Rekapan PWS-KIA Kecamatan Tumpang Tahun <?php echo $tahun." "; ?> Bulan <?php echo $bulan; ?></h2>
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
                                    <!-- START DATATABLE EXPORT -->
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="btn-group pull-left">
                                                <button class="btn btn-info" data-toggle="dropdown"><i class="glyphicon glyphicon-time"></i>Bulan <?php echo $bulan; ?></button>
                                                <ul class="dropdown-menu">
                                                    <li><a href="<?php echo base_url()."C_Puskesmas/lihatRekapanKecamatan/".$tahun."/1"?>"> Januari</a></li>
                                                    <li><a href="<?php echo base_url()."C_Puskesmas/lihatRekapanKecamatan/".$tahun."/2"?>"> Februari</a></li>
                                                    <li><a href="<?php echo base_url()."C_Puskesmas/lihatRekapanKecamatan/".$tahun."/3"?>"> Maret</a></li>
                                                    <li><a href="<?php echo base_url()."C_Puskesmas/lihatRekapanKecamatan/".$tahun."/4"?>"> April</a></li>
                                                    <li><a href="<?php echo base_url()."C_Puskesmas/lihatRekapanKecamatan/".$tahun."/5"?>"> Mei</a></li>
                                                    <li><a href="<?php echo base_url()."C_Puskesmas/lihatRekapanKecamatan/".$tahun."/6"?>"> Juni</a></li>
                                                    <li><a href="<?php echo base_url()."C_Puskesmas/lihatRekapanKecamatan/".$tahun."/7"?>"> Juli</a></li>
                                                    <li><a href="<?php echo base_url()."C_Puskesmas/lihatRekapanKecamatan/".$tahun."/8"?>"> Agustus</a></li>
                                                    <li><a href="<?php echo base_url()."C_Puskesmas/lihatRekapanKecamatan/".$tahun."/9"?>"> September</a></li>
                                                    <li><a href="<?php echo base_url()."C_Puskesmas/lihatRekapanKecamatan/".$tahun."/10"?>"> Oktober</a></li>
                                                    <li><a href="<?php echo base_url()."C_Puskesmas/lihatRekapanKecamatan/".$tahun."/11"?>"> November</a></li>
                                                    <li><a href="<?php echo base_url()."C_Puskesmas/lihatRekapanKecamatan/".$tahun."/12"?>"> Desember</a></li>
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
                                            <table id="customers2" class="table table-hover table-striped table-bordered" align="center">
                                                <thead>
                                                    <tr>
                                                        <tr>
                                                            <?php foreach ($target as $row): ?>
                                                            <th rowspan="2">Desa</th>
                                                            <th colspan="4">K1 (<?php echo $row->K1;?>%)</th>
                                                            <th colspan="4">K4 (<?php echo $row->K4;?>%)</th>
                                                            <th colspan="4">Deteksi Resti (<?php echo $row->deteksiResti;?>%)</th>
                                                            <th colspan="4">Bumil Resti (<?php echo $row->restiKom;?>%)</th>
                                                            <?php endforeach ?>
                                                        </tr>
                                                        <tr>
                                                            <th scope="col">Lalu</th>
                                                            <th scope="col">Sekarang</th>
                                                            <th scope="col">Kom</th>
                                                            <th scope="col">%</th>
                                                            <th scope="col">Lalu</th>
                                                            <th scope="col">Sekarang</th>
                                                            <th scope="col">Kom</th>
                                                            <th scope="col">%</th>
                                                            <th scope="col">Lalu</th>
                                                            <th scope="col">Sekarang</th>
                                                            <th scope="col">Kom</th>
                                                            <th scope="col">%</th>
                                                            <th scope="col">Lalu</th>
                                                            <th scope="col">Sekarang</th>
                                                            <th scope="col">Kom</th>
                                                            <th scope="col">%</th>
                                                        </tr>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($data as $row): ?>
                                                        <tr style="font-size:10pt;">
                                                            <th><?php echo ucfirst($row->desa); ?></th>
                                                            <td><?php echo $row->K1Lalu; ?></td>
                                                            <td><?php echo $row->K1Ini; ?></td>
                                                            <td><?php echo $row->K1Kom; ?></td>
                                                            <td><?php if($tahun>=2016){echo number_format($row->K1Presentase,0,",","."); }else{echo number_format($row->K1Presentase*100,0,",",".");}?>%</td>
                                                            <td><?php echo $row->K4Lalu; ?></td>
                                                            <td><?php echo $row->K4Ini; ?></td>
                                                            <td><?php echo $row->K4Kom; ?></td>
                                                            <td><?php if($tahun>=2016){echo number_format($row->K4Presentase,0,",","."); }else{echo number_format($row->K4Presentase*100,0,",",".");}?>%</td>
                                                            <td><?php echo $row->deteksiRestiLalu; ?></td>
                                                            <td><?php echo $row->deteksiRestiIni; ?></td>
                                                            <td><?php echo $row->deteksiRestiKom; ?></td>
                                                            <td><?php if($tahun>=2016){echo number_format($row->deteksiRestiPresentase,0,",","."); }else{echo number_format($row->deteksiRestiPresentase*100,0,",",".");}?>%</td>
                                                            <td><?php echo $row->restiKomLalu; ?></td>
                                                            <td><?php echo $row->restiKomIni; ?></td>
                                                            <td><?php echo $row->restiKomKom; ?></td>
                                                            <td><?php if($tahun>=2016){echo number_format($row->restiKomPresentase,0,",","."); }else{echo number_format($row->restiKomPresentase*100,0,",",".");}?>%</td>
                                                        </tr>
                                                    <?php endforeach ?>           
                                                </tbody>
                                            </table>                                    
                                        </div>
                                    </div>
                                    <!-- END DATATABLE EXPORT -->        
                                    <!-- START DATATABLE EXPORT -->
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
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
                                            <table id="customers2" class="table table-hover table-striped table-bordered" align="center">
                                                <thead>
                                                    <tr>
                                                        <tr>
                                                            <?php foreach ($target as $row): ?>
                                                            <th rowspan="2">Desa </th>
                                                            <th colspan="4">Kom Keb (<?php echo $row->komKeb;?>%)</th>
                                                            <th colspan="4">Persalinan Nakes (<?php echo $row->persalinanNakes;?>%)</th>
                                                            <th colspan="4">Persalinan Faskes (<?php echo $row->persalinanFaskes;?>%)</th>
                                                            <th colspan="4">Nifas (<?php echo $row->pelayananNifas;?>%)</th>
                                                            <?php endforeach ?>
                                                        </tr>
                                                        <tr>
                                                            <th scope="col">Lalu</th>
                                                            <th scope="col">Sekarang</th>
                                                            <th scope="col">Kom</th>
                                                            <th scope="col">%</th>
                                                            <th scope="col">Lalu</th>
                                                            <th scope="col">Sekarang</th>
                                                            <th scope="col">Kom</th>
                                                            <th scope="col">%</th>
                                                            <th scope="col">Lalu</th>
                                                            <th scope="col">Sekarang</th>
                                                            <th scope="col">Kom</th>
                                                            <th scope="col">%</th>
                                                            <th scope="col">Lalu</th>
                                                            <th scope="col">Sekarang</th>
                                                            <th scope="col">Kom</th>
                                                            <th scope="col">%</th>
                                                        </tr>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($data as $row): ?>
                                                        <tr style="font-size:10pt;">
                                                            <th><?php echo ucfirst($row->desa); ?></th>
                                                            <td><?php echo $row->komKebLalu; ?></td>
                                                            <td><?php echo $row->komKebIni; ?></td>
                                                            <td><?php echo $row->komKebKom; ?></td>
                                                            <td><?php if($tahun>=2016){echo number_format($row->komKebPresentase,0,",","."); }else{echo number_format($row->komKebPresentase*100,0,",",".");}?>%</td>
                                                            <td><?php echo $row->persalinanNakesLalu; ?></td>
                                                            <td><?php echo $row->persalinanNakesIni; ?></td>
                                                            <td><?php echo $row->persalinanNakesKom; ?></td>
                                                            <td><?php if($tahun>=2016){echo number_format($row->persalinanNakesPresentase,0,",","."); }else{echo number_format($row->persalinanNakesPresentase*100,0,",",".");}?>%</td>
                                                            <td><?php echo $row->persalinanFaskesLalu; ?></td>
                                                            <td><?php echo $row->persalinanFaskesIni; ?></td>
                                                            <td><?php echo $row->persalinanFaskesKom; ?></td>
                                                            <td><?php if($tahun>=2016){echo number_format($row->persalinanFaskesPresentase,0,",","."); }else{echo number_format($row->persalinanFaskesPresentase*100,0,",",".");}?>%</td>
                                                            <td><?php echo $row->pelayananNifasLalu; ?></td>
                                                            <td><?php echo $row->pelayananNifasIni; ?></td>
                                                            <td><?php echo $row->pelayananNifasKom; ?></td>
                                                            <td><?php if($tahun>=2016){echo number_format($row->pelayananNifasPresentase,0,",","."); }else{echo number_format($row->pelayananNifasPresentase*100,0,",",".");}?>%</td>
                                                        </tr>
                                                    <?php endforeach ?>           
                                                </tbody>
                                            </table>                                    
                                        </div>
                                    </div>
                                    <!-- END DATATABLE EXPORT -->        
                                </div>
                                <div class="tab-pane" id="tabBayi">
                                     <!-- START DATATABLE EXPORT -->
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="btn-group pull-left">
                                                <button class="btn btn-info" data-toggle="dropdown"><i class="glyphicon glyphicon-time"></i>Bulan <?php echo $bulan; ?></button>
                                                <ul class="dropdown-menu">
                                                    <li><a href="<?php echo base_url()."C_Puskesmas/lihatRekapanKecamatan/".$tahun."/1"?>"> Januari</a></li>
                                                    <li><a href="<?php echo base_url()."C_Puskesmas/lihatRekapanKecamatan/".$tahun."/2"?>"> Februari</a></li>
                                                    <li><a href="<?php echo base_url()."C_Puskesmas/lihatRekapanKecamatan/".$tahun."/3"?>"> Maret</a></li>
                                                    <li><a href="<?php echo base_url()."C_Puskesmas/lihatRekapanKecamatan/".$tahun."/4"?>"> April</a></li>
                                                    <li><a href="<?php echo base_url()."C_Puskesmas/lihatRekapanKecamatan/".$tahun."/5"?>"> Mei</a></li>
                                                    <li><a href="<?php echo base_url()."C_Puskesmas/lihatRekapanKecamatan/".$tahun."/6"?>"> Juni</a></li>
                                                    <li><a href="<?php echo base_url()."C_Puskesmas/lihatRekapanKecamatan/".$tahun."/7"?>"> Juli</a></li>
                                                    <li><a href="<?php echo base_url()."C_Puskesmas/lihatRekapanKecamatan/".$tahun."/8"?>"> Agustus</a></li>
                                                    <li><a href="<?php echo base_url()."C_Puskesmas/lihatRekapanKecamatan/".$tahun."/9"?>"> September</a></li>
                                                    <li><a href="<?php echo base_url()."C_Puskesmas/lihatRekapanKecamatan/".$tahun."/10"?>"> Oktober</a></li>
                                                    <li><a href="<?php echo base_url()."C_Puskesmas/lihatRekapanKecamatan/".$tahun."/11"?>"> November</a></li>
                                                    <li><a href="<?php echo base_url()."C_Puskesmas/lihatRekapanKecamatan/".$tahun."/12"?>"> Desember</a></li>
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
                                            <table id="customers2" class="table table-hover table-striped table-bordered" align="center">
                                                <thead>
                                                    <tr>
                                                        <tr>
                                                            <?php foreach ($target as $row): ?>
                                                            <th rowspan="2">Desa</th>
                                                            <th colspan="4">KN1 (<?php echo $row->KN1;?>%)</th>
                                                            <th colspan="4">KN Lengkap (<?php echo $row->KNLengkap;?>%)</th>
                                                            <th colspan="4">Neonatal Komplikasi (<?php echo $row->neonatalKomplikasi;?>%)</th>
                                                            <th colspan="4">Bayi Paripurna (<?php echo $row->bayiParipurna;?>%)</th>
                                                            <?php endforeach ?>
                                                        </tr>
                                                        <tr>
                                                            <th scope="col">Lalu</th>
                                                            <th scope="col">Sekarang</th>
                                                            <th scope="col">Kom</th>
                                                            <th scope="col">%</th>
                                                            <th scope="col">Lalu</th>
                                                            <th scope="col">Sekarang</th>
                                                            <th scope="col">Kom</th>
                                                            <th scope="col">%</th>
                                                            <th scope="col">Lalu</th>
                                                            <th scope="col">Sekarang</th>
                                                            <th scope="col">Kom</th>
                                                            <th scope="col">%</th>
                                                            <th scope="col">Lalu</th>
                                                            <th scope="col">Sekarang</th>
                                                            <th scope="col">Kom</th>
                                                            <th scope="col">%</th>
                                                        </tr>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($data as $row): ?>
                                                        <tr style="font-size:10pt;">
                                                            <th><?php echo ucfirst($row->desa); ?></th>
                                                            <td><?php echo $row->KN1Lalu; ?></td>
                                                            <td><?php echo $row->KN1Ini; ?></td>
                                                            <td><?php echo $row->KN1Kom; ?></td>
                                                            <td><?php if($tahun>=2016){echo number_format($row->KN1Presentase,0,",","."); }else{echo number_format($row->KN1Presentase*100,0,",",".");}?>%</td>
                                                            <td><?php echo $row->KNLengkapLalu; ?></td>
                                                            <td><?php echo $row->KNLengkapIni; ?></td>
                                                            <td><?php echo $row->KNLengkapKom; ?></td>
                                                            <td><?php if($tahun>=2016){echo number_format($row->KNLengkapPresentase,0,",","."); }else{echo number_format($row->KNLengkapPresentase*100,0,",",".");}?>%</td>
                                                            <td><?php echo $row->neonatalKomplikasiLalu; ?></td>
                                                            <td><?php echo $row->neonatalKomplikasiIni; ?></td>
                                                            <td><?php echo $row->neonatalKomplikasiKom; ?></td>
                                                            <td><?php if($tahun>=2016){echo number_format($row->neonatalKomplikasiPresentase,0,",","."); }else{echo number_format($row->neonatalKomplikasiPresentase*100,0,",",".");}?>%</td>
                                                            <td><?php echo $row->bayiParipurnaLalu; ?></td>
                                                            <td><?php echo $row->bayiParipurnaIni; ?></td>
                                                            <td><?php echo $row->bayiParipurnaKom; ?></td>
                                                            <td><?php if($tahun>=2016){echo number_format($row->bayiParipurnaPresentase,0,",","."); }else{echo number_format($row->bayiParipurnaPresentase*100,0,",",".");}?>%</td>
                                                        </tr>
                                                    <?php endforeach ?>           
                                                </tbody>
                                            </table>                                    
                                        </div>
                                    </div>
                                    <!-- END DATATABLE EXPORT -->
                                </div>
                                <div class="tab-pane" id="tabAnak">
                                    <!-- START DATATABLE EXPORT -->
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="btn-group pull-left">
                                                <button class="btn btn-info" data-toggle="dropdown"><i class="glyphicon glyphicon-time"></i>Bulan <?php echo $bulan; ?></button>
                                                <ul class="dropdown-menu">
                                                    <li><a href="<?php echo base_url()."C_Puskesmas/lihatRekapanKecamatan/".$tahun."/1"?>"> Januari</a></li>
                                                    <li><a href="<?php echo base_url()."C_Puskesmas/lihatRekapanKecamatan/".$tahun."/2"?>"> Februari</a></li>
                                                    <li><a href="<?php echo base_url()."C_Puskesmas/lihatRekapanKecamatan/".$tahun."/3"?>"> Maret</a></li>
                                                    <li><a href="<?php echo base_url()."C_Puskesmas/lihatRekapanKecamatan/".$tahun."/4"?>"> April</a></li>
                                                    <li><a href="<?php echo base_url()."C_Puskesmas/lihatRekapanKecamatan/".$tahun."/5"?>"> Mei</a></li>
                                                    <li><a href="<?php echo base_url()."C_Puskesmas/lihatRekapanKecamatan/".$tahun."/6"?>"> Juni</a></li>
                                                    <li><a href="<?php echo base_url()."C_Puskesmas/lihatRekapanKecamatan/".$tahun."/7"?>"> Juli</a></li>
                                                    <li><a href="<?php echo base_url()."C_Puskesmas/lihatRekapanKecamatan/".$tahun."/8"?>"> Agustus</a></li>
                                                    <li><a href="<?php echo base_url()."C_Puskesmas/lihatRekapanKecamatan/".$tahun."/9"?>"> September</a></li>
                                                    <li><a href="<?php echo base_url()."C_Puskesmas/lihatRekapanKecamatan/".$tahun."/10"?>"> Oktober</a></li>
                                                    <li><a href="<?php echo base_url()."C_Puskesmas/lihatRekapanKecamatan/".$tahun."/11"?>"> November</a></li>
                                                    <li><a href="<?php echo base_url()."C_Puskesmas/lihatRekapanKecamatan/".$tahun."/12"?>"> Desember</a></li>
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
                                            <table id="customers2" class="table table-hover table-striped table-bordered" align="center">
                                                <thead>
                                                    <tr>
                                                        <tr>
                                                            <?php foreach ($target as $row): ?>
                                                            <th rowspan="2">Desa</th>
                                                            <th colspan="4">Balita Paripurna (<?php echo $row->balitaParipurna;?>%)</th>
                                                            <th colspan="4">Apras Paripurna (<?php echo $row->aprasParipurna;?>%)</th>
                                                            <th colspan="4">Balita Sakit di MTBS (<?php echo $row->balitaSakit;?>%)</th>
                                                            <?php endforeach ?>
                                                        </tr>
                                                        <tr>
                                                            <th scope="col">Lalu</th>
                                                            <th scope="col">Sekarang</th>
                                                            <th scope="col">Kom</th>
                                                            <th scope="col">%</th>
                                                            <th scope="col">Lalu</th>
                                                            <th scope="col">Sekarang</th>
                                                            <th scope="col">Kom</th>
                                                            <th scope="col">%</th>
                                                            <th scope="col">Balita Sakit</th>
                                                            <th scope="col">Di MTBS</th>
                                                            <th scope="col">%</th>
                                                        </tr>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($data as $row): ?>
                                                        <tr style="font-size:10pt;">
                                                            <th><?php echo ucfirst($row->desa); ?></th>
                                                            <td><?php echo $row->balitaParipurnaLalu; ?></td>
                                                            <td><?php echo $row->balitaParipurnaIni; ?></td>
                                                            <td><?php echo $row->balitaParipurnaKom; ?></td>
                                                            <td><?php if($tahun>=2016){echo number_format($row->balitaParipurnaPresentase,0,",","."); }else{echo number_format($row->balitaParipurnaPresentase*100,0,",",".");}?>%</td>
                                                            <td><?php echo $row->aprasParipurnaLalu; ?></td>
                                                            <td><?php echo $row->aprasParipurnaIni; ?></td>
                                                            <td><?php echo $row->aprasParipurnaKom; ?></td>
                                                            <td><?php if($tahun>=2016){echo number_format($row->aprasParipurnaPresentase,0,",","."); }else{echo number_format($row->aprasParipurnaPresentase*100,0,",",".");}?>%</td>
                                                            <td><?php echo $row->balitaSakitIni; ?></td>
                                                            <td><?php echo $row->balitaSakitKom; ?></td>
                                                            <td><?php if($tahun>=2016){echo number_format($row->balitaSakitPresentase,0,",","."); }else{echo number_format($row->balitaSakitPresentase*100,0,",",".");}?>%</td>
                                                        </tr>
                                                    <?php endforeach ?>           
                                                </tbody>
                                            </table>                                    
                                        </div>
                                    </div>
                                    <!-- END DATATABLE EXPORT -->
                                </div>                        
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
</body>
</html>






