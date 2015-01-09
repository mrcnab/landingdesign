<?php
	require_once("includes/ini.php");
	$module_name = isset( $_GET['module_name'] ) ? $_GET['module_name'] : "home";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?=SITE_NAME?> Administrative</title>
       <?php include("includes/header_tags.php"); ?>
    </head>
    <body>
        <!-- BEGIN Theme Setting -->
        <div id="theme-setting">
            <a href="#"><i class="fa fa-gears fa fa-2x"></i></a>
            <ul>
                <li>
                    <span>Skin</span>
                    <ul class="colors" data-target="body" data-prefix="skin-">
                        <li class="active"><a class="blue" href="#"></a></li>
                        <li><a class="red" href="#"></a></li>
                        <li><a class="green" href="#"></a></li>
                        <li><a class="orange" href="#"></a></li>
                        <li><a class="yellow" href="#"></a></li>
                        <li><a class="pink" href="#"></a></li>
                        <li><a class="magenta" href="#"></a></li>
                        <li><a class="gray" href="#"></a></li>
                        <li><a class="black" href="#"></a></li>
                    </ul>
                </li>
                <li>
                    <span>Navbar</span>
                    <ul class="colors" data-target="#navbar" data-prefix="navbar-">
                        <li class="active"><a class="blue" href="#"></a></li>
                        <li><a class="red" href="#"></a></li>
                        <li><a class="green" href="#"></a></li>
                        <li><a class="orange" href="#"></a></li>
                        <li><a class="yellow" href="#"></a></li>
                        <li><a class="pink" href="#"></a></li>
                        <li><a class="magenta" href="#"></a></li>
                        <li><a class="gray" href="#"></a></li>
                        <li><a class="black" href="#"></a></li>
                    </ul>
                </li>
                <li>
                    <span>Sidebar</span>
                    <ul class="colors" data-target="#main-container" data-prefix="sidebar-">
                        <li class="active"><a class="blue" href="#"></a></li>
                        <li><a class="red" href="#"></a></li>
                        <li><a class="green" href="#"></a></li>
                        <li><a class="orange" href="#"></a></li>
                        <li><a class="yellow" href="#"></a></li>
                        <li><a class="pink" href="#"></a></li>
                        <li><a class="magenta" href="#"></a></li>
                        <li><a class="gray" href="#"></a></li>
                        <li><a class="black" href="#"></a></li>
                    </ul>
                </li>
                <li>
                    <span></span>
                    <a data-target="navbar" href="#"><i class="fa fa-square-o"></i> Fixed Navbar</a>
                    <a class="hidden-inline-xs" data-target="sidebar" href="#"><i class="fa fa-square-o"></i> Fixed Sidebar</a>
                </li>
            </ul>
        </div>
        <!-- END Theme Setting -->

        <!-- BEGIN Navbar -->
        <div id="navbar" class="navbar">
            <button type="button" class="navbar-toggle navbar-btn collapsed" data-toggle="collapse" data-target="#sidebar">
                <span class="fa fa-bars"></span>
            </button>
            <a class="navbar-brand" href="index.php?tab=home">
                <small>
                    <i class="fa fa-desktop"></i>
                    <?=SITE_NAME?> Administrator
                </small>
            </a>
         <!-- BEGIN Navbar Buttons -->
         	<?php include("includes/notification_area.php"); ?>
         <!-- END Navbar Buttons -->
        </div>
        <!-- END Navbar -->

        <!-- BEGIN Container -->
        <div class="container" id="main-container">
            <!-- BEGIN Sidebar -->
   				<?php include("includes/left_panel.php"); ?>
            <!-- END Sidebar -->

            <!-- BEGIN Content -->
            <div id="main-content">


                  <?
	switch( $module_name )
	{
		case "home":
			echo '
			                <!-- BEGIN Page Title -->
                <div class="page-title">
                    <div>
                        <h1><i class="fa fa-file-o"></i> Dashboard</h1>
                        <h4></h4>
                    </div>
                </div>
                <!-- END Page Title -->

                <!-- BEGIN Breadcrumb -->
                <div id="breadcrumbs">
                    <ul class="breadcrumb">
                        <li class="active"><i class="fa fa-home"></i> Home</li>
                    </ul>
                </div>
                <!-- END Breadcrumb -->

			<h1>THANK YOU</h1>
			<p> For choosing <span class="td-cls"><a href="http://www.itechnologiez.com.au/" target="_blank">Landing Designs</a></span> Content Management System. We sincerely hope that this Content Management System will enable you to successfully manage your website.<br />
				In case you have any query or concern, please contact us on 00971 50 161 6456. Your feedback is extremely valuable for us.
			<br /> <br />
				<span class="td-cls1"><a href="http://www.itechnologiez.com.au/" target="_blank">The Landing Designs Team.</a></span>
			</p>';
		break;
		case "profile_settings":
			require_once("profile_settings.php");
		break;
		default:
			require_once("modules/".$module_name."/".$module_name.".php");
		break;
	}	//	End of switch( $file_name )
?>
               <?php include("includes/footer.php"); ?>
            </div>
            <!-- END Content -->
        </div>
        <!-- END Container -->
    </body>
</html>
