<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Store extends CI_Controller {

	public function __construct(){

		parent:: __construct();

		$this->load->model(array('store_model'));
	}

	public function index()
	{
		$store_model = $this->store_model->getData();

		$data = array(
			'title' => 'Store',
			'page' => 'pages/store/index',
			'stores' => $store_model
		);

		$this->load->view('/theme/index',$data);
	}

	public function storeview(){
		$id = $this->uri->segment(3);

		$data_store = $this->store_model->getOneData($id);

		$data = array(
			'store' => $data_store
		);

		$this->load->view('pages/store/storeview', $data);
	}
}
