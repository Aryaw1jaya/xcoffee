<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('home_model', 'home');
	}
	
	public function index()
	{
		$data['title'] 	= 'Home';
		$data['products']		= $this->home->getAllGame();
		$data['page']		= 'pages/home/index';
		$this->load->view('layouts/app', $data);
	}

	public function detail($id)
	{
		$data['title'] = 'Detail Product';
		$data['product']	= $this->home->getGameById($id);
		$data['page']	= 'pages/home/detail';
		$this->load->view('layouts/app', $data);
	}

	/**
	 * Search Product
	 * 
	 * Search product data by keyword
	 */
	public function search_product(){
		if(array_key_exists('category', $_GET)){
			$category = $_GET['category'];
			$keyword = array_key_exists('search', $_GET) ? $_GET['search'] : '';

			$data['products'] = $this->home->searchByCategory($category, $keyword);
		}else{
			$keyword = $_GET['search'] ?? '';
			$data['products'] = $this->home->searchByTitle($keyword);
		}

		$data['title'] = 'Search Result';
		$data['page'] = 'pages/home/search-results';
		$this->load->view('layouts/app', $data);
	}

}

/* End of file Home.php */
