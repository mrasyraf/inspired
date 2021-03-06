<!DOCTYPE html>
<html>

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title># | Bring Healty Life 4 u</title>
        <!--        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
                <link rel="icon" href="img/favicon.ico" type="image/x-icon">-->
        <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
        <link rel="manifest" href="img/manifest.json">
        <link rel="mask-icon" href="img/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="theme-color" content="#ffffff">

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">

        <!-- Toastr style -->
        <link href="css/plugins/toastr/toastr.min.css" rel="stylesheet">

        <!-- Gritter -->
        <link href="js/plugins/gritter/jquery.gritter.css" rel="stylesheet">
        <link href="css/plugins/select2/select2.min.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">

        <!--slick-->
        <link href="plugin/slick/slick.css" rel="stylesheet" type="text/css">
        <link href="plugin/slick/slick-theme.css" rel="stylesheet" type="text/css">


    </head>
    <div class="animationload">
        <div class="loader">
        </div>
    </div>
    <body>
        <div id="wrapper">
            <nav class="navbar-default navbar-static-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav metismenu" id="side-menu">
                        <li class="nav-header">
                            <div class="dropdown profile-element"> <span style="text-align: center">
                                    <img alt="image" class="img-circle" width="150px" height="150px" src="img/profile/avatar-3.png" />
                                    <!--<i class="fa fa-user fa-5x"></i>-->
                                </span>
                                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                    <span class="clear"> 
                                        <span class="block m-t-xs"> <strong class="font-bold"><?php echo $_SESSION['name'] ?></strong> <b class="caret"></b></span> 
                                    </span> 
                                </a>
                                <ul class="dropdown-menu animated fadeInLeft m-t-xs">
                                    <!--<li><a href="profile.php"><i class="fa fa-user-circle"></i> Profile</a></li>-->
                                    <!--<li class="divider"></li>-->
                                    <li><a href="logout.php"><i class="fa fa-sign-out"></i> Log Keluar</a></li>
                                </ul>
                            </div>
                            <div class="logo-element">
                                #
                            </div>
                        </li>
                        <li>
                            <a href="shop.php"><i class="fa fa-cart-plus"></i> <span class="nav-label">Halaman Utama</span></a>
                        </li>
                        <li class="active">
                            <a href="index.php"><i class="fa fa-home"></i> <span class="nav-label">Akaun Saya</span></a>
                        </li>
                        <!--                        <li>
                                                    <a href="index.php"><i class="fa fa-cart-plus"></i> <span class="nav-label">My Purchased</span> <span class="fa arrow"></span></a>
                                                    <ul class="nav nav-second-level">
                                                        <li><a href="index.php">Purchased History</a></li>
                                                    </ul>
                                                </li>-->
                        <li>
                            <a href="blank.php"><i class="fa fa-cart-plus"></i> <span class="nav-label">Pembelian Saya</span></a>
                        </li>
                        <li>
                            <a href="blank.php"><i class="fa fa-heart-o"></i> <span class="nav-label">My Wishlist</span></a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div id="page-wrapper" class="gray-bg dashbard-1">
                <div class="row border-bottom">
                    <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                        <div class="navbar-header">
                            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                            <form role="search" class="navbar-form-custom">
                                <div class="form-group">

                                </div>
                            </form>
                        </div>
                        <ul class="nav navbar-top-links navbar-right">
                            <li>
                                <span class="m-r-sm text-muted welcome-message">Log masuk sebagai <?php echo $_SESSION['username'] ?> </span>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                                    <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
                                </a>
                                <ul class="dropdown-menu dropdown-alerts">
                                    <li>
                                        <a href="mailbox.html">
                                            <div>
                                                <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                                <span class="pull-right text-muted small">4 minutes ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="profile.html">
                                            <div>
                                                <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                                <span class="pull-right text-muted small">12 minutes ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="grid_options.html">
                                            <div>
                                                <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                                <span class="pull-right text-muted small">4 minutes ago</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
