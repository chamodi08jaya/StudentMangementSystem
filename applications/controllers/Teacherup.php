<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Teacherup extends CI_Controller
{
    function  __construct() {
        parent::__construct();
        $this->load->model('teacherup_model');
        // $this->load->library('upload');
    }
    
    function add(){
        if($this->input->post('userSubmit')){
            
            //Check whether user upload picture
            if(!empty($_FILES['file_up'])){
                /*
                $config['upload_path'] = 'uploads/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif|pdf';
                $config['file_name'] = $_FILES['file']['filename'];*/

                $file_name = $_FILES['file_up']['name'];
                $file_tmp =$_FILES['file_up']['tmp_name'];
                //$file_type =$_FILES['file_up']['type'];
                $file_ext=strtolower(end(explode('.',$_FILES['file_up']['name'])));

                $extensions= array("jpeg","jpg","png","pdf","txt");
      
                if(in_array($file_ext,$extensions)=== false){
                 $errors[]="Extension not allowed.";
                 }
      

                if(empty($errors)==true){
                    move_uploaded_file($file_tmp,"uploads/".$file_name);
                 }else{
                    die('hi');
                 }
                //Load upload library and initialize configuration
               // $this->load->library('upload',$config);                
                // $this->upload->initialize($config);
                
                //if($this->upload->do_upload('file')){
                //   $uploadData = $this->upload->data();
                //    $file = $uploadData['file_name'];
                //}else{
                //    $file = '';
                //}
            }else{
                $file = '';
            }

            if(empty($errors)==true) {
                move_uploaded_file($file_tmp,"uploads/".$file_name);
                echo "Success";
             }else{
                print_r($errors);
             }
            
            //Prepare array of user data
            $userData = array(
                'id' => $this->input->post('id'),
                'name' => $this->input->post('name'),
                'subject' => $this->input->post('subject'),
                'filename' => $this->input->post('filename'),
                'file' => $file_name
            );
            
            //Pass user data to model
            $this->teacherup_model->insert($userData);
            
            //Storing insertion status message.
            // if($insertUserData){
            //     $this->session->set_flashdata('success_msg', 'User data have been added successfully.');
            // }else{
            //     $this->session->set_flashdata('error_msg', 'Some problems occured, please try again.');
            // }
        }
        //Form for adding user data
        $this->load->view('teachercourse');
    }
}