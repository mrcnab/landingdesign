<?php
require_once ("includes/ini.php");
$form_action = "index.php?module_name=profile_settings&tab=account";
$randNumber = $helperClass->generateAutoString ( 25 );

if (isset ( $_POST ['editInformation'] )) {
	$data ['user_name'] = $_POST ['user_name'];
	$data ['first_name'] = $_POST ['first_name'];
	$data ['last_name'] = $_POST ['last_name'];
	$data ['phoneNumber'] = $_POST ['phoneNumber'];
	$data ['address'] = $_POST ['address'];
	$data ['modifieddate'] = date ( 'Y-m-d H:i:s' );
	$is_saved = $helperClass->updateQuery ( $data, CRM_USERS, 'email_address', $_POST ['email_address'] );
	$msg = $is_saved ? header ( "location:  " . $form_action . "&msg=1" ) : header ( "location:  " . $form_action . "&msg=2" );
}

if (isset ( $_POST ['updatePicture'] )) {
	if ($_FILES ['image'] ['name'] != '') {
		$uploaddir = "../image/data/profile_management/";
		if (! is_dir ( $uploaddir ))
			mkdir ( $uploaddir, 0777 );
		$photo = $uploaddir . str_replace ( " ", "", $randNumber . $_FILES ['image'] ['name'] );
		$photo1 = "data/profile_management/" . str_replace ( " ", "", $randNumber . $_FILES ['image'] ['name'] );
		move_uploaded_file ( $_FILES ['image'] ['tmp_name'], $photo );

		$dataimage['image'] = $photo1;
		$is_saved = $helperClass->updateQuery ( $dataimage, CRM_USERS, 'email_address', $_POST ['email_address'] );
		$msg = $is_saved ? header ( "location:  " . $form_action . "&msg=1" ) : header ( "location:  " . $form_action . "&msg=2" );
	}else{
		$msg = header ( "location:  " . $form_action . "&msg=2" );
	}
}


if( isset( $_POST['updatePassword'] ) )
{
	$passwordCheck	=	$helperClass->validationExistingPassword($_POST['old_password'],'password','email_address',CRM_USERS,$user_profile ['email_address']);
	if($passwordCheck == 0){
		$msg = header ( "location:  " . $form_action . "&msg=2" );
	}else if($_POST['password']  != $_POST['password_confirm']){
		$msg = header ( "location:  " . $form_action . "&msg=2" );
	}else{
		$data['password'] = $_POST['password_confirm'];
		$is_saved = $helperClass -> updateQuery( $data,CRM_USERS, "email_address", $user_profile ['email_address'] );
		$msg = $is_saved ? header ( "location:  " . $form_action . "&msg=1" ) : header ( "location:  " . $form_action . "&msg=2" );
	}
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
$user_profile = $helperClass->selectRecord('email_address',  $_SESSION['admin_email'], CRM_USERS);
if ($user_profile ['image'] != '') {
	$imageThumb = $helperClass->resize ( $user_profile ['image'], PROFILE_BIG_WIDTH, PROFILE_BIG_HEIGHT );
	$imageThumbBottom = $helperClass->resize ( $user_profile ['image'], LISTING_THUMB_WIDTH, LISTING_THUMB_HEIGH );
} else {
	$imageThumb = $helperClass->resize ( NO_IMAGE_MEMBER_PATH, PROFILE_BIG_WIDTH, PROFILE_BIG_HEIGHT );
}
?>

<!-- BEGIN Page Title -->
<div class="page-title">
	<div>
		<h1>
			<i class="fa fa-file-o"></i> Account Settings
		</h1>
		<h4>Your Profile</h4>
	</div>
</div>
<!-- END Page Title -->

<!-- BEGIN Breadcrumb -->
<div id="breadcrumbs">
	<ul class="breadcrumb">
		<li><i class="fa fa-home"></i> <a href="index.html">Home</a> <span
			class="divider"><i class="fa fa-angle-right"></i></span></li>
		<li class="active">User Profile</li>
	</ul>
</div>
<!-- END Breadcrumb -->

<!-- BEGIN Main Content -->
<div class="row">

	<div class="col-md-12">
                     <?php echo $msg;?>
                        <div class="box">
			<div class="box-title">
				<h3>
					<i class="fa fa-file"></i> Profile Info
				</h3>
				<div class="box-tool">
					<a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
					<a data-action="close" href="#"><i class="fa fa-times"></i></a>
				</div>
			</div>
			<div class="box-content">
				<div class="row">
					<div class="col-md-3">
						<img class="img-responsive img-thumbnail"
							src="<?php echo $imageThumb;?>" alt="profile picture" /> <br />
						<br />
					</div>
					<div class="col-md-9 user-profile-info">
						<p>
							<span>User Type:</span> <?php echo $_SESSION['admin_type'];?></p>
						<p>
						<p>
							<span>User Name:</span> <?php echo $user_profile ['user_name'];?></p>
						<p>
						<p>
							<span>First Name:</span> <?php echo $user_profile ['first_name'];?></p>
						<p>
							<span>Last Name:</span> <?php echo $user_profile ['last_name'];?></p>
						<p>
							<span>Phone Number:</span> <?php echo $user_profile ['phoneNumber'];?></p>
						<p>
							<span>Email:</span> <a
								href="mailto:<?php echo $user_profile ['email_address'];?>"><?php echo $user_profile ['email_address'];?></a>
						</p>
						<p>
							<span>Address:</span> <?php echo $user_profile['address'];?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<div class="box box-pink">
			<div class="box-title">
				<h3>
					<i class="fa fa-file"></i> Edit Profile
				</h3>
				<div class="box-tool">
					<a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
					<a data-action="close" href="#"><i class="fa fa-times"></i></a>
				</div>
			</div>
			<div class="box-content">
				<form action="<?php echo $form_action;?>" method="post"
					class="form-horizontal">
					<input type="hidden" name=email_address
						value="<?php echo $user_profile ['email_address'];?>">
					<div class="form-group">
						<label class="col-sm-3 col-lg-2 control-label">Email Address</label>
						<div class="col-sm-9 col-lg-10 controls">
							<input type="text"
								value="<?php echo $user_profile ['email_address'];?>"
								class="form-control" disabled />
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 col-lg-2 control-label">User Name</label>
						<div class="col-sm-9 col-lg-10 controls">
							<input type="text"
								value="<?php echo $user_profile ['user_name'];?>"
								name="user_name" class="form-control" />
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 col-lg-2 control-label">First Name</label>
						<div class="col-sm-9 col-lg-10 controls">
							<input type="text"
								value="<?php echo $user_profile ['first_name'];?>"
								name="first_name" class="form-control" />
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 col-lg-2 control-label">Last Name</label>
						<div class="col-sm-9 col-lg-10 controls">
							<input type="text"
								value="<?php echo $user_profile ['last_name'];?>"
								name="last_name" class="form-control" />
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-3 col-lg-2 control-label">Phone Number</label>
						<div class="col-sm-9 col-lg-10 controls">
							<input type="text"
								value="<?php echo $user_profile ['phoneNumber'];?>"
								name="phoneNumber" class="form-control" />
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
							<button type="submit" name="editInformation"
								class="btn btn-primary">Submit</button>
							<button type="button" class="btn">Cancel</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-6">
		<div class="box box-orange">
			<div class="box-title">
				<h3>
					<i class="fa fa-file"></i> Edit Profile Picture
				</h3>
				<div class="box-tool">
					<a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
					<a data-action="close" href="#"><i class="fa fa-times"></i></a>
				</div>
			</div>
			<div class="box-content">
				<form action="<?php echo $form_action;?>" method="post"
					enctype="multipart/form-data" class="form-horizontal">
					<input type="hidden" name=email_address
						value="<?php echo $user_profile ['email_address'];?>">
					<div class="form-group">
						<label class="col-sm-3 col-md-4 control-label">Image Upload</label>
						<div class="col-sm-9 col-md-8 controls">
							<div class="fileupload fileupload-new" data-provides="fileupload">
								<div class="fileupload-new img-thumbnail"
									style="width: 200px; height: 150px;">
									<img src="<?php echo $imageThumbBottom;?>" alt="" />
								</div>
								<div class="fileupload-preview fileupload-exists img-thumbnail"
									style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
								<div>
									<span class="btn btn-file"><span class="fileupload-new">Select
											image</span> <span class="fileupload-exists">Change</span> <input
										type="file" class="default" name="image" /></span>

								</div>
							</div>

						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-9 col-sm-offset-3 col-md-8 col-md-offset-4">
							<button type="submit" name="updatePicture"
								class="btn btn-primary">Submit</button>
							<button type="button" class="btn">Cancel</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="box box-red">
			<div class="box-title">
				<h3>
					<i class="fa fa-file"></i> Change Password
				</h3>
				<div class="box-tool">
					<a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
					<a data-action="close" href="#"><i class="fa fa-times"></i></a>
				</div>
			</div>
			<div class="box-content">
				<form action="<?php echo $form_action;?>" method="post" class="form-horizontal validatedForm">
				<input type="hidden" name=email_address
						value="<?php echo $user_profile ['email_address'];?>">
					<div class="form-group">
						<label class="col-sm-4 col-md-5 control-label">Current password</label>

						<div class="col-sm-8 col-md-7 controls">
							<input type="password" name="old_password" class="form-control"  onblur="validationPasswordField(this.value,'password','<?php echo CRM_USERS;?>','email_address','<?php echo $user_profile ['email_address'];?>');"/>
							<span class="help-inline"  id="user_password" ></span>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-4 col-md-5 control-label">New password</label>
						<div class="col-sm-8 col-md-7 controls">
							<input type="password" class="form-control" name="password" id="password"/>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-4 col-md-5 control-label">Re-type new
							password</label>
						<div class="col-sm-8 col-md-7 controls">
							<input type="password" class="form-control" name="password_confirm" id="password_confirm" />
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-8 col-sm-offset-4 col-md-7 col-md-offset-5">
							<button type="submit" name="updatePassword" class="btn btn-primary">Submit</button>
							<button type="button" class="btn">Cancel</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- END Main Content -->
<script type="text/javascript"><!--
function validationPasswordField(input_value, filed_name, table_name,user_email,email_address){
	$("#user_password").load("<?php echo SITE_HOME_URL;?>/ajax_files/validation_password.php?input_value="+input_value+"&filed_name="+filed_name+"&table_name="+table_name+"&user_email="+user_email+"&email_address="+email_address);
}

$('.validatedForm').validate({
	rules : {
		password : {
			minlength : 5
		},
		password_confirm : {
			minlength : 5,
			equalTo : "#password"
		}
	}
});
//--></script>
