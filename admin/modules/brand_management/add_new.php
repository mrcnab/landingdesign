<?php
	$form_action = "index.php?module_name=".$module_name."&tab=".$tab."&file_name=".$file_name;
	$redirtUrl 	 = "index.php?module_name=".$module_name."&file_name=manage_all&tab=".$tab;
	$randNumber	 =	$helperClass->generateAutoString(25);

	$brand_id =  base64_decode($_REQUEST['brand_id']);

	if( isset( $_POST['Save'] ) )
	{
		if($_FILES['image']['name'] != ''){
			$uploaddir = "../image/data/".$module_name."/";
			if( !is_dir( $uploaddir ) )
				mkdir( $uploaddir, 0777 );
			$photo = $uploaddir . str_replace(" ", "", $randNumber.$_FILES['image']['name']);
			$photo1 = "data/".$module_name."/". str_replace(" ", "", $randNumber.$_FILES['image']['name']);
			move_uploaded_file($_FILES['image']['tmp_name'], $photo) ;
		}

		if($_FILES['image']['size'] != 0){
			$data['image'] = $photo1;
		}

		if($brand_id > 0){
					$data['brand_id']	=	$brand_id;
					$data['title']	=	$_POST['title'];
					$is_saved = $helperClass ->updateQuery($data, BRAND, 'brand_id',$brand_id);
		}else{
				$data['title']			=	$_POST['title'];
				$is_saved =  $helperClass -> insertQuery( $data,BRAND );
		}
		$msg = $is_saved ? header ( "location:  " . $redirtUrl . "&msg=1" ) : header ( "location:  " . $redirtUrl . "&msg=2" );
	}	//	End of if( isset( $_POST['Save'] ) )

	$content	=	$helperClass->selectRecord('brand_id', $brand_id, BRAND);
	$selectImage	=	$helperClass->_selectSingleRowAndSingleRecord('image', BRAND, 'brand_id', $brand_id);
	if ($selectImage != '') {
		$imageThumb = $helperClass->resize ( $selectImage, 200, 150 );
	} else {
		$imageThumb = $helperClass->resize ( NO_IMAGE_PATH, 200, 150 );
	}
?>
<!-- BEGIN Page Title -->
<div class="page-title">
	<div>
		<h1>
			<i class="fa fa-file-o"></i> Add Brand
		</h1>
	</div>
</div>
<!-- END Page Title -->

<!-- BEGIN Breadcrumb -->
<div id="breadcrumbs">
	<ul class="breadcrumb">
		<li><i class="fa fa-home"></i> <a href="index.php?tab=home">Home</a> <span
			class="divider"><i class="fa fa-angle-right"></i></span></li>
		<li class="active">Brand</li>
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
		<input type="hidden" name="brand_id" value="<?php echo base64_encode($brand_id); ?>" />

<div id="myTabContent1" class="tab-content">

					<div class="form-group">
						<label class="col-sm-3 col-lg-2 control-label" for="name">Title:</label>
						<div class="col-sm-6 col-lg-4 controls">
							<input type="text" name="title" class="form-control" value="<?php echo $content['title']; ?>" data-rule-required="true"	data-rule-minlength="3" />
						</div>
					</div>

		 <div class="form-group">
                                      <label class="col-sm-3 col-lg-2 control-label">Image</label>
                                      <div class="col-sm-9 col-lg-10 controls">
                                         <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new img-thumbnail" style="width: 200px; height: 150px;">
                                               <img src="<?php echo $imageThumb;?>" alt="" />
                                            </div>
                                            <div class="fileupload-preview fileupload-exists img-thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                            <div>
                                               <span class="btn btn-default btn-file"><span class="fileupload-new">Select image</span>
                                               <span class="fileupload-exists">Change</span>
                                               <input type="file" name="image" class="file-input" /></span>
                                               <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>
                                            </div>
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
