<?
class userAthentications
{
	var $db = "";
	function userAthentications()
	{
		$this -> db = new DBAccess();
	}	//	End of function userAthentications()

	function set_default_session()
	{
		$_SESSION['admin_email'] = "";
		$_SESSION['admin_type'] = "";
		session_destroy();
		session_unset();
	}	//	End of function set_default_session()

	function flush_session()
	{
		session_destroy();
		$this -> set_default_session();
	}	//	End of function flush_session()

	function check_crm_user_athentication( $email, $user_password,$rememberme )
	{
		$q = "SELECT * FROM users WHERE email_address = '".$email."' AND password = '".$user_password."' AND status = 1";
		$r = $this -> db -> getSingleRecord( $q );
		if( $r != false )
		{

			$_SESSION['admin_email'] = $email;
			if( $r['user_type'] == 1){
				$_SESSION['admin_type']	=	"admin";
			}else{
				$_SESSION['admin_type']	=	"moderator";
			}


			if($rememberme=="on"){
				setcookie("admin_email_crm", $email, time()+COOKIES_TIME_LIMIT);
				setcookie("user_password_crm", $user_password, time()+COOKIES_TIME_LIMIT);
				setcookie("admin_type_crm", 'crm', time()+COOKIES_TIME_LIMIT);
			}
			return true;
		}
		else
		{
			return false;
		}
	}	//	End of check_user_athentication( $user_name, $user_password )


	function check_client_user_athentication( $email, $user_password,$rememberme )
	{
		$q = "SELECT * FROM `tbl_clients` WHERE `email_address` = '".$email."' AND `password` = '".$user_password."' AND `status` = 1";
		$r = $this -> db -> getSingleRecord( $q );
		if( $r != false )
		{
			$_SESSION['admin_email'] = $email;
			$_SESSION['admin_type'] = 'Client';
			if($rememberme=="on"){
				setcookie("admin_email_client", $email, time()+COOKIES_TIME_LIMIT);
				setcookie("user_password_client", $user_password, time()+COOKIES_TIME_LIMIT);
				setcookie("admin_type_client", 'Client', time()+COOKIES_TIME_LIMIT);
			}
						return true;
		}
		else
		{
			return false;
		}
	}	//	End of check_user_athentication( $user_name, $user_password )


	function check_contacts_user_athentication( $email,$company_id,  $user_password ,$rememberme)
	{
		$q = "SELECT * FROM `tbl_contacts` WHERE `email_address` = '".$email."' AND `company_id` = '".$company_id."' AND `password` = '".$user_password."' AND `status` = 1";
		$r = $this -> db -> getSingleRecord( $q );
		if( $r != false )
		{
			$_SESSION['admin_email'] = $email;
			$_SESSION['admin_type'] = 'Contacts';
			if($rememberme=="on"){
				setcookie("admin_email_contacts", $email, time()+COOKIES_TIME_LIMIT);
				setcookie("company_id", $company_id, time()+COOKIES_TIME_LIMIT);
				setcookie("user_password_contacts", $user_password, time()+COOKIES_TIME_LIMIT);
				setcookie("admin_type_contacts", 'Contacts', time()+COOKIES_TIME_LIMIT);
			}
			return true;
		}
		else
		{
			return false;
		}
	}	//	End of check_user_athentication( $user_name, $user_password )


	function get_user_name( $email )
	{
		$q = "SELECT * FROM users WHERE email_address = '".$email."'";
		$r = $this -> db -> getSingleRecord( $q );
		if( $r != false )
		{
			return $r['first_name'];
		}
		else
		{
			return false;
		}
	}	//	End of get_user_name( $email )

	function get_password( $email )
	{
		$q = "SELECT * FROM users WHERE email_address = '".$email."'";
		$r = $this -> db -> getSingleRecord( $q );
		if( $r != false )
		{
			$password = $r['password'];
			return $password;
		}
		else
		{
			return false;
		}
	}	//	End of get_password( $email )
}	//	End of class userAthentications
?>