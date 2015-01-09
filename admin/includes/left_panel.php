    <!-- BEGIN Sidebar -->
            <div id="sidebar" class="navbar-collapse collapse">
                <!-- BEGIN Navlist -->
                <ul class="nav nav-list">
                    <!-- BEGIN Search Form -->
                    <li style="display:none">
                        <form target="#" method="GET" class="search-form">
                            <span class="search-pan">
                                <button type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                                <input type="text" name="search" placeholder="Search ..." autocomplete="off" />
                            </span>
                        </form>
                    </li>
                    <!-- END Search Form -->
                    <li <? echo ((isset($_REQUEST['tab']) && $_REQUEST['tab'] == "home") )?" class='active'":""; ?>>
                        <a href="index.php?tab=home">
                            <i class="fa fa-dashboard"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
					 <li <? echo ((isset($_REQUEST['tab']) && $_REQUEST['tab'] == "content") )?" class='active'":""; ?>>
                        <a href="#" class="dropdown-toggle">
                            <i class="fa fa-file-text-o"></i>
                            <span>Content Pages </span>
                            <b class="arrow fa fa-angle-right"></b>
                        </a>

                        <!-- BEGIN Submenu -->
                        <ul class="submenu">
                            <li><a href="index.php?module_name=content_management&file_name=manage_contents&tab=content">Manage Pages Content</a></li>
                        </ul>
                        <!-- END Submenu -->
                    </li>

					 <li <? echo ((isset($_REQUEST['tab']) && $_REQUEST['tab'] == "product") )?" class='active'":""; ?>>
                        <a href="index.php?module_name=product_management&file_name=manage_all&tab=product" class="dropdown-toggle">
                            <i class="fa fa-file-text-o"></i>
                            <span>Projects</span>
                        </a>
                    </li>
                     <li <? echo ((isset($_REQUEST['tab']) && $_REQUEST['tab'] == "brand") )?" class='active'":""; ?>>
                        <a href="index.php?module_name=brand_management&file_name=manage_all&tab=brand" class="dropdown-toggle">
                            <i class="fa fa-file-text-o"></i>
                            <span>Brands</span>
                        </a>
                    </li>

                     <li <? echo ((isset($_REQUEST['tab']) && $_REQUEST['tab'] == "account") )?" class='active'":""; ?> <?php if($_SESSION['admin_type'] != 'admin'){?> style="display: none;" <?php }?>>
                        <a href="#" class="dropdown-toggle">
                            <i class="fa fa-user"></i>
                            <span>Users Management</span>
                            <b class="arrow fa fa-angle-right"></b>
                        </a>

                        <!-- BEGIN Submenu -->
                        <ul class="submenu">
                            <li><a href="index.php?module_name=profile_management&file_name=add_profile&tab=account">Add New User</a></li>
                            <li><a href="index.php?module_name=profile_management&file_name=manage_profiles&tab=account">Manage Users</a></li>
                        </ul>
                        <!-- END Submenu -->
                    </li>

                    <li  style="display: ;"  <? echo ((isset($_REQUEST['tab']) && $_REQUEST['tab'] == "settings") )?" class='active'":""; ?> <?php if($_SESSION['admin_type'] != 'admin'){?> style="display: none;" <?php }?>>
                        <a href="#" class="dropdown-toggle">
                            <i class="fa fa-user"></i>
                            <span>Settings</span>
                            <b class="arrow fa fa-angle-right"></b>
                        </a>

                        <!-- BEGIN Submenu -->
                        <ul class="submenu">
                            <li><a href="index.php?module_name=manage_modules&amp;tab=settings">Manage Modules</a></li>
                        </ul>
                        <!-- END Submenu -->
                    </li>


                </ul>
                <!-- END Navlist -->

                <!-- BEGIN Sidebar Collapse Button -->
                <div id="sidebar-collapse" class="visible-lg">
                    <i class="fa fa-angle-double-left"></i>
                </div>
                <!-- END Sidebar Collapse Button -->
            </div>
            <!-- END Sidebar -->
