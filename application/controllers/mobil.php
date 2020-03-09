<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mobil extends CI_Controller {
	// untuk mengexstends controler Mobil dengan CI Controler

	public function warna(){
		echo "Segment 1 adalah = " . $this->uri->segment('1') . "<br/>"; //menentukan URI segment 1		
		echo "Segment 2 adalah = " . $this->uri->segment('2') . "<br/>"; //menentukan URI segment 2	
		echo "Segment 3 adalah = " . $this->uri->segment('3') . "<br/>"; //menentukan URI segment 3	
		echo "Segment 4 adalah = " . $this->uri->segment('4') . "<br/>"; //menentukan URI segment 4	
        echo "Segment 5 adalah = " . $this->uri->segment('5') . "<br/>"; //menentukan URI segment 5	
        echo "Segment 6 adalah = " . $this->uri->segment('6') . "<br/>"; //menentukan URI segment 6	
	}
}