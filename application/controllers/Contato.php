<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contato extends CI_Controller {

  /**
   * Página de contato com os membros da equipe.
   *
   */
  public function __construct() {
    parent::__construct();
    $this->load->model('membros_model');
    $this->load->model('mensagens_model');
  }

  public function index($page = 'contato') {
    $data['title'] = ucfirst($page);
    $data['membros'] = $this->membros_model->get_membros();

    $this->load->view('templates/header', $data);
    $this->load->view('pages/'.$page, $data);
    $this->load->view('templates/footer');
  }

  public function send() {

    $dados = array(			
      'nome' => $this->input->post('nome'),
      'email' => $this->input->post('email'),
      'destinatario' => $this->input->post('destinatario'),
      'msg' => $this->input->post('msg')    
    );

    if ($this->mensagens_model->insere_mensagens($dados)) {
      redirect(base_url('contato/success'));
    } else {
      show_404();
    }    
  }

  public function success($page = 'contato') {
    $data['title'] = ucfirst($page);
   
    $this->load->view('templates/header', $data);
    $this->load->view('pages/success', $data);
    $this->load->view('templates/footer');
  }  

}