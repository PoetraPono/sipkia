<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class BidanDesaTumpang extends BidanDesa{
	public function __construct()
	{
		parent::__construct();
		if (($this->session->userdata('desa') != "tumpang")&&($this->session->userdata('desa') != "puskesmas")){
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
			$hasil=$register->viewRegister("tumpang");
			return $hasil;
			break;
			case "bayi":
			$register = new RegisterKohortBayi;
			$hasil=$register->viewRegister("tumpang");
			return $hasil;
			break;
			case "balita":
			$register = new RegisterKohortBalita;
			$hasil=$register->viewRegister("tumpang");
			return $hasil;
			break;
			case "apras":
			$register = new RegisterKohortApras;
			$hasil=$register->viewRegister("tumpang");
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
			$hasil=$register->addRegister("tumpang");
			break;
			case "bayi":
			$register = new RegisterKohortBayi;
			$register->addRegister("tumpang");
			break;
			case "balita":
			$register = new RegisterKohortBalita;
			$register->addRegister("tumpang");
			break;
			case "apras":
			$register = new RegisterKohortApras;
			$register->addRegister("tumpang");
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
			$hasil=$register->editRegister("tumpang",$idRegister);
			break;
			case "bayi":
			$register = new RegisterKohortBayi;
			$register->editRegister("tumpang",$idRegister);
			break;
			case "balita":
			$register = new RegisterKohortBalita;
			$register->editRegister("tumpang",$idRegister);
			break;
			case "apras":
			$register = new RegisterKohortApras;
			$register->editRegister("tumpang",$idRegister);
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
			$hasil=$register->deleteRegister("tumpang",$idRegister);
			break;
			case "bayi":
			$register = new RegisterKohortBayi;
			$register->deleteRegister("tumpang",$idRegister);
			break;
			case "balita":
			$register = new RegisterKohortBalita;
			$register->deleteRegister("tumpang",$idRegister);
			break;
			case "apras":
			$register = new RegisterKohortApras;
			$register->deleteRegister("tumpang",$idRegister);
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
			$hasil=$pelayanan->addPelayanan("tumpang",$idRegister);
			return $hasil;
			break;
			case "bayi":
			$pelayanan = new RegisterKohortBayi;
			$pelayanan->addPelayanan("tumpang",$idRegister);
			break;
			case "balita":
			$pelayanan = new RegisterKohortBalita;
			$pelayanan->addPelayanan("tumpang",$idRegister);
			break;
			case "apras":
			$pelayanan = new RegisterKohortApras;
			$pelayanan->addPelayanan("tumpang",$idRegister);
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
			$hasil=$pelayanan->editPelayanan("tumpang",$idRegister);
			return $hasil;
			break;
			case "bayi":
			$pelayanan = new RegisterKohortBayi;
			$pelayanan->editPelayanan("tumpang",$idRegister);
			break;
			case "balita":
			$pelayanan = new RegisterKohortBalita;
			$pelayanan->editPelayanan("tumpang",$idRegister);
			break;
			case "apras":
			$pelayanan = new RegisterKohortApras;
			$pelayanan->editPelayanan("tumpang",$idRegister);
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
			$hasil=$pelayanan->deletePelayanan("tumpang",$idRegister);
			return $hasil;
			break;
			case "bayi":
			$pelayanan = new RegisterKohortBayi;
			$pelayanan->deletePelayanan("tumpang",$idRegister);
			break;
			case "balita":
			$pelayanan = new RegisterKohortBalita;
			$pelayanan->deletePelayanan("tumpang",$idRegister);
			break;
			case "apras":
			$pelayanan = new RegisterKohortApras;
			$pelayanan->deletePelayanan("tumpang",$idRegister);
			break;
			default:
			echo "Salah Parameter";     
			break;        
		}
	}
	function lihatRekapan($tahun){
		$rekapan = new E_Rekapan();
		$hasil=$rekapan->viewRekapanDesa("tumpang",$tahun);
		return $hasil;
	}
	function lihatPemetaan($tahun){
		$rekapan = new E_Rekapan();
		$hasil=$rekapan->viewPemetaanDesa("tumpang",$tahun);
		return $hasil;
	}
	function perbaruiRekapan($tahun){
		if ($tahun>2015) {
			$rekapan = new E_Rekapan;
			$rekapan->newRekapan("tumpang",$tahun);
		}
	}
	function perbaruiPemetaan($tahun){
		$rekapan = new E_Rekapan;
		$rekapan->newPemetaan("tumpang",$tahun);
	}
	function ambilSasaran(){
		$sasaran = new E_Rekapan();
		$hasil=$sasaran->getSasaran("tumpang");
		return $hasil;
	}
	function ambilTarget(){
		$target = new E_Rekapan();
		$hasil=$target->getTarget();
		return $hasil;
	}
}
