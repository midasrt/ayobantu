<?php

class user extends CI_Model {
	
	function get_all(){
		$query = $this->db->query("SELECT * FROM tbl_user");
		
		return $query->result();
	}

	function count_all(){
		$query = $this->db->query("SELECT COUNT(ID) as 'countall' FROM tbl_user");
		
		return $query->result();
	}

	function get_one($id){
		$query = $this->db->query("SELECT * FROM tbl_user WHERE ID='".$id."'");
		
		return $query->result();
	}

	
}
?>
