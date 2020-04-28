<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model('login_model');
	}

	public function index()
	{
		// check the _session[type] to load the view
		if ($this->session->userdata('type') == '1')
		{
			redirect('../Panel_staff','refresh');
		}
		else if($this->session->userdata('type') == '0') {
			redirect('../Panel_admin','refresh');
		}  
		else {
			$this->load->view('login_view');
		}
	}

	public function register()
	{
		$this->load->view('register_view');
		// get variable from the input
		$name = $this->input->post('fullname');
		$username = $this->input->post('username');
		$pwd = $this->input->post('Password');
		$rePwd = $this->input->post('RePassword');
		$type = $this->input->post('type');
		$fn = $this->input->post('fn');
		$ln = $this->input->post('ln');
		$phone = $this->input->post('phone');
		$email = $this->input->post('email');
		$department = $this->input->post('department');
		$salary = $this->input->post('salary');
		$address = $this->input->post('address');
		$pCode = $this->input->post('postalCode');
		$hiring_date = $this->input->post('hDay');

		//check the input data is not null (i already validate from form, btw i tried to invade the hackers and attackers to edit HTML via SYNTAX SQL) 
		if ($name && $username && $pwd && $rePwd && $type && $fn && $ln && $phone && $email && $department && $salary && $hiring_date && $pCode && $address && $hiring_date)
		{
			//send data to model
			$this->login_model->addMember($name, $username, $pwd, $rePwd, $type , $fn , $ln , $phone , $email , $department , $salary , $hiring_date, $pCode, $address);
		}
	}

	public function login() 
	{
		$this->load->view('login_view');

		//get the data from the view
		$Username = $this->input->post('Username');
		$pwd = $this->input->post('Password');

		//send data to model
		$count = $this->login_model->getUser($Username, $pwd);
		$type = $this->login_model->getType($Username);
		$id = $this->login_model->getID($Username);

		//admin
		if($count == '1' && $type['type'] == '0') {
			//create session
			//set variable
			$type = $type['type'];
			$testID = $id['id'];
			$this->session->set_userdata('userSession', $Username);
			$this->session->set_userdata('type', $type);
			$this->session->set_userdata('id', $testID);
			$message = 'Welcome back '.$Username;
			echo "<script type='text/javascript'>alert('$message');</script>";
			redirect('/dashboard','refresh');	
		}
		//staff
		else if($count == '1' && $type['type'] == '1') {
			//create session
			$type = $type['type'];
			$testID = $id['id'];
			$this->session->set_userdata('userSession', $Username);
			$this->session->set_userdata('type', $type);
			$this->session->set_userdata('id', $testID);
			$message = 'Welcome back '.$Username;
			echo "<script type='text/javascript'>alert('$message');</script>";
			redirect('/staff','refresh');	
		}
		else {
			$message = "wrong user";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
	}

	public function staff(){
		if($this->session->userdata('type') == '1') {
			$this->load->view('/components/header_adm');
			$this->load->view('/components/components-staff/navbar');
			$this->load->view('/components/view');
			$this->load->view('/components/components-staff/check');
		} else
		{
			// tried to catch exception if sb enter the diff link 
			redirect('/index','refresh');
		}
	}

	public function dashboard()
	{
		//admin
		if($this->session->userdata('type') == '0'){ 
			//load components
			$this->load->view('/components/header_adm');
			$this->load->view('/components/components-adm/navbar');
			// main content
			$this->load->view('/components/view');
			//sumary
			$this->load->view('/components/components-adm/summary');
			$this->load->view('/components/components-adm/earning');
		} else {
			// tried to catch exception if sb enter the diff link 
			redirect('/index','refresh');
		}
	}


	public function logout(){
		if($this->session->userdata('userSession')) {
			$this->session->unset_userdata('userSession');
			$this->session->unset_userdata('type');
			redirect('/index','refresh');
		}
	}

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */