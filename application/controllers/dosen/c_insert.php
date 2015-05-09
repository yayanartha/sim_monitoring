<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_insert extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_insert');
	}

	public function index()
	{
		$materi=array();
		$tanggal_materi=array();

		//menerima semua inputan untuk melakukan insert
		$id_login=$this->session->userdata('id');
		$id_matkul=$this->input->post('pilih_matkul');
		$periode_sap=$this->input->post('datesap');
		$semester=$this->input->post('semester');

		foreach ($this->input->post('materi') as $key => $value) {
			$materi[$key]=$value;
		}

		foreach ($this->input->post('datemateri') as $key => $value) {
			$tanggal_materi[$key]=$value;
		}

		//memanggil function model untuk insert
		$this->m_insert->insert_sap($semester,$periode_sap,$id_login,$id_matkul,$materi,$tanggal_materi);
		//kemabli ke halaman utama
		redirect(site_url('dosen/c_home'));

	}

}

/* End of file home_insert_control.php */
/* Location: ./application/controllers/home_insert_control.php */