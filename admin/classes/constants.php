<?php
	$f = basename( $_SERVER['PHP_SELF'] );
	if( $f != "login.php" )
	{
		require_once("DBAccess.php");
		require_once("pagingClass.php");
		require_once("userAthentication.php");
		require_once("userClass.php");
		require_once("class.phpmailer.php");
		require_once("image.php");
		require_once("misc.php");
		require_once("helperClass.php");
	}
	define("SITE_NAME", "Landing Designs");
	if($_SERVER['HTTP_HOST'] == 'localhost'){
		define("SITE_HOME_URL", "http://localhost/landingdesign");
	}else{
		define("SITE_HOME_URL", "http://swissincorp.itechnologiez.com/");
	}
?>