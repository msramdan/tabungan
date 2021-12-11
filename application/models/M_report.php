<?php


class M_report extends CI_Model
{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function report(){
			$result=array();
			$this->db->select('*');
			$this->db->from('v_tabungan_kelas');
			$this->db->join('t_kelas', 't_kelas.id_kelas = v_tabungan_kelas.id_kelas');
			$this->db->order_by("t_kelas.id_kelas","desc");
			return $this->db->get()->result_array();
	}

	public function tabunganSiswa(){
			$result=array();
			$this->db->select('*');
			$this->db->from('v_tabungan_siswa');
			$this->db->join('t_nasabah', 't_nasabah.kd_nasabah = v_tabungan_siswa.kd_nasabah');
			$this->db->order_by("t_nasabah.kd_nasabah","desc");
			return $this->db->get()->result_array();
	}



}