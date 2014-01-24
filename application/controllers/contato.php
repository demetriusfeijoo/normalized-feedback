<?php

class Contato extends CI_controller{

    public function __construct(){

        parent::__construct();

    }

    public function index(){

		$this->load->view('header');
		$this->load->view('topo');
		$this->load->view('contato');
		$this->load->view('footer');		

    }

	public function enviar_fale_conosco(){

		$status_envio = FALSE;

		if( $_SERVER['REQUEST_METHOD'] === 'POST' ){

			$this -> load -> library('form_validation');

			$this -> form_validation -> set_rules('nome', 'Nome', 'required|min_length[2]|xss_clean');
			$this -> form_validation -> set_rules('email', 'E-mail', 'required|valid_email|xss_clean');
			$this -> form_validation -> set_rules('assunto', 'Assunto', 'required|min_length[2]|xss_clean');
			$this -> form_validation -> set_rules('mensagem', 'Mensagem', 'required|min_length[2]|xss_clean');

			if( $this -> form_validation -> run() ){

				$nome = $this -> input -> post('nome', TRUE);
				$email = $this -> input -> post('email', TRUE);
				$assunto = $this -> input -> post('assunto', TRUE);
				$mensagem = $this -> input -> post('mensagem', TRUE);

				$this->load->library('email');

				$this->email->from($email, $nome);
				$this->email->to('demetrius.feijoo.91@gmail.com'); 

				$this->email->subject($assunto);
				$this->email->message($mensagem);	

				$status_envio = $this->email->send();

				if( $status_envio ){

					$this -> session -> set_flashdata('feedback', array('status'=>'sucesso'));

				}else{

					$this -> session -> set_flashdata('feedback', array('status'=>'erro'));

				}


			}else{

				$this -> session -> set_flashdata('validation_errors', validation_errors());

			}

			redirect('/contato');

		}else{

			show_404();

		}

	}
    
}

?>