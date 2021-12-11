<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Csv;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;


class Nasabah extends CI_Controller {
	public function __construct()
		{
			parent::__construct();
			$this->load->model('M_nasabah');
			$this->load->model('M_kelas');
			$this->load->model('M_transaksi');
			check_not_login();
		}

	public function import_siswa(){
		$file_mimes = array('application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
 
			if(isset($_FILES['berkas_excel']['name']) && in_array($_FILES['berkas_excel']['type'], $file_mimes)) {
			 
			    $arr_file = explode('.', $_FILES['berkas_excel']['name']);
			    $extension = end($arr_file);
			 
			    if('csv' == $extension) {
			        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
			    } else {
			        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
			    }
			 
			    $spreadsheet = $reader->load($_FILES['berkas_excel']['tmp_name']);
			     
			    $sheetData = $spreadsheet->getActiveSheet()->toArray();
			    $jml = 0;
				for($i = 1;$i < count($sheetData);$i++)
				{
			        $kd_nasabah = $sheetData[$i]['0'];
			        $nama = $sheetData[$i]['1'];
			        $alamat = $sheetData[$i]['2'];
			        $id_kelas = $this->input->post('id_kelas');
			        $notelp = $sheetData[$i]['3'];
			        $orangtua = $sheetData[$i]['4'];

			        $cek="select * from t_nasabah where kd_nasabah='$kd_nasabah'";
			        $cek2 = $this->db->query($cek);
			        $rowcount=$cek2->num_rows();


			        if ($rowcount > 0) {
	
			        }else{
			        	 $queryData = "insert into t_nasabah (id_nasabah,kd_nasabah,nama,alamat,id_kelas,notelp,orangtua) values ('','$kd_nasabah','$nama','$alamat','$id_kelas','$notelp','$orangtua')";
			        	$this->db->query($queryData);
			        	$jml = $jml + 1;
			        }			       
			    }
			    echo "<script>
				alert('Data berhasil di Import');
				window.location='".site_url('nasabah')."'</script>";			

			}

	}


	public function index() {
		$oke['content_page']="nasabah/v_list_nasabah";
		$oke['kelas_siswa'] = $this->M_kelas->list_kelas();
		$oke['nasabah']=$this->M_nasabah->tampil_nasabah();
		$this->load->view('body/dashboard',$oke);
	}

	public function view_nasabah($id, $kd_nasabah){
			$oke['tabungan']		=$this->M_nasabah->tabungan($kd_nasabah);
			$oke['content_page']	="nasabah/v_read_nasabah";
			$oke['data_nasabah']	=$this->M_nasabah->edit_data($id);
			$this->load->view('body/dashboard',$oke);		
	}

	public function tambah_data(){
		$oke['kodeunik'] = $this->M_nasabah->buat_kode();
		$oke['kelas_siswa'] = $this->M_kelas->list_kelas();
		$oke['content_page']="nasabah/v_tambah_nasabah";
		$this->load->view('body/dashboard',$oke);
	}

	public function simpan_data(){
	$data = array(
			'kd_nasabah'=>$this->input->post('kd_nasabah',true),
			'nama' 		=>$this->input->post('nama',true),
			'alamat' 	=>$this->input->post('alamat',true),
			'notelp' 	=>$this->input->post('notelp',true),
			'orangtua' 	=>$this->input->post('orangtua',true),
			'id_kelas' 	=>$this->input->post('id_kelas',true),
		);
	$data2 = array(
			'kd_nasabah' 	=>$this->input->post('kd_nasabah',true),
			'jenis_trans' 	=>'Setor',
			'value' 		=>0,
			'tanggal' 		=>date('y-m-d H:i:s'),
			'id_user' 		=>$this->session->userdata('anggota_id'),
			'keterangan' 	=>'Create User Awal',

		);
	$data3 = array(
			'kd_nasabah' 	=>$this->input->post('kd_nasabah',true),
			'jenis_trans' 	=>'Tarik',
			'value' 		=>0,
			'tanggal' 		=>date('y-m-d H:i:s'),
			'id_user' 		=>$this->session->userdata('anggota_id'),
			'keterangan' 	=>'Create User Awal',

		);
		$this->M_nasabah->TambahData($data);
		$this->M_transaksi->TambahData($data2);
		$this->M_transaksi->TambahData($data3);
		redirect('nasabah');
	}

	public function DataHapus($id,$kd_nasabah){
		$this->M_nasabah->delete($id);
		$this->M_transaksi->delete($kd_nasabah);
		redirect('nasabah');
	}

	public function editNasabah($id){
		$oke['data_kelas'] = $this->M_kelas->list_kelas();
		$oke['content_page']	="nasabah/v_edit_nasabah";
		$oke['data_nasabah']		=$this->M_nasabah->edit_data($id);
		$this->load->view('body/dashboard',$oke);
	}

	public function simpan_edit_data($id){
		$data = array(
			'nama' 				=>$this->input->post('nama',true),
			'alamat' 				=>$this->input->post('alamat',true),
			'id_kelas' 				=>$this->input->post('id_kelas',true),
			'notelp' 				=>$this->input->post('notelp',true),
			'orangtua' 				=>$this->input->post('orangtua',true),

		);
		$this->M_nasabah->submit_edit_nasabah($data,$id); 
		redirect('nasabah');
	}
}
