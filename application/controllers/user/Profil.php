<?php 	



class Profil extends CI_Controller{
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
		$id=$this->session->userdata('id_anggota');
		$data['anggota']=$this->db->query("SELECT * FROM anggota WHERE id_anggota='$id'")->result();
		$data['title']="HALAMAN PROFIL";
		$this->load->view('templates_user/header',$data);
		$this->load->view('templates_user/sidebar');
		$this->load->view('user/profil');
		$this->load->view('templates_user/footer');
	}



}






 ?>