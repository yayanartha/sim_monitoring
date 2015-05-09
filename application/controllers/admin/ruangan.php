<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Ruangan extends CI_Controller 
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
        $arr['page'] = 'ruangan';
        $this->load->view('admin/vHeader', $arr);
        $this->load->view('admin/vRuangan', $arr);
        $this->load->view('admin/vFooter');
    }
}