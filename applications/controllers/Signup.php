<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {


public function registration()
{
$this->load->model('studentregistration');
$item = new studentregistration;
// $item->registeruser();
// redirect(base_url().'index.php/Welcome/sturegistrations','refresh');
if(!$item->registeruser()){
    $data = $data = array(
        'status' => 'Student ID already exists in the Database'
    );
    //$this->load->view('sturegistrations.php', $data);
    $_SESSION['status'] = 'Student ID already exists in the Database';
    redirect(base_url().'index.php/Welcome/sturegistrations','refresh');
    }
    else{
    $_SESSION['status'] = '';
    redirect(base_url().'index.php/Welcome/sturegistrations','refresh');
    }
    
}

public function tregistration()
{
$this->load->model('Teacherregistration');
$item = new Teacherregistration;
// $item->registeruser();
// redirect(base_url().'index.php/Welcome/tearegistrations','refresh');
if(!$item->registeruser()){
    $data1 = $data1 = array(
        'status1' => 'Employee Number already exists in the Database'
    );
    //$this->load->view('sturegistrations.php', $data);
    $_SESSION['status1'] = 'Employee Number already exists in the Database';
    redirect(base_url().'index.php/Welcome/tearegistrations','refresh');
    }
    else{
    $_SESSION['status1'] = '';
    redirect(base_url().'index.php/Welcome/tearegistrations','refresh');
    }
}

public function rregistration()
{
$this->load->model('Receptionistregistration');
$item = new Receptionistregistration;
// $item->registeruser();
// redirect(base_url().'index.php/Welcome/recepregistrations','refresh');
if(!$item->registeruser()){
    $data2 = $data2 = array(
        'status4' => ''
    );
    //$this->load->view('sturegistrations.php', $data);
    $_SESSION['status4'] = '';
    redirect(base_url().'index.php/Welcome/recepregistrations','refresh');
    }
    else{
    $_SESSION['status4'] = '';
    redirect(base_url().'index.php/Welcome/recepregistrations','refresh');
    }
}

public function book()
{
$this->load->model('bookhall');
$item = new bookhall;
 $item->booking();
 redirect(base_url().'index.php/Welcome/recep_hall','refresh');
// if(!$item->booking()){
    // $data3 = $data3 = array(
    //     'status' => 'Hall is already book'
    // );
    //$this->load->view('sturegistrations.php', $data);
    // $_SESSION['status'] = 'Hall is already book';
    // redirect(base_url().'index.php/Welcome/recep_hall','refresh');
    // }
    // else{
    // $_SESSION['status'] = '';
    // redirect(base_url().'index.php/Welcome/recep_hall','refresh');
    // }
}


public function delete()
{
$this->load->model('deletehall');
$item = new deletehall;
$item->deletebooking();
redirect(base_url().'index.php/Welcome/cancel_booking','refresh');
}

public function rrsend()
{
$this->load->model('send');
$item = new send;
$item->resend();

redirect(base_url().'index.php/Welcome/recep_noti','refresh');
}



}