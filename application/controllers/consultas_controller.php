<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consultas_controller extends CI_Controller {
	
	public function __construct(){
        parent::__construct();
        $this->load->model('consultas_model');
        $this->load->database('default');
    }

	public function get(){	
		$data['titulo'] = 'Consultas de codeniter...';
		$data['datos'] = $this->consultas_model->get_download_all();
		$this->load->view('consultas_view',$data);

	}

}
