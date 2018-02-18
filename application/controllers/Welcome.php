<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->library('doctrine');
		$em = $this->doctrine->em;

		$paises = new Entity\Paises;
		$paises->setNombre('Colombia');

		/*$user = new Entity\User;
		$user->setUsername('wildlyinaccurate');();
		$user->setPassword('Passw0rd');
		$user->setEmail('wildlyinaccurate@gmail.com');
		$user->setGroup($group);*/

		// When you have set up your database, you can persist these entities:
		$em->persist($paises);
		$em->flush();



		//$rsvp = $em->getRepository("Entity\\UserGroup")->find(1);
		//$nombre = $rsvp->getName();

		print_r($paises->getId());

		/*$this->load->view('welcome_message', array(
			'group' => $group
		));*/
	}
}
