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

	function create_table()
	{
		global $db; $table = "tbl_products";
		if( !tableExists( $table ) )
		{
			$sql = "CREATE TABLE IF NOT EXISTS `".$table."` (
					 `product_id` int(11) NOT NULL auto_increment,
					`brand_id` int(11) NOT NULL,
					  `title` varchar(255) NOT NULL,
					`description` text NOT NULL,
					`price` varchar(255) NOT NULL,
					`image` varchar(255) NOT NULL,
					  PRIMARY KEY  (`product_id`)
					)";
			$db -> updateRecord( $sql );

		}	//	End of if( !tableExists( $table ) )
	}	//	End of function create_contents_table()


	function create_module_tables()
	{
		create_table();
	}	//	End of function create_module_tables()
?>