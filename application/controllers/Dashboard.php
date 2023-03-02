<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

  public function __construct(){

    parent:: __construct();

    $this->load->library('session');
    if (empty($this->session->userdata('Username'))) {
      redirect('user/login');
    }

    $this->load->model(array('store_model'));
    
  }

	public function index()
	{

    $data = array(
      'title' => 'Dashboard',
      'page' => 'pages/dashboard'
    );

		$this->load->view('theme/index', $data);
	}
}
