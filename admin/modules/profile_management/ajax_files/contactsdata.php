<?php
include ("../../../classes/DBAccess.php");
include ("../../../classes/helperClass.php");
include ("../../../classes/image.php");
include ("../../../classes/misc.php");

$db = new DBAccess();
$helperClass = new helper();

$per_page = RECORDS_PER_PAGE;
$page = $_REQUEST['page'];

$keyword = $_REQUEST['keyword'];
$filter = '';
if($keyword !='') {
	$filter = " where first_name like '%$keyword%' or last_name like '%$keyword%'";
	$filter1 = " and first_name like '%$keyword%' or last_name like '%$keyword%'";
}

$start = ($page-1)*RECORDS_PER_PAGE;
if($_SESSION['admin_type'] == 'main'){
	$sql = "select * from ".TBL_CONTACTS." $filter order by first_name limit $start,".RECORDS_PER_PAGE."";
}else if($_SESSION['admin_type'] == 'Client'){
	$clientDetailByEmail	=	$helperClass->selectRecord('email_address', $_SESSION['admin_email'], TBL_CLIENTS);
	$sql = "select * from ".TBL_CONTACTS."  WHERE company_id = ".$clientDetailByEmail['company_id']." $filter1 order by first_name limit $start,".RECORDS_PER_PAGE."";
}

$recordSet	=	$db->getMultipleRecords($sql);
$count	=	1;
if($recordSet) {
foreach ( $recordSet as $row )
{
	$country	=	$helperClass->selectRecord( $field = 'country_id', $value = $row['country_id'] , COUNTRY);
	$state	=	$helperClass->selectRecord( $field = 'country_id', $value = $row['country_id'] , ZONE);
	$companyDetail	=	$helperClass->selectRecord( $field = 'company_id', $value = $row['company_id'] , TBL_CLIENTS);
	if($row['image'] != '') {
		$imageThumb	=	$helperClass->resize($row['image'],SMALL_THUMB_WIDTH,SMALL_THUMB_HEIGHT);
	}else{
		$imageThumb	=	$helperClass->resize(NO_IMAGE_MEMBER_PATH,SMALL_THUMB_WIDTH,SMALL_THUMB_HEIGHT);
	}
	?>
     <tr>
        <td class="Sr"><?php echo $count;?></td>
        <td> <img src="<?=$imageThumb?>" border="0" alt="Profile Image" /></td>
        <td>
		<?php echo $row['first_name'];?>&nbsp;<?php echo $row['last_name'];?>
        <br /><br />
        <strong>Company</strong>
        <br />
        (<?php echo $companyDetail['company_name'];?>)
        <br /><br />
        (Phone)
        <br />
        <?php echo $row['phone_number'];?>
        </td>
        <td><?php echo $row['email_address'];?></td>
        <td>
        <?php echo $row['address'];?>
		<br /> <?php echo $row['city'];?>&nbsp; - &nbsp; <?php echo $row['post_code'];?>	
		<br /> <?php echo $state['name'];?>
		<br /> <?php echo $country['name']?>
        </td>
        <td>
        
        <?php  
		$status = $row['status'];
		if($status == 0 ) {
			?>
            <a style="cursor:pointer;" onclick="updateStatus('1','<?php echo $row['contact_id'];?>','contact_id','<?php echo TBL_CONTACTS;?>')" class="disable">Disable</a>
        <?php
            
		}
		elseif($status == 1) {
		?>
         <a style="cursor:pointer;" onclick="updateStatus('0','<?php echo $row['contact_id'];?>','contact_id','<?php echo TBL_CONTACTS;?>')" class="enable">Enable</a>
         <?php
		}
		?>
        <a style="cursor:pointer;" onclick="deleteField(<?php echo $row['contact_id'];?>,'contact_id','<?php echo TBL_CONTACTS;?>')" class="icon-delete">Delete</a>
        </td>
       
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
