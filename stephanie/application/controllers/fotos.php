<?php

class Fotos extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library(array(
            'form_validation',
            'session',
            'r_session'
        ));
        $this->load->model(array(
            'categorias_model',
            'fotos_model'
        ));
        $this->load->helper(array(
            'url'
        ));
    }
    
    
    public function agregar() {
        $this->r_session->check($this->session->all_userdata());
        
        $this->form_validation->set_rules('categoria', 'Categoria', 'required');
        
        if($this->form_validation->run() == FALSE) {
            
        } else {
            $config['upload_path'] = './upload/';
            $config['allowed_types'] = 'gif|jpg|png';
            
            $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload('foto'))
            {
                $data['error'] = array('error' => $this->upload->display_errors());
            }
            else
            {
                $data = array('upload_data' => $this->upload->data());
                
                //  Comienzo de thumb
                $config = array();
                $config['image_library'] = 'gd2';
                $config['source_image'] = './upload/'.$data['upload_data']['file_name'];
                $config['new_image'] = './upload/thumb/'.$data['upload_data']['file_name'];
                $config['maintain_ratio'] = TRUE;
                $config['width'] = 150;
                $config['height'] = 150;
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                // Finalización de thumb
                
                // Comienzo de grabado de datos
                $datos = array(
                    'foto' => $data['upload_data']['file_name'],
                    'idcategoria' => $this->input->post('categoria')
                );
                $id = $this->fotos_model->set($datos);
                if($id > 0) {
                    $data['success'] = '<p>La foto se cargó correctamente</p>';
                }
                // Finalizacion de grabado de datos
                
            }
        }
        
        $data['categorias'] = $this->categorias_model->gets();
        
        $this->load->view('layout/header', $data);
        $this->load->view('layout/menu');
        $this->load->view('fotos/agregar');
        $this->load->view('layout/footer');
    }
    
    public function galerias($idcategoria = null) {
        $this->r_session->check($this->session->all_userdata());
        
        $categoria = $this->input->post('categoria');
        if(is_numeric($categoria)) {
            redirect('/fotos/galerias/'.$categoria.'/', 'refresh');
        }
        
        $data['categorias'] = $this->categorias_model->gets();
        
        if($idcategoria != null) {
            $data['fotos'] = $this->fotos_model->gets_where(array('idcategoria' => $idcategoria));
        } else {
            $data['fotos'] = array();
        }
        
        foreach($data['categorias'] as $categoria) {
            if($categoria['idcategoria'] == $idcategoria) {
                $data['cat'] = $categoria['categoria'];
            }
        }
        $data['idcategoria'] = $idcategoria;
        //var_dump($data);
        
        $this->load->view('layout/header', $data);
        $this->load->view('layout/menu');
        $this->load->view('fotos/galerias');
        $this->load->view('layout/footer');
    }
    
    public function borrar($idfoto, $idcategoria) {
        $this->fotos_model->borrar($idfoto);
        redirect('/fotos/galerias/'.$idcategoria.'/', 'refresh');
    }
}
?>