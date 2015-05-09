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
        $this->load->view('admin/vHeader', $arr);
        $this->load->view('admin/vJadwal', $arr);
        $this->load->view('admin/vFooter');
    }
}