<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

  /**
   * Página Principal do sistema Pizzaria Delícia.
   *
   */
  public function index($page = 'principal'){
      $data['title'] = ucfirst($page);
      $this->load->model('membros_model');
      $data['membros'] = $this->membros_model->get_membros();
      $this->load->view('templates/header', $data);
      $this->load->view('pages/'.$page, $data);
      $this->load->view('templates/footer');
  }
}
