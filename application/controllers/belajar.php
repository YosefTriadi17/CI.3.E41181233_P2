<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//untuk mencegah akses langsung pada file controler belajar

class Belajar extends CI_Controller {
	// untuk mengexstends controler belajar dengan CI Controler
	// nama class dimulai dengan huruf besar dan harus sama dengan controler yang dibuat 
	
	function __construct(){ //ini method construct di controler belajar
		parent::__construct();		
		$this->load->model('m_data');//untuk menampilkan model data
	}

	function user(){ //ini method user di controler belajar
		$data['user'] = $this->m_data->ambil_data()->result(); //mengambil data database melalui model mdata
		$this->load->view('v_user.php',$data);//untuk menampilkan view user
	}

	public function belajar(){ //ini method belajar di controler belajar
		$this->load->view('view_belajar.php'); //untuk menampilkan view belajar
	}

}