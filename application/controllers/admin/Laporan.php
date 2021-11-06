<?php 


class Laporan extends CI_Controller{
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
		$data['title']="HALAMAN LAPORAN";
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/laporan',$data);
		$this->load->view('templates_admin/footer');
	}


	public function filter()
	{
		$dari=$this->input->post('dari');
		$sampai=$this->input->post('sampai');

		$data['laporan']=$this->db->query("SELECT * FROM transaksi tr, anggota ag, buku bk WHERE tr.id_anggota=ag.id_anggota AND tr.id_buku=bk.id_buku AND date(tanggal_pinjam)>='$dari' AND date(tanggal_pinjam)<='$sampai'")->result();
		$data['title']="FILTER LAPORAN";
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/filter_laporan',$data);
		$this->load->view('templates_admin/footer');
	}

	public function print_laporan()
	{
		$dari=$this->input->get('dari');
		$sampai=$this->input->get('sampai');

		$data['laporan']=$this->db->query("SELECT * FROM transaksi tr, anggota ag, buku bk WHERE tr.id_anggota=ag.id_anggota AND tr.id_buku=bk.id_buku AND date(tanggal_pinjam)>='$dari' AND date(tanggal_pinjam)<='$sampai'")->result();
		$data['title']="FILTER LAPORAN";
		$this->load->view('templates_admin/header',$data);
		$this->load->view('admin/print_laporan',$data);
	}
	





}




 ?>