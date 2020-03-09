<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//mencegah agar tidak bisa langsung mengakses helper

class Welcome extends CI_Controller {
	// untuk mengexstends controler Welcome dengan CI Controler
	
	function __construct(){ //method construct
		parent::__construct(); //agar dijalankan pertama
		$this->load->helper('html'); //untuk meload helper
	}

	public function index(){ //method index
		$this->load->view('welcome_helper'); //menampilkan view welcome helper
	}
}