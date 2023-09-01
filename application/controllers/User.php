<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->helper('url');
		$this->load->library('form_validation');//maneja formulario
		$this->load->model('user_model'); //crea un atributo
	}

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('register');
		$this->load->view('templates/footer');

	}

	public function newUser(){
		
		$username= $this->input->post('username', true);
		$email= $this->input->post('email', true);
		$password= $this->input->post('password', true);

		if(!empty($username)&& !empty($email)&& !empty($password)){
			$data=array( //estp vamos a pasar por parametro
				'user_name' => $username,
				'email' => $email,
				'password' => $password
			);

			if($this->user_model->saveUser($data)){
				echo "Usuario registrado";
			}else{
				echo "El usuario no se pudo registrar";
			}
		}


	}

	public function getUsers(){

		$data['users']=$this->user_model->getAllUsers();

		$this->load->view('templates/header');
		$this->load->view('users',$data);
		$this->load->view('templates/footer');
	}

}
?>