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

            <!-- PAGE TITLE -->
            <div class="page-title">                    
                <h2><span class="fa fa-arrow-circle-o-left"></span>&nbsp Kelola User SIPKIA</h2>
            </div>
            <!-- END PAGE TITLE --> 

            <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">  
                <div class="row">
                    <div class="col-md-12">

                        <!-- START DATATABLE EXPORT -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="btn-group pull-left">
                                    <button class="btn btn-info dropdown-toggle" data-toggle="modal" data-target="#modal_tambahRegister">
                                        <i class="fa fa-plus"></i> Tambah User SIPKIA
                                    </button>
                                </div>
                            </div>
                            <div class="panel-body">
                                <table id="customers2" class="table datatable dataTable table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th>Id User</th>
                                            <th>Username</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>Jenis User</th>
                                            <th>Desa</th>
                                            <th>Foto</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($data as $row): ?>
                                            <tr style="font-size:10pt;">
                                                <td><?php echo $row->idUser; ?></td>
                                                <td><?php echo $row->username; ?></td>       
                                                <td><?php echo $row->nama; ?></td>       
                                                <td><?php echo $row->alamat; ?></td>       
                                                <td><?php echo $row->jenisUser; ?></td>       
                                                <td><?php echo $row->desa; ?></td>                
                                                <td> <img style="max-height:50px;" src="<?php echo base_url()."assets/img/user/".$row->foto;?>"> </td>                
                                                <td width="15%">
                                                    <a  data-toggle="tooltip" title="Ubah User">
                                                        <button data-toggle="modal" data-target="#modal_ubahUser<?php echo $row->idUser;?>" >
                                                            <span class="fa fa-edit"></span>
                                                        </button>
                                                    </a>
                                                    <a  class="mb-control" data-box="#mb-hapusUser"data-toggle="tooltip" title="Hapus Register">
                                                        <button data-toggle="modal">
                                                            <span class="glyphicon glyphicon-trash"></span>
                                                        </button>
                                                    </a>
                                                </td>
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

    <!-- MESSAGE BOX HAPUS REGISTER-->
    <div class="message-box message-box-danger animated fadeIn" data-sound="alert" id="mb-hapusUser">
        <div class="mb-container">
            <div class="mb-middle">
                <div class="mb-title"><span class="fa fa-trash-o"></span> Hapus <strong>User</strong> ?</div>
                <div class="mb-content">
                    <p>Anda yakin mau menghapus user ini?</p>                    
                    <p>Tekan Tidak jika anda ingin membatalkan. Tekan Ya untuk menghapus user.</p>
                </div>
                <div class="mb-footer">
                    <div class="pull-right">
                        <a href="<?php echo site_url("C_Puskesmas/hapusUser")."/".$row->idUser; ?>" class="btn btn-success btn-lg">Ya</a>
                        <button class="btn btn-default btn-lg mb-control-close">Tidak</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MESSAGE BOX-->



    <!-- Tambah Register-->
    <div class="modal" id="modal_tambahRegister" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true" style="">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Tambah User SIPKIA</h4>
              </div>                    
              <div class="modal-body">
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    <div class="row">
                        <div class="col-md-12">        
                            <form class="form-horizontal" method="POST" role="form" enctype="multipart/form-data" class="form-horizontal" action="<?php echo site_url("C_Puskesmas/tambahUser");?>">
                                <div class="panel panel-default">
                                    <div class="panel-body">                                                                                   
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Nama User *</label>
                                                    <div class="col-md-9">                                            
                                                        <div class="input-group">
                                                            <input name="nama" required size="200"  type="text" class="form-control"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Alamat </label>
                                                    <div class="col-md-9">                                            
                                                        <div class="input-group">
                                                            <input name="alamat" size="200"  type="text" class="form-control"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Jenis User *</label>
                                                    <div class="row">
                                                        <div class="col-md-9">                                            
                                                            <label class="check"><input  checked value="Bidan Desa" type="radio" class="iradio" name="jenisUser"/> Bidan Desa</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3"></div>
                                                    <div class="row">
                                                        <div class="col-md-9">                                            
                                                            <label class="check"><input  value="Puskesmas" type="radio" class="iradio" name="jenisUser"/> Petugas Puskesmas</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3  control-label">Pilih Desa *</label>
                                                    <div class="col-md-9 ">                                                                                            
                                                        <select class="form-control select" name="desa" required>
                                                            <option value="Puskesmas">Puskesmas</option>
                                                            <option value="kidal">Kidal</option>
                                                            <option value="kambingan">Kambingan</option>
                                                            <option value="tumpang">Tumpang</option>
                                                            <option value="benjor">Benjor</option>
                                                            <option value="pandanajeng">Pandanajeng</option>
                                                            <option value="ngingit">Ngingit</option>
                                                            <option value="bokor">Bokor</option>
                                                            <option value="dampul">Duwet Dampul</option>
                                                            <option value="duwet">Duwet Krajan</option>
                                                            <option value="jeru">Jeru</option>
                                                            <option value="malangsuko">Malangsuko</option>
                                                            <option value="wringinsongo">Wringinsongo</option>
                                                            <option value="slamet">Slamet</option>
                                                            <option value="pulungdowo">Pulungdowo</option>
                                                            <option value="tulusbesar">Tulusbesar</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Username *</label>
                                                    <div class="col-md-9">
                                                        <input minlength="5" type="text" name="username" class="validate[required,minSize[5]] form-control"/>
                                                        <span class="help-block">Minimal 5 karakter</span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Password *</label>
                                                    <div class="col-md-9">
                                                        <input minlength="5" type="password" name="password" class="validate[required,minSize[5]] form-control" id="txtPassword"/>
                                                        <span class="help-block">Minimal 5 karakter</span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Foto </label>
                                                    <div class="col-md-9">                                            
                                                        <div class="input-group">
                                                            <input name="foto" accept="image/*"  type="file" class="form-control"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-5 control-label"></label>
                                                    <label class="col-md-7 control-label">*) Wajib diisi!</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-footer ">
                                        <button type="submit" class="btn btn-primary pull-right"><span class="fa fa-floppy-o fa-right">&nbsp Simpan</span></button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>                    

                </div>
                <!-- END PAGE CONTENT WRAPPER -->   
            </div>

        </div>
    </div>
</div>




<!-- Edit Register-->
<?php foreach ($data as $row) {?>
<div class="modal" id="modal_ubahUser<?php echo $row->idUser;?>" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true" style="">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Ubah Data Register Kohort Apras <?php echo $row->nama;?></h4>
          </div>                    
          <div class="modal-body">
            <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">
                <div class="row">
                    <div class="col-md-12">        
                        <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="<?php echo site_url("C_Puskesmas/ubahUser")."/".$row->idUser; ?>" role="form">
                            <div class="panel panel-default">
                                <div class="panel-body">                                                                                   
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Nama User *</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                    <input name="nama" required size="200" value="<?php echo $row->nama ?>" type="text" class="form-control"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Alamat </label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <input name="alamat" value="<?php echo $row->alamat ?>" size="200"  type="text" class="form-control"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Jenis User *</label>
                                                <div class="row">
                                                    <div class="col-md-9">                                            
                                                        <label class="check"><input <?php if($row->jenisUser=="Bidan Desa"){echo "checked";} ?> value="Bidan Desa" type="radio" class="iradio" name="jenisUser"/> Bidan Desa</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3"></div>
                                                <div class="row">
                                                    <div class="col-md-9">                                            
                                                        <label class="check"><input <?php if($row->jenisUser=="Puskesmas"){echo "checked";} ?> value="Puskesmas" type="radio" class="iradio" name="jenisUser"/> Petugas Puskesmas</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3  control-label">Pilih Desa *</label>
                                                <div class="col-md-9 ">                                                                                            
                                                    <select class="form-control select" name="desa" required>
                                                        <option <?php if($row->desa=="puskesmas"){echo 'selected="selected"';} ?>value="puskesmas">Puskesmas</option>
                                                        <option <?php if($row->desa=="kidal"){echo 'selected="selected"';} ?>value="kidal">Kidal</option>
                                                        <option <?php if($row->desa=="kambingan"){echo 'selected="selected"';} ?>value="kambingan">Kambingan</option>
                                                        <option <?php if($row->desa=="tumpang"){echo 'selected="selected"';} ?>value="tumpang">Tumpang</option>
                                                        <option <?php if($row->desa=="benjor"){echo 'selected="selected"';} ?>value="benjor">Benjor</option>
                                                        <option <?php if($row->desa=="pandanajeng"){echo 'selected="selected"';} ?>value="pandanajeng">Pandanajeng</option>
                                                        <option <?php if($row->desa=="ngingit"){echo 'selected="selected"';} ?>value="ngingit">Ngingit</option>
                                                        <option <?php if($row->desa=="bokor"){echo 'selected="selected"';} ?>value="bokor">Bokor</option>
                                                        <option <?php if($row->desa=="dampul"){echo 'selected="selected"';} ?>value="dampul">Duwet Dampul</option>
                                                        <option <?php if($row->desa=="duwet"){echo 'selected="selected"';} ?>value="duwet">Duwet Krajan</option>
                                                        <option <?php if($row->desa=="jeru"){echo 'selected="selected"';} ?>value="jeru">Jeru</option>
                                                        <option <?php if($row->desa=="malangsuko"){echo 'selected="selected"';} ?>value="malangsuko">Malangsuko</option>
                                                        <option <?php if($row->desa=="wringinsongo"){echo 'selected="selected"';} ?>value="wringinsongo">Wringinsongo</option>
                                                        <option <?php if($row->desa=="slamet"){echo 'selected="selected"';} ?>value="slamet">Slamet</option>
                                                        <option <?php if($row->desa=="pulungdowo"){echo 'selected="selected"';} ?>value="pulungdowo">Pulungdowo</option>
                                                        <option <?php if($row->desa=="tulusbesar"){echo 'selected="selected"';} ?>value="tulusbesar">Tulusbesar</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Username *</label>
                                                <div class="col-md-9">
                                                    <input minlength="5" required type="text" value="<?php echo $row->username ?>" name="username" class="validate[required,minSize[5]] form-control"/>
                                                    <span class="help-block">Minimal 5 karakter</span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Password *</label>
                                                <div class="col-md-9">
                                                    <input type="password" name="password" class="validate[required,minSize[5]] form-control" id="txtPassword"/>
                                                    <span class="help-block">Jangan diisi jika password tidak diubah. Minimal 5 karakter</span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Foto </label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <input name="foto" accept="image/*"  type="file" class="form-control"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-5 control-label"></label>
                                                <label class="col-md-7 control-label">*) Wajib diisi!</label>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer ">
                                    <button type="submit" class="btn btn-primary pull-right"><span class="fa fa-floppy-o fa-right">&nbsp Simpan</span></button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>                    

            </div>
            <!-- END PAGE CONTENT WRAPPER -->   
        </div>

    </div>
</div>
</div>
<?php }  ?>
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
<script type='text/javascript' src='<?php echo site_url("assets")."/";?>js/plugins/validationengine/languages/jquery.validationEngine-id.js'></script>
<script type='text/javascript' src='<?php echo site_url("assets")."/";?>js/plugins/validationengine/jquery.validationEngine.js'></script>        
<script type='text/javascript' src='<?php echo site_url("assets")."/";?>js/plugins/jquery-validation/jquery.validate.js'></script>                
<script type='text/javascript' src='<?php echo site_url("assets")."/";?>js/plugins/maskedinput/jquery.maskedinput.min.js'></script>

<!-- START TEMPLATE -->
<script type="text/javascript" src="<?php echo site_url("assets")."/";?>js/settings.js"></script>

<script type="text/javascript" src="<?php echo site_url("assets")."/";?>js/plugins.js"></script>        
<script type="text/javascript" src="<?php echo site_url("assets")."/";?>js/actions.js"></script>        
<!-- END TEMPLATE -->

<script type="text/javascript">
    function myFunction() {
        document.getElementById("validate").action = "form_action.asp";
        document.getElementById("demo").innerHTML = "The value of the action attribute was changed to form_action.asp.";
    }

</script>
<!-- END SCRIPTS -->                 
</body>
</html>






