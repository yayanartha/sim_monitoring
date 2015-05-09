<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$id=$this->session->userdata('id');
		if (!empty($id)) {
			$this->load->view('dosen/v_home');	
		}
		else
		{
			redirect(site_url('c_login'));
		}
	}

}

/* End of file  */
/* Location: ./application/controllers/ */