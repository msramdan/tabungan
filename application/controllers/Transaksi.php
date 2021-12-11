 <?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


class Transaksi extends CI_Controller {
	public function __construct()
		{
			parent::__construct();
			$this->load->model('M_transaksi');
			$this->load->model('M_nasabah');
			$this->load->model('M_user');
			check_not_login();
		}
	public function index() {
		$oke['content_page']="transaksi/v_list_transaksi";
		$oke['transaksi']=$this->M_transaksi->tampil_transaksi();
		$this->load->view('body/dashboard',$oke);
	}

	public function riwayat($kd_nasabah) {
		$oke['content_page']="transaksi/v_riwayat_transaksi";
		$oke['transaksi']=$this->M_transaksi->tampil_transaksi_user($kd_nasabah);
		$this->load->view('body/dashboard',$oke);
	}
	public function export_excel(){
		$kd_nasabah = $this->uri->segment(3);
		$transaksi = $this->M_transaksi->tampil_transaksi_user($kd_nasabah);
		$spreadsheet = new Spreadsheet();
			$sheet = $spreadsheet->getActiveSheet();
			$sheet->setCellValue('A1', 'No');
			$sheet->setCellValue('B1', 'Nama Siswa/ Nasabah');
			$sheet->setCellValue('C1', 'Kelas');
			$sheet->setCellValue('D1', 'Jenis Transaksi');
			$sheet->setCellValue('E1', 'Uang');
			$sheet->setCellValue('F1', 'Tanggal');
			$sheet->setCellValue('G1', 'Petugas Penginput');
			$sheet->setCellValue('H1', 'Ket');

		$data = 100 ;
          $spreadsheet->getActiveSheet()->getStyle('A1:A'.$data)->getBorders()->getAllBorders()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);
          $spreadsheet->getActiveSheet()->getStyle('B1:B'.$data)->getBorders()->getAllBorders()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);
          $spreadsheet->getActiveSheet()->getStyle('C1:C'.$data)->getBorders()->getAllBorders()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);
          $spreadsheet->getActiveSheet()->getStyle('D1:D'.$data)->getBorders()->getAllBorders()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);
          $spreadsheet->getActiveSheet()->getStyle('E1:E'.$data)->getBorders()->getAllBorders()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);
          $spreadsheet->getActiveSheet()->getStyle('F1:F'.$data)->getBorders()->getAllBorders()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);
          $spreadsheet->getActiveSheet()->getStyle('G1:G'.$data)->getBorders()->getAllBorders()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);
          $spreadsheet->getActiveSheet()->getStyle('H1:H'.$data)->getBorders()->getAllBorders()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);

          $spreadsheet->getActiveSheet()->getStyle('A1')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFFF00');
          $spreadsheet->getActiveSheet()->getStyle('B1')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFFF00');
          $spreadsheet->getActiveSheet()->getStyle('C1')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFFF00');

          $spreadsheet->getActiveSheet()->getStyle('D1')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFFF00');
          $spreadsheet->getActiveSheet()->getStyle('E1')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFFF00');
          $spreadsheet->getActiveSheet()->getStyle('F1')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFFF00');
          $spreadsheet->getActiveSheet()->getStyle('G1')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFFF00');
          $spreadsheet->getActiveSheet()->getStyle('H1')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFFF00');
			
			$no = 1;
			$x = 2;
			foreach($transaksi as $rows)
			{
				$sheet->setCellValue('A'.$x, $no++);
				$sheet->setCellValue('B'.$x, $rows['nama']);
				$sheet->setCellValue('C'.$x, $rows['nama_kelas']);
				$sheet->setCellValue('D'.$x, $rows['jenis_trans']);
				$sheet->setCellValue('E'.$x, rupiah($rows['value']));
				$sheet->setCellValue('F'.$x, $rows['tanggal']);
				$sheet->setCellValue('G'.$x, $rows['nama_anggota']);
				$sheet->setCellValue('H'.$x, $rows['keterangan']);
				$x++;
			}
			$writer = new Xlsx($spreadsheet);
			$filename = 'riwayat-transaksi';
			ob_end_clean();
			header('Content-Type: application/vnd.ms-excel');
			header('Content-Disposition: attachment;filename="'. $filename .'.xlsx"'); 
			header('Cache-Control: max-age=0');
			$writer->save('php://output');

	}


	public function adddata(){
		$oke['nasabah']=$this->M_nasabah->tampil_nasabah();
		$oke['content_page']="transaksi/v_tambah_transaksi";
		$this->load->view('body/dashboard',$oke);
	}

	public function edit_transaksi($id){
		$oke['nasabah']=$this->M_nasabah->tampil_nasabah();
		$oke['content_page']	="transaksi/v_edit_transaksi";
		$oke['data_transaksi']		=$this->M_transaksi->edit_data($id);
		$this->load->view('body/dashboard',$oke);
	}

	public function simpan_data(){
	$data = array(
			'kd_nasabah'		=>$this->input->post('id_nasabah',true),
			'jenis_trans'	=>$this->input->post('jenis_trans',true),
			'value' 		=>$this->input->post('value',true),
			'tanggal' 		=>$this->input->post('tanggal',true),
			'keterangan' 		=>$this->input->post('keterangan',true),
			'id_user' 	=>$this->session->userdata('anggota_id'),
		);
		$this->M_transaksi->TambahData($data);
		redirect('transaksi');
	}
	public function simpan_edit_data($id){
	$data = array(
			'jenis_trans'	=>$this->input->post('jenis_trans',true),
			'value' 		=>$this->input->post('value',true),
			'tanggal' 		=>$this->input->post('tanggal',true),
			'keterangan' 	=>$this->input->post('keterangan',true),
			'id_user' 		=>$this->session->userdata('anggota_id'),
		);
		$this->M_transaksi->submit_edit_transaksi($data,$id);
		redirect('transaksi');
	}

	public function result()
    {
    	$kd_nasabah = $this->input->post('kd_nasabah');

    	if ($kd_nasabah ==null || $kd_nasabah=='') {
    		echo '<div id="result_tunggu"> <p style="color:red">* Belum Ada Hasil</p></div>';
    	}else{
    		$user = $this->M_user->get_tableid_edit('t_nasabah',$kd_nasabah);
			error_reporting(0);
			if($user->nama != null)
			{
				echo '
				<input type="hidden" name="id_nasabah" value='.$user->kd_nasabah.'>
				<table class="table table-striped">
							<tr>
								<td>Nama Siswa/Nasabah</td>
								<td>:</td>
								<td>'.$user->nama.'</td>
							</tr>
							<tr>
								<td>Kelas</td>
								<td>:</td>
								<td>'.$user->nama_kelas.'</td>
							</tr>
							<tr>
								<td>No Telpon</td>
								<td>:</td>
								<td>'.$user->notelp.'</td>
							</tr>
						</table>';
			}else{
				echo 'Anggota Tidak Ditemukan !';
			}

    	}
		
		
        
	}

	public function DataHapusTransaksi($id){
		$oke					=$this->M_transaksi->delete_data($id); // variable content dan variable nama array harus sama 
		redirect('transaksi');
	}

	public function excel(){
			$spreadsheet = new Spreadsheet();
			$sheet = $spreadsheet->getActiveSheet();
			$sheet->setCellValue('A1', 'No');
			$sheet->setCellValue('B1', 'Nama');
			$sheet->setCellValue('C1', 'Kelas');
			$sheet->setCellValue('D1', 'Jenis Transaksi');
			$sheet->setCellValue('E1', 'Uang');
			$sheet->setCellValue('F1', 'Tanggal');
			$sheet->setCellValue('G1', 'Petugas Penginput');
			$sheet->setCellValue('H1', 'Ket');
			$semua = $this->input->post('md_checkbox_21');

			if ($semua=='Y') {
				$siswa = $this->M_transaksi->get_data();
			}else{
				$awal = $this->input->post('awal');
				$akhir = $this->input->post('akhir');
				$siswa = $this->M_transaksi->get_data_range($awal, $akhir);
			}
			
			$no = 1;
			$x = 2;
			foreach($siswa as $row)
			{
				$sheet->setCellValue('A'.$x, $no++);
				$sheet->setCellValue('B'.$x, $row->nama);
				$sheet->setCellValue('C'.$x, $row->nama_kelas);
				$sheet->setCellValue('D'.$x, $row->jenis_trans);
				$sheet->setCellValue('E'.$x, rupiah($row->value));
				$sheet->setCellValue('F'.$x, $row->tanggal);
				$sheet->setCellValue('G'.$x, $row->nama_anggota);
				$sheet->setCellValue('H'.$x, $row->keterangan);
				$x++;
			}
			$writer = new Xlsx($spreadsheet);
			$filename = 'laporan-transaksi';
			ob_end_clean();
			header('Content-Type: application/vnd.ms-excel');
			header('Content-Disposition: attachment;filename="'. $filename .'.xlsx"'); 
			header('Cache-Control: max-age=0');
			$writer->save('php://output');
	}

}
