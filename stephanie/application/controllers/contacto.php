<?php

class Contacto extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
    
    public function index($idioma = null) {
        if($idioma == "es") {
            $this->load->view('contacto/spanish');
        } elseif($idioma == "en") {
            $this->load->view('contacto/english');
        }
    }
}

?>