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
            $this->load->view('admin/v_header');
            $this->load->view('admin/v_home');
            $this->load->view('admin/v_footer');
        }
        else
        {
            redirect(site_url('login'));
        }
    }

}

/* End of file  */
/* Location: ./application/controllers/ */