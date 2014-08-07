<?php

class Prueba extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {

        $config['image_library'] = 'gd2';
        $config['source_image'] = './upload/foto2.JPG';
        $config['create_thumb'] = TRUE;
        $config['maintain_ratio'] = TRUE;
        $config['width'] = 150;
        $config['height'] = 150;
        $this->load->library('image_lib', $config);
        if(!$this->image_lib->resize()) {
            echo $this->image_lib->display_errors('<p>', '</p>');
        }
    }
}
?>