<?php 


class Transaksi_pengembalian extends CI_Controller{
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
		$data['transaksi']=$this->db->query("SELECT * FROM transaksi tr, anggota ag, buku bk WHERE tr.id_anggota=ag.id_anggota AND tr.id_buku=bk.id_buku")->result();
		$data['title']="TRANSAKSI PENGEMBALIAN";
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/transaksi_pengembalian',$data);
		$this->load->view('templates_admin/footer');
	}

	public function search()
	{
		$keyword=$this->input->post('keyword');
		$data['transaksi']=$this->perpus_model->get_keywordtransaksi($keyword);
		$data['title']="DATA BUKU";
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/transaksi_pengembalian',$data);
		$this->load->view('templates_admin/footer');
	}

	public function kembali($id)
	{
		$data['transaksi']=$this->db->query("SELECT * FROM transaksi tr, anggota ag, buku bk WHERE tr.id_anggota=ag.id_anggota AND tr.id_buku=bk.id_buku AND id_pinjam='$id'")->result();
		$data['title']="TRANSAKSI PENGEMBALIAN BUKU";
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/kembali_pinjaman',$data);
		$this->load->view('templates_admin/footer');
	}


	public function kembali_aksi()
	{
		$id_pinjam 			 =$this->input->post('id_pinjam');
		$id_buku 			 =$this->input->post('id_buku');
		$tanggal_kembali 	 =$this->input->post('tanggal_kembali');
		$judul_buku 		 =$this->input->post('judul_buku');
		$nama_anggota     	 =$this->input->post('nama_anggota');
		$tanggal_pengembalian=$this->input->post('tanggal_pengembalian');
		$status				 =$this->input->post('status');
		$denda 				 =$this->input->post('denda');
		$status_pengembalian =$this->input->post('status_pengembalian');

		$x=strtotime($tanggal_kembali);
		$y=strtotime($tanggal_pengembalian);
		$jumla=abs($y-$x)/(60*60*24);
		$jumlah=floor($jumla);
		$total_denda=floor(($jumlah*$denda));

		$data = array(
			'tanggal_pengembalian'	=>$tanggal_pengembalian,
			'total_denda' 			=>$total_denda,
			'status_pengembalian' 	=>$status_pengembalian
		 );
		$where = array('id_pinjam'	=> $id_pinjam );

		$data1 = array('status' 	=> $status );
		$where1 = array('id_buku' 	=> $id_buku );

		$this->perpus_model->update_data('transaksi',$data,$where);
		$this->perpus_model->update_data('buku',$data1,$where1);

		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Transaksi Pinjam Berhasil DiJalankan!!!</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>');
			redirect('admin/Transaksi_pengembalian');

	}

	public function batal_transaksi($id)
	{
		$where = array('id_pinjam' => $id );
		$data=$this->perpus_model->get_where('transaksi',$where)->row();
		$where1 = array('id_buku' => $data->id_buku );
		$data1 = array('status' => '1');

		$this->perpus_model->update_data('buku',$data1,$where1);
		$this->perpus_model->delete_data('transaksi',$where);
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Pembatalan Transaksi Pinjam Berhasil DiJalankan!!!</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>');
			redirect('admin/Transaksi_pengembalian');


	}

	public function update_peminjaman($id)
	{
		$where = array('id_pinjam' => $id );
		$data['buku']=$this->perpus_model->detail('transaksi',$where)->result();
		$data['title']="FORM PINJAM BUKU";
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/update_pinjam_buku',$data);
		$this->load->view('templates_admin/footer');
	}

	public function update_peminjaman_aksi()
	{
		$id_pinjam		=$this->input->post('id_pinjam');
		$id_anggota 	=$this->input->post('id_anggota');
		$id_buku 		=$this->input->post('id_buku');
		$tanggal_pinjam	=$this->input->post('tanggal_pinjam');
		$tanggal_kembali=$this->input->post('tanggal_kembali');

		$data = array(
			'id_anggota' => $id_anggota,
			'id_buku'	 => $id_buku,
			'tanggal_pinjam' =>$tanggal_pinjam,
			'tanggal_kembali' =>$tanggal_kembali
		 );
		$where = array('id_pinjam' => $id_pinjam );

		$this->perpus_model->update_data('transaksi',$data,$where);
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Berhasil Perpanjang waktu Kembali!!!</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>');
			redirect('admin/Transaksi_pengembalian');
		
	}


	public function pesan_gmail($id)
	{
		$where = array('id_pinjam' => $id );
		$data['transaksi']=$this->db->query("SELECT * FROM transaksi tr, buku mb, anggota ag WHERE tr.id_buku=mb.id_buku AND tr.id_anggota=ag.id_anggota AND id_pinjam='$id'")->result();
		$data['title']="FORM PESAN GMAIL";
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/pesan_gmail',$data);
		$this->load->view('templates_admin/footer');
	}


	public function pesan_gmail_aksi()
	{
		$to_email = $this->input->post('email');
		$subject  = $this->input->post('subject');
		$message  = $this->input->post('pesan');
		$config = [
			'mailtype' => 'html',
			'charset'  => 'utf-8',
			'protocol' => 'smtp',
			'smtp_host'=> 'ssl://smtp.gmail.com',
			'smtp_user' =>'yustinaaraa1@gmail.com',
			'smtp_pass' => 'narys12345',
			'smtp_port' => 465,
			'crlf' =>"\r\n",
			'newline'=>"\r\n"
		];

		$this->load->library('email',$config);
		$this->email->from("PERPUSTAKAAN ASAH KODA");

		$this->email->to($to_email);
		$this->email->subject($subject);
		$this->email->message($message);
		if ($this->email->send()){
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Pesan Terkirim!!!</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>');
			redirect('admin/Transaksi_pengembalian');
		}else{
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Pesan Tidak Terkirim!!!</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>');
			redirect('admin/Transaksi_pengembalian');
		}
	}



	
	



}




 ?>