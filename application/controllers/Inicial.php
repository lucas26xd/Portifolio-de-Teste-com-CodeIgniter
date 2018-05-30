<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicial extends CI_Controller {

  /**
   * Página inicial do sistema.
   *
   */
  public function __construct() {
    parent::__construct();
    $this->load->model('membros_model');
  }

  public function index($page = 'inicial') {
    $data['title'] = 'Página '.ucfirst($page);    
    $data['membros'] = $this->membros_model->get_membros();

    $this->load->view('templates/header', $data);
    $this->load->view('pages/'.$page, $data);
    $this->load->view('templates/footer');
  }
}
