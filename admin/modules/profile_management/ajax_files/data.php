<?php
include ("../../../classes/DBAccess.php");
include ("../../../classes/helperClass.php");
include ("../../../classes/image.php");
include ("../../../classes/misc.php");

$db = new DBAccess();
$helperClass = new helper();

$per_page = RECORDS_PER_PAGE;
$page = $_REQUEST['page'];

$start = ($page-1)*RECORDS_PER_PAGE;
$sql = "select * from ".CRM_USERS." order by first_name limit $start,".RECORDS_PER_PAGE."";
$recordSet	=	$db->getMultipleRecords($sql);
$count	=	1;
if($recordSet) {
foreach ( $recordSet as $row )
{	
	if($row['image'] != '') {
		$imageThumb	=	$helperClass->resize($row['image'],SMALL_THUMB_WIDTH,SMALL_THUMB_HEIGHT);
	}else{
		$imageThumb	=	$helperClass->resize(NO_IMAGE_MEMBER_PATH,SMALL_THUMB_WIDTH,SMALL_THUMB_HEIGHT);
	}
	?>
    
    <tr>
        <td class="Sr"><?php echo $count;?></td>
        <td class=""><img src="<?=$imageThumb?>" border="0" alt="Profile Image" /></td>
        <td class=""><?php echo $row['first_name'];?> <?php echo $row['last_name'];?></td>
        <td class=""><?php echo $row['email_address'];?></td>
        <td class=""><?php echo $row['phoneNumber'];?></td>
        <td class=""><?php echo $row['address'];?></td>
    </tr>

<?php $count++;
} } ?>
<script type="text/javascript">
$(document).ready(function(){
	
	var Timer  = '';
	var selecter = 0;
	var Main =0;
	
	bring(selecter);
	
});


function bring ( selecter )      
{	
	$('tr.odd_row:eq(' + selecter + ')').stop().animate({
		opacity  : '1.0'		
	},300,function(){
		
		if(selecter < 6)
		{
			clearTimeout(Timer); 
		}
	});
	
	selecter++;
	var Func = function(){ bring(selecter); };
	Timer = setTimeout(Func, 20);
}
</script>
