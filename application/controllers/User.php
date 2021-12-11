<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class User extends CI_Controller {
	public function __construct()
		{
			parent::__construct();
			$this->load->model('M_user');
			check_not_login();
		}
	public function index() {
		$oke['content_page']="user/v_list_pengguna";
		$oke['user']=$this->M_user->tampiluser();
		$this->load->view('body/dashboard',$oke);
	}
	 public function download($gambar){
        force_download('assets/admin/dist/img/'.$gambar,NULL);
    }

    public function datahapus($username){
		$oke=$this->M_user->delete($username); 
		$this->load->view('body/dashboard',$oke);
		redirect('user');
	}

	public function adddata(){
		$oke['content_page']="user/v_tambah_data";
		$this->load->view('body/dashboard',$oke);
	}

	public function simpan_data(){
	$data = array(
			'username'		=>$this->input->post('username',true),
			'nama_anggota'	=>$this->input->post('nama',true),
			'email' 		=>$this->input->post('email',true),
			'password' 		=>md5($this->input->post('password',true)),
			'alamat' 		=>$this->input->post('alamat',true),
			'telepon' 		=>$this->input->post('telepon',true),
			'level' 		=>$this->input->post('level',true),
			'is_aktive' 	=>$this->input->post('is_aktive',true),
		);
		$this->M_user->TambahData($data);
		redirect('user');
	}

	public function editUser($id){
		$oke['content_page']	="user/v_edit_user";
		$oke['data_user']		=$this->M_user->editdata($id);
		$this->load->view('body/dashboard',$oke);
	}

	public function simpanEditData($id){
	$username = $this->input->post('password');
	if ($username==null || $username=="") {
		$data = array(
			'username'		=>$this->input->post('username',true),
			'nama_anggota'	=>$this->input->post('nama',true),
			'email' 		=>$this->input->post('email',true),
			'alamat' 		=>$this->input->post('alamat',true),
			'telepon' 		=>$this->input->post('telepon',true),
			'level' 		=>$this->input->post('level',true),
			'is_aktive' 	=>$this->input->post('is_aktive',true),
		);
	}else{
		$data = array(
			'username'		=>$this->input->post('username',true),
			'nama_anggota'	=>$this->input->post('nama',true),
			'email' 		=>$this->input->post('email',true),
			'password' 		=>md5($this->input->post('password',true)),
			'alamat' 		=>$this->input->post('alamat',true),
			'telepon' 		=>$this->input->post('telepon',true),
			'level' 		=>$this->input->post('level',true),
			'is_aktive' 	=>$this->input->post('is_aktive',true),
		);
	}
		$this->M_user->ubah_data($data,$id);
		if ($this->session->userdata('anggota_id')==$this->input->post('anggota_id')){
			echo "<script>
				alert('Data berhasil di rubah, Silahkan Login kembali');
				window.location='".site_url('login/logout')."'</script>";
		}else{
			redirect('user');
		}
	}

}
