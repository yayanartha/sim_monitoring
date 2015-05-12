<?php
class M_sap extends CI_Model 
{
    function semuaSap()
    {
    	$sql = "SELECT * FROM sap";
        return $this->db->query($sql);
    }

    function cekSap($kode)
    {
        $this->db->where("id_sap", $kode);
        $query = $this->db->get("sap");
        
        return $query;
    }

    function simpanSap($info)
    {
        $this->db->insert("sap", $info);
    }

    function updateSap($id_sap, $nip)
    {
        $sql = "UPDATE mk SET nama_matkul = ? WHERE id_mk = ?";
        $this->db->query($sql, array($nama_matkul, $id_mk));
    }

    function deleteMk($id_sap)
    {
        $this->db->where('id_sap', $id_sap);
        $this->db->delete('sap');
    }
}