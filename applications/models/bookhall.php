<?php

class bookhall extends CI_Model{

public function booking(){
    // $id = $this->input->post('hall_no');
    // $id1 = $this->input->post('time');
	// $query1 = $this->db->query("SELECT * FROM booking_details WHERE ( hall_no='$id' AND time='$id1')");
	// if($query1->result()) return false;
$data1 = array(
'hall_no'=> $this->input->post('hall_no'),
'time'=> $this->input->post('time'),
'emp_no'=> $this->input->post('emp_no')

);

// echo $data1['hall_no'];
$this->db->insert('booking_details',$data1);
echo '<script>alert(" Succssfully book a hall")</script>';

}
}
?>
