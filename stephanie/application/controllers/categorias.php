<?php

class Categorias extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library(array(
            'session',
            'r_session',
            'form_validation',
            'uri'
        ));
        $this->load->helper(array(
            'url'
        ));
        $this->load->model(array(
            'insumos_model',
            'log_model'
        ));
    }
    
    public function index() {
        $session = $this->session->all_userdata();
        $this->r_session->check($session);
        $data['session'] = $session;
        $data['segmento'] = $this->uri->segment(1);
        
        $data['insumos'] = $this->insumos_model->gets();
        
        $this->load->view('layout/header_datatable', $data);
        $this->load->view('layout/menu');
        $this->load->view('insumos/index');
        $this->load->view('layout/footer_datatable');
    }
    
     public function agregar() {
        $session = $this->session->all_userdata();
        $this->r_session->check($session);
        
        $data['session'] = $session;
        $data['segmento'] = $this->uri->segment(1);
        $data['alerta'] = '';  // Se utiliza si existe el insumo repetido
        
        $this->form_validation->set_rules('insumo', 'Insumo', 'required');
        
        if($this->form_validation->run() == FALSE) {
            
        } else {
            $datos = array(
                'insumo' => $this->input->post('insumo')
            );
            $resultado = $this->insumos_model->get_where($datos);
                    
            if(count($resultado) == 0) {
                $datos = array(
                    'insumo' => $this->input->post('insumo')
                );

               $id = $this->insumos_model->set($datos); 

               $log = array(
                   'tabla' => 'insumos',
                   'idtabla' => $id,
                   'texto' => 'Se agregó el insumo '.$this->input->post('insumo'),
                   'tipo' => 'add',
                   'idusuario' => $session['SID']
               );
               $this->log_model->set($log);
               
               redirect('/insumos/', 'refresh');
            } else {
                $data['alerta'] = '<div class="alert alert-danger">El insumo ya existe</div>';
            }
        }
        
        $this->load->view('layout/header_form', $data);
        $this->load->view('layout/menu');
        $this->load->view('insumos/agregar');
        $this->load->view('layout/footer_form');
    }
}

?>