<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class BidanDesaKambingan extends BidanDesa{
  public function __construct()
  {
    parent::__construct();
    if (($this->session->userdata('desa') != "kambingan")&&($this->session->userdata('desa') != "puskesmas")){
      ?> <script language="JavaScript">alert('Anda tidak mempunyai akses ke halaman ini !');
      document.location='<?php echo base_url(); ?>C_Bidan'</script>
      <?php
    }
    $this->load->model('RegisterKohort');
    $this->load->model('RegisterKohortIbu');
    $this->load->model('RegisterKohortBayi');
    $this->load->model('RegisterKohortBalita');
    $this->load->model('RegisterKohortApras');
    $this->load->model('E_Rekapan');
  }
  function lihatRegister($jenis){
    $register = NULL;   
    switch ($jenis) {
      case "ibu":
      $register = new RegisterKohortIbu;
      $hasil=$register->viewRegister("kambingan");
      return $hasil;
      break;
      case "bayi":
      $register = new RegisterKohortBayi;
      $hasil=$register->viewRegister("kambingan");
      return $hasil;
      break;
      case "balita":
      $register = new RegisterKohortBalita;
      $hasil=$register->viewRegister("kambingan");
      return $hasil;
      break;
      case "apras":
      $register = new RegisterKohortApras;
      $hasil=$register->viewRegister("kambingan");
      return $hasil;
      break;
      default:
      echo "Salah Parameter";     
      break;        
    }
  }

  function tambahRegister($jenis){ 
    $register = NULL;   
    switch ($jenis) {
      case "ibu":
      $register = new RegisterKohortIbu;
      $hasil=$register->addRegister("kambingan");
      break;
      case "bayi":
      $register = new RegisterKohortBayi;
      $register->addRegister("kambingan");
      break;
      case "balita":
      $register = new RegisterKohortBalita;
      $register->addRegister("kambingan");
      break;
      case "apras":
      $register = new RegisterKohortApras;
      $register->addRegister("kambingan");
      break;
      default:
      echo "Salah Parameter";     
      break;        
    }     
  }

  function ubahRegister($jenis,$idRegister){
    $register = NULL;   
    switch ($jenis) {
      case "ibu":
      $register = new RegisterKohortIbu;
      $hasil=$register->editRegister("kambingan",$idRegister);
      break;
      case "bayi":
      $register = new RegisterKohortBayi;
      $register->editRegister("kambingan",$idRegister);
      break;
      case "balita":
      $register = new RegisterKohortBalita;
      $register->editRegister("kambingan",$idRegister);
      break;
      case "apras":
      $register = new RegisterKohortApras;
      $register->editRegister("kambingan",$idRegister);
      break;
      default:
      echo "Salah Parameter";     
      break;        
    }  
  }
  function hapusRegister($jenis,$idRegister){
    $register = NULL;   
    switch ($jenis) {
      case "ibu":
      $register = new RegisterKohortIbu;
      $hasil=$register->deleteRegister("kambingan",$idRegister);
      break;
      case "bayi":
      $register = new RegisterKohortBayi;
      $register->deleteRegister("kambingan",$idRegister);
      break;
      case "balita":
      $register = new RegisterKohortBalita;
      $register->deleteRegister("kambingan",$idRegister);
      break;
      case "apras":
      $register = new RegisterKohortApras;
      $register->deleteRegister("kambingan",$idRegister);
      break;
      default:
      echo "Salah Parameter";     
      break;        
    }  
  }
  function lihatPelayanan(){
    $register = NULL;   
    switch ($jenis) {
      case "ibu":
      $pelayanan = new RegisterKohortIbu;
      $hasil=$pelayanan->viewPelayanan("kambingan");
      return $hasil;
      break;
      case "bayi":
      $pelayanan = new RegisterKohortBayi;
      $pelayanan->viewPelayanan("kambingan");
      break;
      case "balita":
      $pelayanan = new RegisterKohortBalita;
      $pelayanan->viewPelayanan("kambingan");
      break;
      case "apras":
      $pelayanan = new RegisterKohortApras;
      $pelayanan->viewPelayanan("kambingan");
      break;
      default:
      echo "Salah Parameter";     
      break;        
    }
  }
  function tambahPelayanan($jenis,$idRegister){
    $register = NULL;   
    switch ($jenis) {
      case "ibu":
      $pelayanan = new RegisterKohortIbu;
      $hasil=$pelayanan->addPelayanan("kambingan",$idRegister);
      return $hasil;
      break;
      case "bayi":
      $pelayanan = new RegisterKohortBayi;
      $pelayanan->addPelayanan("kambingan",$idRegister);
      break;
      case "balita":
      $pelayanan = new RegisterKohortBalita;
      $pelayanan->addPelayanan("kambingan",$idRegister);
      break;
      case "apras":
      $pelayanan = new RegisterKohortApras;
      $pelayanan->addPelayanan("kambingan",$idRegister);
      break;
      default:
      echo "Salah Parameter";     
      break;        
    }
  }
  function ubahPelayanan($jenis,$idRegister){
    $register = NULL;   
    switch ($jenis) {
      case "ibu":
      $pelayanan = new RegisterKohortIbu;
      $hasil=$pelayanan->editPelayanan("kambingan",$idRegister);
      return $hasil;
      break;
      case "bayi":
      $pelayanan = new RegisterKohortBayi;
      $pelayanan->editPelayanan("kambingan",$idRegister);
      break;
      case "balita":
      $pelayanan = new RegisterKohortBalita;
      $pelayanan->editPelayanan("kambingan",$idRegister);
      break;
      case "apras":
      $pelayanan = new RegisterKohortApras;
      $pelayanan->editPelayanan("kambingan",$idRegister);
      break;
      default:
      echo "Salah Parameter";     
      break;        
    }
  }
  function hapusPelayanan($jenis,$idRegister){
    $register = NULL;   
    switch ($jenis) {
      case "ibu":
      $pelayanan = new RegisterKohortIbu;
      $hasil=$pelayanan->deletePelayanan("kambingan",$idRegister);
      return $hasil;
      break;
      case "bayi":
      $pelayanan = new RegisterKohortBayi;
      $pelayanan->deletePelayanan("kambingan",$idRegister);
      break;
      case "balita":
      $pelayanan = new RegisterKohortBalita;
      $pelayanan->deletePelayanan("kambingan",$idRegister);
      break;
      case "apras":
      $pelayanan = new RegisterKohortApras;
      $pelayanan->deletePelayanan("kambingan",$idRegister);
      break;
      default:
      echo "Salah Parameter";     
      break;        
    }
  }
  function lihatRekapan($tahun){
    if ($tahun>2015) {
      $this->perbaruiRekapan("kambingan",$tahun);
    }
    $rekapan = new E_Rekapan();
    $hasil=$rekapan->viewRekapanDesa("kambingan",$tahun);
    return $hasil;
  }
  function perbaruiRekapan($tahun){
    $rekapan = new E_Rekapan();
    $rekapan->newRekapan("kambingan",$tahun);
  }
  function lihatPemetaan($tahun){
    $rekapan = new E_Rekapan();
    $hasil=$rekapan->viewPemetaanDesa("kambingan",$tahun);
    return $hasil;
  }
  function perbaruiPemetaan($tahun){
    $rekapan = new E_Rekapan;
    $rekapan->newPemetaan("kambingan",$tahun);
  }
  function ambilSasaran(){
    $sasaran = new E_Rekapan();
    $hasil=$sasaran->getSasaran("kambingan");
    return $hasil;
  }
  function ambilTarget(){
    $target = new E_Rekapan();
    $hasil=$target->getTarget("kambingan");
    return $hasil;
  }
}