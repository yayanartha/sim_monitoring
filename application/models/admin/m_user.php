<?php
class M_user extends CI_Model 
{
    private $tbl_user = 'tbl_user';
    private $tbl_dosen = 'dosen';
    private $tbl_mhs = 'mhs';

    function semuaDosen()
    {
        $sql = "SELECT * FROM dosen";
        // if(empty($order_column) || empty($order_type))
        //     $sql .= " ORDER BY "+$this->primary;
        // else
        //     $sql .= " ORDER BY "+$order_column+" "+$order_type;

        return $this->db->query($sql);
    }
    function semuaMahasiswa($limit=10, $offset=0, $order_column='', $order_type='asc')
    {
        $sql = "SELECT * FROM mhs";
        // if(empty($order_column) || empty($order_type))
        //     $sql .= " ORDER BY "+$this->primary;
        // else
        //     $sql .= " ORDER BY "+$order_column+" "+$order_type;

        return $this->db->query($sql);
    }
    function semuaAdmin($limit=10, $offset=0, $order_column='', $order_type='asc')
    {
        $sql = "SELECT * FROM user WHERE level = 3";
        // if(empty($order_column) || empty($order_type))
        //     $sql .= " ORDER BY "+$this->primary;
        // else
        //     $sql .= " ORDER BY "+$order_column+" "+$order_type;

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
}