<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panel_staff extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
	}

	public function index(){
		redirect('../Panel_staff/toDoList','refresh');
	}

	public function check(){
		if ($this->session->userdata('type') == 1) {
			$this->load->view('/components/header_adm');
			$this->load->view('/components/components-staff/navbar');
			$this->load->view('/components/view');
			$this->load->view('/components/components-staff/check');
		} else {
			redirect('index','refresh');
		}
	}

	public function toDoList() {
		if ($this->session->userdata('type') == 1) {
			$this->load->view('/components/header_adm');
			$this->load->view('/components/components-staff/navbar');
			$this->load->view('/components/view');
			$this->load->view('/components/components-staff/toDoList');
		} else {
			redirect('index','refresh');
		}
	}

	public function history() {
		if ($this->session->userdata('type') == 1) {
			$this->load->view('/components/header_adm');
			$this->load->view('/components/components-staff/navbar');
			$this->load->view('/components/view');
			$this->load->view('/components/components-staff/history');
		} else {
			redirect('index','refresh');
		}
	}

	public function request() {
		if ($this->session->userdata('type') == 1) {
			$this->load->view('/components/header_adm');
			$this->load->view('/components/components-staff/navbar');
			$this->load->view('/components/view');
			$this->load->view('/components/components-staff/request');
		} else {
			redirect('index','refresh');
		}
	}

	public function mRequest() {
		if ($this->session->userdata('type') == 1) {
			$message = 'Sended request ';

			$this->load->view('components/components-staff/request');

			echo "<script type='text/javascript'>alert('$message');</script>";
			
			$stuffs = $this->input->post('stuffs');
			$id = $this->session->userdata('id');
			$desc = $this->input->post('desc');
			$day = $this->input->post('dayRequest');

			$this->load->model('staffModel');
				//send data to model
			$this->staffModel->addRequest($stuffs, $id, $desc, $day);
			
		} else {
			redirect('index','refresh');
		}
		
	}

	// public function checkInOut(){
		
	// }
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */