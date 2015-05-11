<?php
class M_user extends CI_Model 
{
    private $tbl_user = 'tbl_user';
    private $tbl_dosen = 'dosen';
    private $tbl_mhs = 'mhs';

    function semuaDosen()
    {
        $sql = "SELECT * FROM dosen";
        return $this->db->query($sql);
    }
    function semuaMahasiswa()
    {
        $sql = "SELECT * FROM mhs";
        return $this->db->query($sql);
    }
    function semuaAdmin()
    {
        $sql = "SELECT * FROM user WHERE level = 3";
        return $this->db->query($sql);
    }

    function jumlahDosen()
    {
        $sql = $sql = "SELECT * FROM dosen";
        return $this->db->query($sql)->num_rows();
    }

    function jumlahMahasiswa()
    {
        $sql = $sql = "SELECT * FROM mhs";
        return $this->db->query($sql)->num_rows();
    }

    function jumlahAdmin()
    {
        $sql = $sql = "SELECT * FROM user WHERE level = 3";
        return $this->db->query($sql)->num_rows();
    }

    function cekDosen($kode)
    {
        $this->db->where("nip", $kode);
        $query = $this->db->get("dosen");
        
        return $query;
    }

    function cekMahasiswa($kode)
    {
        $this->db->where("nim", $kode);
        $query = $this->db->get("mhs");
        
        return $query;
    }

    function cekAdmin($kode)
    {
        $this->db->where("id", $kode);
        $query = $this->db->get("user");
        
        return $query;
    }

    function simpanDosen($info)
    {
        $this->db->insert("dosen", $info);
    }

    function updateDosen($nip, $nama)
    {
        $sql = "UPDATE dosen SET nama = ? WHERE nip = ?";
        $this->db->query($sql, array($nama, $nip));
    }

    function deleteDosen($nip)
    {
        $this->db->where('nip', $nip);
        $this->db->delete('dosen');
    }

    function simpanMahasiswa($info)
    {
        $this->db->insert("mhs", $info);
    }

    function updateMahasiswa($nim, $nama)
    {
        $sql = "UPDATE mhs SET nama = ? WHERE nim = ?";
        $this->db->query($sql, array($nama, $nim));
    }

    function deleteMahasiswa($nim)
    {
        $this->db->where('nim', $nim);
        $this->db->delete('mhs');
    }

    function simpanAdmin($info)
    {
        $this->db->insert("user", $info);
    }

    function updateAdmin($id, $username)
    {
        $sql = "UPDATE user SET username = ? WHERE id = ?";
        $this->db->query($sql, array($username, $id));
    }

    function deleteAdmin($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user');
    }
}