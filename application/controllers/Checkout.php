<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {

    public function __construct(){

        parent:: __construct();
        
        $this->load->library('session');
        if (empty($this->session->userdata('Username'))) {
            redirect('user/login');
        }

        $this->load->model(array('checkout_model'));
        $this->load->helper(array('form', 'url', 'date'));
        $this->load->library('form_validation');
    }

	public function index()
	{

    $data = array(
      'title' => 'Checkout',
      'page' => 'pages/checkout/index',
      'checkout' => $this->checkout_model->getCheckout(1)
    );

		$this->load->view('theme/index', $data);
	}

    public function confirm()
	{
		$CheckoutID = $this->input->get('id');
		$Status = $this->input->get('Status');
		if ($this->checkout_model->confirmPayment($CheckoutID, $Status)) {
			redirect('checkout/index');
		}
	}

    public function generatePDF()
    {
		$data['checkout'] = $this->checkout_model->getCheckout($this->session->userdata('UserID'));
		$this->load->library('pdf');
		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "laporan-pembelian.pdf";
		$this->pdf->load_view('pages/pdf/laporan_pembelian', $data);
	}
}
