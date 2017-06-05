<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class BidanDesaPulungdowo extends BidanDesa{
	public function __construct()
	{
		parent::__construct();
		if (($this->session->userdata('desa') != "pulungdowo")&&($this->session->userdata('desa') != "puskesmas")){
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
			$hasil=$register->viewRegister("pulungdowo");
			return $hasil;
			break;
			case "bayi":
			$register = new RegisterKohortBayi;
			$hasil=$register->viewRegister("pulungdowo");
			return $hasil;
			break;
			case "balita":
			$register = new RegisterKohortBalita;
			$hasil=$register->viewRegister("pulungdowo");
			return $hasil;
			break;
			case "apras":
			$register = new RegisterKohortApras;
			$hasil=$register->viewRegister("pulungdowo");
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
			$hasil=$register->addRegister("pulungdowo");
			break;
			case "bayi":
			$register = new RegisterKohortBayi;
			$register->addRegister("pulungdowo");
			break;
			case "balita":
			$register = new RegisterKohortBalita;
			$register->addRegister("pulungdowo");
			break;
			case "apras":
			$register = new RegisterKohortApras;
			$register->addRegister("pulungdowo");
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
			$hasil=$register->editRegister("pulungdowo",$idRegister);
			break;
			case "bayi":
			$register = new RegisterKohortBayi;
			$register->editRegister("pulungdowo",$idRegister);
			break;
			case "balita":
			$register = new RegisterKohortBalita;
			$register->editRegister("pulungdowo",$idRegister);
			break;
			case "apras":
			$register = new RegisterKohortApras;
			$register->editRegister("pulungdowo",$idRegister);
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
			$hasil=$register->deleteRegister("pulungdowo",$idRegister);
			break;
			case "bayi":
			$register = new RegisterKohortBayi;
			$register->deleteRegister("pulungdowo",$idRegister);
			break;
			case "balita":
			$register = new RegisterKohortBalita;
			$register->deleteRegister("pulungdowo",$idRegister);
			break;
			case "apras":
			$register = new RegisterKohortApras;
			$register->deleteRegister("pulungdowo",$idRegister);
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
			$hasil=$pelayanan->addPelayanan("pulungdowo",$idRegister);
			return $hasil;
			break;
			case "bayi":
			$pelayanan = new RegisterKohortBayi;
			$pelayanan->addPelayanan("pulungdowo",$idRegister);
			break;
			case "balita":
			$pelayanan = new RegisterKohortBalita;
			$pelayanan->addPelayanan("pulungdowo",$idRegister);
			break;
			case "apras":
			$pelayanan = new RegisterKohortApras;
			$pelayanan->addPelayanan("pulungdowo",$idRegister);
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
			$hasil=$pelayanan->editPelayanan("pulungdowo",$idRegister);
			return $hasil;
			break;
			case "bayi":
			$pelayanan = new RegisterKohortBayi;
			$pelayanan->editPelayanan("pulungdowo",$idRegister);
			break;
			case "balita":
			$pelayanan = new RegisterKohortBalita;
			$pelayanan->editPelayanan("pulungdowo",$idRegister);
			break;
			case "apras":
			$pelayanan = new RegisterKohortApras;
			$pelayanan->editPelayanan("pulungdowo",$idRegister);
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
			$hasil=$pelayanan->deletePelayanan("pulungdowo",$idRegister);
			return $hasil;
			break;
			case "bayi":
			$pelayanan = new RegisterKohortBayi;
			$pelayanan->deletePelayanan("pulungdowo",$idRegister);
			break;
			case "balita":
			$pelayanan = new RegisterKohortBalita;
			$pelayanan->deletePelayanan("pulungdowo",$idRegister);
			break;
			case "apras":
			$pelayanan = new RegisterKohortApras;
			$pelayanan->deletePelayanan("pulungdowo",$idRegister);
			break;
			default:
			echo "Salah Parameter";     
			break;        
		}
	}
	function lihatRekapan($tahun){
		$rekapan = new E_Rekapan();
		$hasil=$rekapan->viewRekapanDesa("pulungdowo",$tahun);
		return $hasil;
	}
	function lihatPemetaan($tahun){
		$rekapan = new E_Rekapan();
		$hasil=$rekapan->viewPemetaanDesa("pulungdowo",$tahun);
		return $hasil;
	}
	function perbaruiRekapan($tahun){
		if ($tahun>2015) {
			$rekapan = new E_Rekapan;
			$rekapan->newRekapan("pulungdowo",$tahun);
		}
	}
	function perbaruiPemetaan($tahun){
		$rekapan = new E_Rekapan;
		$rekapan->newPemetaan("pulungdowo",$tahun);
	}
	function ambilSasaran(){
		$sasaran = new E_Rekapan();
		$hasil=$sasaran->getSasaran("pulungdowo");
		return $hasil;
	}
	function ambilTarget(){
		$target = new E_Rekapan();
		$hasil=$target->getTarget();
		return $hasil;
	}
}
