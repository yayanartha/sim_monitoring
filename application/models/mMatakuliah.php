<?php
class MMatakuliah extends CI_Model 
{
    private $_table = 'tbl_matakuliah';

    function get_dataMatakuliah($offset, $limit, $q='')
    {
    	$sql = "SELECT * FROM tbl_matakuliah ORDER BY id_matakuliah ASC";
    	$ret['data'] = $this->db->query($sql)->num_rows();
    	return $ret;
    }
}