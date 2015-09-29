<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consultas_model extends CI_Model {

	public function __construct(){
        parent::__construct();
    }

	public function get_download_all(){
        $query = $this->db->get('download');
        if ($query->num_rows()>0){
        	return $query->result();
        }
        
	}

}
