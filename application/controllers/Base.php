<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Base extends CI_Controller {

	public function index(){	
		$this->load->view('template/header');
		$this->load->view('template/base');
		$this->load->view('template/footer');
	}

	public function download ($file_path = "cfdi.pdf"){
		//load helper
		$this->load->helper('download');
		$data['download_path'] = $file_path;
		$this->load->view('file',$data);
	}

}
