<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class spayment extends CI_Controller {

	public function stpayment(){
	$this->load->model('Studentpayment');
	$item = new Studentpayment;
	$item->studpayment();
	redirect(base_url().'index.php/Welcome/payment','refresh');

}
	
}