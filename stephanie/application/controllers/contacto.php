<?php

class Contacto extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library(array(
            'form_validation',
            'email'
        ));
        $this->load->helper(array(
            'url'
        ));
    }
    
    public function index($idioma = null) {
        
        $this->form_validation->set_rules('nombre', 'Nombre', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('consulta', 'Consulta', 'required');
        
        if($this->form_validation->run() == FALSE) {
            
        } else {
            $this->email->from($this->input->post('email'), $this->input->post('nombre'));
            $this->email->to('info@stephaniesperies.com');
            $this->email->subject('Consulta desde la Web');
            $this->email->message($this->input->post('consulta'));
            
            if($this->email->send()) {
                redirect('/contacto/gracias/'.$idioma, 'refresh');
            }
        }
        
        if($idioma == "es") {
            $this->load->view('contacto/spanish');
        } elseif($idioma == "en") {
            $this->load->view('contacto/english');
        }
    }
    
    public function gracias($idioma) {
        if($idioma == "es") {
            $this->load->view('contacto/gracias_spanish');
        } elseif ($idioma == "en") {
            $this->load->view('contacto/gracias_english');
        }
    }
}

?>