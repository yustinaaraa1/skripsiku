<?php 


class Data_buku extends CI_Controller{
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
		$data['buku']=$this->perpus_model->get_data('buku')->result();
		$data['title']="DATA BUKU";
		$this->load->view('templates_user/header',$data);
		$this->load->view('templates_user/sidebar');
		$this->load->view('user/Data_buku',$data);
		$this->load->view('templates_user/footer');
	}
	public function search()
	{
		$keyword=$this->input->post('keyword');
		$data['buku']=$this->perpus_model->get_keywordbuku($keyword);
		$data['title']="DATA BUKU";
		$this->load->view('templates_user/header',$data);
		$this->load->view('templates_user/sidebar');
		$this->load->view('user/data_buku',$data);
		$this->load->view('templates_user/footer');
	}



}





 ?>