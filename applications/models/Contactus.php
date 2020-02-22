<?php

class Contactus extends CI_Model{

public function contactpage(){
$data = array(
'name'=> $this->input->post('name'),			
'email'=> $this->input->post('email'),
'subject'=> $this->input->post('subject'),
'message'=> $this->input->post('message'),
);
echo '<script>alert(" Succssfully send the message")</script>';
return $this->db->insert('contact_us',$data);
}

}?>
