<?php
	$form_action = "index.php?module_name=profile_management&tab=account&file_name=".$file_name;
	$form_actionMain = "index.php?module_name=profile_management&tab=account&file_name=manage_profiles&tab=account";
	$user_id = isset( $_GET['user_id'] ) ? $_GET['user_id'] : 0;
	$user_id = isset( $_POST['user_id'] ) ? $_POST['user_id'] : $user_id;
	$randNumber		=	$helperClass->generateAutoString(25);

	if( isset( $_POST['Save'] ) )
	{
		$EmailCheck	=	$helperClass->validationEmailAddress('email_address',$_POST['email_address'],CRM_USERS);
		if($EmailCheck != 0){
			$msg = '<div class="alert alert-danger">
                                            <button class="close" data-dismiss="alert">&times;</button>
                                            <strong>Error!</strong>&nbsp;This email address already exists.
                                        </div>';
		}else{

			if($_FILES['image']['name'] != ''){
				$uploaddir = "../image/data/".$module_name."/";
				if( !is_dir( $uploaddir ) )
					mkdir( $uploaddir, 0777 );
				$photo = $uploaddir . str_replace(" ", "", $randNumber.$_FILES['image']['name']);
				$photo1 = "data/".$module_name."/". str_replace(" ", "", $randNumber.$_FILES['image']['name']);
				move_uploaded_file($_FILES['image']['tmp_name'], $photo) ;
			}

				$data['user_name'] = $_POST['user_name'];
				$data['email_address'] = $_POST['email_address'];
				$data['user_type'] = $_POST['user_type'];
				$data['first_name'] = $_POST['first_name'];
				$data['last_name'] = $_POST['last_name'];
				$data['phoneNumber'] = $_POST['phoneNumber'];
				$data['address'] = $_POST['address'];
				if($_FILES['image']['size'] != 0){
					$data['image'] = $photo1;
				}
				$data['status'] = 1;
				$is_saved = $helperClass -> updateQuery( $data,CRM_USERS, "user_id", $_POST['user_id'] );
				$msg = $is_saved ? header ( "location:  " . $form_actionMain . "&msg=1" ) : header ( "location:  " . $form_actionMain . "&msg=2" );
		}
	}

	$user_profile = $helperClass->selectRecord('user_id', $user_id, CRM_USERS);

	if($user_profile['image'] != '') {
		$imageThumb	=	$helperClass->resize($user_profile['image'],PROFILE_BIG_WIDTH,PROFILE_BIG_HEIGHT);
	}else{
		$imageThumb	=	$helperClass->resize(NO_IMAGE_MEMBER_PATH,PROFILE_BIG_WIDTH,PROFILE_BIG_HEIGHT);
	}
?>


 <!-- BEGIN Page Title -->
                <div class="page-title">
                    <div>
                        <h1><i class="glyphicon glyphicon-user"></i> Edit Administrator User</h1>
                        <h4>With Restricted Permissions</h4>
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
                        <li class="active">Edit User</li>
                    </ul>
                </div>
                <!-- END Breadcrumb -->


 <!-- BEGIN Main Content -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="box">
							 <?php echo $msg;?>
                            <div class="box-content">
                                <form action="<?=$form_action?>"  class="form-horizontal" id="validation-form" method="post"  enctype="multipart/form-data"  autocomplete="off">
                                 <input type="hidden" name="user_id" value="<?php echo $user_profile['user_id'];?>" />
                                    <div class="form-group">
                                        <label class="col-sm-3 col-lg-2 control-label" for="username">Username:</label>
                                        <div class="col-sm-6 col-lg-4 controls">
                                            <input type="text" name="user_name" id="user_name" class="form-control" data-rule-required="true" data-rule-minlength="3" value="<?php echo $user_profile['user_name'];?>"  />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 col-lg-2 control-label" for="email">Email Address:</label>
                                         <div class="col-sm-9 col-lg-4 controls">
                                         <div class="input-icon left">
                                            <i class="fa fa-envelope"></i>
                                              <input type="email" name="email_address"  id="email_address" class="form-control" data-rule-required="true" data-rule-email="true" value="<?php echo $user_profile['email_address'];?>" />
                                         </div>
                                      </div>
                                    </div>
									<div class="form-group">
                                        <label for="select" class="col-sm-3 col-lg-2 control-label">User Type</label>
                                        <div class="col-sm-6 col-lg-4 controls">
                                            <select class="form-control" name="user_type" id="select" data-rule-required="true">
                                                <option value="">-- Please select --</option>
                                                <option value="1" <?php if($user_profile['user_type'] == 1){?> selected="selected" <?php }?>>Admin</option>
                                                <option value="2" <?php if($user_profile['user_type'] == 2){?> selected="selected" <?php }?>>moderator</option>
                                            </select>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <label class="col-sm-3 col-lg-2 control-label" for="username">First Name:</label>
                                        <div class="col-sm-6 col-lg-4 controls">
                                            <input type="text" name="first_name" id="first_name" class="form-control" data-rule-required="true" data-rule-minlength="3" value="<?php echo $user_profile['first_name'];?>" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 col-lg-2 control-label" for="username">Last Name:</label>
                                        <div class="col-sm-6 col-lg-4 controls">
                                            <input type="text" name="last_name" id="last_name" class="form-control" data-rule-required="true" data-rule-minlength="3"  value="<?php echo $user_profile['last_name'];?>" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="numberfield" class="col-sm-3 col-lg-2 control-label">Phone Number</label>
                                        <div class="col-sm-6 col-lg-4 controls">
                                            <input type="text" class="form-control" placeholder="Only numbers" name="phoneNumber" id="phoneNumber" data-rule-number="true" data-rule-required="true" value="<?php echo $user_profile['phoneNumber'];?>" >
                                        </div>
                                    </div>

                                   <div class="form-group">
                                      <label class="col-sm-3 col-lg-2 control-label">Image Upload</label>
                                      <div class="col-sm-9 col-lg-10 controls">
                                         <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new img-thumbnail" style="width: 250px; height: 190px;">
                                               <img src="<?php echo $imageThumb;?>" alt="" />
                                            </div>
                                            <div class="fileupload-preview fileupload-exists img-thumbnail" style="max-width: 250px; max-height: 190px; line-height: 20px;"></div>
                                            <div>
                                               <span class="btn btn-default btn-file"><span class="fileupload-new">Select image</span>
                                               <span class="fileupload-exists">Change</span>
                                               <input type="file" name="image" class="file-input" /></span>
                                               <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>
                                            </div>
                                         </div>
                                      </div>
                                   </div>

                                     <div class="form-group">
                                       <label class="col-sm-3 col-lg-2 control-label">Address</label>
                                       <div class="col-sm-9 col-lg-10 controls">
                                          <textarea class="form-control" rows="3" name="address"><?php echo $user_profile['address'];?></textarea>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
                                            <input type="submit" name="Save" class="btn btn-primary" value="Submit">
                                            <a href="<?php echo $form_actionMain;?>" class="btn">Cancel</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Main Content -->
