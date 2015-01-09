<?php
	$form_action = "index.php?module_name=".$module_name."&tab=".$tab."&file_name=".$file_name;

	if($_REQUEST['action'] == 'deleted'){
		$is_saved	=	$helperClass->deletRecord('brand_id', $_REQUEST['brand_id'], BRAND);
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
			'sort'            => 'brand_id',
			'order'           => 'DESC'
	);
	$allUsers	=	$helperClass->selectAllRows(BRAND,$data);
?>
<!-- BEGIN Page Title -->
                <div class="page-title">
                    <div>
                        <h1><i class="fa fa-file-o"></i> Manage Brands</h1>
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
                        <li class="active">Banners</li>
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
                                  <a href="index.php?module_name=<?php echo $module_name;?>&file_name=add_new&tab=<?php echo $tab;?>"><button class="btn btn-primary">Add New</button></a>
                                    </div>
                                </div>
                                <br/><br/>
                                <div class="clearfix"></div>
<div class="table-responsive" style="border:0">
    <table class="table table-advance" >
        <thead>
            <tr>
                <th>Title</th>
                <th>Image</th>
                <th style="width: 150px">Action</th>
            </tr>
        </thead>
        <tbody>
			<?php foreach ($allUsers as $pageTitle){
			if ($pageTitle['image'] != '') {
				$imageThumb = $helperClass->resize ( $pageTitle['image'], 200, 150 );
			} else {
				$imageThumb = $helperClass->resize ( NO_IMAGE_PATH, 200, 150 );
			}
				?>
            <tr>
                 <td><?php echo $pageTitle['title'];?></td>
                  <td> <img src="<?php echo $imageThumb;?>" alt="" /></td>
                <td>
                   <a class="btn btn-primary btn-sm" href="index.php?module_name=<?php echo $module_name;?>&file_name=add_new&tab=<?php echo $tab;?>&brand_id=<?php echo base64_encode($pageTitle['brand_id']);?>"><i class="fa fa-edit"></i> Edit</a>
                   <a class="btn btn-danger btn-sm" href="<?php echo $form_action;?>&brand_id=<?php echo $pageTitle['brand_id'];?>&action=deleted"><i class="fa fa-trash-o"></i> Delete</a>
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
