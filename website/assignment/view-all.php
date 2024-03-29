<?php 

    session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>All Rooms</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,400,700" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Interstellar</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a class="" href="contact.html">Contact Us</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="" href="user-profile.php">
                                    <?php
                                echo $_SESSION['user']; 
                            ?>
                                </a>
                            </li>
                            <li>
                                <a class="" href="./php/logout.php">Log Out</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Interstellar Rooms</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li class="active">All available rooms</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-6 img-portfolio">
                <a href="venus.php">
                    <img class="img-responsive img-hover" src="WDTpictures/venus.jpg" alt="">
                </a>
                <h3>
                    <a href="venus.php">Venus</a>
                </h3>
            </div>
            <div class="col-md-6 img-portfolio">
                <a href="mercury.php">
                    <img class="img-responsive img-hover" src="WDTpictures/mercury.jpg" alt="">
                </a>
                <h3>
                    <a href="mercury.php">Mercury</a>
                </h3>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-6 img-portfolio">
                <a href="mars.php">
                    <img class="img-responsive img-hover" src="WDTpictures/mars.jpeg" alt="">
                </a>
                <h3>
                    <a href="mars.php">Mars</a>
                </h3>
            </div>
            <div class="col-md-6 img-portfolio">
                <a href="moon.php">
                    <img class="img-responsive img-hover" src="WDTpictures/moon.jpg" alt="">
                </a>
                <h3>
                    <a href="moon.php">Moon</a>
                </h3>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-6 img-portfolio">
                <a href="jupiter.php">
                    <img class="img-responsive img-hover" src="WDTpictures/jupiter.jpg" alt="">
                </a>
                <h3>
                    <a href="jupiter.php">Jupiter</a>
                </h3>
            </div>
            <div class="col-md-6 img-portfolio">
                <a href="neptune.php">
                    <img class="img-responsive img-hover" src="WDTpictures/neptune.jpg" alt="">
                </a>
                <h3>
                    <a href="neptune.php">Neptune</a>
                </h3>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-6 img-portfolio">
                <a href="uranus.php">
                    <img class="img-responsive img-hover" src="WDTpictures/uranus.jpg" alt="">
                </a>
                <h3>
                    <a href="uranus.php">Uranus</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna
                    varius vitae.</p>
            </div>
            <div class="col-md-6 img-portfolio">
                <a href="saturn.php">
                    <img class="img-responsive img-hover" src="WDTpictures/saturn.jpg" alt="">
                </a>
                <h3>
                    <a href="saturn.php">Saturn</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna
                    varius vitae.</p>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Interstellar 2017</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>