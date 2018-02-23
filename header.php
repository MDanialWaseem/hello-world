<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="template language" name="keywords">
    <meta content="Tamerlan Soziev" name="author">
    <meta content="Admin dashboard html template" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="favicon.png" rel="shortcut icon">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="http://fast.fonts.net/cssapi/487b73f1-c2d1-43db-8526-db577e4c822b.css" rel="stylesheet" type="text/css">
    <link href="bower_components/select2/dist/css/select2.min.css" rel="stylesheet">
    <link href="bower_components/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link href="bower_components/dropzone/dist/dropzone.css" rel="stylesheet">
    <link href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="bower_components/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
    <link href="bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css" rel="stylesheet">
    <link href="bower_components/slick-carousel/slick/slick.css" rel="stylesheet">
    <link href="css/main9503.css?version=4.2.0" rel="stylesheet">
</head>

<body class=" with-content-panel">
    <div class="all-wrapper menu-side with-side-panel">
     

      <div class="layout-w">
            <!--------------------START - Mobile Menu-------------------->

            <div class="menu-mobile menu-activated-on-click color-scheme-dark">
                <div class="mm-logo-buttons-w">
                    <a class="mm-logo" href="dashboard.php">
                        <img src="img/logo.png">
                        <span>LBS Admin</span>
                    </a>
                    <div class="mm-buttons">
                        <div class="content-panel-open">
                            <div class="os-icon os-icon-grid-circles"></div>
                        </div>
                        <div class="mobile-menu-trigger">
                            <div class="os-icon os-icon-hamburger-menu-1"></div>
                        </div>
                    </div>
                </div>
                <div class="menu-and-user">
                    <div class="logged-user-w">
                        <div class="avatar-w">
                            <img alt="" src="img/avatar1.jpg">
                        </div>
                        <div class="logged-user-info-w">
                            <div class="logged-user-name">User Name</div>
                            <div class="logged-user-role">User Role</div>
                        </div>
                    </div>
                    <!--------------------
START - Mobile Menu List
-------------------->
                    <ul class="main-menu">
                        <li class="has-sub-menu">
                            <a href="dashboard.php">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-window-content"></div>
                                </div>
                                <span>Dashboard</span>
                            </a>
                        </li>

                         <li class="has-sub-menu">
                            <a href="pages.php">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-tasks-checked"></div>
                                </div>
                                <span>Pages</span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="pages.php">All Pages</a>
                                </li>
                                <li>
                                    <a href="add_page.php">Add New Pages
                                        <!-- <strong class="badge badge-danger">New</strong> -->
                                    </a>
                                </li>
                                                    
                               </ul>
                        </li>

                          <li class="has-sub-menu">
                            <a href="#">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-coins-4"></div>
                                </div>
                                <span>Roles</span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="roles.php">All Roles</a>
                                </li>
                                <li>
                                    <a href="add_role.php">Create
                                    </a>
                                </li>                               
                             </ul>
                        </li>


                            <li class="has-sub-menu">
                            <a href="#">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-user-male-circle"></div>
                                </div>
                                <span>Users</span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="users.php">All User</a>
                                </li>
                                <li>
                                    <a href="add_user.php">Add New
                                    </a>
                                </li>                               
                             </ul>
                        </li>





                                                                          

                            <li class="has-sub-menu">
                            <a href="#">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-phone-21   "></div>
                                </div>
                                <span>Products</span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="add_product.php">Add Products</a>
                                </li>
                               

                                                               <li>
                                    <a href="products.php">All Products
                                    </a>
                                </li>
                             </ul>
                        </li>




                              <li class="has-sub-menu">
                            <a href="#">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-ui-55   "></div>
                                </div>
                                <span>Categories</span>
                            </a>
                                <ul class="sub-menu">
                                <li>
                                    <a href="add_category.php">Add Categories</a>
                                </li>
                               
                                <li>
                                    <a href="categories.php">All Categories
                                    </a>
                                </li>
                             
                             </ul>
                        </li>


                        <li class="has-sub-menu">
                            <a href="#">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-pencil-12   "></div>
                                </div>
                                <span>Tools</span>
                            </a>
                                <ul class="sub-menu">
                                <li>
                                    <a href="#">Menu Builder</a>
                                </li>
                               
                    
                             
                             </ul>
                        </li>

                        <li class="has-sub-menu">
                            <a href="#">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-hierarchy-structure-2   "></div>
                                </div>
                                <span>Setting</span>
                            </a>
                                <ul class="sub-menu">
                                <li>
                                    <a href="#">Web Setting</a>
                                </li>

                                <li>
                                    <a href="#">Admin Setting</a>
                                </li>
                               
                             
                             </ul>
                        </li>

                    </ul>
                    <!--------------------
END - Mobile Menu List
-------------------->
                    
                </div>
            </div>
            <!--------------------
END - Mobile Menu
-------------------->
            <!--------------------
START - Menu side 
-------------------->
            <div class="desktop-menu menu-side-w menu-activated-on-click">
                <div class="logo-w">
                    <a class="logo" href="dashboard.php">
                        <div class="logo-element"></div>
                        <div class="logo-label">LBS Admin</div>
                    </a>
                </div>
                <div class="menu-and-user">
                    <div class="logged-user-w">
                        <div class="logged-user-i">
                            <div class="avatar-w">
                                <img alt="" src="img/avatar1.jpg">
                            </div>
                            <div class="logged-user-info-w">
                                <div class="logged-user-name">User Name</div>
                                <div class="logged-user-role">User Role</div>
                            </div>
                            <div class="logged-user-menu">
                                <div class="logged-user-avatar-info">
                                    <div class="avatar-w">
                                        <img alt="" src="img/avatar1.jpg">
                                    </div>
                                    <div class="logged-user-info-w">
                                        <div class="logged-user-name">User Name</div>
                                        <div class="logged-user-role">User Role</div>
                                    </div>
                                </div>
                                <div class="bg-icon">
                                    <i class="os-icon os-icon-wallet-loaded"></i>
                                </div>
                                <ul>

                                 <li>
                                        <a href="#">
                                            <i class="os-icon os-icon-signs-11"></i>
                                            <span>Lock Screen</span>
                                        </a>
                                    </li>
                                    
                                    
                                    <li>
                                        <a href="#">
                                            <i class="os-icon os-icon-signs-11"></i>
                                            <span>Logout</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <ul class="main-menu">
                        <li class="has-sub-menu">
                            <a href="dashboard.php">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-window-content"></div>
                                </div>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="has-sub-menu">
                            <a href="#">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-tasks-checked"></div>
                                </div>
                                <span>Pages</span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="pages.php">All Pages</a>
                                </li>
                                <li>
                                    <a href="add_page.php">Add New Pages
                                        <!-- <strong class="badge badge-danger">New</strong> -->
                                    </a>
                                </li>
                                                    
                               </ul>
                        </li>

                          <li class="has-sub-menu">
                            <a href="#">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-coins-4"></div>
                                </div>
                                <span>Roles</span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="roles.php">All Roles</a>
                                </li>
                                <li>
                                    <a href="add_role.php">Create
                                    </a>
                                </li>                               
                             </ul>
                        </li>


                            <li class="has-sub-menu">
                            <a href="#">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-user-male-circle"></div>
                                </div>
                                <span>Users</span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="users.php">All User</a>
                                </li>
                                <li>
                                    <a href="add_user.php">Add New
                                    </a>
                                </li>                               
                             </ul>
                        </li>





                                                                          

                            <li class="has-sub-menu">
                            <a href="#">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-phone-21   "></div>
                                </div>
                                <span>Products</span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="add_product.php">Add Products</a>
                                </li>
                                

                                                               <li>
                                    <a href="products.php">All Products
                                    </a>
                                </li>
                             </ul>
                        </li>




                              <li class="has-sub-menu">
                            <a href="#">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-ui-55   "></div>
                                </div>
                                <span>Categories</span>
                            </a>
                                <ul class="sub-menu">
                                <li>
                                    <a href="add_category.php">Add Categories</a>
                                </li>
                               
                                <li>
                                    <a href="categories.php">All Categories
                                    </a>
                                </li>
                             
                             </ul>
                        </li>


                        <li class="has-sub-menu">
                            <a href="#">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-pencil-12   "></div>
                                </div>
                                <span>Tools</span>
                            </a>
                                <ul class="sub-menu">
                                <li>
                                    <a href="#">Menu Builder</a>
                                </li>
                               
                    
                             
                             </ul>
                        </li>

                        <li class="has-sub-menu">
                            <a href="#">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-hierarchy-structure-2   "></div>
                                </div>
                                <span>Setting</span>
                            </a>
                                <ul class="sub-menu">
                                <li>
                                    <a href="#">Web Setting</a>
                                </li>

                                <li>
                                    <a href="#">Admin Setting</a>
                                </li>
                               
                             
                             </ul>
                        </li>


                        </li>
                    </ul>
                    
                </div>
            </div>
            <!--------------------
END - Menu side 
-------------------->
