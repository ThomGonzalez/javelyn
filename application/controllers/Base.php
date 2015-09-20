<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Base extends CI_Controller {

	public function index(){	
		$this->load->view('template/header');
		$this->load->view('template/base');
		$this->load->view('template/footer');
	}

	public function download ($file_path = "manual.pdf"){
		//load helper
		$this->load->helper('download');
		$data['download_path'] = $file_path;
		$this->load->view('file',$data);
	}

	public function enviar(){
		//Cargamos la librería email
		$this->load->library('email');

		$config['protocol'] = 'smtp';
		$config["smtp_host"] = 'ssl://smtp.googlemail.com';
		$config['smtp_user'] = 'thom.sgonzalez@gmail.com';
		$config["smtp_pass"] = 's4nt14g0';   
		$config["smtp_port"] = 465;
		$config['smtp_timeout'] = '7';
		$config['charset'] = 'utf-8';
		$config['newline'] = "\n";
		$config['mailtype'] = 'text'; 
		$config['wordwrap'] = TRUE;
		$config['validation'] = true;

		//Ponemos la dirección de correo que enviará el email y nombre
		$this->email->from($this->input->post("email"), $this->input->post("nombre"));
		$this->email->to('thom.sgonzalez@gmail.com');

		//Definimos el mensaje a enviar
		$this->email->subject($this->input->post("asunto"));
		$this->email->message(
			"Mensaje: ".$this->input->post("mensaje")." <br>"
		);

		if($this->email->send()){
			echo 'Correo enviado';
		}else{
			show_error($this->email->print_debugger());
		}

		#redirect(base_url("enviar"));
	}
}
