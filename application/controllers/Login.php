<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Login extends CI_Controller {

	public function __construct()
		{
			parent::__construct();
			$this->load->model('M_login');
      $this->load->model('M_user');
		}
	public function index()
	{
      check_already_login();
  		$this->load->view('login/login');
	}

  public function register(){
    $this->load->view('login/register');
  }

  public function simpan_user(){
    $data = array(
      'username'      => $this->input->post('username',true),
      'password'      => md5($this->input->post('password',true)),
      'nama'        => $this->input->post('nama',true),
      'email'       => $this->input->post('email',true),
      'telepon'     => $this->input->post('telepon',true),
      'level'       => 'U',
      'is_aktive'       => 2,
      'tgl_gabung'     =>date('y-m-d H:i:s'),
    );
          $this->M_user->tambahdata($data);
          echo "<script>
        alert('Username berhasil dibuat, Silahkan Hubungi Admin untuk aktivasi akun');
        window.location='".site_url('Login')."'</script>";
  }
  

	public function loginsubmit(){
	$username = $this->input->post('username');
  $user= $this->M_user->get($username);
      if($this->M_login->checklogin($_POST['username'], $_POST['password'])>0){
        $this->session->set_userdata('is_aktive', $user->is_aktive);
        if ($this->session->userdata('is_aktive') == 1){
        $this->session->set_userdata('username', $_POST['username']);
        $this->session->set_userdata('password', $_POST['password']);
        $this->session->set_userdata('nama', $user->nama_anggota);
        $this->session->set_userdata('email', $user->email);
        $this->session->set_userdata('level', $user->level);
        $this->session->set_userdata('anggota_id', $user->anggota_id);
        $this->session->set_userdata('img_user', $user->img_user);
        $this->M_login->addHistory($this->session->userdata('nama'), $this->session->userdata('nama_karyawan').' Telah melakukan login', date('d/m/Y H:i:s'));
        redirect('welcome');
      }else{
       echo "<script>
        alert('Hubungi Admin untuk aktivasi akun');
        window.location='".site_url('Login')."'</script>";
          }
      }else{
        echo "<script>
				alert('Login Gagal, Username atau password salah');
				window.location='".site_url('Login')."'</script>";
      }
  }

	public function logout(){
    $this->session->sess_destroy(); 
    redirect('Login'); 
}
}
