<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . "/libraries/REST_Controller.php";

class Registroapi extends REST_Controller {

    public function __construct()
    {
        parent::__construct();
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
    }
    
    public function index_post()
    {
        $json = file_get_contents('php://input');

        print_r($json."OK");
    }

    public function nuevoPais_post()
    {
        $this->load->library('doctrine');
        $request = file_get_contents('php://input');
        $pedido = json_decode($request,true);
        $em = $this->doctrine->em;
        $estado = new Entity\Estados;
        $tipoestado = $em->getRepository("Entity\Tipoestados")->find(1);
        if($tipoestado)
        {
            $estado->setIdtipoestado($tipoestado);
            $estado->setEstado($pedido['estado']);
            $em->persist($estado);
            $em->flush();
            $data = array("error"=>"", "Pais"=>$estado->getId());
        }
        else
        {
            $data = array("error"=>"Se ha producido un error");
        }
        $this->response($data,200);
    }


}