<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Kelas extends CI_Controller {
	public function __construct()
		{
			parent::__construct();
			$this->load->model('M_kelas');
			check_not_login();
			$this->load->database();
		}
	public function index()
	{	
		$oke['kelas']	=$this->M_kelas->list_kelas();
		$oke['content_page']	="kelas/v_list_kelas";
		$this->load->view('body/dashboard',$oke);
	}

	public function tambah_data(){

		$oke['content_page']="kelas/v_tambah_kelas";
		$this->load->view('body/dashboard',$oke);
	}

	public function SimpanData(){
	$data = array(
			'nama_kelas' 	=>$this->input->post('nama_kelas',true),
		);

		$oke					=$this->M_kelas->TambahData($data); // variable content dan variable nama array harus sama 
		redirect('kelas');
	}

	public function DataHapus($id){
		$oke					=$this->M_kelas->delete($id); // variable content dan variable nama array harus sama 
		redirect('kelas');
	}

	public function edit_kelas($id){
		$oke['content_page']	="kelas/v_edit_kelas";
		$oke['data_kelas']		=$this->M_kelas->edit_data($id);
		$this->load->view('body/dashboard',$oke);
	}

	public function simpan_edit_data($id){
		$data = array(
			'nama_kelas' 				=>$this->input->post('nama_kelas',true),
		);
		$oke					=$this->M_kelas->Submit_edit_kelas($data,$id); // variable content dan variable nama array harus sama 
		$this->load->view('body/dashboard',$oke);
		redirect('kelas');
	}
	

}
