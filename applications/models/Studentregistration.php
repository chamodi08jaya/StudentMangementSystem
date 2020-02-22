<?php

class Studentregistration extends CI_Model{

public function registeruser(){
	$id = $this->input->post('student_id');
	$query1 = $this->db->query("SELECT * FROM users WHERE user_id='$id'");
	if($query1->result()) return false;
	
$data1 = array(
'user_id'=> $this->input->post('student_id'),
'user_type'=> $this->input->post('user_type'),
'user_name'=> $this->input->post('user_name'),
'password'=> $this->input->post('password'),
);
$this->db->insert('users',$data1);
$data2 = array(
'name'=> $this->input->post('pname'),
'studentid_fk'=> $this->input->post('student_id'),
'contact_no'=> $this->input->post('pnum'),
);
$this->db->insert('student_parent',$data2);


// Subjects 
$data3 = array(
'studentid_fk'=> $this->input->post('student_id'),
'courseid_fk'=> $this->input->post('sub1'),
);

// if(isset($data3[studentid_fk]) && !($data3[courseid_fk]=="pick")){
	$this->db->insert('student_learn',$data3);



$data4 = array(
'studentid_fk'=> $this->input->post('student_id'),
'courseid_fk'=> $this->input->post('sub2'),
);
// if(isset($data4[studentid_fk]) && !($data3[courseid_fk]=="pick1")){
	$this->db->insert('student_learn',$data4);



$data5 = array(
'studentid_fk'=> $this->input->post('student_id'),
'courseid_fk'=> $this->input->post('sub3'),
);
// if(isset($data5[studentid_fk]) && !($data3[courseid_fk]=="pick2")){
	$this->db->insert('student_learn',$data5);


$data6 = array(
'studentid_fk'=> $this->input->post('student_id'),
'courseid_fk'=> $this->input->post('sub4'),
);
// if(isset($data6[studentid_fk]) && !($data3[courseid_fk]=="pick3")){
	$this->db->insert('student_learn',$data6);



// End Subject

$data = array(
'student_id'=> $this->input->post('student_id'),
'first_name'=> $this->input->post('first_name'),
'last_name'=> $this->input->post('last_name'),

'contact_no'=> $this->input->post('contact_number'),
'address'=> $this->input->post('address'),
'date_of_birth'=> $this->input->post('dob'),
'email_address'=> $this->input->post('email'),
);
return $this->db->insert('student',$data); }
}?>
