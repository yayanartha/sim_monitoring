<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_select extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}

	public function select_for_edit($id_mk,$periode,$semester)
	{
		$this->db->select('*');
		$this->db->from('sap_detail');
		$this->db->join('sap','sap_detail.id_sap=sap.id_sap','left');
		$this->db->join('tbl_periode','sap.id_periode=tbl_periode.id_periode','left');
		$this->db->where('sap.id_mk',$id_mk);
		$this->db->where('tbl_periode.tanggal',$periode);
		$this->db->where('tbl_periode.semester',$semester);

		return $this->db->get();
	}

}

/* End of file select_model.php */
/* Location: ./application/models/select_model.php */