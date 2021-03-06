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
    
    public function registro_post()
    {
        $this->load->library('doctrine');
        $this->load->library('encrypt');
        $request = file_get_contents('php://input');
        $pedido = json_decode($request,true);
        $em = $this->doctrine->em;
        $usuarioExistente = $em->getRepository("Entity\Usuarios")->findOneBy(array("email"=>$pedido['email']));
        if(!$usuarioExistente)
        {
            $usuario = new Entity\Usuarios;
            $usuario->setEmail($pedido['email']);
            $usuario->setPassword($this->encrypt->encode($pedido['password']));
            $usuario->setToken("null");
            $usuario->setDevice("null");
            $estado = $em->getRepository("Entity\Estados")->find(1);
            if($estado)
            {
                $usuario->setIdestado($estado);
            }
            $em->persist($usuario);
            $em->flush();
            $nuevo_usuario = $em->getRepository("Entity\Usuarios")->find($usuario->getId());
            if($nuevo_usuario)
            {
                $registro = new Entity\Registros;
                $registro->setNombres($pedido['nombres']);
                $registro->setApellidos($pedido['apellidos']);
                $registro->setIdentificacion($pedido['identificacion']);
                $registro->setDireccion($pedido['direccion']);
                $registro->setTelefono($pedido['telefono']);
                $registro->setCreatedAt(date_create(date("Y-m-d H:i:s")));
                $registro->setBilletera(0);
                $pais = $em->getRepository("Entity\Paises")->find($pedido['pais']);
                if($pais)
                {
                    $registro->setIdpais($pais);
                }
                $tipoidentificacion = $em->getRepository("Entity\Tipoidentificacion")->find($pedido['tipoidentificacion']);
                if($tipoidentificacion)
                {
                    $registro->setIdtipoidentificacion($tipoidentificacion);
                }
                $lugarexpedicion = $em->getRepository("Entity\Ciudades")->find($pedido['lugarexpedicion']);
                if($lugarexpedicion)
                {
                    $registro->setIdlugarexpedicion($lugarexpedicion);
                }
                $ciudad = $em->getRepository("Entity\Ciudades")->find($pedido['ciudad']);
                if($ciudad)
                {
                    $registro->setIdciudad($ciudad);
                }
                $estado = $em->getRepository("Entity\Estados")->find(1);
                if($estado)
                {
                    $registro->setIdestadoregistro($estado);
                }
                $rol = $em->getRepository("Entity\Roles")->find(1);
                if($rol)
                {
                    $registro->setIdrol($rol);
                }
                $registro->setIdusuario($nuevo_usuario);
                $em->persist($registro);
                $nuevo_usuario->setToken($this->encrypt->encode($nuevo_usuario->getId()));
                $em->flush();
                if($registro->getId() != "")
                {
                    $data=array("error"=>""); 
                }
                else
                {
                    $data=array("error"=>"Ocurrio un problema"); 
                }
            }
            else
            {
               $data=array("error"=>"Ocurrio un problema"); 
            }
        }
        else
        {
            $data=array("error"=>"Ocurrio un problema"); 
        }
        $this->response($data,200);
    }

    public function login_post()
    {
        $this->load->library('doctrine');
        $this->load->library('encrypt');
        $request = file_get_contents('php://input');
        $pedido = json_decode($request,true);
        $em = $this->doctrine->em;
        $usuarioExistente = $em->getRepository("Entity\Usuarios")->findOneBy(array("email"=>$pedido['email']));
        if($usuarioExistente)
        {
            $psd = $this->encrypt->decode($usuarioExistente->getPassword());
            if($psd == $pedido['password'])
            {
                $registro = $em->getRepository("Entity\Registros")->findOneBy(array('idusuario' => $usuarioExistente->getId()));
                if($registro)
                {
                    $data=array("error"=>"", "token"=>$usuarioExistente->getToken(), "rol"=>$registro->getIdrol()->getId());
                }
                else
                {
                    $data=array("error"=>"3");
                }
            }
            else
            {
                $data=array("error"=>"2");
            }
        }
        else
        {
            $data=array("error"=>"1"); 
        }
        $this->response($data,200);
    }

    public function forgotpassword_post()
    {
        $this->load->library('doctrine');

        $request = file_get_contents('php://input');
        $pedido = json_decode($request,true);
        $em = $this->doctrine->em;

        $config = array(
         'protocol' => 'smtp',
         'smtp_host' => 'smtp.googlemail.com',
         'smtp_user' => 'jairofavila@gmail.com', //Su Correo de Gmail Aqui
         'smtp_pass' => '201010050292010', // Su Password de Gmail aqui
         'smtp_port' => '465',
         'smtp_crypto' => 'ssl',
         'mailtype' => 'html',
         'wordwrap' => TRUE,
         'charset' => 'utf-8'
         );
         $this->load->library('email', $config);
         $this->email->set_newline("\r\n");
         $this->email->from('jairofavila@gmail.com');
         $this->email->subject('Asunto del correo');
         $this->email->message('Hola desde correo');
         $this->email->to('jairofavila@gmail.com');
         if($this->email->send(FALSE)){
             echo "enviado<br/>";
             echo $this->email->print_debugger(array('headers'));
         }else {
             echo "fallo <br/>";
             echo "error: ".$this->email->print_debugger(array('headers'));
         }

        $this->response("JAIRO",200);
    }

    public function perfilusuario_post()
    {
        $this->load->library('doctrine');
        $this->load->library('encrypt');
        $request = file_get_contents('php://input');
        $pedido = json_decode($request,true);
        $em = $this->doctrine->em;
        $usuario = $em->getRepository("Entity\Usuarios")->findOneBy(array("token"=>$pedido['token']));
        if($usuario)
        {
            $registro = $em->getRepository("Entity\Registros")->findOneBy(array('idusuario' => $usuario->getId()));
            if($registro)
            {
                $data=array("error"=>"","nombres"=>$registro->getNombres(), "apellidos"=>$registro->getApellidos(), "identificacion"=>$registro->getIdentificacion(), "direccion"=>$registro->getDireccion(), "path"=> $registro->getPathimage(), "idpais"=>$registro->getIdpais()->getId(), "idtipoidentificacion"=>$registro->getIdtipoidentificacion()->getId(), "idexpedicion"=>$registro->getIdlugarexpedicion()->getId(), "idciudad"=>$registro->getIdciudad()->getId());
            }
            else
            {
                $data=array("error"=>"2"); 
            }
        }
        else
        {
            $data=array("error"=>"1"); 
        }
        $this->response($data,200);
    }


}