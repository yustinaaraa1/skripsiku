<?php 


class Jenis_buku extends CI_Controller{
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
		$data['jenis']=$this->perpus_model->get_data('jenis')->result();
		$data['title']="JENIS BUKU";
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/jenis_buku',$data);
		$this->load->view('templates_admin/footer');
	}

	public function tambah()
	{
		$data['title']="FORM TAMBAH JENIS BUKU";
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/jenis_tambah',$data);
		$this->load->view('templates_admin/footer');
	}

	public function tambah_aksi()
	{
		$this->_rules();
		if ($this->form_validation->run()==FALSE) {
			$this->tambah();
		}else{
			$kode_jenis=$this->input->post('kode_jenis');
			$nama_jenis=$this->input->post('nama_jenis');

			$data = array(
				'kode_jenis' => $kode_jenis,
				'nama_jenis' => $nama_jenis
				 );
			$this->perpus_model->insert_data('jenis',$data);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Data Jenis Buku Berhasil DiTambahkan!!!</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>');
			redirect('admin/jenis_buku');
		}


	}

	public function update($id)
	{
		$where = array('id_jenis' => $id);
		$data['jenis']=$this->perpus_model->detail('jenis',$where)->result();
		$data['title']="FORM UPDATE JENIS BUKU";
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/jenis_update',$data);
		$this->load->view('templates_admin/footer');
	}

	public function update_aksi()
	{
		$this->_rules();
		if ($this->form_validation->run()==FALSE) {
			$this->update();
		}else{
			$id 	   =$this->input->post('id_jenis');
			$kode_jenis=$this->input->post('kode_jenis');
			$nama_jenis=$this->input->post('nama_jenis');

			$data = array(
				'kode_jenis' => $kode_jenis,
				'nama_jenis' => $nama_jenis
				 );
			$where = array('id_jenis' => $id, );
			$this->perpus_model->update_data('jenis',$data,$where);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Data Jenis Buku Berhasil DiUpdate!!!</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>');
			redirect('admin/jenis_buku');
		}


	}


	public function delete($id)
	{
		$where = array('id_jenis' => $id );
		$this->perpus_model->delete_data('jenis',$where);
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>1Data Jenis Buku Berhasil DiHapus!!!</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>');
			redirect('admin/jenis_buku');
	}



	public function _rules()
	{
		$this->form_validation->set_rules('kode_jenis','Kode Jenis','required');
		$this->form_validation->set_rules('nama_jenis','Nama Jenis','required');
	}



}



 ?>