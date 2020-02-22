
<?php

class uploadquerec extends CI_Model{

public function uploadque(){
$data1 = array(

    'id'=> $this->input->post('emp_no'),
    'name'=> $this->input->post('name'),
	'subject'=> $this->input->post('subject_id'),
    'filename'=> $this->input->post('file'),
	

);


// $this->db->where( 'student_id',$_SESSION['user_id']);
$this->db->insert('teacher_upload',$data1 );
// $this->db->where( 'student_id',$_SESSION['user_id']);
// $this->db->upload('upload_answers',$data1 );
// $this->db->insert('booking_details',$data1);

    


}
}
?>
