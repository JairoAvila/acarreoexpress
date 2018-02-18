<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . "/libraries/REST_Controller.php";

class Users extends REST_Controller {

    public function __construct()
    {
        parent::__construct();
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
        $this->load->model('users_model');
    }
    
    public function index_get()
    {
        $cities = $this->users_model->get();

        if(!is_null($cities))
        {
            $this->response(array('error'=>'','response'=>$cities),200);
        }
        else
        {
            $this->response(array('error'=>"No hay registros"),400);
        }
    }

    public function find_get($id)
    {
        $json= '{"nombre":"Jairo","telefono":"768758585","email":"jairo@mail.com"}';
        $salida = json_decode($json,true);
        echo $salida['email'];
    }

    public function index_post()
    {
        $json_request_body = file_get_contents('php://input');
        if (!$json_request_body) {
            $this->response(array('error', 'Algo se ha roto en el servidor...'), 400);
        }
        $json = json_decode($json_request_body,true);

        $id = $this->users_model->save($json);

        if (!is_null($id)) {
            $this->response(array('error'=>'','response'=>$id),200);
        } else {
            $this->response(array('error', 'Algo se ha roto en el servidor...'), 400);
        }
    }

    public function index_put()
    {

    }

    public function index_delete($id)
    {

    }
}