<?
session_start ();
ob_start ();

require_once ("classes/constants.php");
require_once ("classes/misc.php");
require_once ("classes/DBAccess.php");
require_once ("classes/userAthentication.php");
if (($_SESSION ['admin_email'] != "")) {
	header ( "Location:	index.php?tab=home" );
}

if (isset ( $_POST ['user_password'] )) {
	if ($_POST ['email'] == "" || $_POST ['email'] == "someone@example.com") {
		$msg = '<div class="alert alert-warning">
                                            <button class="close" data-dismiss="alert">&times;</button>
                                            <strong>Warning!</strong> Please enter Email Address.
                                        </div>';
	} else if ($_POST ['user_password'] == "" || $_POST ['user_password'] == "*********") {
		$msg = '<div class="alert alert-warning">
                                            <button class="close" data-dismiss="alert">&times;</button>
                                            <strong>Warning!</strong> Please enter password.
                                        </div>';
	} else {
		$rememberme = $_POST ['rememberme'];
		$user_athentication_obj = new userAthentications ();

		$is_authorized = $user_athentication_obj->check_crm_user_athentication ( $_POST ['email'], $_POST ['user_password'], $rememberme );

		if ($is_authorized) {
			header ( "Location:	index.php?tab=home" );
			exit ();
		} else {
			$msg = '<div class="alert alert-danger">
                                            <button class="close" data-dismiss="alert">&times;</button>
                                            <strong>Error!</strong> Email or Password is incorrect.
                                        </div>';
		}
	}
}
$cookiesEmailAddress = '';
$cookiesPassword = '';

$cookiesEmailAddress = $_COOKIE ['admin_email_crm'];
$cookiesPassword = $_COOKIE ['user_password_crm'];
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title><?=SITE_NAME?> Administrative | Login</title>
       <?php include("includes/header_tags.php"); ?>
    </head>
<body class="login-page">

	<!-- BEGIN Main Content -->
	<div class="login-wrapper">

		<!-- BEGIN Login Form -->
		<form id="validation-form" action="login.php" method="post">
            <?=$msg?>
                <h3>Login to your account</h3>
			<hr />


			<div class="form-group">
				<div class="controls">
					<input id="email" type="text" <?php if($cookiesEmailAddress){?>
						value="<?php echo $cookiesEmailAddress;?>" <?php } ?>
						placeholder="Email Address" class="form-control" name="email"
						data-rule-required="true" data-rule-email="true" />
				</div>
			</div>
			<div class="form-group">
				<div class="controls">
					<input type="password" id="password" placeholder="Password"
						class="form-control" name="user_password"
						<?php if($cookiesPassword){?>
						value="<?php echo $cookiesPassword;?>" <?php }?>
						data-rule-required="true" />
				</div>
			</div>
			<div class="form-group">
				<div class="controls">
					<label class="checkbox"> <input type="checkbox" value="remember"
						name="rememberme" /> Remember me
					</label>
				</div>
			</div>
			<div class="form-group">
				<div class="controls">
					<button type="submit" class="btn btn-primary form-control">Sign In</button>
				</div>
			</div>
			<hr />
			<p class="clearfix">
				<a href="forget-pass.php" class="goto-forgot pull-right">Forgot
					Password?</a>
				<!-- <a href="#" class="goto-register pull-right">Sign up now</a> -->
			</p>
		</form>
		<!-- END Login Form -->

	</div>
	<!-- END Main Content -->

	<!--basic scripts-->
	<script
		src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="assets/jquery/jquery-2.0.3.min.js"><\/script>')</script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>

	<!--basic scripts-->

	<script src="assets/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/jquery-cookie/jquery.cookie.js"></script>

	<!--page specific plugin scripts-->
	<script type="text/javascript"
		src="assets/jquery-validation/dist/jquery.validate.min.js"></script>
	<script type="text/javascript"
		src="assets/jquery-validation/dist/additional-methods.min.js"></script>

	<!--flaty scripts-->
	<script src="js/flaty.js"></script>
	<script src="js/flaty-demo-codes.js"></script>
</body>
</html>

