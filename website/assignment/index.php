<?php 

    session_start();

?>

<!DOCTYPE>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Interstellar</title>

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
                <a class="navbar-brand" href="index.php">Interstellar</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a class="" href="contact.php">Contact Us</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a>
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

    <!-- Full Image Header -->
    <header class="masthead">
        <div class="container">
            <form class="" action="index.html" method="post">
                <div class="form-group">
                    <input id="search-input" class="form-control" type="text" name="search-input" value="" placeholder="Search hotels">
                </div>
            </form>
        </div>
    </header>

    <!-- Page Content -->
    <div class="container">

        <!-- Hotel List Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Places to Stay
                    <a id="view-all-link" href="view-all.html">View all</a>
            </div>
            </h2>
        </div>
        <div class="col-md-12">
            <div id="myCarousel" class="carousel slide">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                </ol>

                <!-- Carousel Items -->
                <div class="carousel-inner">
                    <!-- item active -->
                    <div class="item active">
                        <div class="row">
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <a href="venus.php" class="thumbnail">
                                    <img style="width: 100%;" src="WDTpictures/venus.jpg" alt="">
                                    <div class="caption">
                                        Venus
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <a href="mercury.php" class="thumbnail">
                                    <img style="width: 100%;" src="WDTpictures/mercury.jpg" alt="">
                                    <div class="caption">
                                        Mercury
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <a href="mars.php" class="thumbnail">
                                    <img style="width: 100%;" src="WDTpictures/mars.jpeg" alt="">
                                    <div class="caption">
                                        Mars
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <a href="moon.php" class="thumbnail">
                                    <img style="width: 100%;" src="WDTpictures/moon.jpg" alt="">
                                    <div class="caption">
                                        Moon
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- item 2 -->
                    <div class="item">
                        <div class="row">
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <a href="jupiter.php" class="thumbnail">
                                    <img style="width: 100%;" src="WDTpictures/jupiter.jpg" alt="">
                                    <div class="caption">
                                        Jupiter
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <a href="neptune.php" class="thumbnail">
                                    <img style="width: 100%;" src="WDTpictures/neptune.jpg" alt="">
                                    <div class="caption">
                                        Neptune
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <a href="uranus.php" class="thumbnail">
                                    <img style="width: 100%;" src="WDTpictures/uranus.jpg" alt="">
                                    <div class="caption">
                                        Uranus
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <a href="saturn.php" class="thumbnail">
                                    <img style="width: 100%;" src="WDTpictures/saturn.jpg" alt="">
                                    <div class="caption">
                                        Saturn
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- carousel navigator -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <i class="fa fa-chevron-left chevron"></i>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <i class="fa fa-chevron-right chevron"></i>
                </a>
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
    </div>
    <!-- Log In Modal -->
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>