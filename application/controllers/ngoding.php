<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// agr tidak bisa langsung mengakses ngoding.php

class Ngoding extends CI_Controller {
	// untuk mengexstends controler Ngoding dengan CI Controler
	
	function index(){ //method index
		$this->load->library('malasngoding'); //untuk meload library malasngoding di libraries
		$this->malasngoding->nama_saya(); //memanggil method nama saya dari libraries malasngoding
                echo "<br/>";
				$this->malasngoding->nama_kamu("H A E D I"); //memanggil method nama kamu dari libraries malasngoding
																//dan menampilkan  tulisan HAEDI
	}

}