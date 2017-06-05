<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class BidanDesaDampul extends BidanDesa{
	public function __construct()
	{
		parent::__construct();
		if (($this->session->userdata('desa') != "dampul")&&($this->session->userdata('desa') != "puskesmas")){
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
			$hasil=$register->viewRegister("dampul");
			return $hasil;
			break;
			case "bayi":
			$register = new RegisterKohortBayi;
			$hasil=$register->viewRegister("dampul");
			return $hasil;
			break;
			case "balita":
			$register = new RegisterKohortBalita;
			$hasil=$register->viewRegister("dampul");
			return $hasil;
			break;
			case "apras":
			$register = new RegisterKohortApras;
			$hasil=$register->viewRegister("dampul");
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
			$hasil=$register->addRegister("dampul");
			break;
			case "bayi":
			$register = new RegisterKohortBayi;
			$register->addRegister("dampul");
			break;
			case "balita":
			$register = new RegisterKohortBalita;
			$register->addRegister("dampul");
			break;
			case "apras":
			$register = new RegisterKohortApras;
			$register->addRegister("dampul");
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
			$hasil=$register->editRegister("dampul",$idRegister);
			break;
			case "bayi":
			$register = new RegisterKohortBayi;
			$register->editRegister("dampul",$idRegister);
			break;
			case "balita":
			$register = new RegisterKohortBalita;
			$register->editRegister("dampul",$idRegister);
			break;
			case "apras":
			$register = new RegisterKohortApras;
			$register->editRegister("dampul",$idRegister);
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
			$hasil=$register->deleteRegister("dampul",$idRegister);
			break;
			case "bayi":
			$register = new RegisterKohortBayi;
			$register->deleteRegister("dampul",$idRegister);
			break;
			case "balita":
			$register = new RegisterKohortBalita;
			$register->deleteRegister("dampul",$idRegister);
			break;
			case "apras":
			$register = new RegisterKohortApras;
			$register->deleteRegister("dampul",$idRegister);
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
			$hasil=$pelayanan->addPelayanan("dampul",$idRegister);
			return $hasil;
			break;
			case "bayi":
			$pelayanan = new RegisterKohortBayi;
			$pelayanan->addPelayanan("dampul",$idRegister);
			break;
			case "balita":
			$pelayanan = new RegisterKohortBalita;
			$pelayanan->addPelayanan("dampul",$idRegister);
			break;
			case "apras":
			$pelayanan = new RegisterKohortApras;
			$pelayanan->addPelayanan("dampul",$idRegister);
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
			$hasil=$pelayanan->editPelayanan("dampul",$idRegister);
			return $hasil;
			break;
			case "bayi":
			$pelayanan = new RegisterKohortBayi;
			$pelayanan->editPelayanan("dampul",$idRegister);
			break;
			case "balita":
			$pelayanan = new RegisterKohortBalita;
			$pelayanan->editPelayanan("dampul",$idRegister);
			break;
			case "apras":
			$pelayanan = new RegisterKohortApras;
			$pelayanan->editPelayanan("dampul",$idRegister);
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
			$hasil=$pelayanan->deletePelayanan("dampul",$idRegister);
			return $hasil;
			break;
			case "bayi":
			$pelayanan = new RegisterKohortBayi;
			$pelayanan->deletePelayanan("dampul",$idRegister);
			break;
			case "balita":
			$pelayanan = new RegisterKohortBalita;
			$pelayanan->deletePelayanan("dampul",$idRegister);
			break;
			case "apras":
			$pelayanan = new RegisterKohortApras;
			$pelayanan->deletePelayanan("dampul",$idRegister);
			break;
			default:
			echo "Salah Parameter";     
			break;        
		}
	}
	function lihatRekapan($tahun){
		$rekapan = new E_Rekapan();
		$hasil=$rekapan->viewRekapanDesa("dampul",$tahun);
		return $hasil;
	}
	function lihatPemetaan($tahun){
		$rekapan = new E_Rekapan();
		$hasil=$rekapan->viewPemetaanDesa("dampul",$tahun);
		return $hasil;
	}
	function perbaruiRekapan($tahun){
		if ($tahun>2015) {
			$rekapan = new E_Rekapan;
			$rekapan->newRekapan("dampul",$tahun);
		}
	}
	function perbaruiPemetaan($tahun){
		$rekapan = new E_Rekapan;
		$rekapan->newPemetaan("dampul",$tahun);
	}
	function ambilSasaran(){
		$sasaran = new E_Rekapan();
		$hasil=$sasaran->getSasaran("dampul");
		return $hasil;
	}
	function ambilTarget(){
		$target = new E_Rekapan();
		$hasil=$target->getTarget();
		return $hasil;
	}
}
