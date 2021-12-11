<?php

class M_nasabah extends CI_Model
{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function tampil_nasabah(){
			$result=array();
			$this->db->select('*');
			$this->db->from('t_nasabah');
			$this->db->join('t_kelas', 't_kelas.id_kelas = t_nasabah.id_kelas');
			// $this->db->join('v_tabungan_siswa', 'v_tabungan_siswa.id_nasabah = t_nasabah.id_nasabah');
			$this->db->order_by("id_nasabah","desc");
			return $this->db->get()->result_array();
	}
	public function tampil_nasabah_home(){
			$result=array();
			$this->db->select('*');
			$this->db->from('t_nasabah');
			$this->db->join('t_kelas', 't_kelas.id_kelas = t_nasabah.id_kelas');
			$this->db->order_by("id_nasabah","desc");
			return $this->db->limit(5)->get()->result_array();
	}

	public function edit_data($id) // untuk menmpilkan value di form edit sesuai parameter id
	{
		$this->db->from('t_nasabah');
		$this->db->join('t_kelas', 't_kelas.id_kelas = t_nasabah.id_kelas');
		$this->db->where('id_nasabah',$id);
		return $this->db->get()->row_array();//row array menampilkan satu product
	}

	public function tabungan($id) // untuk menmpilkan value di form edit sesuai parameter id
	{
		$this->db->from('t_nasabah');
		$this->db->join('v_tabungan_siswa', 'v_tabungan_siswa.kd_nasabah = t_nasabah.kd_nasabah');
		$this->db->where('v_tabungan_siswa.kd_nasabah',$id);
 		return $this->db->get()->row_array();
	}

	public function TambahData($data){
		$this->db->insert('t_nasabah',$data);
	}
	public function delete($id)//hapus data berdasarkan parameter id yang di klik
	{
		$this->db->where('id_nasabah',$id);
		$this->db->delete('t_nasabah');//delete dari table ms_tshirt
	}

	public function submit_edit_nasabah($data,$id){ // function untuk simpan update kelas
		$this->db->where('id_nasabah',$id);
		$this->db->update ('t_nasabah',$data);
	}

	public function buat_kode()   {
		$this->db->select('RIGHT(t_nasabah.kd_nasabah,4) as kode', FALSE);
		$this->db->order_by('kd_nasabah','DESC');
		// $this->db->where('vessel_id',$vessel_id);    
		$this->db->limit(1);    
		$query = $this->db->get('t_nasabah');      //cek dulu apakah ada sudah ada kode di tabel.    
		if($query->num_rows() <> 0){      
		   //jika kode ternyata sudah ada.      
		$data = $query->row();      
		$kode = intval($data->kode) + 1;    
		}
		else {      
		   //jika kode belum ada      
		$kode = 1;    
		}
		$kodemax = str_pad($kode, 7, "NIS000", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
		$kodejadi = "".$kodemax;    // hasilnya ODJ-9921-0001 dst.
		return $kodejadi; 
	}

}