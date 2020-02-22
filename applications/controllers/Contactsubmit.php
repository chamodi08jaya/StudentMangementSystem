<?php 

class Contactsubmit extends CI_Controller{

    public function contactus(){
     
           $this->load->model('Contactus');
           $item=new Contactus;
           $item->contactpage();
           redirect(base_url().'index.php/Welcome/contact','refresh');
    }
}

?>