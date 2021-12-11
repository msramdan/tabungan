<?php

class M_transaksi extends CI_Model
{


	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function get_data()
    {
			$this->db->select('*');
			$this->db->from('t_transaksi');
			$this->db->join('t_nasabah', 't_nasabah.kd_nasabah = t_transaksi.kd_nasabah');
			$this->db->join('t_kelas', 't_kelas.id_kelas = t_nasabah.id_kelas');
			$this->db->join('users', 'users.anggota_id = t_transaksi.id_user');
			$this->db->where_not_in('value',0);
			$this->db->order_by("id_transaksi","desc");
			return $this->db->get()->result();
    }

    public function get_data_range($awal, $akhir)
    {
			$this->db->select('*');
			$this->db->from('t_transaksi');
			$this->db->join('t_nasabah', 't_nasabah.kd_nasabah = t_transaksi.kd_nasabah');
			$this->db->join('t_kelas', 't_kelas.id_kelas = t_nasabah.id_kelas');
			$this->db->join('users', 'users.anggota_id = t_transaksi.id_user');
			$this->db->where_not_in('value',0);
			$this->db->where('tanggal >=', $awal);
			$this->db->where('tanggal <=', $akhir);
			$this->db->order_by("id_transaksi","desc");
			return $this->db->get()->result();
    }


	public function tampil_transaksi(){
			$result=array();
			$this->db->select('*');
			$this->db->from('t_transaksi');
			$this->db->join('t_nasabah', 't_nasabah.kd_nasabah = t_transaksi.kd_nasabah');
			$this->db->join('t_kelas', 't_kelas.id_kelas = t_nasabah.id_kelas');
			$this->db->join('users', 'users.anggota_id = t_transaksi.id_user');
			$this->db->where_not_in('value',0);
			$this->db->order_by("id_transaksi","desc");
			return $this->db->get()->result_array();
	}

	public function tampil_transaksi_user($kd_nasabah){
			$result=array();
			$this->db->select('*');
			$this->db->from('t_transaksi');
			$this->db->join('t_nasabah', 't_nasabah.kd_nasabah = t_transaksi.kd_nasabah');
			$this->db->join('t_kelas', 't_kelas.id_kelas = t_nasabah.id_kelas');
			$this->db->join('users', 'users.anggota_id = t_transaksi.id_user');
			$this->db->where('t_transaksi.kd_nasabah',$kd_nasabah);
			$this->db->where_not_in('value',0);
			$this->db->order_by("id_transaksi","desc");
			return $this->db->get()->result_array();
	}

	public function tampil_transaksi_home(){
			$result=array();
			$this->db->select('*');
			$this->db->from('t_transaksi');
			$this->db->join('t_nasabah', 't_nasabah.kd_nasabah = t_transaksi.kd_nasabah');
			$this->db->join('t_kelas', 't_kelas.id_kelas = t_nasabah.id_kelas');
			$this->db->join('users', 'users.anggota_id = t_transaksi.id_user');
			$this->db->where_not_in('value',0);
			$this->db->order_by("id_transaksi","desc");
			return $this->db->limit(5)->get()->result_array();
	}
	public function TambahData($data){
		$this->db->insert('t_transaksi',$data);
	}

	public function delete($kd_nasabah)//hapus data berdasarkan parameter id yang di klik
	{
		$this->db->where('kd_nasabah',$kd_nasabah);
		$this->db->delete('t_transaksi');//delete dari table ms_tshirt
	}
	public function delete_data($id)//hapus data berdasarkan parameter id yang di klik
	{
		$this->db->where('id_transaksi',$id);
		$this->db->delete('t_transaksi');//delete dari table ms_tshirt
	}

	public function edit_data($id) // untuk menmpilkan value di form edit sesuai parameter id
	{
		$this->db->from('t_transaksi');
		$this->db->join('t_nasabah', 't_nasabah.kd_nasabah = t_transaksi.kd_nasabah');
		$this->db->join('t_kelas', 't_kelas.id_kelas = t_nasabah.id_kelas');
		$this->db->join('users', 'users.anggota_id = t_transaksi.id_user');
		$this->db->where('id_transaksi',$id);
		return $this->db->get()->row_array();//row array menampilkan satu product
	}

	public function submit_edit_transaksi($data,$id){ // function untuk simpan update kelas
		$this->db->where('id_transaksi',$id);
		$this->db->update ('t_transaksi',$data);
	}

}