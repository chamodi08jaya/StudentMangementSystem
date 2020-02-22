<?php

class Studentpayment extends CI_Model{

public function studpayment(){
$data1 = array(
'subjectpay'=> $this->input->post('sub'),
'studentid'=> $this->input->post('stuid'),
'paydate'=> $this->input->post('pdate'),
'amount'=> $this->input->post('amount'),
);
$this->db->insert('stupay',$data1);

}

}?>
