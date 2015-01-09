<?php
	require_once("classes/constants.php");
	require_once("classes/DBAccess.php");
	require_once("classes/userAthentication.php");

	if( $_SESSION['user_admin'] != "" )
	{
		header("Location:	index.php?tab=home");
	}

	if( isset($_POST['email']) )
	{
		$email = $_POST['email'];
		if( $email == "" )
		{
			$msg = '<div class="alert alert-warning">
                                            <button class="close" data-dismiss="alert">&times;</button>
                                            <strong>Warning!</strong> Please enter email address.
                                        </div>';
		}
		else
		{
			$user_athentication_obj = new userAthentications();
			$user_password = $user_athentication_obj -> get_password( $email );
			if( $user_password )
			{
				$user_name = $user_athentication_obj -> get_user_name( $email );
				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

				// Additional headers
				$headers .= 'To: '.$user_name.' <'.$email.'>' . "\r\n";
				$headers .= 'From: Administration ' . "\r\n";

				$message = "Thank you for using ".SITE_NAME.". <br />Here is your login information: <br /><br />User Name: ".$user_name."<br /> Password:".$user_password."<br /><br />Regards, ".SITE_NAME.".";
				if( mail($email, SITE_NAME." Password", $message, $headers) )
				{
					$msg = ' <div class="alert alert-success">
                                            <button class="close" data-dismiss="alert">&times;</button>
                                            <strong>Success!</strong> Password is send, Please check your mail.
                                        </div>';

				}
				else
				{
					$msg = '<div class="alert alert-danger">
                                            <button class="close" data-dismiss="alert">&times;</button>
                                            <strong>Error!</strong> Mail could not be sent, please try again.
                                        </div>';
				}
			}
			else
			{
				$msg = '<div class="alert alert-danger">
                                            <button class="close" data-dismiss="alert">&times;</button>
                                            <strong>Error!</strong> Invalid Email Address.
                                        </div>';
			}
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title><?=SITE_NAME?> Administrative | Forgot Password</title>
       <?php include("includes/header_tags.php"); ?>
    </head>
<body class="login-page">

	<!-- BEGIN Main Content -->
	<div class="login-wrapper">


		<!-- BEGIN Forgot Password Form -->
		<form id="form-forgot" action="forget-pass.php" method="post">
		<?php echo $msg;?>
<br />
			<h3>Get back your password</h3>
			<hr />
			<div class="form-group">
				<div class="controls">
					<input type="text" placeholder="Enter Your Email" class="form-control" name="email" id="email" />
				</div>
			</div>
			<div class="form-group">
				<div class="controls">
					<button type="submit" class="btn btn-primary form-control">Recover</button>
				</div>
			</div>
			<hr />
			<p class="clearfix">
				<a href="login.php" class="goto-login pull-left">← Back to login form</a>
			</p>
		</form>
		<!-- END Forgot Password Form -->


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