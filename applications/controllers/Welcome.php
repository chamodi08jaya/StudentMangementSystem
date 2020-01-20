
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome');
		// $this->load->view('login');
	}
	public function about()
	{
		$this->load->view('about');
	}
	public function contact()
	{
		$this->load->view('contact');
	}
	public function class_schedule()
	{
		$this->load->view('class_schedule');
	}
	public function login()
	{
		$this->load->view('login');
	}
	
	public function login_submit()
	{
		//  print("bchdvbubvy");
		$this->load->view('login_submit');

		// $this->load->view('admin');

		

    

		
	}
	public function admin(){
		$this->load->view('admin');
		
	}
	public function sturegistrations(){
		$this->load->view('sturegistrations');
	}

	public function tearegistrations(){
		$this->load->view('tearegistrations');
	}

	public function recepregistrations(){
		$this->load->view('recepregistrations');
	}

	public function editusers(){
		$this->load->view('editusers');
	}

	public function editcourses(){
		$this->load->view('editcourses');
	}

	public function edit_teacher(){
		$this->load->view('edit_teacher');
	}

	public function students(){
		$this->load->view('student');
	}
	public function payment(){
		$this->load->view('payment');
	}
	public function attendence(){
		$this->load->view('attendence');
	}
	public function notification(){
		$this->load->view('notification');
	}
	public function teacher_noti(){
		$this->load->view('teacher_noti');
	}
	public function teacher(){
		$this->load->view('teacher');
	}
	
	
	public function logout(){
		// $this->load->view('logout');
		if (isset($_SESSION['user_name'])){
			session_unset($_SESSION["user_name"]);
			session_unset($_SESSION["user_type"]);
			session_unset($_SESSION["user_id"]);
			$message = base64_encode(urlencode(("Logged Out Successfully")));
			
			header('Location:login.php?msg=' . $message);
			exit();
		}	
	}
	// public function teacherregistrations{
	// 	$this->load->view('teacherregistrations');
	// }

	
	
	
}
