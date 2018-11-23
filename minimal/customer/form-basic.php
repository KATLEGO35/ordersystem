 <?php
    $errors = array();
    if (isset($_POST['order'])) {
        require('../init.php');
        // receive all input values from the form
        $nasite = mysqli_real_escape_string($db, $_POST['nasite']);
        $site = mysqli_real_escape_string($db, $_POST['site']);
        $petrol = mysqli_real_escape_string($db, $_POST['petrol']);
        $petrol_litres = mysqli_real_escape_string($db, $_POST['litresp']);
        $diesel = mysqli_real_escape_string($db, $_POST['diesel']);
        $diesel_litres = mysqli_real_escape_string($db, $_POST['litresd']);
        $address = mysqli_real_escape_string($db, $_POST['address']);



        // form validation: ensure that the form is correctly filled ...
        // by adding (array_push()) corresponding error unto $errors array


        // first check the database to make sure
        // a user does not already exist with the same username and/or email


        // Finally, register user if there are no errors in the form
        if (empty($errors)) {// if user exists
            $orderId = uniqid();

            $sql = "INSERT INTO orders (order_id, id, nasite,site, petrol, litresp, diesel, litresd, address)
                  VALUES ('$orderId', 1, '$nasite', '$site', '$petrol', '$petrol_litres', '$diesel', '$diesel_litres' ,'$address')";

            mysqli_query($db, $sql);
            header('location: success.php');
        }

    }

?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from wrappixel.com/demos/admin-templates/admin-pro/minimal/index4.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 23 Sep 2018 09:43:28 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="../image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <title>Order management system</title>
    <!-- Bootstrap Core CSS -->
    <link href="../../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <!-- This page CSS -->
    <!-- Vector CSS -->
    <link href="../../assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- chartist CSS -->
    <link href="../../assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="../../assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../css/style.css" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="../css/pages/dashboard4.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="../css/colors/default.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Order management system</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">

                <div class="navbar-collapse" style="background:#afb1be">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item hidden-xs-down search-box"> <a class="nav-link hidden-sm-down waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search & enter"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
                            </li>
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../../assets/images/users/1.jpg" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right animated flipInY">
                                <ul class="dropdown-user">
                                    <li>
                                        <div class="dw-user-box">
                                            <div class="u-img"><img src="../../assets/images/users/1.jpg" alt="user"></div>
                                            <div class="u-text">
                                                <h4>John Doe</h4>
                                                <p class="text-muted">johndoe@gmail.com</p><a href="pages-profile.html" class="btn btn-rounded btn-danger btn-sm">View Profile</a></div>
                                        </div>
                                    </li>
                                    <li><a href="#"><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>
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
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                                             <li class="nav-devider"></li>
                                             <li> <a class="has-arrow waves-effect waves-dark" href="index.php" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard </span></a>
                                            </li>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-file"></i><span class="hide-menu">My profile</span></a>
                         
                        </li>

                                      <li> <a class="has-arrow waves-effect waves-dark" href="form-basic.php" aria-expanded="false"><i class="mdi mdi-file"></i><span class="hide-menu">Order</span></a>
                          
                        </li>

                    </ul>
                </nav>
                <!-- End Sidebar navigation -->



                </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">

                    
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->

                 <div class="row">
                    <div class="col-lg-6 col-md-6">
                    <div class="card card-body">
                            <form class="form-horizontal m-t-40" action="form-basic.php" method="post">
                                <?php  if (count($errors) > 0) : ?>
                                <div class="error">
                                    <?php foreach ($errors as $error) : ?>
                                        <p><?php echo $error ?></p>
                                    <?php endforeach ?>
                                </div>
                                <?php  endif ?>


                               <div class="form-group">
                               <label for="">
                               Site name
                               </label>
                               <input type="text" class="col-md-12 custom-select" name="nasite">
                               </div>
                 
                               <div class="form-group">
                               <label for="">
                               Site
                               </label>
                               <textarea name="site" class="col-md-12 custom-select" id="" cols="30" rows="10"></textarea>
                               </div>
                               
                               <div class="form-group">
                               <label for="">
                               Petrol
                               </label>
                               <textarea name="petrol" class="col-md-12 custom-select" id="" cols="30" rows="10"></textarea>
                               </div>
                               
                               <div class="form-group">
                               <label for="">
                               Petrol litres
                               </label>
                               <textarea name="litresp" class="col-md-12 custom-select" id="" cols="30" rows="10"></textarea>
                               </div>
                               
                               <div class="form-group">
                               <label for="">
                               Diesel
                               </label>
                               <textarea name="diesel" class="col-md-12 custom-select" id="" cols="30" rows="10"></textarea>
                               </div>
                               
                               <div class="form-group">
                               <label for="">
                               Diesel litres
                               </label>
                               <textarea name="litresd" class="col-md-12 custom-select" id="" cols="30" rows="10"></textarea>
                               </div>
                               
                               <div class="form-group">
                               <label for="">
                               Address
                               </label>
                               <textarea name="address" class="col-md-12 custom-select" id="" cols="30" rows="10"></textarea>
                               </div>
                             
                               
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-offset-3 col-md-9">
                                                    <button type="submit" name="order" class="btn btn-success">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6"> </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                  </form>
                        </div>
                    </div>
                </div>

                <!-- ============================================================== -->
                <!-- End Page Content -->
                <!-- ============================================================== -->

            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer">
                © 2018
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../../assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../../assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="../../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="../js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="../../assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="../../assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="../js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <script src="../js/jasny-bootstrap.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="../../assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>

</body>


<!-- Mirrored from wrappixel.com/demos/admin-templates/admin-pro/minimal/form-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 23 Sep 2018 09:45:47 GMT -->
</html>