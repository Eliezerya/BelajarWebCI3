<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

  public function __construct(){

    parent:: __construct();
    $this->load->model(array('product_model'));
    $this->load->helper(array('form', 'url', 'date'));
		$this->load->library('form_validation');
  }

	public function index()
	{

    $product = $this->product_model->getData();

    $data = array(
      'title' => 'Product',
      'page' => 'pages/product/index',
      'product' => $product
    );

		$this->load->view('theme/index', $data);
	}

  public function addProductView()
  {
    $data['page'] = 'pages/product/addProduct';
    $data['title'] = 'Tambah Produk';
    $this->load->view('theme/index', $data);
  }

  public function addProduct()
  {
    $this->form_validation->set_rules('product_name', 'Product', 'required');
		$this->form_validation->set_rules('category', 'Category', 'required');
		$this->form_validation->set_rules('price', 'Price', 'required');

    $format = "%Y-%m-%d %h:%m:%s";
    $ProductName   = $this->input->post('product_name'); // please read the below note
    $Category      = $this->input->post('category');
    $Price         = $this->input->post('price');
    $CreatedAt     = mdate($format);
    $UpdatedAt     = mdate($format);

		if ($this->form_validation->run() == FALSE) {
        $this->addProductView();
    }
		else {
      $data = array(
        'ProductName' => $ProductName,
        'StoreID' => 1,
        'Category' => $Category,
        'Price' => $Price,
        'CreatedAt' => $CreatedAt,
        'UpdatedAt' => $UpdatedAt
      );
      if ($this->product_model->insertData($data)) {
        redirect('Product/index');
      }
    }
  }

  public function delete()
  {
    $id = $this->input->get('id');
    if ($this->product_model->delete($id)) {
      redirect('Product/index');
    }
  }

  public function editProduct()
  {
    $id = $this->input->post('ProductID');
		$data = $this->product_model->getProductById($id);

    echo json_encode($data);
  }

  public function edit() {
    $value = array(
      'ProductID' => $this->input->post('ProductID'),
      'ProductName' => $this->input->post('ProductName'),
      'Category' => $this->input->post('Category'),
      'Price' => $this->input->post('Price')
    );

		if($this->product_model->updateData($value)) {
			redirect('product/index');
		}
	}
}
