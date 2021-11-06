<?php 


class Registrasi extends CI_Controller{

	public function index()
	{
		$data['title']="RGISTRASI DATA";
		$this->load->view('templates_admin/header',$data);
		$this->load->view('registrasi');
		$this->load->view('templates_admin/footer');
	}


	public function tambah_aksi()
	{
		$this->_rules();
		if ($this->form_validation->run()==FALSE) {
			$this->index();
		}else{
			$nama_anggota 		=$this->input->post('nama_anggota');
			$username 			=$this->input->post('username');
			$alamat 			=$this->input->post('alamat');
			$gender 			=$this->input->post('gender');
			$no_telepon 		=$this->input->post('no_telepon');
			$email 				=$this->input->post('email');
			$password 			=$this->input->post('password');
			$role_id			=$this->input->post('role_id');
			$gambar 			=$_FILES['gambar']['name'];
			if ($gambar=''){}else{
			$config['upload_path']='./assets/upload';
			$config['allowed_types']='jpeg|jpg|png|tiff';
			$this->load->library('upload',$config);
			if (!$this->upload->do_upload('gambar')) {
				echo "Gambar gagal diupload";
			}else{
				$gambar=$this->upload->data('file_name');
			}
			}
			

			$data = array(
				'nama_anggota' 	=> $nama_anggota,
				'username' 		=> $username,
				'password' 		=> md5($password),
				'alamat' 		=> $alamat,
				'gender' 		=> $gender,
				'no_telepon' 	=> $no_telepon,
				'email' 		=> $email,
				'role_id'		=> $role_id,
				'gambar' 		=> $gambar
				 );
			$this->perpus_model->insert_data('anggota',$data);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Data Anggota Berhasil DiTambahkan!!!</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>');
			redirect('Welcome');

		}
	}




	public function _rules()
	{
		$this->form_validation->set_rules('nama_anggota','Nama','required');
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('alamat','Alamat','required');
		$this->form_validation->set_rules('gender','Gender','required');
		$this->form_validation->set_rules('no_telepon','No.Telpon','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('role_id','Daftar Sebagai','required');
	}




}



 ?>