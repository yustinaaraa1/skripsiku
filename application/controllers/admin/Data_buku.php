<?php 

class Data_buku extends CI_Controller{
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
		$data['buku']=$this->db->query("SELECT * FROM buku bk, jenis jn WHERE bk.kode_jenis=jn.kode_jenis")->result();
		$data['title']="DATA BUKU";
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/data_buku',$data);
		$this->load->view('templates_admin/footer');
	}

	public function search()
	{
		$keyword=$this->input->post('keyword');
		$data['buku']=$this->perpus_model->get_keywordbuku($keyword);
		$data['title']="DATA BUKU";
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/data_buku',$data);
		$this->load->view('templates_admin/footer');
	}

	public function tambah()
	{
		$data['jenis']=$this->perpus_model->get_data('jenis')->result();
		$data['title']="FORM TAMBAH BUKU";
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/tambah_buku',$data);
		$this->load->view('templates_admin/footer');
	}

	public function tambah_aksi()
	{
		$this->_rules();
		if ($this->form_validation->run()==FALSE) {
			$this->tambah();
		}else{
			$kode_jenis 	=$this->input->post('kode_jenis');
			$judul_buku 	=$this->input->post('judul_buku');
			$pengarang 		=$this->input->post('pengarang');
			$penerbit 		=$this->input->post('penerbit');
			$tahun_terbit 	=$this->input->post('tahun_terbit');
			$tahun_cetak 	=$this->input->post('tahun_cetak');

			$data = array(
				'kode_jenis'  	=> $kode_jenis,
				'judul_buku'  	=> $judul_buku,
				'pengarang'  	=> $pengarang,
				'penerbit'  	=> $penerbit,
				'tahun_terbit'  => $tahun_terbit,
				'tahun_cetak' 	=> $tahun_cetak,
				'status'		=>'1'
			 );

			$this->perpus_model->insert_data('buku',$data);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Data Buku Berhasil DiTambahkan!!!</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>');
			redirect('admin/data_buku');

		}
	}

	public function update($id)
	{
		$data['buku']=$this->db->query("SELECT * FROM buku WHERE id_buku='$id'")->result();
		$data['jenis']=$this->perpus_model->get_data('jenis')->result();
		$data['title']="FORM UPDATE BUKU";
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/update_buku',$data);
		$this->load->view('templates_admin/footer');
	}

	public function update_aksi()
	{
		$this->_rules();
		if ($this->form_validation->run()==FALSE) {
			$this->update();
		}else{
			$id 			=$this->input->post('id_buku');
			$kode_jenis 	=$this->input->post('kode_jenis');
			$judul_buku 	=$this->input->post('judul_buku');
			$pengarang 		=$this->input->post('pengarang');
			$penerbit 		=$this->input->post('penerbit');
			$tahun_terbit 	=$this->input->post('tahun_terbit');
			$tahun_cetak 	=$this->input->post('tahun_cetak');

			$data = array(
				'kode_jenis'  	=> $kode_jenis,
				'judul_buku'  	=> $judul_buku,
				'pengarang'  	=> $pengarang,
				'penerbit'  	=> $penerbit,
				'tahun_terbit'  => $tahun_terbit,
				'tahun_cetak' 	=> $tahun_cetak,
			 );
			$where = array('id_buku' => $id );

			$this->perpus_model->update_data('buku',$data,$where);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Data Buku Berhasil DiUpdate!!!</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>');
			redirect('admin/data_buku');
		}

	}


	public function delete($id)
	{
		$where = array('id_buku' => $id );
		$this->perpus_model->delete_data('buku',$where);
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Data Buku Berhasil DiHapus!!!</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>');
			redirect('admin/data_buku');
	}




	public function _rules()
	{
		$this->form_validation->set_rules('kode_jenis','Kode Jenis','required');
		$this->form_validation->set_rules('judul_buku','Judul Buku','required');
		$this->form_validation->set_rules('pengarang','Pengarang','required');
		$this->form_validation->set_rules('penerbit','Penerbit','required');
		$this->form_validation->set_rules('tahun_terbit','Tahun Terbit','required');
		$this->form_validation->set_rules('tahun_cetak','Tahun Cetak','required');

	}
}


 ?>