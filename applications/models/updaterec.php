
<?php

class updaterec extends CI_Model{

public function updaterecords(){

    // $id = $this->input->post('emp_no');
	// $query1 = $this->db->query("SELECT * FROM users WHERE user_id='$id'");
    // if($query1->result()) return true;
    
	// Update function
    $data1 = array(
        'address'=> $this->input->post('address'),
        'contact_no'=> $this->input->post('contact_no'),
	);

    $this->db->where( 'emp_no',$_SESSION['user_id']);
    $this->db->update('receptionist',$data1 );


    $data2 = array(
        'user_name'=> $this->input->post('user_name'),
        'password'=> $this->input->post('password'),
    );
    
    $this->db->where( 'user_id',$_SESSION['user_id']);
    $this->db->update('users',$data2);

}
}
?>
