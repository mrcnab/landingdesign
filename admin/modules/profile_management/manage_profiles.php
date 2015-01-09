<?php
	$form_action = "index.php?module_name=profile_management&tab=account&file_name=".$file_name;

	if($_REQUEST['action'] == 'deleted'){

		$is_saved	=	$helperClass->deletRecord('user_id', $_REQUEST['user_id'], CRM_USERS);
		$msg = $is_saved ? header ( "location:  " . $form_action . "&msg=1" ) : header ( "location:  " . $form_action . "&msg=2" );
	}

	if (isset ( $_REQUEST ['msg'] )) {
		if ($_REQUEST ['msg'] == 1) {
			$msg = ' <div class="alert alert-success">
                                            <button class="close" data-dismiss="alert">&times;</button>
                                            <strong>Success!</strong> ' . RECORD_ADDED . '.
                                        </div>';
		} else if ($_REQUEST ['msg'] == 2) {
			$msg = '<div class="alert alert-danger">
                                            <button class="close" data-dismiss="alert">&times;</button>
                                            <strong>Error!</strong> ' . RECORD_ERROR . '
                                        </div>';
		}
	}
	$data = array(
			'sort'            => 'user_id',
			'order'           => 'desc'
	);
	$allUsers	=	$helperClass->selectAllRows(CRM_USERS,$data);
?>
<!-- BEGIN Page Title -->
                <div class="page-title">
                    <div>
                        <h1><i class="glyphicon glyphicon-user"></i> Manage Administrator User</h1>
                    </div>
                </div>
                <!-- END Page Title -->

                <!-- BEGIN Breadcrumb -->
                <div id="breadcrumbs">
                    <ul class="breadcrumb">
                        <li>
                            <i class="fa fa-home"></i>
                            <a href="index.php?tab=home">Home</a>
                            <span class="divider"><i class="fa fa-angle-right"></i></span>
                        </li>
                        <li class="active">Manage Users</li>
                    </ul>
                </div>
                <!-- END Breadcrumb -->

                <!-- BEGIN Main Content -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="box">
                        <?php echo $msg;?>
                            <div class="box-content">
                                <div class="btn-toolbar pull-right clearfix">
                                    <div class="btn-group">
                                        <a class="btn btn-circle show-tooltip" title="Add new record" href="index.php?module_name=profile_management&file_name=add_profile&tab=account"><i class="fa fa-plus"></i></a>
                                        <a class="btn btn-circle show-tooltip" title="Edit selected" href="#"><i class="fa fa-edit"></i></a>
                                        <a class="btn btn-circle show-tooltip" title="Delete selected" href="#"><i class="fa fa-trash-o"></i></a>
                                    </div>
                                    <div class="btn-group">
                                        <a class="btn btn-circle show-tooltip" title="Print" href="#"><i class="fa fa-print"></i></a>
                                        <a class="btn btn-circle show-tooltip" title="Export to PDF" href="#"><i class="fa fa-file-text-o"></i></a>
                                        <a class="btn btn-circle show-tooltip" title="Export to Exel" href="#"><i class="fa fa-table"></i></a>
                                    </div>
                                    <div class="btn-group">
                                        <a class="btn btn-circle show-tooltip" title="Refresh" href="#"><i class="fa fa-repeat"></i></a>
                                    </div>
                                </div>
                                <br/><br/>
                                <div class="clearfix"></div>
<div class="table-responsive" style="border:0">
    <table class="table table-advance" id="table1">
        <thead>
            <tr>
                <th style="width:18px"><input type="checkbox" /></th>
                <th>User Type</th>
                <th>User Name</th>
                <th>Image</th>
                <th>Email Address</th>
                <th>Full Name</th>
                <th>Phone Number</th>
                <th>Address</th>
                <th style="width: 150px">Action</th>
            </tr>
        </thead>
        <tbody>
			<?php foreach ($allUsers as $row){
					if($row['image'] != '') {
						$imageThumb	=	$helperClass->resize($row['image'],SMALL_THUMB_WIDTH,SMALL_THUMB_HEIGHT);
					}else{
						$imageThumb	=	$helperClass->resize(NO_IMAGE_MEMBER_PATH,SMALL_THUMB_WIDTH,SMALL_THUMB_HEIGHT);
					}

				if($row['user_type'] == 1){
					$userType	=	"Admin";
				}else{
					$userType	=	"Moderator";
				}
	?>
            <tr>
                <td><input type="checkbox" /></td>
                 <td><?php echo $userType;?></td>
                <td><?php echo $row['user_name'];?></td>
                <td>
                <a href="<?php echo IMAGE_DIR.$row['image']?>" rel="prettyPhoto" title="<?php echo $row['first_name'];?> <?php echo $row['last_name'];?>">
                	<img src="<?php echo $imageThumb?>" border="0" alt="Profile Image" />
                	</a></td>
                <td><?php echo $row['email_address'];?></td>
                <td><?php echo $row['first_name'];?> <?php echo $row['last_name'];?></td>
                <td><?php echo $row['phoneNumber'];?></td>
                <td><?php echo $row['address'];?></td>
                <td>
                   <a class="btn btn-primary btn-sm" href="index.php?module_name=profile_management&file_name=edit_profile&tab=account&user_id=<?php echo $row['user_id'];?>"><i class="fa fa-edit"></i> Edit</a>
                   <a <?php if($row['user_type'] == 1){?> style="display:none;" <?php }?> class="btn btn-danger btn-sm" href="<?php echo $form_action;?>&user_id=<?php echo $row['user_id'];?>&action=deleted"><i class="fa fa-trash-o"></i> Delete</a>
                </td>
            </tr>
			<?php }?>
        </tbody>
    </table>
</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Main Content -->
