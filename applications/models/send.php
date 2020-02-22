<?php

class send extends CI_Model{

public function resend(){
$data = array(
// 'notification_id'=> $this->input->post('notification_id'),
'date'=> $this->input->post('date'),
'message'=> $this->input->post('message')

);

// echo $data1['notification_id'];
$result=$this->db->insert('notification',$data);
echo '<script>alert("Message Sent Succssfully")</script>';
// if ($result) {
//     $message = "The user was successfully created.";
//     // $_SESSION['registered'] = 1;
// } else {
//     $message = "The user could not be created.";
//     $message .= "<br />" . mysql_error();
// }

}
}
?>
