<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$data['title']="LOGIN";
		$this->load->view('templates_admin/header',$data);
		$this->load->view('welcome_message');
		$this->load->view('templates_admin/footer');
	}

	public function aksi()
	{
		$username=$this->input->post('username');
		$password=$this->input->post('password');

		$cek=$this->perpus_model->cek_login($username,$password);
		if ($cek==FALSE) {
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Pasword/Username salah!!!</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>');
			redirect('welcome');
		}else{
			$this->session->set_userdata('role_id',$cek->role_id);
			$this->session->set_userdata('id_anggota',$cek->id_anggota);
			$this->session->set_userdata('username',$cek->username);
			$this->session->set_userdata('nama_anggota',$cek->nama_anggota);
			$this->session->set_userdata('gambar',$cek->gambar);
			$this->session->set_userdata('email',$cek->email);

			switch ($cek->role_id) {
				case '1':redirect('admin/dashboard');
					# code...
					break;
				case '2':redirect('user/Dashboard');
					# code...
					break;
				
				default:
					# code...
					break;
			}

		}

			
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('welcome/index');
	}
}

