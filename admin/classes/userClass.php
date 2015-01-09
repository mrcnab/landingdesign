<?
class users
{
	var $db = "";
	function users()
	{
		$this -> db = new DBAccess();
	}	//	End of function users()
	
	function get_login_user_info( $email, $usertype )
	{		
		if($usertype == 'main'){
			$q = "SELECT * FROM users WHERE `email_address` = '".$email."' ";
		}else if($usertype == 'Client'){
			$q = "SELECT * FROM tbl_clients WHERE `email_address` = '".$email."' ";
		}else if($usertype == 'Contacts'){
			$q = "SELECT * FROM tbl_contacts WHERE `email_address` = '".$email."' ";
		}		
		$r = $this -> db -> getSingleRecord( $q );
		if( $r != false )
			return $r;
		else
			return false;
	}	//	End of function get_user_info( $user_id, $status = 0 )

	function get_user_name( $user_id )
	{
		$q = "SELECT user_name FROM users WHERE user_id = ".$user_id;
		$r = $this -> db -> getSingleRecord( $q );
		if( $r != false )
			return $r['user_name'];
		else
			return false;
	}	//	End of function get_user_title( $user_id )
	
	function get_user_password( $user_id )
	{
		$q = "SELECT password FROM users WHERE user_id = ".$user_id;
		$r = $this -> db -> getSingleRecord( $q );
		if( $r != false )
			return $r['password'];
		else
			return false;
	}	//	End of function get_user_password( $user_id )
	
	function get_status( $user_id )
	{
		$q = "SELECT status FROM users WHERE user_id = ".$user_id;
		$r = $this -> db -> getSingleRecord( $q );
		if( $r != false )
			return $r['status'];
		else
			return false;
	}	//	End of function get_status( $user_id )
	
	function get_active_users( $limit = "" )
	{
		$limit = $limit != "" ? " LIMIT 0, ".$limit : "";
		$q = "SELECT * FROM users WHERE status = 1 ORDER BY addeddate DESC".$limit;
		$r = $this -> db -> getMultipleRecords( $q );
		if( $r != false )
			return $r;
		else
			return false;
	}	//	End of function get_active_users( $limit = "" )
	
	function get_all_inactive_users( $limit = "" )
	{
		$limit = $limit != "" ? " LIMIT 0, ".$limit : "";
		$q = "SELECT * FROM users WHERE status = 0 ORDER BY addeddate DESC".$limit;
		$r = $this -> db -> getMultipleRecords( $q );
		if( $r != false )
			return $r;
		else
			return false;
	}	//	End of function get_all_inactive_users( $limit = "" )
	
	function get_all_users( $limit = "" )
	{
		$limit = $limit != "" ? " LIMIT 0, ".$limit : "";
		$q = "SELECT * FROM users ORDER BY addeddate DESC".$limit;
		$r = $this -> db -> getMultipleRecords( $q );
		if( $r != false )
			return $r;
		else
			return false;
	}	//	End of function get_all_users( $limit = "" )
		
	function set_status( $status, $user_id )
	{
		$q = "UPDATE users SET status = ".$status." WHERE user_id = ".$user_id;
		$r = $this -> db -> updateRecord( $q );
		if( $r != false )
			return true;
		else
			return false;
	}	//	End of function set_status( $status, $user_id )
	
	function add_user( $user_name, $user_password, $first_name, $last_name, $status )
	{
		$q = "INSERT INTO users(`user_name`, `password`, `first_name`, `last_name`, status`, `addeddate`, `modifieddate`)
			 VALUES('".$user_name."', '".$user_password."', '".$first_name."', '".$last_name."', '".$status."', '".date('Y-m-d H:i:s')."', '".date('Y-m-d H:i:s')."')";
		$r = $this -> db -> insertRecord( $q );
		if( $r != false )
			return true;
		else
			return false;
	}	//	End of function add_user( $user_name, $user_password, $first_name, $last_name, $status )
	

	function delete_user( $user_id )
	{
		$q = "DELETE FROM users WHERE user_id = ".$user_id;
		$r = $this -> db -> deleteRecord( $q );
		if( $r != false )
			return true;
		else
			return false;
	}	//	End of function delete_user( $user_id )
	
	
}	//	End of class users
?>