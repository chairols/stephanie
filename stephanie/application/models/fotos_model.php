<?php

class Fotos_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }
    
    public function set($array) {
        $this->db->insert('fotos', $array);
        return $this->db->insert_id();
    }
    
    public function gets_where($array) {
        $query = $this->db->get_where('fotos', $array);
        return $query->result_array();
    }
    
    public function borrar($idfoto) {
        $this->db->delete('fotos', array('idfoto' => $idfoto));
    }
}
?>