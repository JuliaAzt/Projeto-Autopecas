<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class NossaFilosofia extends CI_Controller {
        public function index( )
        {
            $this->load->view('template/html-header');
            $this->load->view('template/header');
            $this->load->view('NossaFilosofia');
            $this->load-> view ('template/footer'); //carrega o arquivo home dentro da pasta view
           
        }
    }   
?>