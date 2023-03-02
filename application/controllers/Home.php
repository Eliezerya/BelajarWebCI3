<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @property $checkout_model
 * @property $uri
 */
class Home extends CI_Controller
{

	public function __construct()
	{
		parent:: __construct();
		$this->load->library(array('form_validation','session'));
		if (empty($this->session->userdata('Username'))) {
			redirect('user/login');
		}
		$this->load->model(array('product_model', 'checkout_model'));

		$this->load->helper(array('form', 'url', 'date'));
	}

	public function index()
	{

		$products = $this->product_model->getData();

		$data = array(
			'title' => "Home",
			"page" => 'pages/landing/product',
			'products' => $products
		);


		$this->load->view('theme/landing', $data);
	}

	public function viewDetail()
	{

		$id = $this->uri->segment(3);

		$data_product = $this->product_model->getProductById($id);

		$data = array(
			'title' => "Checkout",
			"page" => 'pages/landing/checkout',
			'product' => $data_product
		);

		$this->load->view('theme/landing', $data);
	}

	public function checkout()
	{

		if (empty($this->session->userdata('Username')) && $this->session->userdata('IsAdmin') == 0){
			redirect('user/login');
		}

		$config = array(
			'upload_path' => './files/',
			'allowed_types' => 'jpeg|jpg|png|gift|PNG',
			'max_size' => 5000,
			'file_name' => date('YmdHis').$_FILES["image"]['name']
		);


		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('image')) {
			$id = $this->uri->segment(3);
			redirect('Home/viewDetail/'.$id);
		} else {
			$id = $this->uri->segment(3);


			$data = array(
				'ProductID' => $id,
				'UserID' => $this->session->userdata['UserID'],
				'CreatedAt' => date('Y-m-d H:i:s'),
				'Status' => 0,
				'image' => $config['file_name']
			);

			if ($this->checkout_model->insert($data)) {

				$data1 = array(
					'title' => "Success",
					'page' => 'pages/landing/success'
				);

				$this->load->view('theme/landing', $data1);
			}
		}
	}
}
