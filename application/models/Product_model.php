<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model {

  public function getData(){
    $this->db->select('*');
    $this->db->from('products');
  
    $query = $this->db->get();

    return $query->result_array();
  }

  public function insertData($data)
  {
    return $this->db->insert('products', $data);
  }

  public function delete($id)
  {
    $this->db->delete('checkouts', array('ProductID' => $id));
    return $this->db->delete('products', array('ProductID' => $id));
  }

  public function getProductById($id)
  {   
      $response = array();

      $this->db->select('*');
      $this->db->where('ProductID', $id);
      $records = $this->db->get('products');
      $response = $records->result_array();
      return $response;
  }

  public function updateData($data)
  {
    return $this->db->update('products', $data, array('ProductID' => $data['ProductID']));
  }
}
