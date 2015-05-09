<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User extends CI_Controller 
{
    private $limit = 2;

    public function __construct() 
    {
        parent::__construct();
        $this->load->library('form_validation');

        // if (!$this->session->userdata('is_admin_login')) 
        //     redirect('admin/home');

        $this->load->model('mUser');
    }

    public function index($offset = 0)
    {
        $perpage = 2;

        //load data
        $arr['dosen'] = $this->mUser->semuaDosen()->result();
        // $arr['mahasiswa'] = $this->mUser->semuaMahasiswa($this->limit, $offset, $order_column, $order_type)->result();
        // $arr['admin'] = $this->mUser->semuaAdmin($this->limit, $offset, $order_column, $order_type)->result();
        
        //$config['base_url'] = site_url('admin/index/');
        // $config['total_dosen'] = $this->mUser->jumlahDosen();
        // $config['total_mahasiswa'] = $this->mUser->jumlahMahasiswa();
        // $config['total_admin'] = $this->mUser->jumlahAdmin();
        // $config['per_page'] = $perpage;
        // $this->pagination->initialize($config);
        // $data['pagination'] = $this->pagination->create_links();

        $arr['page'] = 'user';
        $this->load->view('admin/vHeader', $arr);
        $this->load->view('admin/vUser', $arr);
        $this->load->view('admin/vFooter');
    }

    function tambahDosen()
    {
        // $this->_set_rules();

        // if($this->form_validation->run() == true)
        // {
            $nip = $this->input->post('inputNIP');
            $cekDosen = $this->mUser->cekDosen($nip);

            if($cekDosen->num_rows() > 0)
            {
                $data['message'] = "<div class='alert alert-warning'>NIP sudah digunakan</div>";
                redirect('admin/user', $data);
            }
            else
            {                 
                $info = array(
                    'nip'   => $this->input->post('inputNIP'),
                    'nama'  => $this->input->post('inputNamaDosen')
                );

                $data['message'] = "Data berhasil ditambahkan";
                $this->mUser->simpanDosen($info);
                redirect('admin/user', $data);
            }
        // }
        // else
        // {
        //     $data['message'] = "";
        //     redirect('admin/user', $data);
        // }
    }

    function editDosen()
    {
        $info = array(
            'nip'   => $this->input->post('nip'),
            'nama'  => $this->input->post('nama')
        );

        $data['message'] = "Data berhasil diupdate";
        $this->mUser->updateDosen($info['nip'], $info['nama']);
        redirect('admin/user', $data);
    }

    public function deleteDosen($nip)
    {
        $this->mUser->deleteDosen($nip);
        redirect('admin/user');
    }

    function _set_rules(){
        $this->form_validation->set_rules('id_user','inputNIP','required|max_length[12]');
        $this->form_validation->set_rules('nama_user','inputNamaDosen','required|max_length[45]');
        $this->form_validation->set_rules('password_user','inputPasswordDosen','required|max_length[10]');
        $this->form_validation->set_error_delimiters("<div class='alert alert-danger'>","</div>");
    }
}