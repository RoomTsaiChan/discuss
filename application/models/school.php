<?php
class school extends CI_Model {

	function getS()
	{
		$query = $this->db->get('school');
		return $query->result_array();
	}

}
?>