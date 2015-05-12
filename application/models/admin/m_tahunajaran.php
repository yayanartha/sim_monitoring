<?php
class M_tahunajaran extends CI_Model 
{
    function semuaPeriode()
    {
    	$sql = "SELECT * FROM tbl_periode";
        return $this->db->query($sql);
    }

    function cekPeriode($kode)
    {
        $this->db->where("id_periode", $kode);
        $query = $this->db->get("tbl_periode");
        
        return $query;
    }

    function simpanPeriode($info)
    {
        $this->db->insert("tbl_periode", $info);
    }

    function updatePeriode($id_periode, $semester, $tanggal)
    {
        $sql = "UPDATE tbl_periode SET semester = ?, tanggal = ? WHERE id_periode = ?";
        $this->db->query($sql, array($semester, $tanggal, $id_periode));
    }

    function deletePeriode($id_periode)
    {
        $this->db->where('id_periode', $id_periode);
        $this->db->delete('tbl_periode');
    }
}