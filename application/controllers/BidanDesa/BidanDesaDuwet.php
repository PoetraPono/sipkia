<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class BidanDesaDuwet extends BidanDesa{
	public function __construct()
	{
		parent::__construct();
		if (($this->session->userdata('desa') != "duwet")&&($this->session->userdata('desa') != "puskesmas")){
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
			$hasil=$register->viewRegister("duwet");
			return $hasil;
			break;
			case "bayi":
			$register = new RegisterKohortBayi;
			$hasil=$register->viewRegister("duwet");
			return $hasil;
			break;
			case "balita":
			$register = new RegisterKohortBalita;
			$hasil=$register->viewRegister("duwet");
			return $hasil;
			break;
			case "apras":
			$register = new RegisterKohortApras;
			$hasil=$register->viewRegister("duwet");
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
			$hasil=$register->addRegister("duwet");
			break;
			case "bayi":
			$register = new RegisterKohortBayi;
			$register->addRegister("duwet");
			break;
			case "balita":
			$register = new RegisterKohortBalita;
			$register->addRegister("duwet");
			break;
			case "apras":
			$register = new RegisterKohortApras;
			$register->addRegister("duwet");
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
			$hasil=$register->editRegister("duwet",$idRegister);
			break;
			case "bayi":
			$register = new RegisterKohortBayi;
			$register->editRegister("duwet",$idRegister);
			break;
			case "balita":
			$register = new RegisterKohortBalita;
			$register->editRegister("duwet",$idRegister);
			break;
			case "apras":
			$register = new RegisterKohortApras;
			$register->editRegister("duwet",$idRegister);
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
			$hasil=$register->deleteRegister("duwet",$idRegister);
			break;
			case "bayi":
			$register = new RegisterKohortBayi;
			$register->deleteRegister("duwet",$idRegister);
			break;
			case "balita":
			$register = new RegisterKohortBalita;
			$register->deleteRegister("duwet",$idRegister);
			break;
			case "apras":
			$register = new RegisterKohortApras;
			$register->deleteRegister("duwet",$idRegister);
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
			$hasil=$pelayanan->addPelayanan("duwet",$idRegister);
			return $hasil;
			break;
			case "bayi":
			$pelayanan = new RegisterKohortBayi;
			$pelayanan->addPelayanan("duwet",$idRegister);
			break;
			case "balita":
			$pelayanan = new RegisterKohortBalita;
			$pelayanan->addPelayanan("duwet",$idRegister);
			break;
			case "apras":
			$pelayanan = new RegisterKohortApras;
			$pelayanan->addPelayanan("duwet",$idRegister);
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
			$hasil=$pelayanan->editPelayanan("duwet",$idRegister);
			return $hasil;
			break;
			case "bayi":
			$pelayanan = new RegisterKohortBayi;
			$pelayanan->editPelayanan("duwet",$idRegister);
			break;
			case "balita":
			$pelayanan = new RegisterKohortBalita;
			$pelayanan->editPelayanan("duwet",$idRegister);
			break;
			case "apras":
			$pelayanan = new RegisterKohortApras;
			$pelayanan->editPelayanan("duwet",$idRegister);
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
			$hasil=$pelayanan->deletePelayanan("duwet",$idRegister);
			return $hasil;
			break;
			case "bayi":
			$pelayanan = new RegisterKohortBayi;
			$pelayanan->deletePelayanan("duwet",$idRegister);
			break;
			case "balita":
			$pelayanan = new RegisterKohortBalita;
			$pelayanan->deletePelayanan("duwet",$idRegister);
			break;
			case "apras":
			$pelayanan = new RegisterKohortApras;
			$pelayanan->deletePelayanan("duwet",$idRegister);
			break;
			default:
			echo "Salah Parameter";     
			break;        
		}
	}
	function lihatRekapan($tahun){
		$rekapan = new E_Rekapan();
		$hasil=$rekapan->viewRekapanDesa("duwet",$tahun);
		return $hasil;
	}
	function lihatPemetaan($tahun){
		$rekapan = new E_Rekapan();
		$hasil=$rekapan->viewPemetaanDesa("duwet",$tahun);
		return $hasil;
	}
	function perbaruiRekapan($tahun){
		if ($tahun>2015) {
			$rekapan = new E_Rekapan;
			$rekapan->newRekapan("duwet",$tahun);
		}
	}
	function perbaruiPemetaan($tahun){
		$rekapan = new E_Rekapan;
		$rekapan->newPemetaan("duwet",$tahun);
	}
	function ambilSasaran(){
		$sasaran = new E_Rekapan();
		$hasil=$sasaran->getSasaran("duwet");
		return $hasil;
	}
	function ambilTarget(){
		$target = new E_Rekapan();
		$hasil=$target->getTarget();
		return $hasil;
	}
}
