<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class Mensagens_model extends CI_Model {

    public function insere_mensagens($dados = null) {

      if ($dados) {
        $this->db->insert("mensagens", $dados);
        return true;
      } else {
        return false;
      }
    }

  }
?>
