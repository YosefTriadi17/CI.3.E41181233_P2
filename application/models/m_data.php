<?php 

class M_data extends CI_Model{
	// untuk mengexstends M data dengan CI Model

	function ambil_data(){ //method ambil data
		return $this->db->get('user'); //memanggil field user dari database
	}
}