<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Jadwal extends CI_Controller 
{
    public function __construct() 
    {
        parent::__construct();
        $this->load->library('form_validation');

        // if (!$this->session->userdata('is_admin_login')) 
        //     redirect('admin/home');
    }

    public function index() 
    {
        $arr['page'] = 'jadwal';
        $this->load->view('admin/v_header', $arr);
        $this->load->view('admin/v_jadwal', $arr);
        $this->load->view('admin/v_footer');
    }
}