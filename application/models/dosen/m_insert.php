<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_insert extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}

	public function insert_sap($semester,$periode,$nip,$id_mk,$materi,$tanggal_materi)
	{
		$this->db->trans_start();
		//insert into tabel periode
		$tbl_periode=array('semester' => $semester, 'tanggal' => $periode );
		$this->db->insert('tbl_periode',$tbl_periode);

		//menerima inputan id terkhir tbl periode
		$insert_id=$this->db->insert_id();

		//insert into tabel sap
		$sap=array('nip' => $nip,'id_mk' => $id_mk,'status' => 1, 'id_periode' => $insert_id );
		$this->db->insert('sap',$sap);

		//menerima inputan id terakhir tbl sap
		$insert_id=$this->db->insert_id();		

		//insert into tabel detail sap
		foreach ($materi as $key => $value) {
			$sap_detail=array('id_sap' => $insert_id , 
						  'materi' => $materi[$key], 
						  'nilai' => 0, 'id_mhs' => 1, 
						  'tanggal' => $tanggal_materi[$key], 
						  'validasi' => 0 
						);	

			$this->db->insert('sap_detail',$sap_detail);
		}
		$this->db->trans_complete();
		$this->session->set_flashdata('pesan', 'insert berhasil!');
	}

}

/* End of file  */
/* Location: ./application/models/ */