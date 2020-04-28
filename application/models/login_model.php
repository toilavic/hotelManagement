<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	public function __construct()
	{ 
		parent::__construct();
		$this->load->database();
	}

	public function addMember($name, $username, $pwd, $rePwd, $type , $fn , $ln , $phone , $email , $department , $salary, $hiring_date, $pCode, $address) 
	{
		// check that already exist the username?
		$this->db->where('username', $username);
		$countUser = $this->db->get('register_tr2k')->num_rows();

		if ($pwd != $rePwd) {
			echo "<span style='color: red;'> Password is not the same !! </span>";
		}
		else if ($countUser == '0')
		{
			$message = "<span style='color: red;'> Register success !! </span>";
			$object = array( 'fullName' => $name
							,'username' => $username
							,'password' => $pwd
							,'type' => $type
							,'firstname' => $fn
							,'lastname' => $ln
							,'telephone' => $phone
							,'email' => $email
							,'department' => $department
							,'salary' => $salary
							,'postalCode' => $pCode
							,'address' => $address
							,'hiring_date' => $hiring_date
							
						);
			$this->db->insert('register_tr2k', $object);
			redirect('./index','refresh');
			echo "<script type='text/javascript'>alert('$message');</script>"; 
		}
		else
		{
			echo "<span style='color: red;'> Username exist !! </span>";
		}
	}

	public function getUser($Username, $pwd)
	{
		$this->db->where('username', $Username);
		$this->db->where('password', $pwd);
		$count = $this->db->get('register_tr2k')->num_rows();
		return $count;
	}

	public function getType($Username)
	{
		$this->db->select('type');
		$this->db->where('username', $Username);
		$query=$this->db->get('register_tr2k')->row_array();
		return $query;
	}

	public function getRoom() {
		$this->db->select('room_id, room_type');
		$query=$this->db->get('room')->row_array();
		return $query;
	}

	public function getID($Username)
	{
		$this->db->select('id');
		$this->db->where('username', $Username);
		$query=$this->db->get('register_tr2k')->row_array();
		return $query;
	}
}

/* End of file login_model.php */
/* Location: ./application/models/login_model.php */