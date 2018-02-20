<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . "/libraries/REST_Controller.php";

class Consultaapi extends REST_Controller {

    public function __construct()
    {
        parent::__construct();
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
    }
    
    public function pais_post()
    {
        $this->load->library('doctrine');
        $em = $this->doctrine->em;
        $pais = $em->getRepository("Entity\Paises")->findAll();
        if($pais)
        {
            $i = 0;
            foreach ($pais as $paises) {
                $arreglo[$i] = array("id"=>$paises->getId(), "nombre"=>$paises->getNombre());
                $i++;
            }
            $data = array("error"=>"", "paises"=>$arreglo);
        }
        else
        {
            $data = array("error"=>"Se ha producido un error");
        }
        $this->response($data,200);
    }

    public function tipoidentificacion_post()
    {
        $this->load->library('doctrine');
        $em = $this->doctrine->em;
        $tipo = $em->getRepository("Entity\Tipoidentificacion")->findAll();
        if($tipo)
        {
            $i = 0;
            foreach ($tipo as $tipos) {
                $arreglo[$i] = array("id"=>$tipos->getId(), "tipo"=>$tipos->getTipo());
                $i++;
            }
            $data = array("error"=>"", "tipo"=>$arreglo);
        }
        else
        {
            $data = array("error"=>"Se ha producido un error");
        }
        $this->response($data,200);
    }

    public function ciudad_post()
    {
        $this->load->library('doctrine');
        $em = $this->doctrine->em;
        $ciudad = $em->getRepository("Entity\Ciudades")->findAll();
        if($ciudad)
        {
            $i = 0;
            foreach ($ciudad as $ciudades) {
                $arreglo[$i] = array("id"=>$ciudades->getId(), "ciudad"=>$ciudades->getCiudad());
                $i++;
            }
            $data = array("error"=>"", "ciudad"=>$arreglo);
        }
        else
        {
            $data = array("error"=>"Se ha producido un error");
        }
        $this->response($data,200);
    }

    public function rol_post()
    {
        $this->load->library('doctrine');
        $em = $this->doctrine->em;
        $rol = $em->getRepository("Entity\Roles")->findAll();
        if($rol)
        {
            $i = 0;
            foreach ($rol as $roles) {
                $arreglo[$i] = array("id"=>$roles->getId(), "rol"=>$roles->getRol());
                $i++;
            }
            $data = array("error"=>"", "rol"=>$arreglo);
        }
        else
        {
            $data = array("error"=>"Se ha producido un error");
        }
        $this->response($data,200);
    }


}