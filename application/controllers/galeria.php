<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeria extends CI_Controller { 
	public function index( )
	{
		$this->load-> view ('template/html-header'); //carrega o arquivo home dentro da pasta view
		$this->load-> view ('template/header');
		$this->load-> view ('home');
		$this->load-> view ('template/footer'); 
	}
}
?>