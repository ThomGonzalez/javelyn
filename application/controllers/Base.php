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

	public function enviar(){
		//Cargamos la librería email
		$this->load->library('email');

		//Indicamos el protocolo a utilizar
		$config['protocol'] = 'smtp';
		//El servidor de correo que utilizaremos
		$config["smtp_host"] = 'smtp.gmail.com';
		//Nuestro usuario
		$config["smtp_user"] = 'thom.sgonzalez@gmail.com';
		//Nuestra contraseña
		$config["smtp_pass"] = 's4nt14g0';   
		//El puerto que utilizará el servidor smtp
		$config["smtp_port"] = '587';
		//El juego de caracteres a utilizar
		$config['charset'] = 'utf-8';
		//Permitimos que se puedan cortar palabras
		$config['wordwrap'] = TRUE;
		//El email debe ser valido 
		$config['validate'] = true;

		//Establecemos esta configuración
		$this->email->initialize($config);

		//Ponemos la dirección de correo que enviará el email y un nombre
		$this->email->from('thom.sgonzalez@gmail.com', 'ThomGonzalez');

		$this->email->to('thom.gonz4lez@gmail.com', 'ThomGonzalez');

		//Definimos el asunto del mensaje
		$this->email->subject($this->input->post("asunto"));

		//Definimos el mensaje a enviar
		$this->email->message(
			"Email: ".$this->input->post("email").
			"Mensaje: ".$this->input->post("mensaje")
		);

		//Enviamos el email y si se produce bien o mal que avise con una flasdata
		if($this->email->send()){
			$this->session->set_flashdata('envio', 'Email enviado correctamente');
		}else{
			$this->session->set_flashdata('envio', 'No se a enviado el email');
		}
		redirect(base_url("base"));
	}
}
