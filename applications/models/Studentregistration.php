<?php

class Studentregistration extends CI_Model{

public function registeruser(){
$data1 = array(
'user_id'=> $this->input->post('student_id'),
'user_type'=> $this->input->post('user_type'),
'user_name'=> $this->input->post('user_name'),
'password'=> $this->input->post('password'),
);
$this->db->insert('users',$data1);
$data2 = array(
'nic'=> $this->input->post('pnic'),
'name'=> $this->input->post('pname'),
'studentid_fk'=> $this->input->post('student_id'),
'contact_no'=> $this->input->post('pnum'),
);
$this->db->insert('student_parent',$data2);
$data = array(
'student_id'=> $this->input->post('student_id'),
'first_name'=> $this->input->post('first_name'),
'last_name'=> $this->input->post('last_name'),
'gender'=> $this->input->post('gender'),
'contact_no'=> $this->input->post('contact_number'),
'address'=> $this->input->post('address'),
'date_of_birth'=> $this->input->post('dob'),
'email_address'=> $this->input->post('email'),
);
return $this->db->insert('student',$data); }
}?>
