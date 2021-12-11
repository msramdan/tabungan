<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Report extends CI_Controller {
	public function __construct()
		{
			parent::__construct();
			$this->load->model('M_report');
			check_not_login();
			$this->load->database();
		}
	public function index()
	{	
		$oke['report']	=$this->M_report->report();
		$oke['content_page']	="report/report";
		$this->load->view('body/dashboard',$oke);
	}


	public function tabunganSiswa()
	{	
		$oke['report']	=$this->M_report->tabunganSiswa();
		$oke['content_page']	="report/report_siswa";
		$this->load->view('body/dashboard',$oke);
	}


public function tabunganKelasPerHari()
  { 
    $oke['report']  =$this->M_report->tabunganSiswa();
    $oke['content_page']  ="report/report_tabungan_per_hari";
    $this->load->view('body/dashboard',$oke);
  }

	public function pdf()
    {
    $this->load->library('dompdf_gen');

       $data['tabungan'] = $this->M_report->report();
       $this->load->view('report/pdf',$data);
       $paper_size = 'A4';
       $orientation = 'portrait';
       $html = $this->output->get_output();
       $this->dompdf->set_paper($paper_size, $orientation);

       $this->dompdf->load_html($html);
       $this->dompdf->render();
       $this->dompdf->stream("laporan_tabungan_kelas.pdf", array('Attachment' =>0));
   }

   public function pdfSiswa()
    {
    $this->load->library('dompdf_gen');

       $data['tabungan'] = $this->M_report->tabunganSiswa();
       $this->load->view('report/pdfSiswa',$data);
       $paper_size = 'A4';
       $orientation = 'portrait';
       $html = $this->output->get_output();
       $this->dompdf->set_paper($paper_size, $orientation);

       $this->dompdf->load_html($html);
       $this->dompdf->render();
       $this->dompdf->stream("laporan_tabungan_nasabah.pdf", array('Attachment' =>0));
   }


}
