<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_login extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function select_user($username,$password)
	{
		//query select user
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('username',$username);
		$this->db->where('password',$password);

		//return result
		return $this->db->get();
	}

}

/* End of file  */
/* Location: ./application/models/ */