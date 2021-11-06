<?php 

class Dashboard extends CI_Controller{
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
		$perempuan =$this->db->query("SELECT * FROM anggota WHERE gender='Perempuan'");
		$buku    =$this->db->query("SELECT * FROM buku WHERE status='1'");
		$buku1    =$this->db->query("SELECT * FROM buku");
		$anggota =$this->db->query("SELECT * FROM anggota");
		$buku1 	 =$this->db->query("SELECT * FROM buku");
		$jenis   =$this->db->query("SELECT * FROM jenis");
		$data['anggota']  =$anggota->num_rows();
		$data['jenis'] 	  =$jenis->num_rows();
		$data['buku'] 	  =$buku->num_rows();
		$data['buku1']	  =$buku1->num_rows()-$buku->num_rows();
		$data['bukul'] 	  =$buku1->num_rows();
		$data['title']="DASHBOARD";
		$this->load->view('templates_user/header',$data);
		$this->load->view('templates_user/sidebar');
		$this->load->view('user/Dashboard');
		$this->load->view('templates_user/footer');
	}

	public function pesan()
	{
		$id_anggota		=$this->input->post('id_anggota');
		$gambar 		=$this->input->post('gambar');
		$pesan 			=$this->input->post('pesan');
		$nama_anggota	=$this->input->post('nama_anggota');
		$email 			=$this->input->post('email');

		$data = array(
			'id_anggota' 		=> $id_anggota,
			'gambar' 			=>$gambar,
			'pesan' 			=>$pesan,
			'nama_anggota' 		=>$nama_anggota,
			'email'				=>$email
		 );
		$this->perpus_model->insert_data('pesan_saran',$data);
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Pesan/Saran Berhasil Terkirim!</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>');
		redirect('user/Dashboard');

	}



}


 ?>