<?php 

class Ganti_password extends CI_Controller{
	public function __construct(){
		parent::__construct();
		if ($this->session->userdata('role_id')!='2') {
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
  						<strong>Anda  Belum Login</strong>
  						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
   						 <span aria-hidden="true">&times;</span>
  						</button>
						</div>');
			  	redirect('welcome');
		}
	}

	public function index()
	{
		$data['title']="GANTI PASSWORD";
		$this->load->view('templates_user/header',$data);
		$this->load->view('templates_user/sidebar');
		$this->load->view('user/ganti_password',$data);
		$this->load->view('templates_user/footer');
	}


	public function aksi()
	{
		$pass_baru=$this->input->post('pass_baru');
		$ulang_pass=$this->input->post('ulang_pass');
		$this->form_validation->set_rules('pass_baru','Password Baru','required|matches[ulang_pass]');
		$this->form_validation->set_rules('ulang_pass','Ulangi Password','required');
		if ($this->form_validation->run()!=FALSE) {
			$id 	   =$this->input->post('id_anggota');
			$pass_baru =$this->input->post('pass_baru');
			$ulang_pass=$this->input->post('ulang_pass');

			$data = array('password' => md5($pass_baru) );
			$where = array('id_anggota' => $id);

			$this->perpus_model->update_data('anggota',$data,$where);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Password Berhasil di Update!</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>');
			redirect('welcome');
		}else{
			$data['title']="GANTI PASSWORD";
		$this->load->view('templates_user/header',$data);
		$this->load->view('templates_user/sidebar');
		$this->load->view('user/ganti_password',$data);
		$this->load->view('templates_user/footer');

		}
	}


	


}



 ?>