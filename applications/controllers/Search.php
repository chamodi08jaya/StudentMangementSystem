<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Searchmodel');

        
    }

    function search_keyword()
    {
        $keyword    =   $this->input->post('keyword');

        $data  =   $this->Searchmodel->search($keyword);

        $this->load->view('payment',array('data'=>$data));
        
    }

    function stu_pay()
    {
        $keyword1    =   $this->input->post('keyword');

        $data1  =   $this->Searchmodel->search($keyword1);
        // $data1  =   $this->Searchmodel->stupay($keyword1);

        $this->load->view('payment',array('data'=>$data1));
        
    }
}
?>