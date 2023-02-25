<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Store_model extends CI_Model {

	public function getData(){
		$this->db->select('*');
		$this->db->from('stores');
		$this->db->join('users','stores.UserID=users.UserID');
		$query = $this->db->get();

		return $query->result_array();
	}

	public function getOneData($id){
		$this->db->select('*');
		$this->db->from('stores');
		$this->db->where('StoreID', $id);
		$this->db->join('users','stores.UserID=users.UserID');
		$query = $this->db->get();

		return $query->row_array();
	}

}
