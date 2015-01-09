<?
if(!isset($_SESSION))
{
	session_start();
}
	ob_start();
	require_once("classes/constants.php");
	require_once("classes/helperClass.php");
	require_once("classes/misc.php");
	require_once("classes/DBAccess.php");

	if( ($_SESSION['admin_email'] == "" ))
	{
		header("Location:	login.php");
	}
	if( $_GET['action'] == "logout" )
	{
		$user_athentication_obj = new userAthentications();
		$user_athentication_obj -> flush_session();
		header("Location:	login.php");
	}
	$db = new DBAccess();
	$helperClass = new helper();
	$user_obj = new users();
?>