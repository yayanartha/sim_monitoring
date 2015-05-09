<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_edit extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_select');
	}

	public function index()
	{
		$data_edit = array();

		$id_mk=$this->input->post('id_matkul');
		$periode=$this->input->post('periode');
		$semester=$this->input->post('semester');

		$result=$this->m_select->select_for_edit($id_mk,$periode,$semester);

		foreach ($result->result() as $key=>$value) {
			echo $value->materi;
			echo $value->tanggal;
		}
	}

}

/* End of file  */
/* Location: ./application/controllers/ */