<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panel_admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model('login_model');
		$this->load->model('adminFunction');
	}

	public function index(){
		redirect('./dashboard','refresh');
	}

	public function customer(){
		if ($this->session->userdata('type') == 0) {
		$this->load->view('/components/header_adm');
		$this->load->view('/components/components-adm/navbar');
		$this->load->view('/components/view');
		$this->load->view('/components/components-adm/customer_view');
		} else {
			redirect('index','refresh');
		}
	}

	public function staff(){
		if ($this->session->userdata('type') == 0) {
		$this->load->view('/components/header_adm');
		$this->load->view('/components/components-adm/navbar');
		$this->load->view('/components/view');
		$this->load->view('/components/components-adm/staff_view');
		} else {
			redirect('index','refresh');
		}
	}

	public function reservation() {
		if ($this->session->userdata('type') == 0) {
		$this->load->view('/components/header_adm');
		$this->load->view('/components/components-adm/navbar');
		$this->load->view('/components/view');
		$this->load->view('/components/components-adm/reservation');
		} else {
			redirect('index','refresh');
		}
	}

	public function request() {
		if ($this->session->userdata('type') == 0) {
		$this->load->view('/components/header_adm');
		$this->load->view('/components/components-adm/navbar');
		$this->load->view('/components/view');
		$this->load->view('/components/components-adm/request_view');
		} else {
			redirect('index','refresh');
		}
	}

	public function room() {
		if ($this->session->userdata('type') == 0) {
		$this->load->view('/components/header_adm');
		$this->load->view('/components/components-adm/navbar');
		$this->load->view('/components/view');
		$result['data']=$this->adminFunction->getRoom();
		$this->load->view('/components/components-adm/room_view',$result);
		} else {
			redirect('index','refresh');
		}
	}

	// fetch data search user and customer

	public function searchCustomer() {
		$this->load->view('fetchCustomer');
	}

	public function searchStaff() {
		$this->load->view('fetchStaff');
	}

	public function searchReserv() {
		$this->load->view('fetchReservation');
	}

	public function requestStaff() {
		$this->load->view('fetchRequest');
	}

	public function fetchEdit() {
		$this->load->view('fetchEdit');
	}

	public function deleteBtn() {
		$this->load->view('delete');
	}
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */