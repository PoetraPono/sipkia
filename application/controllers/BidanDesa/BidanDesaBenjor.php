<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class BidanDesaBenjor extends BidanDesa{
	public function __construct()
	{
		parent::__construct();
		if (($this->session->userdata('desa') != "benjor")&&($this->session->userdata('desa') != "puskesmas")){
			?> <script language="JavaScript">alert('Anda tidak mempunyai akses ke halaman ini !');
			document.location='<?php echo base_url(); ?>'</script>
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
			$hasil=$register->viewRegister("benjor");
			return $hasil;
			break;
			case "bayi":
			$register = new RegisterKohortBayi;
			$hasil=$register->viewRegister("benjor");
			return $hasil;
			break;
			case "balita":
			$register = new RegisterKohortBalita;
			$hasil=$register->viewRegister("benjor");
			return $hasil;
			break;
			case "apras":
			$register = new RegisterKohortApras;
			$hasil=$register->viewRegister("benjor");
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
			$hasil=$register->addRegister("benjor");
			break;
			case "bayi":
			$register = new RegisterKohortBayi;
			$register->addRegister("benjor");
			break;
			case "balita":
			$register = new RegisterKohortBalita;
			$register->addRegister("benjor");
			break;
			case "apras":
			$register = new RegisterKohortApras;
			$register->addRegister("benjor");
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
			$hasil=$register->editRegister("benjor",$idRegister);
			break;
			case "bayi":
			$register = new RegisterKohortBayi;
			$register->editRegister("benjor",$idRegister);
			break;
			case "balita":
			$register = new RegisterKohortBalita;
			$register->editRegister("benjor",$idRegister);
			break;
			case "apras":
			$register = new RegisterKohortApras;
			$register->editRegister("benjor",$idRegister);
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
			$hasil=$register->deleteRegister("benjor",$idRegister);
			break;
			case "bayi":
			$register = new RegisterKohortBayi;
			$register->deleteRegister("benjor",$idRegister);
			break;
			case "balita":
			$register = new RegisterKohortBalita;
			$register->deleteRegister("benjor",$idRegister);
			break;
			case "apras":
			$register = new RegisterKohortApras;
			$register->deleteRegister("benjor",$idRegister);
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
			$hasil=$pelayanan->addPelayanan("benjor",$idRegister);
			return $hasil;
			break;
			case "bayi":
			$pelayanan = new RegisterKohortBayi;
			$pelayanan->addPelayanan("benjor",$idRegister);
			break;
			case "balita":
			$pelayanan = new RegisterKohortBalita;
			$pelayanan->addPelayanan("benjor",$idRegister);
			break;
			case "apras":
			$pelayanan = new RegisterKohortApras;
			$pelayanan->addPelayanan("benjor",$idRegister);
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
			$hasil=$pelayanan->editPelayanan("benjor",$idRegister);
			return $hasil;
			break;
			case "bayi":
			$pelayanan = new RegisterKohortBayi;
			$pelayanan->editPelayanan("benjor",$idRegister);
			break;
			case "balita":
			$pelayanan = new RegisterKohortBalita;
			$pelayanan->editPelayanan("benjor",$idRegister);
			break;
			case "apras":
			$pelayanan = new RegisterKohortApras;
			$pelayanan->editPelayanan("benjor",$idRegister);
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
			$hasil=$pelayanan->deletePelayanan("benjor",$idRegister);
			return $hasil;
			break;
			case "bayi":
			$pelayanan = new RegisterKohortBayi;
			$pelayanan->deletePelayanan("benjor",$idRegister);
			break;
			case "balita":
			$pelayanan = new RegisterKohortBalita;
			$pelayanan->deletePelayanan("benjor",$idRegister);
			break;
			case "apras":
			$pelayanan = new RegisterKohortApras;
			$pelayanan->deletePelayanan("benjor",$idRegister);
			break;
			default:
			echo "Salah Parameter";     
			break;        
		}
	}
	function lihatRekapan($tahun){
		$rekapan = new E_Rekapan();
		$hasil=$rekapan->viewRekapanDesa("benjor",$tahun);
		return $hasil;
	}
	function lihatPemetaan($tahun){
		$rekapan = new E_Rekapan();
		$hasil=$rekapan->viewPemetaanDesa("benjor",$tahun);
		return $hasil;
	}
	function perbaruiRekapan($tahun){
		if ($tahun>2015) {
			$rekapan = new E_Rekapan;
			$rekapan->newRekapan("benjor",$tahun);
		}
	}
	function perbaruiPemetaan($tahun){
		$rekapan = new E_Rekapan;
		$rekapan->newPemetaan("benjor",$tahun);
	}
	function ambilSasaran(){
		$sasaran = new E_Rekapan();
		$hasil=$sasaran->getSasaran("benjor");
		return $hasil;
	}
	function ambilTarget(){
		$target = new E_Rekapan();
		$hasil=$target->getTarget();
		return $hasil;
	}
}
