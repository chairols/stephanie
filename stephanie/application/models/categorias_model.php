<?php

class Categorias_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }
    
    public function gets() {
        $query = $this->db->query("SELECT *
                                    FROM
                                        categorias
                                    ORDER BY
                                        categoria");
        return $query->result_array();
    }
}
?>