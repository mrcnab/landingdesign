<?
	$q = "SELECT * FROM ".MODULES." WHERE module_status = 1 AND module_name = '".$module_name."'";
	$r = $db -> getSingleRecord( $q );

	if( $r != false )
	{
		require_once("includes/ini.php");
		$file_name = isset( $_GET['file_name'] ) ? $_GET['file_name'] : "manage_all";
		$tab = isset( $_GET['tab'] ) ? $_GET['tab'] : "brand";

		switch ( $file_name )
		{
			case "manage_all";
				require_once($file_name.".php");
			break;
			case "add_new";
				require_once($file_name.".php");
			break;


		}	//	End of switch ( $file_name )
	}
	else
	{
		echo "<p class='bad-msg' align='center'>Invalid Module</p>";
	}
?>