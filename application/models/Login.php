<?php

class Login extends CI_Model {

	function do_login($username,$password){
		$query = $this->db->query("SELECT * FROM tbl_user_sys WHERE username = '".$username."' AND password = '".$password."' AND id_role IN (1,2,3,4)");	
		
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{			
			return false;
		}
	}

	function get_hash($username){
		$query = $this->db->query("SELECT password from tbl_user_sys where username='".$username."'");
		return $query->result();
	}
	
	function get_name($email){
		$query = $this->db->query("SELECT name FROM tbl_user_sys WHERE email='".$email."'");
		
		return $query->result();
	}


	// $options = [
	// 	'cost' => 11
	//   ];
	//   $hash = password_hash($password, PASSWORD_BCRYPT, $options);



	// $qryPass = mysqli_query($conn,"SELECT loginCTR, password FROM tbl_user WHERE email = '$uname' AND is_active = 1") or die(mysqli_error());

    //         while($r = mysqli_fetch_array($qryPass)) {
    //           $hash = $r['password'];
    //           $loginCTR = $r['loginCTR'];
    //         }

    //         if($loginCTR < 5){
    //         	if (password_verify($password, $hash))

	
}
?>
