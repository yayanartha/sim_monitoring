<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tahunajaran extends CI_Controller 
{
    function __construct() 
    {
        parent::__construct();
        $this->load->library('form_validation');

        $this->load->model('admin/m_tahunajaran');
    }

    function index() 
    {
        $arr['periode'] = $this->m_tahunajaran->semuaPeriode()->result();

        $arr['page'] = 'tahunajaran';

        $this->load->view('admin/v_header', $arr);
        $this->load->view('admin/tbl_periode/v_periode', $arr);
        $this->load->view('admin/v_footer');
    }

    function tambahPeriode()
    {
        $id_periode = $this->input->post('inputID');
        $cekPeriode = $this->m_tahunajaran->cekPeriode($id_periode);

        if($cekPeriode->num_rows() > 0)
        {
            $data['message'] = "<div class='alert alert-warning'>Kode sudah digunakan</div>";
            redirect('admin/tahunajaran');
        }
        else
        {                 
            $info = array(
                'id_periode'   => $this->input->post('inputID'),
                'semester'  => $this->input->post('inputSemester'),
                'tanggal' => $this->input->post('inputTanggal')
            );

            $data['message'] = "Data berhasil ditambahkan";
            $this->m_tahunajaran->simpanPeriode($info);
            redirect('admin/tahunajaran');
        }
    }

    function editPeriode()
    {
        $info = array(
            'id_periode'   => $this->input->post('id_periode'),
            'semester'  => $this->input->post('semester'),
            'tanggal'  => $this->input->post('tanggal')
        );

        $data['message'] = "Data berhasil diupdate";
        $this->m_tahunajaran->updatePeriode($info['id_periode'], $info['semester'], $info['tanggal']);
        redirect('admin/tahunajaran', $data);
    }

    function deletePeriode($id_periode)
    {
        $this->m_tahunajaran->deletePeriode($id_periode);
        redirect('admin/tahunajaran');
    }
}