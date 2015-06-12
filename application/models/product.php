<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Model {

	public function index()
	{
		$query = "SELECT * FROM products";
		return $this->db->query($query)->result_array();
	}

	public function delete($id)
	{
		$query = "DELETE FROM products WHERE id = ?";
		return $this->db->query($query, $id);	
	}

	public function create($newProduct)
	{
		$query = "INSERT INTO products (name, description, created_at, updated_at) VALUES (?,?, NOW(), NOW())";
		return $this->db->query($query, $newProduct);
	}

	public function retrieveOne($id)
	{
		$query = "SELECT * FROM products WHERE id = ?";
		return $this->db->query($query, $id)->row_array();
	}

	public function update($product)
	{
		$query = "UPDATE products SET name = ?, description = ?, updated_at = NOW() WHERE id = ?";
		return $this->db->query($query, array($product['name'], $product['description'], $product['id']));
	}
}
