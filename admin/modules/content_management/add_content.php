<?php
	$form_action = "index.php?module_name=content_management&tab=content&file_name=".$file_name;
	$redirtUrl 	 = "index.php?module_name=content_management&file_name=manage_contents&tab=content";
	$randNumber	 =	$helperClass->generateAutoString(25);

	$content_id = isset( $_GET['content_id'] ) ? $_GET['content_id'] : 0;
	$content_id = isset( $_POST['content_id'] ) ? $_POST['content_id'] : $content_id;

	if( isset( $_POST['Save'] ) )
	{
		if($content_id > 0){
					$data['content_id']		=	$content_id;
					$data['content_title']	=	$_POST['content_title'];
					$data['content_text']	=	$_POST['content_text'];
					$data['meta_title']		=	$_POST['meta_title'];
					$data['meta_description']=	$_POST['meta_description'];
					$data['meta_keywords']	=	$_POST['meta_keywords'];
					$is_saved = $helperClass ->updateQuery($data, CONTENT, 'content_id',$content_id);
		}else{
				$data['content_title']	=	$_POST['content_title'];
				$data['content_text']	=	$_POST['content_text'];
				$data['meta_title']		=	$_POST['meta_title'];
				$data['meta_description']=	$_POST['meta_description'];
				$data['meta_keywords']	=	$_POST['meta_keywords'];
				$is_saved =  $helperClass -> insertQuery( $data,CONTENT );

		}
		$msg = $is_saved ? header ( "location:  " . $redirtUrl . "&msg=1" ) : header ( "location:  " . $redirtUrl . "&msg=2" );
	}	//	End of if( isset( $_POST['Save'] ) )

	$content	=	$helperClass->selectRecord('content_id', $content_id, CONTENT);
?>
<!-- BEGIN Page Title -->
<div class="page-title">
	<div>
		<h1>
			<i class="fa fa-file-o"></i> Add Page Content
		</h1>
	</div>
</div>
<!-- END Page Title -->

<!-- BEGIN Breadcrumb -->
<div id="breadcrumbs">
	<ul class="breadcrumb">
		<li><i class="fa fa-home"></i> <a href="index.php?tab=home">Home</a> <span
			class="divider"><i class="fa fa-angle-right"></i></span></li>
		<li class="active">Add Page Content</li>
	</ul>
</div>
<!-- END Breadcrumb -->
<!-- BEGIN Main Content -->
<div class="tabbable">
<div class="row">
	<div class="col-md-12">
		<div class="box">
        <form action="<?=$form_action?>" class="form-horizontal"
					id="validation-form" method="post" enctype="multipart/form-data"
					autocomplete="off">
		<input type="hidden" name="content_id" value="<?php echo $content_id; ?>" />

<div id="myTabContent1" class="tab-content">

			<div>
					<div class="form-group">
						<label class="col-sm-3 col-lg-2 control-label" for="name">Page Title:</label>
						<div class="col-sm-6 col-lg-4 controls">
							<input type="text" name="content_title" class="form-control" value="<?php echo $content['content_title']; ?>" data-rule-required="true"	data-rule-minlength="3" />
						</div>
					</div>

					<div class="form-group">
                                      <label class="col-sm-3 col-lg-2 control-label">Description</label>
                                      <div class="col-sm-9 col-lg-10 controls">
                                         <textarea class="form-control col-md-12 ckeditor" name="content_text" rows="6" ><?php echo $content['content_text']; ?></textarea>
                                      </div>
                  </div>
                  <div class="form-group">
						<label class="col-sm-3 col-lg-2 control-label" for="name">Meta Title:</label>
						<div class="col-sm-6 col-lg-4 controls">
							<input type="text" name="meta_title" class="form-control" value="<?php echo $content['meta_title']; ?>" data-rule-required="true"	data-rule-minlength="3" />
						</div>
					</div>

                  <div class="form-group">
						<label class="col-sm-3 col-lg-2 control-label" for="name">Meta Description:</label>
						<div class="col-sm-6 col-lg-4 controls">
							<input type="text" name="meta_description" class="form-control" value="<?php echo $content['meta_description']; ?>"  />
						</div>
					</div>

			  <div class="form-group">
						<label class="col-sm-3 col-lg-2 control-label" for="name">Meta Keyword:</label>
						<div class="col-sm-6 col-lg-4 controls">
							<input type="text" name="meta_keywords" class="form-control" value="<?php echo $content['meta_keywords']; ?>" />
						</div>
					</div>
			</div>


			</div>

            <div class="box-content">
					<div class="form-group">
						<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
							<input type="submit" name="Save" class="btn btn-primary"
								value="Submit">
							<button type="reset" class="btn">Cancel</button>
						</div>
					</div>
            </div>
				</form>
		</div>
	</div>
</div>
</div>
<!-- END Main Content -->
