<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	public function index()
	{
		$products = $this->product->index();
		$this->load->view('main', array(
			'products' => $products
		));
	}

	public function delete($id)
	{
		$this->product->delete($id);
		redirect('/');

	}

	public function create()
	{
		$result = $this->product->create($this->input->post());
		redirect('/');

	}

	public function edit($id)
	{
		$product = $this->product->retrieveOne($id);
		$this->load->view('edit', $product);

	}

	public function update()
	{
		$this->product->update($this->input->post());
		redirect('/');
	}

	
}
