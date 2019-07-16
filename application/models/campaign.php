<?php

class campaign extends CI_Model {
	
	function get_all(){
		$query = $this->db->query("SELECT tc.ID, tc.title, tcat.cat_name, tc.target_amt, tc.phone, tc.create_date, tc.last_update, tu.full_name, tu.email, (SELECT SUM(amount) FROM tbl_transaction WHERE campaign_id = tc.ID) as 'curamt', (SELECT COUNT(ID) FROM tbl_transaction WHERE campaign_id = tc.ID) as 'curctr'
		FROM tbl_campaign tc JOIN tbl_category tcat ON tc.cat_id = tcat.ID 
		LEFT JOIN tbl_transaction trans ON tc.ID = trans.campaign_id
		LEFT JOIN tbl_user tu ON tc.submit_uid = tu.ID");
		
		return $query->result();
	}

	function count_all(){
		$query = $this->db->query("SELECT COUNT(ID) as 'countall' FROM tbl_campaign");
		
		return $query->result();
	}

	function count_24(){
		$query = $this->db->query("SELECT COUNT(ID) as 'count24' FROM tbl_campaign");
		
		return $query->result();
	}

	function get_one($id){
		$query = $this->db->query("SELECT * FROM tbl_campaign WHERE ID='".$id."'");
		
		return $query->result();
	}

	
}
?>
