<?php
class M_sap extends CI_Model 
{
    function semuaSap()
    {
    	$sql = 
        "SELECT id_sap, a.nip, a.nama, b.id_mk, b.nama_matkul, status, c.id_periode, c.semester, c.tanggal
        FROM sap,
            (SELECT nip, nama FROM dosen) a,
            (SELECT id_mk, nama_matkul FROM mk) b,
            (SELECT id_periode, semester, tanggal FROM tbl_periode) c
        WHERE
            sap.nip = a.nip AND
            sap.id_mk = b.id_mk AND
            sap.id_periode = c.id_periode";

        return $this->db->query($sql);
    }

    function tampilSap($limit=array())
    {
        $sql = 
        "SELECT id_sap, a.nip, a.nama, b.id_mk, b.nama_matkul, status, c.id_periode, c.semester, c.tanggal
        FROM sap,
            (SELECT nip, nama FROM dosen) a,
            (SELECT id_mk, nama_matkul FROM mk) b,
            (SELECT id_periode, semester, tanggal FROM tbl_periode) c
        WHERE
            sap.nip = a.nip AND
            sap.id_mk = b.id_mk AND
            sap.id_periode = c.id_periode";

        if ($limit != NULL)
            $sql += " LIMIT (".$limit['perpage'].", ".$limit['offset'].")";

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

    function deleteSap($id_sap)
    {
        $this->db->where('id_sap', $id_sap);
        $this->db->delete('sap');
    }

    function namaDosen()
    {
        $sql = "SELECT * FROM dosen";
        return $this->db->query($sql);
    }

    function namaMk()
    {
        $sql = "SELECT * FROM mk";
        return $this->db->query($sql);
    }

    function periode()
    {
        $sql = "SELECT * FROM tbl_periode";
        return $this->db->query($sql);
    }
}