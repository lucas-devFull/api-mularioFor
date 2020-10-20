<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model{
    public function pegaUsuarios()
    {
        return $this->db->select("*")->get("usuario")->result_array();
    }
}