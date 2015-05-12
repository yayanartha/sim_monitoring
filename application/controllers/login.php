<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
        if (!$this->session->userdata('id')) 
        {
            $this->load->view('v_login');
        }
        else
        {
            $level = $this->session->userdata('level');

			if($level==1)
			{
				redirect(site_url('dosen/c_home'));
			}
			else if($level==2)
			{
				redirect(site_url('mahasiswa/c_home'));
			}
			else if($level==3)
			{
				redirect(site_url('admin/c_home'));
			}
        }
	}

	public function proses_login()
	{
		$this->load->model('m_login');

		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$result=$this->m_login->select_user($username,$password)->row();

		if (count($result)>0) {
			$data_user = array(
				'id' => $result->id,
				'username'=>$result->username,
				'level'=>$result->level
			);
			
			$this->session->set_userdata( $data_user );
			redirect(site_url('login/cek_session'));
		}
		else
		{
			//menampilkan pesan gagal login
			$this->session->set_flashdata('gagal_login', "Login gagal");
			redirect(site_url('login'));
		}
	}

	public function cek_session()
	{
		$id=$level=$this->session->userdata('id');
		if (!empty($id))
		{
			$level=$this->session->userdata('level');
			if($level==1)
			{
				redirect(site_url('dosen/c_home'));
			}
			else if($level==2)
			{
				redirect(site_url('mahasiswa/c_home'));
			}
			else if($level==3)
			{
				redirect(site_url('admin/c_home'));
			}
		}
		else
		{
			$this->session->set_flashdata('gagal_login', "Anda belum login");
			redirect(site_url('login'));	
		}
	}

	public function proses_logout()
	{
		$this->session->sess_destroy();
		redirect(site_url('c_login'));
	}
}

/* End of file  */
/* Location: ./application/controllers/ */