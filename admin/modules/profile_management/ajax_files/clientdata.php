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
	$filter = " where contact_person_name like '%$keyword%' or company_name like '%$keyword%'";
}
$start = ($page-1)*RECORDS_PER_PAGE;
$sql = "select * from ".TBL_CLIENTS." $filter order by company_name limit $start,".RECORDS_PER_PAGE."";
$recordSet	=	$db->getMultipleRecords($sql);
$count	=	1;
if($recordSet) {
foreach ( $recordSet as $row )
{
	$country	=	$helperClass->selectRecord( $field = 'country_id', $value = $row['country_id'] , COUNTRY);
	$state	=	$helperClass->selectRecord( $field = 'country_id', $value = $row['country_id'] ,ZONE);
	if($row['image'] != '') {
		$imageThumb	=	$helperClass->resize($row['image'],CLIENT_THUMB_WIDTH,CLIENT_THUMB_HEIGHT);
	}else{
		$imageThumb	=	$helperClass->resize(NO_IMAGE_PATH,CLIENT_THUMB_WIDTH,CLIENT_THUMB_HEIGHT);
	}
	?>
    <tr>
    <td class="">
    <a href="index.php?module_name=profile_management&file_name=company_detail&company_id=<?php echo $row['client_id'] ?>&tab=account"><?php echo $row['company_name'];?></a>
   
    </td>
    <td class=""><?php echo $row['email_address'];?></td>
     <td class="">
      <?php  
		$status = $row['status'];
		if($status == 0 ) {
			?>
        
            <a style="cursor:pointer;" onclick="updateStatus('1','<?php echo $row['client_id'];?>','client_id',<?php echo TBL_CLIENTS?>)">Disable</a>
        <?php
            
		}
		elseif($status == 1) {
		?>
         <a style="cursor:pointer;" onclick="updateStatus('0','<?php echo $row['client_id'];?>','client_id',<?php echo TBL_CLIENTS?>)" >Enable</a>
         <?php
		}
		?>
     </td>
    <td class="">
    <?php if($_SESSION['admin_type'] == 'main'){?>
    <a href="index.php?module_name=profile_management&file_name=company_detail&client_id=<?php echo $row['client_id'] ?>&tab=account" class="icon-detail">View</a>
   
        <a style="cursor:pointer;" onclick="deleteField(<?php echo $row['client_id'];?>,'client_id',<?php echo TBL_CLIENTS?>)" class="icon-delete">Delete</a>
        <?php } ?>
    </td>
 	</tr>
	
<?php $count++;
} } ?>