<?php 

class Transaksi_peminjaman extends CI_Controller{
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
		$data['buku']=$this->perpus_model->get_data('buku')->result();
		$data['title']="TRANSAKSI PEMINJAMAN";
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/transaksi_pinjam',$data);
		$this->load->view('templates_admin/footer');
	}

	public function search()
	{
		$keyword=$this->input->post('keyword');
		$data['buku']=$this->perpus_model->get_keywordbuku($keyword);
		$data['title']="DATA BUKU";
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/transaksi_pinjam',$data);
		$this->load->view('templates_admin/footer');
	}

	public function pinjam($id)
	{
		$where = array('id_buku' => $id );
		$data['buku']=$this->perpus_model->detail('buku',$where)->result();
		$data['title']="FORM PINJAM BUKU";
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/pinjam_buku',$data);
		$this->load->view('templates_admin/footer');
	}


	public function pinjam_aksi()
	{
		
			$id_anggota 		=$this->input->post('id_anggota');
			$id_buku  			=$this->input->post('id_buku');
			$tanggal_pinjam		=$this->input->post('tanggal_pinjam');
			$tanggal_kembali 	=$this->input->post('tanggal_kembali');

			$data = array(
				'id_anggota' => $id_anggota,
				'id_buku' => $id_buku,
				'tanggal_pinjam' => $tanggal_pinjam,
				'tanggal_kembali' => $tanggal_kembali,
				'tanggal_pengembalian' => '0000-00-00',
				'denda' => '500',
				'total_denda' => '0',
			 );
			$data1 = array('status' => '0' );
			$where = array('id_buku' => $id_buku );
			$this->perpus_model->insert_data('transaksi',$data);
			$this->perpus_model->update_data('buku',$data1,$where);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Transaksi Pinjam Berhasil DiJalankan!!!</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>');
			redirect('admin/Transaksi_peminjaman');
	}



	public function _rules()
	{
		$this->form_validation->set_rules('id_anggota','Nomor Anggota','required');
		$this->form_validation->set_rules('tanggal_pinjam','Tanggal Pinjam','required');
		$this->form_validation->set_rules('tanggal_kembali','Tanggal Kembali','required');
		$this->form_validation->set_rules('id_buku','id_buku','required');
	}



}


 ?>