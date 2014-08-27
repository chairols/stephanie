<?php

class Galeria extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model(array(
            'fotos_model'
        ));
    }
    
    public function index($idioma = null) {
        $this->load->library(array(
            'uri'
        ));
        $data['segmento'] = $this->uri->segment(1);
        
        $data['fotos'] = $this->fotos_model->gets_where(array('idcategoria' => '1'));
        
        if($idioma == "es") {
            $this->load->view('slides/spanish', $data);
        } elseif($idioma == "en") {
            $this->load->view('slides/english', $data);
        }
        
    }
}

?>