<?php

class Receptionistregistration extends CI_Model{

public function registeruser(){
    $id = $this->input->post('emp_no');
	$query1 = $this->db->query("SELECT * FROM receptionist WHERE emp_no='$id'");
	if($query1->result()) return false;
$data1 = array(
'user_id'=> $this->input->post('emp_no'),
'user_type'=> $this->input->post('user_type'),
'user_name'=> $this->input->post('user_name'),
'password'=> $this->input->post('password'),
);
$this->db->insert('users',$data1);

$data2 = array(
'emp_no'=> $this->input->post('emp_no'),
'name'=> $this->input->post('name'),
'contact_no'=> $this->input->post('contact_number'),
'address'=> $this->input->post('address'),
);
$this->db->insert('receptionist',$data2);

}

}?>
