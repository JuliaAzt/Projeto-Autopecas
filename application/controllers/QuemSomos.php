<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class QuemSomos extends CI_Controller {
        public function index( )
        {
            $this->load->view('template/html-header');
            $this->load->view('template/header');
            $this->load->view('QuemSomos');
           
        }
    }   
?>