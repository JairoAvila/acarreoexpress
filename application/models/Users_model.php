<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function get($id = null)
    {
        if (!is_null($id)) {
            $query = $this->db->select('*')->from('contactenos')->where('id', $id)->get();
            if ($query->num_rows() === 1) {
                return $query->row_array();
            }

            return null;
        }

        $query = $this->db->select('*')->from('contactenos')->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }

        return null;
    }

    public function save($city)
    {
        //$this->db->set($this->_setUser($city))->insert('contactenos');
        $query="insert into contactenos(nombre, email, telefono, mensaje) values ('".$city['nombre']."','".$city['email']."','".$city['telefono']."','".$city['mensaje']."')";
        $this->db->query($query);

        if ($this->db->affected_rows() === 1) {
            return $this->db->insert_id();
        }

        return null;
    }

    private function _setUser($user)
    {
        return array(
            'nombre' => $user['nombre'],
            'email' => $user['email'],
            'telefono' => $user['telefono']
        );
    }

}

