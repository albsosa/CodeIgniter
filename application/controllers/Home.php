<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	//Estas lineas de abajo son para que pueda jalar el helper o funciones sueltas 
	public function __CONSTRUCT(){
		parent::__CONSTRUCT();
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('home/index');
		$this->load->view('footer');
	}
}
