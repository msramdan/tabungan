<?php
ob_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct()
		{
			parent::__construct();
			$this->load->model('M_welcome');
			$this->load->model('M_nasabah');
			$this->load->model('M_transaksi');
			check_not_login();
		}
	public function index()
	{	
		$oke['total_setor'] = $this->M_welcome->count_setor();
		$oke['total_tarik'] = $this->M_welcome->count_tarik();

		$oke['total_setor_bulan'] = $this->M_welcome->count_setor_bulan();
		$oke['total_tarik_bulan'] = $this->M_welcome->count_tarik_bulan();

		$oke['total_setor_hari'] = $this->M_welcome->count_setor_hari();
		$oke['total_tarik_hari'] = $this->M_welcome->count_tarik_hari();

		$oke['list_transaksi'] = $this->M_transaksi->tampil_transaksi_home();
		$oke['list_nasabah'] = $this->M_nasabah->tampil_nasabah_home();
		$oke['count_nasabah']= $this->M_welcome->count_nasabah();
		$oke['count_kelas']= $this->M_welcome->count_kelas();
		$oke['count_pengguna']= $this->M_welcome->count_pengguna();
		$oke['content_page']="home/home";
		$this->load->view('body/dashboard',$oke);
	}
	
}