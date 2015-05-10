<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class C_user extends CI_Controller 
{
    private $limit = 2;

    public function __construct() 
    {
        parent::__construct();
        $this->load->library('form_validation');

        $this->load->model('admin/m_user');
    }

    public function index()
    {
        //load data
        $arr['dosen'] = $this->m_user->semuaDosen()->result();
        $arr['mahasiswa'] = $this->m_user->semuaMahasiswa()->result();

        $arr['page'] = 'user';

        $this->load->view('admin/v_header', $arr);
        $this->load->view('admin/v_user', $arr);
        $this->load->view('admin/v_footer');
    }

    function tambahDosen()
    {
        $nip = $this->input->post('inputNIP');
        $cekDosen = $this->m_user->cekDosen($nip);

        if($cekDosen->num_rows() > 0)
        {
            $data['message'] = "<div class='alert alert-warning'>NIP sudah digunakan</div>";
            redirect('admin/c_user');
        }
        else
        {                 
            $info = array(
                'nip'   => $this->input->post('inputNIP'),
                'nama'  => $this->input->post('inputNamaDosen')
            );

            $data['message'] = "Data berhasil ditambahkan";
            $this->m_user->simpanDosen($info);
            redirect('admin/c_user');
        }
    }

    function editDosen()
    {
        $info = array(
            'nip'   => $this->input->post('nip'),
            'nama'  => $this->input->post('nama')
        );

        $data['message'] = "Data berhasil diupdate";
        $this->m_user->updateDosen($info['nip'], $info['nama']);
        redirect('admin/c_user', $data);
    }

    function deleteDosen($nip)
    {
        $this->m_user->deleteDosen($nip);
        redirect('admin/c_user');
    }

    function tambahMahasiswa()
    {
        $nim = $this->input->post('inputNIM');
        $cekMahasiswa = $this->m_user->cekMahasiswa($nim);

        if($cekMahasiswa->num_rows() > 0)
        {
            $data['message'] = "<div class='alert alert-warning'>NIM sudah digunakan</div>";
            redirect('admin/c_user', $data);
        }
        else
        {                 
            $info = array(
                'nip'   => $this->input->post('inputNIM'),
                'nama'  => $this->input->post('inputNamaMahasiswa')
            );

            $data['message'] = "Data berhasil ditambahkan";
            $this->m_user->simpanMahasiswa($info);
            redirect('admin/c_user', $data);
        }
    }

    function editMahasiswa()
    {
        $info = array(
            'nim'   => $this->input->post('nim'),
            'nama'  => $this->input->post('nama')
        );

        $data['message'] = "Data berhasil diupdate";
        $this->m_user->updateMahasiswa($info['nim'], $info['nama']);
        redirect('admin/c_user', $data);
    }

    function deleteMahasiswa($nim)
    {
        $this->m_user->deleteMahasiswa($nim);
        redirect('admin/c_user');
    }

    function tambahAdmin()
    {

    }

    function editAdmin()
    {

    }

    function deleteAdmin($id)
    {

    }

    function _set_rules(){
        $this->form_validation->set_rules('id_user','inputNIP','required|max_length[12]');
        $this->form_validation->set_rules('nama_user','inputNamaDosen','required|max_length[45]');
        $this->form_validation->set_rules('password_user','inputPasswordDosen','required|max_length[10]');
        $this->form_validation->set_error_delimiters("<div class='alert alert-danger'>","</div>");
    }
}