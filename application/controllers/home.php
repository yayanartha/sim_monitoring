<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index() 
    {
        $arr['page'] ='home';
        $this->load->view('vHeader');
        $this->load->view('vHome',$arr);
        $this->load->view('vFooter');
    }

}