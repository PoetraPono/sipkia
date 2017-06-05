<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Puskesmas extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if (($this->session->userdata('sudahlogin') == FALSE)||($this->session->userdata('jenisUser') != "Puskesmas")){
			redirect ('C_Login');
		}
		$this->load->model('E_Rekapan');
		$this->load->model('E_User');
	}
	public function index()
	{
		$tahun=date('Y');
		redirect('C_Puskesmas/lihatRekapanKecamatan/'.$tahun."/1",'refresh');
	}

	public function lihatRekapanDesa($desa,$tahun)
	{
		redirect('C_Bidan/lihatRekapan/'.$desa.'/'.$tahun,'refresh');
	}

	public function lihatPemetaanDesa($desa,$tahun)
	{
		redirect('C_Bidan/lihatPemetaan/'.$desa.'/'.$tahun,'refresh');
	}

	public function lihatRekapanKecamatan($tahun,$bulan)
	{
		$rekapan = new E_Rekapan();
		$hasil['data']=$rekapan->viewRekapanKecamatan($tahun,$bulan);
		$hasil['tahun']=$tahun;
		$hasil['bulan']=$bulan;
    	$hasil['target']=$rekapan->getTarget();
		$this->load->view('B_RekapanKecamatan', $hasil);
	}

	public function lihatPemetaanKecamatan($tahun,$bulan)
	{
		$pemetaan = new E_Rekapan();
		$hasil['data']=$pemetaan->viewPemetaanKecamatan($tahun,$bulan);
    	$hasil['target']=$pemetaan->getTarget();
		$hasil['tahun']=$tahun;
		$hasil['bulan']=$bulan;
		$this->load->view('B_PemetaanKecamatan', $hasil);
	}

	public function lihatUser(){
		$objek = new E_User();
		$user['data']=$objek->viewUser();
		$this->load->view('B_User', $user);
	}

	public function tambahUser(){
		$objek = new E_User();
		$objek->addUser();
		redirect('C_Puskesmas/lihatUser','refresh');
	}

	public function ubahUser($id){
		$objek = new E_User();
		$objek->editUser($id);
		redirect('C_Puskesmas/lihatUser','refresh');
	}

	public function hapusUser($id){
		$objek = new E_User();
		$objek->deleteUser($id);
		redirect('C_Puskesmas/lihatUser','refresh');
	}
}
