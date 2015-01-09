<?
	require_once("classes/misc.php");
	require_once("classes/DBAccess.php");
	$db = new DBAccess();

	function tableExists( $table )
	{
		global $db;
		$q = "show tables like '".$table."'";
		$r =  $db -> getSingleRecord( $q );
		return strcasecmp($r[0], $table) == 0;
	}

	function create_banner_table()
	{
		global $db; $table = "tbl_brands";
		if( !tableExists( $table ) )
		{
			$sql = "CREATE TABLE IF NOT EXISTS `".$table."` (
					 `brand_id` int(11) NOT NULL auto_increment,
					  `title` varchar(255) NOT NULL,
					  `image` varchar(255) NOT NULL,
					  PRIMARY KEY  (`brand_id`)
					)";
			$db -> updateRecord( $sql );

		}	//	End of if( !tableExists( $table ) )
	}	//	End of function create_contents_table()


	function create_module_tables()
	{
		create_banner_table();
	}	//	End of function create_module_tables()
?>