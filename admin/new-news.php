
<?php 

    ob_start();
    require_once "functions/db.php";

    // Initialize the session

    session_start();

    // If session variable is not set it will redirect to login page

    if(!isset($_SESSION['email']) || empty($_SESSION['email'])){

      header("location: login.php");

      exit;
    }

    $email = $_SESSION['email'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/icon.png">
    <title>System Admin</title>
    <!-- Bootstrap Core CSS -->
   <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css" rel="stylesheet">
    <!-- Wizard CSS -->
    <link href="../plugins/bower_components/jquery-wizard-master/css/wizard.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="css/colors/blue.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
  <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
                 <div class="top-left-part"><a class="logo" href="index.php"><b><img src="../plugins/images/icon.png" style="width: 30px; height: 30px;" alt="home" /></b><span class="hidden-xs"><b>System</b></span></a></div>
                <ul class="nav navbar-top-links navbar-left hidden-xs">
                    <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a></li>
                    <li>
                        <form role="search" class="app-search hidden-xs">
                            <input type="text" placeholder="Search..." class="form-control"> <a href=""><i class="fa fa-search"></i></a> </form>
                    </li>
                </ul>
                <ul class="nav navbar-top-links navbar-right pull-right">
                    
                    <!-- /.dropdown -->
                    
                  
                   
                    <li class="right-side-toggle"> <a class="waves-effect waves-light" href="javascript:void(0)"><i class="ti-settings"></i></a></li>
                    <!-- /.dropdown -->
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- Left navbar-header -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                        <!-- input-group -->
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search..."> <span class="input-group-btn">
            <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
            </span> </div>
                        <!-- /input-group -->
                    </li>
                    <li class="user-pro">
                        <a href="#" class="waves-effect"><img src="../plugins/images/user.jpg" alt="user-img" class="img-circle"> <span class="hide-menu"> Account<span class="fa arrow"></span></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li><a href="settings.php"><i class="ti-settings"></i> Account Setting</a></li>
                            <li><a href="login.php"><i class="fa fa-power-off"></i> Logout</a></li>
                        </ul>
                    </li>
                    <li class="nav-small-cap m-t-10">--- Main Menu</li>
                    <li> <a href="index.php" class="waves-effect"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i> <span class="hide-menu"> Dashboard </a>
                    </li>
                   
                    
                   <li> <a href="#" class="waves-effect"><i data-icon="&#xe00b;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Updates On Disaster<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="news.php">News And Location</a></li>
                            <li><a href="new-news.php">Create News and Location</a></li>
                            
                        </ul>
                    </li> 
                   <li> <a href="#" class="waves-effect"><i data-icon="&#xe00b;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Blog<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="posts.php">All Posts</a></li>
                            <li><a href="new-post.php">Create Post</a></li>
                            <li><a href="comments.php" class="waves-effect">Comments</a>
                            </li>
                        </ul>
                    </li>
                   
                  <li> <a href="#" class="waves-effect"><i data-icon="&#xe00b;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Donation Request<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="inbox.php">Data</a></li>
                            <li><a href="generate_pdf.php">Print Form</a></li>
                            
                        </ul>
                    </li>

                    <li><a href="subscribers.php" class="waves-effect"><i data-icon="n" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Subscribers</span></a>
                    </li>
                    
                     <li class="nav-small-cap">--- Other</li>
                    <li> <a href="#" class="waves-effect"><i data-icon="H" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Access<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="users.php">Administrators</a></li>
                            <li><a href="new-user.php">Create Admin</a></li>
                            
                        </ul>
                    </li>
                    
                    <li><a href="login.php" class="waves-effect"><i class="icon-logout fa-fw"></i> <span class="hide-menu">Log out</span></a></li>
                   
                </ul>
            </div>
        </div>
        <!-- Left navbar-header end -->
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title"><?php echo $email;?></h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Posts</a></li>
                            <li class="active">New</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                       <!-- .row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">Create New Blog Post</h3>
                            <p class="text-muted m-b-30 font-13"> A blog post contains the author, title and its content.</p>
                            <div id="exampleValidator" class="wizard">
                                <ul class="wizard-steps" role="tablist">
                                    <li class="active" role="tab">
                                        <h4><span><i class="ti-user"></i></span>Updates</h4> </li>
                                    <li role="tab">
                                        <h4><span><i class="ti-marker-alt"></i></span>Address</h4> </li>
                                    <li role="tab">
                                        <h4><span><i class="ti-book"></i></span>Geolocation</h4> </li>
                                </ul>
								<?php 
								if(isset($_SESSION['success']) && $_SESSION['success'] !='')
								{
									echo '<h2 class="bg-primary text-white"> '.$_SESSION['success'].' </h2>';
									unset ($_SESSION['success']);
								}
								if(isset($_SESSION['success']) && $_SESSION['success'] !='')
								{
									echo '<h2 class="bg-danger text-white"> '.$_SESSION['success'].' </h2>';
									unset ($_SESSION['success']);
								}
								?>
                                <form id="validation" class="form-horizontal" action="functions/new_news.php" method="post" enctype="multipart/form-data">
                                    <div class="wizard-content">
                                        <div class="wizard-pane active" role="tabpanel">
                                            <div class="form-group">
                                                <label class="col-xs-3 control-label">News(<i>Type Any News Or Updates In Respect to The Information Given.</i>)</label>
                                                <div class="col-xs-5">
                                                    <input type="text" class="form-control" id="name" name="name"/></div>
                                            </div>
											<div class="form-group">
                                                <label class="col-xs-3 control-label">Address</label>
                                                <div class="col-xs-5">
                                                    <input type="text" class="form-control" id="address" name="address" required/></div>
                                            </div>
											<div class="form-group">
                                                <label class="col-xs-3 control-label">Disaster Type</label>
                                                <div class="col-xs-5">
                                                    <input type="text" class="form-control" id="type" name="type" required/>
                                                </div>
                                            </div>
											 <div class="form-group">
                                                <label class="col-xs-3 control-label">Latitude</label>
                                                <div class="col-xs-5">
                                                    <input type="text" class="form-control" id="lat" name="lat" required/>
                                                </div>
                                            </div>
											<div class="form-group">
                                                <label class="col-xs-3 control-label">Longitude</label>
                                                <div class="col-xs-5">
                                                    <input type="text" class="form-control" id="lng" name="lng" required/>
                                                </div>
                                            </div>
											<!--<div class="form-group">
                                                <label class="col-xs-3 control-label">Upload Graphs</label>
                                                <div class="col-xs-5">
                                                    <input type="file" class="form-control" id="analysis" name="analysis" required/>
                                                </div>
                                            </div>-->
											
                                        </div>
                                        <div class="wizard-pane" role="tabpanel">
                                            
                                        </div>
                                        <div class="wizard-pane" role="tabpanel">
                                           
                                        </div>
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <!-- .right-sidebar -->
                <?php include_once 'right_sidebar.php' ?>
                <!-- /.right-sidebar -->
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2021 &copy; System Admin </footer>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/dist/js/tether.min.js"></script>
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!-- Form Wizard JavaScript -->
    <script src="../plugins/bower_components/jquery-wizard-master/dist/jquery-wizard.min.js"></script>
    <!-- FormValidation -->
    <link rel="stylesheet" href="../plugins/bower_components/jquery-wizard-master/libs/formvalidation/formValidation.min.css">
    <!-- FormValidation plugin and the class supports validating Bootstrap form -->
    <script src="../plugins/bower_components/jquery-wizard-master/libs/formvalidation/formValidation.min.js"></script>
    <script src="../plugins/bower_components/jquery-wizard-master/libs/formvalidation/bootstrap.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>
    
    <!--Style Switcher -->
    <script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>
