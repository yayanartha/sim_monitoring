<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Matakuliah extends CI_Controller 
{
    private $_mod_url;

    public function __construct() 
    {
        parent::__construct();
        $this->load->library('form_validation');

        // if (!$this->session->userdata('is_admin_login')) 
        //     redirect('admin/home');

        $this->load->model('mMatakuliah');
        $this->_mod_url = base_url().'admin/matakuliah';
    }

    public function index() 
    {
        $arr['page'] = 'matakuliah';
        $this->load->view('admin/vHeader', $arr);
        $this->load->view('admin/vMatakuliah', $arr);
        $this->load->view('admin/vFooter');
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