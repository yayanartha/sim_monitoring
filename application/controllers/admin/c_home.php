<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class C_home extends CI_Controller 
{
    public function __construct() 
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index() 
    {
        if ($this->session->userdata('is_admin_login')) 
            redirect('admin/dashboard');
        else
            $this->load->view('admin/vLogin');
    }

    public function do_login() 
    {
        redirect('admin/dashboard');

        // if ($this->session->userdata('is_admin_login')) 
        // {
        //     redirect('admin/home/dashboard');
        // } 
        // else 
        // {
        //     $user = $_POST['username'];
        //     $password = $_POST['password'];

        //     $this->form_validation->set_rules('username', 'Username', 'required');
        //     $this->form_validation->set_rules('password', 'Password', 'required');

        //     if ($this->form_validation->run() == FALSE) 
        //     {
        //         $this->load->view('admin/vwLogin');
        //     } 
        //     else 
        //     {
        //         $salt = '5&JDDlwz%Rwh!t2Yg-Igae@QxPzFTSId';
        //         $enc_pass  = md5($salt.$password);
        //         $sql = "SELECT * FROM tbl_admin_users WHERE username = ? AND password = ?";
        //         $val = $this->db->query($sql,array($user ,$enc_pass ));

        //         if ($val->num_rows) 
        //         {
        //             foreach ($val->result_array() as $recs => $res) 
        //             {
        //                 $this->session->set_userdata(array(
        //                     'id' => $res['id'],
        //                     'username' => $res['username'],
        //                     'email' => $res['email'],                            
        //                     'is_admin_login' => true,
        //                     'user_type' => $res['user_type']
        //                 ));
        //             }
        //             redirect('admin/dashboard');
        //         } 
        //         else 
        //         {
        //             $err['error'] = '<strong>Access Denied</strong> Invalid Username/Password';
        //             $this->load->view('admin/vwLogin', $err);
        //         }
        //     }
        // }
    }

}