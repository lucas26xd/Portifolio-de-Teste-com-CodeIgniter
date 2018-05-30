<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class Membros_model extends CI_Model {

    public function __construct() {
      $this->load->database(); // se !autoload
    }

    public function get_membros($id = null) {
      if ($id === null) {
        $query = $this->db->get('membros');
        return $query->result_array();
      }
      $query = $this->db->get_where('membros', array('id' => $id));
      return $query->row_array();
    }

  }
?>
