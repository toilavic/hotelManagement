<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class adminFunction extends CI_Model {

	public function __construct()
	{ 
		parent::__construct();
		$this->load->database();
	}

	public function getRoom() {
		$query=$this->db->query("select * from room");;
		return $query->result();
	}
}

/* End of file login_model.php */
/* Location: ./application/models/login_model.php */