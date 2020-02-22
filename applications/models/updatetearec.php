
<?php

class updatetearec extends CI_Model{
   
public function updatetearecords(){
    // Update functions
    $data1 = array(
     'contact_no'=> $this->input->post('contact_no'),
    );

    $this->db->where( 'emp_no',$_SESSION['user_id']);
    $this->db->update('teacher',$data1 );


    $data2 = array(
        'user_name'=> $this->input->post('user_name'),
        'password'=> $this->input->post('password'),
    );
     $this->db->where( 'user_id',$_SESSION['user_id']);
     $this->db->update('users',$data2);

}
}
?>
