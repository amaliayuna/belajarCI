<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class supplier_model extends CI_Model
{
  private $_table = "supplier";

  public $supplier_id;
  public $suplier_name;
  public $supplier_address;

  public function getAll()
  {
      return $this->db->get($this->_table)->result();
  }
}



 ?>
