<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class Membros_model extends CI_Model {
    public function get_membros() {
      $this->db->order_by('nome', 'ASC');
      $query = $this->db->get('membros');
      return $query->result_array();
    }
  }
?>
