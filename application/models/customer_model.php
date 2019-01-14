<?php defined('BASEPATH') OR exit('No direct script access allowed');

class customer_model extends CI_Model
{
  private $_table = "customer";

  public $customer_id;
  public $name;
  public $addres;

  public function getAll()
  {
      return $this->db->get($this->_table)->result();
  }
}

 ?>
