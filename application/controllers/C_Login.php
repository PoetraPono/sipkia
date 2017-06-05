<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_Login extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('E_User');
	}

	public function index(){
		if ($this->session->userdata('sudahlogin')) {
			redirect ('C_Login/pilihJenisUser');
		}
		else{
			$this->load->view('login');
		}
	}    
	public function coba(){
		
			$this->load->view('coba');
		
	}  
	
	public function login(){
		if ($this->session->userdata('sudahlogin')) {
			redirect ('C_Login/pilihJenisUser');
		}
		else{
			$this->load->view('login');
		}
	}

	public function prosesLogin(){          
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));

		if ($this->E_User->validasi($username, $password)) {
			redirect ('C_Login/pilihJenisUser');
		} else {
			$this->data['pesan'] = 'Username atau Password salah!';
            $this->load->view('login', $this->data);
		}     
	}

	public function pilihJenisUser(){
		if ($this->session->userdata('jenisUser') == "Bidan Desa") {
			redirect ('C_Bidan');
		}else if($this->session->userdata('jenisUser') == "Puskesmas"){
			redirect ('C_Puskesmas');
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('C_Login');
	}

}
/* End of file login.php */
/* Location: ./application/controllers/login.php */