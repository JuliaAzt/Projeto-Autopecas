<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index( )
	{
		
		//$this->load->view('template/html-header', $dados); //A pasta template contem o que sera usado em todas as paginas
		$this->load-> view ('template/html-header'); //carrega o arquivo home dentro da pasta view
		$this->load-> view ('template/header');
		$this->load-> view ('home');
		$this->load-> view ('template/footer'); 
	}
}
?>