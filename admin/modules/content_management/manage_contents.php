<?php
	$form_action = "index.php?module_name=content_management&tab=content&file_name=".$file_name;

	if($_REQUEST['action'] == 'deleted'){
		$is_saved	=	$helperClass->deletRecord('content_id', $_REQUEST['content_id'], CONTENT_MAIN);
		$is_saved	=	$helperClass->deletRecord('content_id', $_REQUEST['content_id'], CONTENT);
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
			'sort'            => 'content_id',
			'order'           => 'ASC'
	);
	$allUsers	=	$helperClass->selectAllRows(CONTENT,$data);
?>
<!-- BEGIN Page Title -->
                <div class="page-title">
                    <div>
                        <h1><i class="fa fa-file-o"></i> Manage Content Pages</h1>
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
                        <li class="active">Content Pages</li>
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
                                  <a href="index.php?module_name=content_management&file_name=add_content&tab=content"><button class="btn btn-primary">Add New</button></a>
                                    </div>
                                </div>
                                <br/><br/>
                                <div class="clearfix"></div>
<div class="table-responsive" style="border:0">
    <table class="table table-advance" >
        <thead>
            <tr>
                <th>Page Title</th>
                <th style="width: 150px">Action</th>
            </tr>
        </thead>
        <tbody>
			<?php foreach ($allUsers as $pageTitle){
				?>
            <tr>
                 <td><?php echo $pageTitle['content_title'];?></td>
                <td>
                   <a class="btn btn-primary btn-sm" href="index.php?module_name=content_management&file_name=add_content&tab=content&content_id=<?php echo $pageTitle['content_id'];?>"><i class="fa fa-edit"></i> Edit</a>
                   <a class="btn btn-danger btn-sm" href="<?php echo $form_action;?>&content_id=<?php echo $pageTitle['content_id'];?>&action=deleted"><i class="fa fa-trash-o"></i> Delete</a>
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
