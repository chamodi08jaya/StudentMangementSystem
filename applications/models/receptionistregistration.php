<?php

class Receptionistregistration extends CI_Model{

public function registeruser(){
$data1 = array(
'user_id'=> $this->input->post('receptionist_id'),
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
© 2020 GitHub, Inc.