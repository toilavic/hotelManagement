<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class staffModel extends CI_Model {

	public function __construct()
	{ 
		parent::__construct();
		$this->load->database();
	}

	public function addRequest($stuffs, $id, $desc, $day) 
	{
			$object = array( 'stuff_name' => $stuffs
							,'staff_id' => $id
							,'desc' => $desc
							,'date' => $day);
			$this->db->insert('payment', $object);
			redirect('../Panel_staff/request','refresh');
			$message = "<span style='color: red;'> Request sended !! </span>";
			echo "<script type='text/javascript'>alert('$message');</script>"; 
		
	}
}
