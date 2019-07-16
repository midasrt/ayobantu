<?php

class categories extends CI_Model {
	
	function get_all(){
		$query = $this->db->query("SELECT * FROM tbl_category");
		
		return $query->result();
	}

	function count_all(){
		$query = $this->db->query("SELECT COUNT(ID) as 'countall' FROM tbl_category");
		
		return $query->result();
	}

	function get_one($id){
		$query = $this->db->query("SELECT * FROM tbl_category WHERE ID='".$id."'");
		
		return $query->result();
	}

	function insert($cat_name){

		$this->db->query("INSERT INTO tbl_category(cat_name) VALUES('".$cat_name."')");

	}
	
	function update($id,$cat_name){

		$this->db->query("UPDATE tbl_category SET cat_name='".$cat_name."' WHERE ID='".$id."'");
		
		
	}	
	
}
?>
