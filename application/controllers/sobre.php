<?php

class Sobre extends CI_controller{

    public function __construct(){

        parent::__construct();

    }

    public function index(){

		$this->load->view('header');
		$this->load->view('topo');
		$this->load->view('sobre');
		$this->load->view('footer');
		
		$this -> output -> cache(60*24); // Se for dinamico remover essa linha
		

    }

}

?>