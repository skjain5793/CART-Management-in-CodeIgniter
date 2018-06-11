<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');		
		$this->load->library('cart');
	}
	public function index()
	{
		$this->load->view('products/index.php');
	}
	public function view_cart()
	{
		//echo "hlo";
		$this->load->view('products/view_cart');
	}
	function add_to_cart()
	{
		//print_r($_POST);
		$data = $_POST;
		$this->cart->insert($data);
		$this->view_cart();
		//redirect("Products/view_cart");
	}
	function update_cart()
	{
		//print_r($_POST);
		$data  = $_POST;
		$this->cart->update($data);
		$this->view_cart();
	}
	function remove_cart_item($rowid)
	{
		//echo $rowid;
		$this->cart->remove($rowid);
		$this->load->view('products/view_cart');
	}
}
