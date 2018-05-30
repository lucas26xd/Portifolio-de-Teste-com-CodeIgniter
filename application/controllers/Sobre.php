<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sobre extends CI_Controller {

  /**
   * Página sobre os membros da equipe.
   *
   */
  public function __construct() {
    parent::__construct();
    $this->load->model('membros_model');
  }

  public function index() {
    redirect(base_url());
  }

  public function view($id = null) {
    if ($id === null) {
      show_404();

    } else {
      $query = $this->membros_model->get_membros($id);

      if (empty($query)) {        
        show_404();
      }
      
      $data = array (
        'title' => 'Sobre',
        'membros' => $this->membros_model->get_membros(),
        'membro' => $this->membros_model->get_membros($id)
      );

      $this->load->view('templates/header', $data);
      $this->load->view('pages/sobre', $data);
      $this->load->view('templates/footer');
    }
  }

}
