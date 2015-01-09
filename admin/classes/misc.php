<?php

if(!isset($_SESSION))

{

	session_start();

}
// hello test ....
	error_reporting(1);

	if($_SERVER['HTTP_HOST'] == 'localhost'){
		define("username", "root");
		define("password", "");
		define("hostname", "localhost");
		define("dbname", "landingdesigns");

		define("SITE_HOME_URL", "http://localhost/landingdesign");
		define("IMAGE_DIR", "http://localhost/landingdesign/image/");

		/**** Image Resizing paths ****************/

		define('DIR_IMAGE', 'C:/xampp/htdocs/landingdesign/image/');
		define('DIR_CACHE', 'C:/xampp/htdocs/landingdesign/image/cache/');
		define('HTTP_IMAGE', 'http://localhost/landingdesign/image/');
		define('LOGO_PATH', 'http://localhost/landingdesign/images/logo.png');

	}else if($_SERVER['HTTP_HOST'] == 'swissincorp.itechnologiez.com'){

		define("username", "itechnol_incorp");
		define("password", "4d9ubwuukk");
		define("hostname", "localhost");
		define("dbname", "itechnol_swiss");
		define("SITE_HOME_URL", "http://swissincorp.itechnologiez.com");
		/**** Image Resizing paths ****************/
		define("IMAGE_DIR", "http://swissincorp.itechnologiez.com/image/");
		define('DIR_IMAGE', '/home2/itechnol/public_html/swissincorp/image/');
		define('DIR_CACHE', '/home2/itechnol/public_html/swissincorp/image/cache/');
		define('HTTP_IMAGE', 'http://swissincorp.itechnologiez.com/image/');
		define('LOGO_PATH', 'http://swissincorp.itechnologiez.com/images/logo.png');

	}

	define('CURRENCY_SYMBOL', 'USD');
	define('DATE_FORMAT', 'd/m/Y h:i A');
	define('DIR_LANGUAGE', 'language/');

	/**** Cookies Time Out ****************/

	define("COOKIES_TIME_LIMIT", 604800);

	/**** Image Resizing Scale ****************/

	define('PROFILE_TOP_WIDTH', 70);
	define('PROFILE_TOP_HEIGHT', 68);

	define('PROFILE_BIG_WIDTH', 250);
	define('PROFILE_BIG_HEIGHT', 190);

	define('CONTENT_BANNER_WIDTH', 305);
	define('CONTENT_BANNER_HEIGHT', 179);

	define('LISTING_THUMB_WIDTH', 190);
	define('LISTING_THUMB_HEIGH', 140);

	define('SMALL_THUMB_WIDTH', 65);
	define('SMALL_THUMB_HEIGHT', 60);

	define('CLIENT_THUMB_WIDTH', 35);
	define('CLIENT_THUMB_HEIGHT', 35);

	define('NO_IMAGE_PATH', 'noImage.gif');
	define('NO_IMAGE_MEMBER_PATH', 'NO-IMAGE-AVAILABLE.jpg');
	define('LOADER_IMAGE', 'images/loader.gif');

	/**** Pagination ****************/

	define("RECORDS_PER_PAGE", 20);


	/**** Default Messages ****************/

	define("NO_RECORD_FOUND", "No Record Found.");
	define("RECORD_ADDED", "Changes Saved Successfully.");
	define("RECORD_ERROR", "Changes Can Not Saved, There is some error.");
	define("RECORD_DELETE", "Record Deleted Successfully.");
	define("RECORD_DELETE_ERROR", "Record Can Not Deleted, There is some error.");
	define("STATUS_UPDATED", "Status Change Successfully.");
	define("STATUS_UPDATED_ERROR", "Status Can Not Changed, There is some error.");
	define("EMAIL_SEND", "Emails Send Successfully.");
	define("EMAIL_SEND_ERROR", "Email Can Not Send, There is some error.");
	define("UPLOADING_ERROR", "File could not be uploaded, There is some error.");

	/**** Default Messages ****************/

	define("MISSING", "Missing");
	define("PENDING", "Pending");
	define("CONFIRMED", "Confirmed");
	define("COMPLETED", "Completed");
	define("CLOSED", "Closed");

	/**
	 *	db Table Names
	*/

	define("MODULES", "modules");
	define("TBL_COUNTRIES", "country");
	define("CRM_USERS", "users");
	define("CONTENT", "tbl_contents");
	define("PROJECTS", "tbl_products");
	define("BRAND", "tbl_brands");

?>

