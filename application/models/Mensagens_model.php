<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class Mensagens_model extends CI_Model {
/*
    public function __construct() {
      $this->load->database(); // se !autoload
      $this->load->model('membros_model');
    }   
*/
    public function insere_mensagens($dados = null) {

      if ($dados) {
        
        if ($dados['destinatario'] == 0) {
          
          $membros = $this->membros_model->get_membros();
          if (empty($membros)) {
            return false;
          }
          foreach ($membros as $membro) {
            $dados['destinatario'] = $membro['id'];
            $this->db->insert("mensagens", $dados);
          }

        } else {

          $membro = $this->membros_model->get_membros($dados['id']);
          if (empty($membro)) {        
            return false;
          }
          $this->db->insert("mensagens", $dados);

        }
        
        return true;

      } else {

        return false;

      }
    }

  }
?>
