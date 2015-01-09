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
$sql = "select * from ".TBL_CLIENTS." order by company_name limit $start,".RECORDS_PER_PAGE."";
$recordSet	=	$db->getMultipleRecords($sql);
$count	=	1;
if($recordSet) {
foreach ( $recordSet as $row )
{
	$country	=	$helperClass->selectRecord( $field = 'country_id', $value = $row['country_id'] , COUNTRY);
	$state	=	$helperClass->selectRecord( $field = 'country_id', $value = $row['country_id'] , ZONE);
	if($row['image'] != '') {
		$imageThumb	=	$helperClass->resize($row['image'],SMALL_THUMB_WIDTH,SMALL_THUMB_HEIGHT);
	}else{
		$imageThumb	=	$helperClass->resize(NO_IMAGE_MEMBER_PATH,SMALL_THUMB_WIDTH,SMALL_THUMB_HEIGHT);
	}
	?>
    <div class="records">
    <div class="Sr"><?php echo $count;?></div>
    <div class="fullname"><img src="<?=$imageThumb?>" border="0" alt="Profile Image" /></div>
    <div class="fullname"><?php echo $row['company_name'];?></div>
    <div class="email"><?php echo $row['email_address'];?></div>
    <div class="phonenumber"><?php echo $row['phone_number'];?></div>
    <div class="address"><?php echo $row['address1'];?>
    <br /> <?php echo $row['address2'];?>
		<br /> <?php echo $row['city'];?>&nbsp; - &nbsp; <?php echo $row['post_code'];?>	
		<br /> <?php echo $state['name'];?>
		<br /> <?php echo $country['name']?>
    </div>
    <div class="Edit">
      <?php  
		$status = $row['status'];
		if($status == 0 ) {
			?>
        
            <a style="cursor:pointer;" onclick="updateStatus('1','<?php echo $row['client_id'];?>','client_id','<?php echo TBL_CLIENTS;?>')">Disable</a>
        <?php
            
		}
		elseif($status == 1) {
		?>
         <a style="cursor:pointer;" onclick="updateStatus('0','<?php echo $row['client_id'];?>','client_id','<?php echo TBL_CLIENTS;?>')">Enable</a>
         <?php
		}
		?>
        </div>
    <div class="Edit"><a style="cursor:pointer;" onclick="deleteField(<?php echo $row['client_id'];?>,'client_id','<?php echo TBL_CLIENTS;?>')">Delete</a></div>
	</div>
	
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
