<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManCourse extends CI_Controller {}

public function coursemanagement()
	{
		$this->load->model('Manageourse');
		$data["fetch_data"] = $this->Manageourse->fetch_data(); 
		$this->load->model("Manageourse", $data);
	}

?>