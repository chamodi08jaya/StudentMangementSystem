<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class upload extends CI_Controller 
{
	

	
	
	public function uploadanswers()
	{

		$this->load->model('uploadanswerrec');
		$item = new uploadanswerrec;
		$item->uploadanswers();
		redirect(base_url().'index.php/Welcome/stu_coursecontent','refresh');
	
    }
    
    public function uploadquestion()
	{

		$this->load->model('uploadquerec');
		$item = new uploadquerec;
		$item->uploadque();
		redirect(base_url().'index.php/Welcome/teachercourse_content','refresh');
	
	}
}
?>