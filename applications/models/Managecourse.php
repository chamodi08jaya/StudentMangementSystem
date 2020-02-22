<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Managecourse extends CI_Controller {

public function manage_course()
{
$query1 = $this->db->select("SELECT user_id FROM users WHERE user_type==Teacher");
return $query1;

$query2 = $this->db->select("SELECT user_name FROM users WHERE user_type==Teacher ORDER BY name ASC");
return $query2;

$query3 = $this->db->select("SELECT subject FROM course");
return $query3;
}

// public function send_message()
// {
// $this->load->model('Contactus');
// redirect(base_url().'index.php/Welcome/contact','refresh')
// }

}