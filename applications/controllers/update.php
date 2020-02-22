<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class update extends CI_Controller 
{
	

	public function updatedata()
	{

		$this->load->model('updaterec');
		$item = new updaterec;
		$item->updaterecords();
		redirect(base_url().'index.php/Welcome/edit_recep','refresh');

		// if(!$item->updaterecords()){
		// $data = $data = array(
		// 	'status' => 'Update the Profile Successfully'
		// );
		// $this->load->view('sturegistrations.php', $data);
		
		// $_SESSION['status'] = 'Update the Profile Successfully';
		// redirect(base_url().'index.php/Welcome/edit_recep','refresh');
		// }
		// else{
		// $_SESSION['status'] = '';
		// redirect(base_url().'index.php/Welcome/edit_recep','refresh');
		// }
	
	}

	public function updatestudata()
	{

		$this->load->model('updatesturec');
		$item = new updatesturec;
		$item->updatesturecords();
		redirect(base_url().'index.php/Welcome/edit_student','refresh');
	
	}

	public function updateteacher()
	{

		$this->load->model('updatetearec');
		$item = new updatetearec;
		$item->updatetearecords();
		redirect(base_url().'index.php/Welcome/editt_teacher','refresh');
	
	}
}
?>