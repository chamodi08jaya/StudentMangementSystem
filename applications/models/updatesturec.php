
<?php

class updatesturec extends CI_Model{

public function updatesturecords(){
$data1 = array(

  
    'address'=> $this->input->post('address'),
    'contact_no'=> $this->input->post('contact_no'),
	
	

);


$this->db->where( 'student_id',$_SESSION['user_id']);
$this->db->update('student',$data1 );


$data2 = array(
    'user_name'=> $this->input->post('user_name'),
    'password'=> $this->input->post('password'),
	
  
  
    );
    $this->db->where( 'user_id',$_SESSION['user_id']);
    $this->db->update('users',$data2);

  
    $data3 = array(
        'contact_no'=> $this->input->post('pnum'),
  
        
      
      
        );
        $this->db->where( 'studentid_fk',$_SESSION['user_id']);
        $this->db->update('student_parent',$data3);
    
        


}
}
?>
