<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Sap extends CI_Controller 
{
    function __construct() 
    {
        parent::__construct();
        $this->load->library('form_validation');

        $this->load->model('admin/m_sap');
    }

    function index($offset = 0) 
    {
        $perpage = 1;

        $config = array(
        'total_rows' => count($this->m_sap->semuaSap()->result()),
        'per_page' => $perpage
        );

        $this->pagination->initialize($config);
        $limit['perpage'] = $perpage;
        $limit['offset'] = $offset;

        $arr['sap'] = $this->m_sap->tampilSap($limit)->result();

        $arr['namaDosen'] = $this->m_sap->namaDosen()->result();
        $arr['namaMk'] = $this->m_sap->namaMk()->result();
        $arr['periode'] = $this->m_sap->periode()->result();

        $arr['page'] = 'sap';

        $this->load->view('admin/v_header', $arr);
        $this->load->view('admin/sap/v_sap', $arr);
        $this->load->view('admin/v_footer');
    }

    function tambahSap()
    {
        $id_sap = $this->input->post('inputID');
        $cekSap = $this->m_sap->cekSap($id_sap);

        if($cekSap->num_rows() > 0)
        {
            $data['message'] = "<div class='alert alert-warning'>Kode sudah digunakan</div>";
            redirect('admin/sap');
        }
        else
        {                 
            $info = array(
                'id_sap'   => $this->input->post('inputID'),
                'nip'  => $this->input->post('inputDosen'),
                'id_mk'  => $this->input->post('inputMatakuliah'),
                'status'  => $this->input->post('inputStatus'),
                'id_periode'  => $this->input->post('inputPeriode')
            );

            $data['message'] = "Data berhasil ditambahkan";
            $this->m_sap->simpanSap($info);
            redirect('admin/sap');
        }
    }

    function editSap()
    {
        $info = array(
            'id_sap'   => $this->input->post('inputID'),
            'nip'  => $this->input->post('inputNipDosen'),
            'id_mk'  => $this->input->post('inputKodeMk'),
            'status'  => $this->input->post('status'),
            'id_periode'  => $this->input->post('id_periode')
        );

        $data['message'] = "Data berhasil diupdate";
        $this->m_sap->updateSap($info['is_sap'], $info['nip'], $info['id_mk'], $info['status'], $info['id_periode']);
        redirect('admin/sap', $data);
    }

    function deleteSap($id_sap)
    {
        $this->m_sap->deleteSap($id_sap);
        redirect('admin/sap');
    }

    function get_dataMatakuliah()
    {
        $limit  = $this->config->item('limit');
        $offset = $this->uri->segment(4, 0);
        $q      = isset($_POST['q']) ? $_POST['q'] : '';
        $data   = $this->mMatakuliah->get_dataMatakuliah($offset, $limit, $q);
        $rows   = $paging = '';
        $total  = $data['total'];

        if ($data['data'])
        {
            $i = $offset + 1;
            $j = 1;

            foreach($data['data'] as $r)
            {
                $rows .= '<tr>';

                $rows .= '<td>'. $i .'</td>';
                $rows .= '<td>'. $r->id_matkul .'</td>';
                $rows .= '<td>'. $r->nama_matkul .'</td>';
                $rows .= '<td>'. $r->sks .'</td>';
                $rows .= '<td align="center">';
                    $rows .= '<a type="button" class="btn btn-warning btn-block" href="'.$this->_mod_url.'/editMatakuliah/'.$r->id_matkul.'">
                                <i class="fa fa-pencil"></i>
                            </a>';
                    $rows .= '<a type="button" class="btn btn-danger btn-block" href="'.$this->_mod_url.'/deleteMatakuliah/'.$r->id_matkul.'">
                                <i class="fa fa-trash"></i>
                            </a>';
                $rows .= '</td>';

                $rows .= '</tr>';

                ++$i;
                ++$j;
            }

            $paging .= '<li><span class="page-info">Menampilkan '.($j - 1).' dari '.$total.' Matakuliah</span></li>';
            $paging .= $this->_paging($total, $limit);
        }
        else
        {
            $rows .= '<tr>';
            $rows .= '<td colspan="5">Tidak ada data</td>';
            $rows .= '</tr>';
        }

        echo json_encode(array('rows' => $rows, 'total' => $total, 'paging' => $paging));
    }

    function _paging($total, $limit)
    {
        $config = array(
                
            'base_url'  => $this->_mod_url.'/get_dataMatakuliah/',
            'total_rows'=> $total, 
            'per_page'  => $limit,
            'uri_segment'=> 4
        
        );

        $this->pagination->initialize($config); 

        return $this->pagination->create_links();
    }
}