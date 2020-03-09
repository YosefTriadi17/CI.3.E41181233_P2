<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Download extends CI_Controller {
	// untuk mengexstends controler Download dengan CI Controler
	
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url','download')); //memanggil construct helper		
	}

	public function index(){		
		$this->load->view('v_download'); //memanggil php v_download di view
	}

	public function lakukan_download(){				
		force_download('gambar/12.png',NULL); //letak file yang akan di download jika method ini berjalan
	}	

}