<?php
date_default_timezone_set('Asia/Jakarta');
	
	class Backup extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			check_not_login();
		}

		public function index()
		{	
			$oke['content_page']	="backup/view";
			$this->load->view('body/dashboard',$oke);
		}

		public function file()
		{
			date_default_timezone_set("Asia/Jakarta");
			// Load the DB utility class
			$this->load->dbutil();
			// Backup your entire database and assign it to a variable
			$prefs = array(
		        'tables'        => array('t_kelas','history_karyawan','users','t_nasabah','v_tabungan_siswa','v_tabungan_kelas'),   // Array of tables to backup.
		        'ignore'        => array(),                     // List of tables to omit from the backup
		        'format'        => 'txt',                       // gzip, zip, txt
		        'filename'      => date('Ymd-h.i').'.sql',              // File name - NEEDED ONLY WITH ZIP FILES
		        'add_drop'      => TRUE,                        // Whether to add DROP TABLE statements to backup file
		        'add_insert'    => TRUE,                        // Whether to add INSERT data to backup file
		        'newline'       => "\n"                         // Newline character used in backup file
			);
			$backup = $this->dbutil->backup($prefs);
			// Load the file helper and write the file to your server
			$this->load->helper('file');
			write_file(base_url('db/').date('Ymd-h.i').'.sql', $backup);
			// Load the download helper and send the file to your desktop
			$this->load->helper('download');
			force_download(date('Ymd-h.i').'.sql', $backup);
		}
	}
 ?>