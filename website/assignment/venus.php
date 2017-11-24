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

    <title>Venus Room</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-item.css" rel="stylesheet">
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

        <div class="row">
            <div class="col-md-9">
                <h2 class="page-header">Venus</h2>
                <div class="thumbnail">
                    <img class="img-responsive" src="WDTpictures/venus.jpg" alt="">
                    <div class="caption-full">
                        <h4 class="pull-right">RM120 (per night)</h4>
                        <h4>
                            <a href="#">Venus Room</a>
                        </h4>
                        <p>The venus feel room that gives you the hotness of the exact Venus planet.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <h3 class="page-header">Booking</h3>
                <form class="form-vertical" action="./php/booking-checkroom.php" method="post">
                    <fieldset>
                        <div class="form-group">
                            <div class="col-md-12">
                                <label>Select this Room :</label>
                                <select type="text" name="room">
                                    <option value="venus">Venus</option>
                                </select>
                                <label>Check-In Time :</label>
                                <input type="date" name="check-in-time" id="check-in-time" onchange="cal()">
                                <br></br>
                                <label>Check-Out Time :</label>
                                <input type="date" name="check-out-time" id="check-out-time" onchange="cal()">
                                <br></br>
                                <label>Days :</label>
                                <input type="text" name="days" id="days">
                                <br></br>
                                <label>Total Price (RM) :</label>
                                <input type="text" name="totalprice" id="totalprice">
                                <br></br>
                                <div class="form-group">
                                    <input type="submit" href="#" class="btn btn-success btn-lg">
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>

    </div>
    <!-- /.container -->

    <div class="container">

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

    <!-- Custom Javascript -->
    <script type="text/javascript">
        function GetDays() {
            var cit = new Date(document.getElementById("check-in-time").value);
            var cot = new Date(document.getElementById("check-out-time").value);
            return parseInt((cot - cit) / (24 * 3600 * 1000));
        }

        function cal() {
            if (document.getElementById("check-in-time")) {
                document.getElementById("days").value = GetDays();
                var oriprice = 120;
                var days = parseFloat($("#days").val());
                $("#totalprice").val(oriprice * days);
            }

        }
    </script>

</body>

</html>