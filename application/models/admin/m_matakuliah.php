<?php
class M_matakuliah extends CI_Model 
{
    function semuaMk()
    {
    	$sql = "SELECT * FROM mk";
        return $this->db->query($sql);
    }

    function cekMk($kode)
    {
        $this->db->where("id_mk", $kode);
        $query = $this->db->get("mk");
        
        return $query;
    }

    function simpanMk($info)
    {
        $this->db->insert("mk", $info);
    }

    function updateMk($id_mk, $nama_matkul)
    {
        $sql = "UPDATE mk SET nama_matkul = ? WHERE id_mk = ?";
        $this->db->query($sql, array($nama_matkul, $id_mk));
    }

    function deleteMk($id_mk)
    {
        $this->db->where('id_mk', $id_mk);
        $this->db->delete('mk');
    }
}