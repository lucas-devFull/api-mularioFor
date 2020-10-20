<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends MY_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('usuario_model');
	}
	
    public function index(){
        $dados = $this->usuario_model->pegaUsuarios();
        echo json_encode($dados);
    }

    public function uusariosPega(){
        $dados = $this->usuario_model->pegaUsuarios();
        echo json_encode($dados);
    }
}
