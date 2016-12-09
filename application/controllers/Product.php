<?php  

class Product extends CI_Controller
{
	public function __coontruct(){
		parent::__construct();
	}
	
	public function index(){

		$data['name'] = "Name";
		$this->load->view("product/product_view",$data);
	}

	public function add(){
		$this->load->view('product/addproduct_view');
	}

	public function edit(){
		$this->load->view('product/editproduct_view');
	}


}
?>