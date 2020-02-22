
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
	public function viewpayment(){
		$this->load->view('viewpayment');
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
	public function view_tutes()
	{
		$this->load->view('view_tutes');
	}
	public function view_grades()
	{
		$this->load->view('view_grades');
	}
	public function stu_coursecontent()
	{
		$this->load->view('stu_coursecontent');
	}
	
	public function login_submit()
	{
		//  print("bchdvbubvy");
		$this->load->view('login_submit');

		// $this->load->view('admin');
	}
	public function stu_pay()
		{
			$this->load->view('stu_pay');
		}	

		public function editt_teacher()
		{
			$this->load->view('editt_teacher');
		}	

		

	public function edit_student(){
		$this->load->view('edit_student');
	}
	public function view_booking(){
		$this->load->view('view_booking');
	}
	public function myprofile(){
		$this->load->view('myprofile');
	}
	public function cancel_booking(){
		$this->load->view('cancel_booking');
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
	public function teachercourse(){
		$this->load->view('teachercourse');
	}
	public function teachercourse_content(){
		$this->load->view('teachercourse_content');
	}

	public function editusers(){
		$this->load->view('editusers');
	}

	public function view_answers(){
		$this->load->view('view_answers');
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
	
	public function receptionist(){
		$this->load->view('receptionist');
	}

	public function edit_recep(){
		$this->load->view('edit_recep');
	}
	
	public function recep_noti(){
		$this->load->view('recep_noti');
	}

	public function recep_pay(){
		$this->load->view('recep_pay');
	}

	public function recep_hall(){
		$this->load->view('recep_hall');
	}

	public function recep_attend(){
		$this->load->view('recep_attend');
	}

	public function recep_stu(){
		$this->load->view('recep_stu');
	}
	
	public function logout(){
		$this->load->view('login');
	
	}
	// public function teacherregistrations{
	// 	$this->load->view('teacherregistrations');
	// }

	
	
	
}
