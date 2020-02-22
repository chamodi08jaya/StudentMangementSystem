
<?php

class uploadanswerrec extends CI_Model{

public function uploadanswers(){
$data1 = array(

    'student_id'=> $this->input->post('student_id'),
    'name'=> $this->input->post('name'),
	'subject_id'=> $this->input->post('subject_id'),
    'answer'=> $this->input->post('answer'),
	

);


// $this->db->where( 'student_id',$_SESSION['user_id']);
$this->db->insert('upload_answers',$data1 );
// $this->db->where( 'student_id',$_SESSION['user_id']);
// $this->db->upload('upload_answers',$data1 );
// $this->db->insert('booking_details',$data1);

    


}
}
?>
