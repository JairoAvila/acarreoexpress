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
        /*$user = new Entity\User;
        $user->setUsername('wildlyinaccurate');
        $user->setPassword('Passw0rd');
        $user->setEmail('wildlyinaccurate@gmail.com');
        $user->setGroup($group);*/

        // When you have set up your database, you can persist these entities:
        //$em->persist($paises);
        //$em->flush();
        $rsvp = $em->getRepository("Entity\Estados")->find(1);
        $data = array("error"=>"", "Pais"=>$rsvp->getIdtipoestado()->getTipoestado());
        $this->response($data,200);
    }


}