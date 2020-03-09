<?php 

class Form extends CI_Controller{
	// untuk mengexstends controler Form dengan CI Controler

	function __construct(){
		parent::__construct();
		$this->load->library('form_validation'); //memanggil library database dari autoload
	}

	function index(){
		$this->load->view('v_form'); //menampilkan view v_form
	}

	function aksi(){
		$this->form_validation->set_rules('nama','Nama','required'); //form nama yang wajib diisi
		$this->form_validation->set_rules('email','Email','required'); //form email yang wajib diisi
		$this->form_validation->set_rules('konfir_email','Konfirmasi Email','required'); //form konfirmasi email yang wajib diisi

		if($this->form_validation->run() != false){
			echo "Form validation oke"; //menampilkan tulisan form validasi oke
		}else{
			$this->load->view('v_form'); //menampilkan view v_form
		}
	}
}