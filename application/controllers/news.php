<?php
class Blog extends CI_Controller {

	public function index(){}
	
	public function createNews()
	{
		$this->load->model('category');
		$data['categoryArr'] = $this->category->getCategory();
		$this->load->view('createNews', $data);
	}
}
?>