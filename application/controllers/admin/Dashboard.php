<?php 

class Dashboard extends CI_Controller{

	public function __construct(){
		parent::__construct();
		if ($this->session->userdata('role_id')!='1') {
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
		$pria    =$this->db->query("SELECT * FROM anggota WHERE gender='Laki-laki'");
		$anggota =$this->db->query("SELECT * FROM anggota");
		$buku  	 =$this->db->query("SELECT * FROM buku");
		$jenis   =$this->db->query("SELECT * FROM jenis");
		$transaksi =$this->db->query("SELECT * FROM buku WHERE status='1'");
		$data['perempuan']=$perempuan->num_rows();
		$data['pria'] 	  =$pria->num_rows();
		$data['anggota']  =$anggota->num_rows();
		$data['jenis'] 	  =$jenis->num_rows();
		$data['buku'] 	  =$buku->num_rows();
		$data['transaksi']=$transaksi->num_rows();
		$data['title']="DASHBOARD";
		$dala['pesan']=$this->perpus_model->get_data('pesan_saran')->result();
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar',$dala);
		$this->load->view('admin/Dashboard',$data);
		$this->load->view('templates_admin/footer');
	}


	public function pesan()
	{
		$data['title']="PESAN MASUK";
		$data['pesan']=$this->db->query("SELECT * FROM pesan_saran ORDER BY id_pesan DESC")->result();
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar',$data);
		$this->load->view('admin/pesan',$data);
		$this->load->view('templates_admin/footer');
	}

	public function detail_pesan($id)
	{
		$where = array('id_pesan' => $id );
		$data['title']="PESAN MASUK";
		$data['pesan']=$this->perpus_model->detail('pesan_saran',$where)->result();
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar',$data);
		$this->load->view('admin/detail_pesan',$data);
		$this->load->view('templates_admin/footer');
	}

}


 ?>