<?php 

class Data_anggota extends CI_Controller{
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
		$data['pesan']=$this->perpus_model->get_data('pesan_saran')->result();
		$data['anggota']=$this->perpus_model->get_data('anggota')->result();
		$data['title']="DATA ANGGOTA";
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar',$data);
		$this->load->view('admin/Data_anggota',$data);
		$this->load->view('templates_admin/footer');
	}

	public function search()
	{
		$keyword=$this->input->post('keyword');
		$data['anggota']=$this->perpus_model->get_keyword($keyword);
		$data['title']="DATA ANGGOTA";
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/Data_anggota',$data);
		$this->load->view('templates_admin/footer');
	}

	public function tambah()
	{
		$data['title']="FORM TAMBAH ANGGOTA";
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/tambah_anggota',$data);
		$this->load->view('templates_admin/footer');
	}

	public function tambah_aksi()
	{
		$this->_rules();
		if ($this->form_validation->run()==FALSE) {
			$this->tambah();
		}else{
			$nama_anggota 		=$this->input->post('nama_anggota');
			$username 			=$this->input->post('username');
			$alamat 			=$this->input->post('alamat');
			$gender 			=$this->input->post('gender');
			$no_telepon 		=$this->input->post('no_telepon');
			$email 				=$this->input->post('email');
			$password 			=$this->input->post('password');
			$role_id			=$this->input->post('role_id');
			$gambar 			=$_FILES['gambar']['name'];
			if ($gambar=''){}else{
			$config['upload_path']='./assets/upload';
			$config['allowed_types']='jpeg|jpg|png|tiff';
			$this->load->library('upload',$config);
			if (!$this->upload->do_upload('gambar')) {
				echo "Gambar gagal diupload";
			}else{
				$gambar=$this->upload->data('file_name');
			}
			}
			

			$data = array(
				'nama_anggota' 	=> $nama_anggota,
				'username' 		=> $username,
				'password' 		=> md5($password),
				'alamat' 		=> $alamat,
				'gender' 		=> $gender,
				'no_telepon' 	=> $no_telepon,
				'email' 		=> $email,
				'role_id'		=> $role_id,
				'gambar' 		=> $gambar
				 );
			$this->perpus_model->insert_data('anggota',$data);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Data Anggota Berhasil DiTambahkan!!!</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>');
			redirect('admin/Data_anggota');

		}
	}

	public function update($id)
	{
		$where = array('id_anggota' => $id );
		$data['anggota']=$this->perpus_model->detail('anggota',$where)->result();
		$data['title']="FORM UPDATE ANGGOTA";
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/update_anggota',$data);
		$this->load->view('templates_admin/footer');
	}


	public function update_aksi()
	{
		$this->_rules();
		if ($this->form_validation->run()==FALSE) {
			$this->update();
		}else{
			$id   				=$this->input->post('id_anggota');
			$nama_anggota 		=$this->input->post('nama_anggota');
			$username 			=$this->input->post('username');
			$alamat 			=$this->input->post('alamat');
			$gender 			=$this->input->post('gender');
			$no_telepon 		=$this->input->post('no_telepon');
			$email 				=$this->input->post('email');
			$role_id 			=$this->input->post('role_id');
			$password 			=$this->input->post('password');
			$gambar 			=$_FILES['gambar']['name'];
			if ($gambar){
			$config['upload_path']='./assets/upload';
			$config['allowed_types']='jpeg|jpg|png|tiff';
			$this->load->library('upload',$config);
			if ($this->upload->do_upload('gambar')) {
				$gambar=$this->upload->data('file_name');
				$this->db->set('gambar',$gambar);
			}else{
				echo "Gambar gagal diupload";
			}
			}
			

			$data = array(
				'nama_anggota' 	=> $nama_anggota,
				'username' 		=> $username,
				'password' 		=> $password,
				'alamat' 		=> $alamat,
				'gender' 		=> $gender,
				'no_telepon' 	=> $no_telepon,
				'email' 		=> $email,
				'role_id' 		=>$role_id
				 );
			$where = array('id_anggota' => $id );
			$this->perpus_model->update_data('anggota',$data,$where);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Data Anggota Berhasil DiUpdate!!!</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>');
			redirect('admin/Data_anggota');

		}
	}




	public function _rules()
	{
		$this->form_validation->set_rules('nama_anggota','Nama','required');
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('alamat','Alamat','required');
		$this->form_validation->set_rules('gender','Gender','required');
		$this->form_validation->set_rules('no_telepon','No.Telpon','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('role_id','Daftar Sebagai','required');
	}


	public function detail($id)
	{
		$where = array('id_anggota' => $id );
		$data['anggota']=$this->perpus_model->detail('anggota',$where)->result();
		$data['title']="DETAIL ANGGOTA";
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/detail_anggota',$data);
		$this->load->view('templates_admin/footer');
	}


	public function delete($id)
	{
		$where = array('id_anggota' => $id);
		$this->perpus_model->delete_data('anggota',$where);
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>1 Data Anggota Berhasil DiHapus!!!</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>');
			redirect('admin/Data_anggota');
	}

	public function card($id)
	{
		$where = array('id_anggota' => $id );
		$data['anggota']=$this->perpus_model->detail('anggota',$where)->result();
		$data['title']="CARD ANGGOTA";
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/card',$data);
		$this->load->view('templates_admin/footer');
	}

	public function barcode()
	{

		$data['title']="Barcode";
		$this->load->view('templates_admin/header',$data);
		$generator = new Picqer\Barcode\BarcodeGeneratorHTML();
		$barcode= $generator->getBarcode('0812317', $generator::TYPE_CODE_128);
		echo $barcode;
//$redColor = [255, 0, 0];

//$generator = new Picqer\Barcode\BarcodeGeneratorPNG();
//file_put_contents('barcode.png', $generator->getBarcode('081231723897', $generator::TYPE_CODE_128, 3, 50, $redColor));
	}


	public function print_card($id)
	{   $generator = new Picqer\Barcode\BarcodeGeneratorHTML();
		$data['barcode']= $generator->getBarcode('0812317', $generator::TYPE_CODE_128);
		$where = array('id_anggota' => $id );
		$data['anggota']=$this->perpus_model->detail('anggota',$where)->result();
		$data['title']="CARD ANGGOTA";
		$this->load->view('templates_admin/header',$data);
		$this->load->view('admin/print_card',$data);
	}



	public function pdf()
	{

$options = new Options();
$options->set('defaultFont', 'Courier');
$dompdf = new Dompdf($options);


	}



}



 ?>