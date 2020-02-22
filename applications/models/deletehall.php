<?php

class deletehall extends CI_Model{

public function deletebooking(){
$data1 = array(
'hall_no'=> $this->input->post('hall_no'),
'time'=> $this->input->post('time'),
'emp_no'=> $this->input->post('emp_no')

);

// echo $data1['hall_no'];



  $result=$this->db->query("SELECT time FROM booking_details where time=time ");
//   foreach($result->result() as $row){
    echo '<script>alert(" Succssfully delete a hall")</script>';
 
//   }
  
  $this->db->delete('booking_details',$data1);

}
}
?>
