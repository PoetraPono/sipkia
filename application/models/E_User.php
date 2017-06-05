<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class E_User extends CI_Model {

	function validasi($username, $password) { 
		$login =  $this->db->query("
			SELECT *
			FROM tb_user
			WHERE username like '$username' 
			and password like '$password' 
			");
		if($login->num_rows() == 1) {

			$user = $login->row();
			$auth = array('username' => $user->username,'foto' => $user->foto, 'jenisUser' => $user->jenisUser, 'nama' => $user->nama, 'alamat' => $user->alamat, 'desa' => $user->desa, 'sudahlogin' => true);
			$this->session->set_userdata($auth);
			// $this->session->sess_create();
			return true;
		} else {
			$this->session->set_flashdata('notification', 'Incorrect username and/or password');
			return false;
		}
	}

	function viewUser(){
		$query=$this->db->query("SELECT * FROM tb_user");
		return $query->result();
	}

	function addUser(){
		$nama=$this->input->post('nama');
		$alamat=$this->input->post('alamat');
		$username=$this->input->post('username');
		$password=md5($this->input->post('password'));
		$desa=$this->input->post('desa');
		$foto=$this->input->post('foto');
		$jenisUser=$this->input->post('jenisUser');

		$fileName = $_FILES['foto']['name'];
		$fileSize = $_FILES['foto']['size'];
		$fileError = $_FILES['foto']['error'];

		$data = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'username' => $username,
			'password' => $password,
			'desa' => $desa,
			'jenisUser' => $jenisUser,
			'foto' => $fileName
			);

		if ($fileSize > 0 && $fileError == 0 && $fileName != 0) {
			$move = move_uploaded_file($_FILES['foto']['tmp_name'], 'assets/img/user/'.$fileName);
			if ($move) {
				$this->db->insert('tb_user', $data);
			}
			else {
				$data['msg'] = "Failed to upload";
				?> <script language="JavaScript">alert('Maaf user gagal ditambahkan, silahkan coba lagi !');
				document.location='<?php echo base_url(); ?>C_Puskesmas/lihatUser'</script>
				<?php
			}
		} else {
			$data = array(
				'nama' => $nama,
				'alamat' => $alamat,
				'username' => $username,
				'password' => $password,
				'desa' => $desa,
				'jenisUser' => $jenisUser,
				'foto' => "avatar.png"
				);
			$this->db->insert('tb_user', $data);
			
		} 

	}
	function editUser($id){
		$nama=$this->input->post('nama');
		$alamat=$this->input->post('alamat');
		$username=$this->input->post('username');
		$desa=$this->input->post('desa');
		$foto=$this->input->post('foto');
		$jenisUser=$this->input->post('jenisUser');
		$password=$this->input->post('password');

		$fileName = $_FILES['foto']['name'];
		$fileSize = $_FILES['foto']['size'];
		$fileError = $_FILES['foto']['error'];

		if ($password!=NULL) {
			$password=md5($this->input->post('password'));
			$datum = array(
				'password' => $password
				);
			$this->db->where('idUser', $id);
			$this->db->update('tb_user', $datum); 
		}

		$data = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'username' => $username,
			'desa' => $desa,
			'jenisUser' => $jenisUser,
			'foto' => $fileName
			);

		if ($fileSize > 0 && $fileError == 0 && $fileName != 0) {
			$move = move_uploaded_file($_FILES['foto']['tmp_name'], 'assets/img/user/'.$fileName);
			if ($move) {
				$this->db->where('idUser', $id);
				$this->db->update('tb_user', $data);
			}
			else {
				$data['msg'] = "Failed to upload";
				?> <script language="JavaScript">alert('Maaf user gagal diubah, silahkan coba lagi !');
				document.location='<?php echo base_url(); ?>C_Puskesmas/lihatUser'</script>
				<?php
			}
		} else {
			$data = array(
				'nama' => $nama,
				'alamat' => $alamat,
				'username' => $username,
				'desa' => $desa,
				'jenisUser' => $jenisUser
				);
			$this->db->where('idUser', $id);
			$this->db->update('tb_user', $data);
		} 
	}
	function deleteUser($id){
		$this->db->where('idUser', $id);
		$this->db->delete('tb_user'); 
	}

}

