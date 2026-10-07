<?php 
 
defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class produk_kategori_model extends CI_Model 
{ 
    private $_table = "kategori"; 
 
    public function get_all() 
    { 
        $query = $this->db->get($this->_table); 
 
        return $query->result_array(); 
    }

    public function get_by_id($id)
    {
        $query = $this->db->get_where($this->_table, [
            'id_kategori' => $id
        ]);

        return $query->row_array();
    }
 
    public function tambah($data) 
    { 
        $this->db->insert($this->_table, $data); 
        #untuk check apakah berhasil atau tidak input data 
        return ($this->db->affected_rows() != 1) ? false : true; 
    } 
 
    public function ubah($data, $id) 
    { 
        $this->db->where('id_kategori', $id); 
        $this->db->update($this->_table, $data); 
        return ($this->db->affected_rows() != 1) ? false : true; 
    }

    public function hapus($id)
    {
        $this->db->where('id_kategori', $id);
        $this->db->delete($this->_table);

        return ($this->db->affected_rows() != 1) ? false : true;
    }
}