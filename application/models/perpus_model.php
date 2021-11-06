<?php 

class Perpus_model extends CI_model{

	public function get_data($table)
	{
		return $this->db->get($table);
	}

	public function get_where($table,$where)
	{
		return $this->db->get_where($table,$where);
	}

	public function insert_data($table,$data)
	{
		$this->db->insert($table,$data);
	}

	public function detail($table,$where)
	{
		return $this->db->where($where)->get($table);
	}

	public function update_data($table,$data,$where)
	{
		$this->db->update($table,$data,$where);
	}

	public function delete_data($table,$where)
	{
		$this->db->where($where)->delete($table);
	}

	public function cek_login()
	{
		$username=set_value('username');
		$password=set_value('password');

		$cek=$this->db->where('username',$username)->where('password',md5($password))->limit(1)->get('anggota');

		if ($cek->num_rows()>0) {
			return $cek->row();
		}else{
			return false;
		}
	}

	public function get_keyword($keyword)
	{
		$this->db->select('*');
		$this->db->from('anggota');
		$this->db->like('nama_anggota',$keyword);
		$this->db->or_like('alamat',$keyword);
		return $this->db->get()->result();
	}

	public function get_keywordbuku($keyword)
	{
		$this->db->select('*');
		$this->db->from('buku');
		$this->db->like('judul_buku',$keyword);
		$this->db->or_like('pengarang',$keyword);
		$this->db->or_like('penerbit',$keyword);
		return $this->db->get()->result();
	}

	public function get_keywordtransaksi($keyword)
	{
	 return	$this->db->query("SELECT * FROM transaksi tr, anggota ag, buku bk WHERE tr.id_anggota=ag.id_anggota AND tr.id_buku=bk.id_buku AND ag.nama_anggota LIKE '%$keyword%'")->result();
	
	}

}


 ?>