<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_model extends CI_Model
{

	public function getAllGame()
	{
		return $this->db->get('products')->result_array();
	}

	public function getGameById($id)
	{
		return $this->db->get_where('products', ['id' => $id])->row_array();
	}

	public function searchByTitle($keyword)
	{
		return $this->db->from('products')->like('name', $keyword)->get()->result_array();
	}

	public function searchByCategory($category, $keyword)
	{
		return $this->db->from('products')->where('edition', strtolower($category))->like('name', $keyword)->get()->result_array();
	}
}

/* End of file Home_model.php */
