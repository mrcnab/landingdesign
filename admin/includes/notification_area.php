<?php //print_r($user_profile);
$user_profile = $helperClass->selectRecord('email_address',  $_SESSION['admin_email'], CRM_USERS);
if ($user_profile ['image'] != '') {
	$imageThumbMain = $helperClass->resize ( $user_profile ['image'], PROFILE_TOP_WIDTH, PROFILE_TOP_HEIGHT );
} else {
	$imageThumbMain = $helperClass->resize ( NO_IMAGE_MEMBER_PATH, PROFILE_TOP_WIDTH, PROFILE_TOP_HEIGHT );
}
$ndata = array(
		'sort'            => 'enquiry_id',
		'order'           => 'desc'
);
$notirows	=	$helperClass->selectRows(CONTACT_US, 'status', '1',$ndata);
$noticount	=	$helperClass->selectCountAsTotal( 'status', '1', CONTACT_US);

$offshoreOrderCount	=	$helperClass->selectCountAsTotal( 'offshore_order_status', '1', OFFSHORE_ORDER);
$bankOrderCount	=	$helperClass->selectCountAsTotal( 'bank_order_status', '1', BANK_ORDER);
$shelfOrderCount	=	$helperClass->selectCountAsTotal( 'shelf_order_status', '1', SHELF_ORDER);
$trustOrderCount	=	$helperClass->selectCountAsTotal( 'trust_order_status', '1', TRUST_ORDER);
$totalCount	=	$offshoreOrderCount['total'] + $bankOrderCount['total'] + $shelfOrderCount['total'] + $trustOrderCount['total'];
?>
            <ul class="nav flaty-nav pull-right">



                <!-- BEGIN Button Messages -->
                <li class="hidden-xs">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="fa fa-envelope"></i>
                        <span class="badge badge-success"><?php echo $noticount['total'];?></span>
                    </a>

                    <!-- BEGIN Messages Dropdown -->
                    <ul class="dropdown-navbar dropdown-menu">
                        <li class="nav-header">
                            <i class="fa fa-comments"></i>
                            <?php echo $noticount['total'];?> New Contact Us Messages
                        </li>
						<?php foreach($notirows as $row){?>
                        <li class="msg">
                            <a href="index.php?module_name=contact_management&file_name=view_contact&tab=contact&enquiry_id=<?php echo base64_encode($row['enquiry_id']);?>">
                                <img src="img/demo/avatar/avatar.png" alt="<?php echo $row['fullName'];?>" />
                                <div>
                                    <span class="msg-title"><?php echo $row['fullName'];?></span>
                                    <span class="msg-time">
                                        <i class="fa fa-clock-o"></i>
                                        <span><?php echo $helperClass->facebook_style_date_time(strtotime($row['addeddate']));?></span>
                                    </span>
                                </div>
                                <p><?php echo substr($row['enquiry'],0,115)."...";?></p>
                            </a>
                        </li>
						<?php } ?>
                        <li class="more">
                            <a href="index.php?module_name=contact_management&file_name=manage_contacts&tab=contact">See all messages</a>
                        </li>
                    </ul>
                    <!-- END Notifications Dropdown -->
                </li>
                <!-- END Button Messages -->

                <!-- BEGIN Button User -->
                <li class="user-profile">
                    <a data-toggle="dropdown" href="#" class="user-menu dropdown-toggle">
                        <img class="nav-user-photo" src="<?php echo $imageThumbMain;?>" alt="<?php echo $user_profile['first_name'];?>" />
                        <span class="hhh" id="user_info">
                            <?php echo $user_profile['user_name'];?>
                        </span>
                        <i class="fa fa-caret-down"></i>
                    </a>

                    <!-- BEGIN User Dropdown -->
                    <ul class="dropdown-menu dropdown-navbar" id="user_menu">
                        <li class="nav-header">
                            <i class="fa"></i>
                            Logined as <?php echo $_SESSION['admin_type'];?>
                        </li>

                        <li>
                            <a href="index.php?module_name=profile_settings&tab=accounts">
                                <i class="fa fa-cog"></i>
                                Account Settings
                            </a>
                        </li>
						<?php if($_SESSION['admin_type'] == 'admin'){?>
                        <li>
                            <a href="index.php?module_name=profile_management&file_name=add_profile&tab=account">
                                <i class="fa fa-user"></i>
                                Add New User
                            </a>
                        </li>
						<?php } ?>
                        <li>
                            <a href="#">
                                <i class="fa fa-question"></i>
                                Help
                            </a>
                        </li>

                        <li class="divider visible-xs"></li>

                        <li class="visible-xs">
                            <a href="#">
                                <i class="fa fa-tasks"></i>
                                Tasks
                                <span class="badge badge-warning">4</span>
                            </a>
                        </li>
                        <li class="visible-xs">
                            <a href="#">
                                <i class="fa fa-bell"></i>
                                Notifications
                                <span class="badge badge-important">8</span>
                            </a>
                        </li>
                        <li class="visible-xs">
                            <a href="#">
                                <i class="fa fa-envelope"></i>
                                Messages
                                <span class="badge badge-success">5</span>
                            </a>
                        </li>

                        <li class="divider"></li>

                        <li>
                            <a href="index.php?action=logout">
                                <i class="fa fa-off"></i>
                                Logout
                            </a>
                        </li>
                    </ul>
                    <!-- BEGIN User Dropdown -->
                </li>
                <!-- END Button User -->
            </ul>
