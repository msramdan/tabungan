<?php


class M_kelas extends CI_Model
{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function list_kelas(){
			$result=array();
			$this->db->select('*');
			$this->db->from('t_kelas');
			$this->db->order_by("id_kelas","desc");
			return $this->db->get()->result_array();
	}

	public function TambahData($data){
		$this->db->insert('t_kelas',$data);
	}

	public function delete($id)//hapus data berdasarkan parameter id yang di klik
	{
		$this->db->where('id_kelas',$id);
		$this->db->delete('t_kelas');//delete dari table ms_tshirt
	}

	public function edit_data($id) // untuk menmpilkan value di form edit sesuai parameter id
	{
		$this->db->from('t_kelas');
		$this->db->where('id_kelas',$id);
		return $this->db->get()->row_array();//row array menampilkan satu product
	}

	public function Submit_edit_kelas($data,$id){ // function untuk simpan update kelas
		$this->db->where('id_kelas',$id);
		$this->db->update ('t_kelas',$data);
	}


}