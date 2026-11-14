<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ekspedisi2422500073_model extends CI_Model {

    public function get_data() {
        return $this->db->get('ekspedisi2422500073');
    }

    public function insert_data($data) {
        return $this->db->insert('ekspedisi2422500073', $data);
    }

    public function get_by_id($id) {
        return $this->db->get_where('ekspedisi2422500073', array('id_ekspedisi2422500073' => $id))->row();
    }

    public function update_data($id, $data) {
        $this->db->where('id_ekspedisi2422500073', $id);
        return $this->db->update('ekspedisi2422500073', $data);
    }

    public function delete_data($id) {
        $this->db->where('id_ekspedisi2422500073', $id);
        return $this->db->delete('ekspedisi2422500073');
    }
}