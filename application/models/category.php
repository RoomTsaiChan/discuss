<?php
class Category extends CI_Model {

	function getCategory()
	{
		$query = $this->db->get('category');
		return $query->result_array();
	}

}
?>