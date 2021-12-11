<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {
	public function __construct()
		{
			parent::__construct();
			check_not_login();
			$this->load->model('M_user');
		}

	public function edit_profile($username){

		$oke['content_page']="profil/profil";
		$oke['data_user'] = $this->M_user->editdata($username);
		$this->load->view('body/dashboard',$oke);

	}

	public function submit_edit($id){
		// $config['upload_path']	= './assets/admin/dist/img';
		// $config['allowed_types']= 'gif|jpg|png';
		// $config['max_size']		= 2048; 
		// $config['file_name']        = 'item-'.date('ymd').'-'.substr(md5(rand()),0,10); 
		// $this->load->library('upload',$config);
  //       $this->upload->initialize($config);
		//  if ($this->upload->do_upload("img_user")) {
  //           $row = $this->M_user->editdata($username);
  //           $data = $this->upload->data();
  //           $gambar =$data['file_name'];
  //           $target_file = './assets/admin/dist/img/'.$row['img_user'];
  //           unlink($target_file);
  //           }else{
  //           $gambar = $this->input->post('gambar_lama');
  //       }
		$data = array(
			'nama' 				=> $this->input->post('nama',true),
			'email' 			=> $this->input->post('email',true),
			'alamat'			=> $this->input->post('alamat',true),
			'telepon'			=> $this->input->post('telepon',true),
			'level' 			=> $this->input->post('level',true),
			'is_aktive' 		=> 1,
		);
		$oke					=$this->M_user->ubah_data($data,$id);
		echo "<script>
				alert('Data Berhasil di Update, Silahkan Login kembali');
				window.location='".site_url('login/logout')."'</script>";
	}

	public function submit_ganti_password($id){
		$passwordlama =$this->input->post('lama');
		if ($this->session->userdata('password')==$passwordlama) {
		$data = array(
			'password' 			=> md5($this->input->post('password',true)),
		);
		$oke					=$this->M_user->ubah_data($data,$id);
		echo "<script>
				alert('Data Berhasil di Update, Silahkan Login kembali');
				window.location='".site_url('login/logout')."'</script>";
		}else{
			echo "<script>
				alert('Password Lama Salah');
				window.location='".site_url('welcome')."'</script>";
		}	

	}

	
}