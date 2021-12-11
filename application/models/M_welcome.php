<?php


class M_welcome extends CI_Model
{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

public function count_pengguna()
	{   
	    $query = $this->db->get('users');
	    if($query->num_rows()>0)
	    {
	      return $query->num_rows();
	    }
	    else
	    {
	      return 0;
	    }
	}
public function count_kelas()
	{   
	    $query = $this->db->get('t_kelas');
	    if($query->num_rows()>0)
	    {
	      return $query->num_rows();
	    }
	    else
	    {
	      return 0;
	    }
	}
public function count_nasabah()
	{   
	    $query = $this->db->get('t_nasabah');
	    if($query->num_rows()>0)
	    {
	      return $query->num_rows();
	    }
	    else
	    {
	      return 0;
	    }
	}

	public function count_setor()
	{   
	    $this->db->select_sum('value');
	    $this->db->join('t_nasabah', 't_nasabah.kd_nasabah = t_transaksi.kd_nasabah');
	    $this->db->where('jenis_trans','Setor');
	    $query = $this->db->get('t_transaksi');
	    if($query->num_rows()>0)
	    {
	      return $query->row()->value;
	    }
	    else
	    {
	      return 0;
	    }
	}

	public function count_setor_bulan()
	{   
		$bulan = date('Y-m');
	    $this->db->select_sum('value');
	    $this->db->join('t_nasabah', 't_nasabah.kd_nasabah = t_transaksi.kd_nasabah');
	    $this->db->where('jenis_trans','Setor');
	    $this->db->where('SUBSTRING(tanggal, 1, 7)=',$bulan);
	    $query = $this->db->get('t_transaksi');
	    if($query->num_rows()>0)
	    {
	      return $query->row()->value;
	    }
	    else
	    {
	      return 0;
	    }
	}

	public function count_setor_hari()
	{   
		$hari = date('Y-m-d');
	    $this->db->select_sum('value');
	    $this->db->join('t_nasabah', 't_nasabah.kd_nasabah = t_transaksi.kd_nasabah');
	    $this->db->where('jenis_trans','Setor');
	    $this->db->where('tanggal',$hari);
	    $query = $this->db->get('t_transaksi');
	    if($query->num_rows()>0)
	    {
	      return $query->row()->value;
	    }
	    else
	    {
	      return 0;
	    }
	}

	public function count_tarik()
	{   
	    $this->db->select_sum('value');
	    $this->db->join('t_nasabah', 't_nasabah.kd_nasabah = t_transaksi.kd_nasabah');
	    $this->db->where('jenis_trans','Tarik');
	    $query = $this->db->get('t_transaksi');

	    if($query->num_rows()>0)
	    {
	      return $query->row()->value;
	    }
	    else
	    {
	      return 0;
	    }
	}


	public function count_tarik_bulan()
	{   
		$bulan = date('Y-m');
	    $this->db->select_sum('value');
	    $this->db->join('t_nasabah', 't_nasabah.kd_nasabah = t_transaksi.kd_nasabah');
	    $this->db->where('jenis_trans','Tarik');
	    $this->db->where('SUBSTRING(tanggal, 1, 7)=',$bulan);
	    $query = $this->db->get('t_transaksi');

	    if($query->num_rows()>0)
	    {
	      return $query->row()->value;
	    }
	    else
	    {
	      return 0;
	    }
	}

	public function count_tarik_hari()
	{   
		$hari = date('Y-m-d');
	    $this->db->select_sum('value');
	    $this->db->join('t_nasabah', 't_nasabah.kd_nasabah = t_transaksi.kd_nasabah');
	    $this->db->where('jenis_trans','Tarik');
	    $this->db->where('tanggal',$hari);
	    $query = $this->db->get('t_transaksi');

	    if($query->num_rows()>0)
	    {
	      return $query->row()->value;
	    }
	    else
	    {
	      return 0;
	    }
	}

}