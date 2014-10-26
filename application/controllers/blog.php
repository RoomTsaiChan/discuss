<?php
class Blog extends CI_Controller {

	public function index()
	{
		$this->load->model('school');
		$data['d'] = $this->school->getS();
		$this->load->view('table', $data);
	}
	public function createNews()
	{
		$this->load->model('category');
		$data['categoryArr'] = $this->category->getCategory();
		$this->load->view('createNews', $data);
	}
}
?>