<?php include 'init.php' ?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- Tell the browser to be responsive to screen width -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- Favicon icon -->
      <!--    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">-->
      <title>Nee Swarth</title>
      <!-- Custom CSS -->
      <link href="assets/extra-libs/c3/c3.min.css" rel="stylesheet">
      <link href="assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
      <link href="assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
      <!-- Custom CSS -->
      <link href="dist/css/style.min.css" rel="stylesheet">
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <style>
         label {
         cursor: pointer;
         /* Style as you please, it will become the visible UI component. */
         }
         #upload-photo {
         opacity: 0;
         position: absolute;
         z-index: -1;
         }
      </style>
   </head>
   <body>
      <!-- ============================================================== -->
      <!-- Preloader - style you can find in spinners.css -->
      <!-- ============================================================== -->
      <div class="preloader">
         <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
         </div>
      </div>
      <!-- ============================================================== -->
      <!-- Main wrapper - style you can find in pages.scss -->
      <!-- ============================================================== -->
      <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
         data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
      <!-- ============================================================== -->
      <!-- Topbar header - style you can find in pages.scss -->
      <!-- ============================================================== -->
      <header class="topbar" data-navbarbg="skin6">
         <nav class="navbar top-navbar navbar-expand-md">
            <div class="navbar-header" data-logobg="skin6">
               <!-- This is for the sidebar toggle which is visible on mobile only -->
               <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                  class="ti-menu ti-close"></i></a>
               <!-- ============================================================== -->
               <!-- Logo -->
               <!-- ============================================================== -->
               <div class="navbar-brand">
               <img src="assets/images/new_mpb_logo.png" alt="homepage" style="height: 100%;">
               </div>
               <!-- ============================================================== -->
               <!-- End Logo -->
               <!-- ============================================================== -->
               <!-- ============================================================== -->
               <!-- Toggle which is visible on mobile only -->
               <!-- ============================================================== -->
               <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                  data-toggle="collapse" data-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                  class="ti-more"></i></a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class="navbar-collapse collapse" id="navbarSupportedContent">
               <!-- ============================================================== -->
               <!-- toggle and nav items -->
               <!-- ============================================================== -->
               <ul class="navbar-nav float-left mr-auto ml-3 pl-1">
                  <!-- ============================================================== -->
               </ul>
               <!-- ============================================================== -->
               <!-- Right side toggle and nav items -->
               <!-- ============================================================== -->
               <ul class="navbar-nav float-right">
                  <!-- ============================================================== -->
                  <!-- Search -->
                  <!-- ============================================================== -->
<!--
                  <li class="nav-item d-none d-md-block">
                     <a class="nav-link" href="javascript:void(0)">
                        <form>
                           <div class="customize-input">
                              <input class="form-control custom-shadow custom-radius border-0 bg-white"
                                 type="search" placeholder="Search" aria-label="Search">
                              <i class="form-control-icon" data-feather="search"></i>
                           </div>
                        </form>
                     </a>
                  </li>
-->
                  <!-- ============================================================== -->
                  <!-- User profile and search -->
                  <!-- ============================================================== -->
<!--
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                     <img src="assets/images/users/profile-pic.jpg" alt="user" class="rounded-circle"
                        width="40">
                     <span class="ml-2 d-none d-lg-inline-block"><span>Hello,</span> <span
                        class="text-dark">Admin</span> <i data-feather="chevron-down"
                        class="svg-icon"></i></span>
                     </a>
                     <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                        <a class="dropdown-item" href="javascript:void(0)"><i data-feather="power"
                           class="svg-icon mr-2 ml-1"></i>
                        Logout</a>
                     </div>
                  </li>
-->
                  <!-- ============================================================== -->
                  <!-- User profile and search -->
                  <!-- ============================================================== -->
               </ul>
            </div>
         </nav>
      </header>
      <!-- ============================================================== -->
      <!-- End Topbar header -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <aside class="left-sidebar" data-sidebarbg="skin6">
         <!-- Sidebar scroll-->
         <div class="scroll-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
               <ul id="sidebarnav">
                  <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="index.php"
                     aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                     class="hide-menu">Dashboard</span></a></li>
                  <li class="list-divider"></li>
                  <li class="nav-small-cap"><span class="hide-menu">Control Header Products</span></li>
                  <li class="sidebar-item">
                     <a class="sidebar-link has-arrow" href="javascript:void(0)"
                        aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span
                        class="hide-menu">Options</span></a>
                     <ul aria-expanded="false" class="collapse  first-level base-level-line">
                        <li class="sidebar-item"><a href="addHeaderProducts.php" class="sidebar-link"><span
                           class="hide-menu">Add products
                           </span></a>
                        </li>
                        <li class="sidebar-item"><a href="modifyHaderProducts.php" class="sidebar-link"><span
                           class="hide-menu"> Modify products
                           </span></a>
                        </li>
                     </ul>
                  </li>
                  <li class="list-divider"></li>
                  <li class="nav-small-cap"><span class="hide-menu">Control Crousal Images</span></li>
                  <li class="sidebar-item">
                     <a class="sidebar-link has-arrow" href="javascript:void(0)"
                        aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span
                        class="hide-menu">Options</span></a>
                     <ul aria-expanded="false" class="collapse  first-level base-level-line">
                        <li class="sidebar-item"><a href="addCrousalImages.php" class="sidebar-link"><span
                           class="hide-menu">Add Images
                           </span></a>
                        </li>
                        <li class="sidebar-item"><a href="modifyCrousalImages.php" class="sidebar-link"><span
                           class="hide-menu"> Modify Images
                           </span></a>
                        </li>
                     </ul>
                  </li>
                  <li class="list-divider"></li>
                  <li class="nav-small-cap"><span class="hide-menu">Control Product Categories</span></li>
                  <li class="sidebar-item">
                     <a class="sidebar-link has-arrow" href="javascript:void(0)"
                        aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span
                        class="hide-menu">Options</span></a>
                     <ul aria-expanded="false" class="collapse  first-level base-level-line">
                        <li class="sidebar-item"><a href="addCategory.php" class="sidebar-link"><span
                           class="hide-menu">Add category
                           </span></a>
                        </li>
                        <li class="sidebar-item"><a href="manageCategories.php" class="sidebar-link"><span
                           class="hide-menu"> Manage categories
                           </span></a>
                        </li>
                     </ul>
                  </li>
                  <li class="list-divider"></li>
                  <li class="nav-small-cap"><span class="hide-menu">Control Products Page</span></li>
                  <li class="sidebar-item">
                     <a class="sidebar-link has-arrow" href="javascript:void(0)"
                        aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span
                        class="hide-menu">Options</span></a>
                     <ul aria-expanded="false" class="collapse  first-level base-level-line">
                        <li class="sidebar-item"><a href="addProduct.php" class="sidebar-link"><span
                           class="hide-menu">Add Product
                           </span></a>
                        </li>
<!--
                        <li class="sidebar-item"><a href="manageCategories.php" class="sidebar-link"><span
                           class="hide-menu"> Manage categories
                           </span></a>
                        </li>
-->
                     </ul>
                  </li>
                  <li class="list-divider"></li>
                  <li class="nav-small-cap"><span class="hide-menu">Control Notification Categories</span></li>
                  <li class="sidebar-item">
                     <a class="sidebar-link has-arrow" href="javascript:void(0)"
                        aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span
                        class="hide-menu">Options</span></a>
                     <ul aria-expanded="false" class="collapse  first-level base-level-line">
                        <li class="sidebar-item"><a href="sendNotificationEveryone.php" class="sidebar-link"><span
                           class="hide-menu">To Everyone</span></a>
                        </li>
                        <li class="sidebar-item"><a href="manageCategories.php" class="sidebar-link"><span
                           class="hide-menu">Product Wise</span></a>
                        </li>
                        <li class="sidebar-item"><a href="manageCategories.php" class="sidebar-link"><span
                           class="hide-menu">Single User</span></a>
                        </li>
                     </ul>
                  </li>
               </ul>
            </nav>
            <!-- End Sidebar navigation -->
         </div>
         <!-- End Sidebar scroll-->
      </aside>
      <!-- ============================================================== -->
      <!-- End Left Sidebar - style you can find in sidebar.scss  -->