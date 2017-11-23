<?php 

    session_start();
    include("./php/connection.php");
    $sql = "SELECT * FROM rooms";
?>

<!DOCTYPE>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Interstellar Admin Page</title>

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
                <a class="navbar-brand" href="admin.php">Admin Page</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a class="" href="admin.php">View Registered Users</a>
                    </li>
                    <li class="active">
                        <a class="" href="view-booking.php">View Bookings</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="" href="admin-profile.php">
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

        <!-- Hotel List Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Registered User List</h2>
                <div class="table-responsive table-striped">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>BookingID</th>
                                <th>Username</th>
                                <th>Room Name</th>
                                <th>Check In Time</th>
                                <th>Check Out Time</th>
                                <th>Number of Days Booked</th>
                                <th>Total Price</th>
                                <th>Day of Booking</th>
                            </tr>
                        </thead>
                        <?php 
                            
                            $result = mysqli_query($conn2, $sql);

                            if(mysqli_num_rows($result)<=0)
                            {
                                die("<script>alert('No data from database!');</script>");
                            }

                            while($rows = mysqli_fetch_array($result))
                            {
                                echo "<tr>";
                                echo "<td>".$rows['bookID']."</td>";
                                echo "<td>".$rows['bookedUser']."</td>";
                                echo "<td>".$rows['roomName']."</td>";
                                echo "<td>".$rows['checkInTime']."</td>";
                                echo "<td>".$rows['checkOutTime']."</td>";                                
                                echo "<td>".$rows['days']."</td>";
                                echo "<td>".$rows['totalprice']."</td>";
                                echo "<td>".$rows['bookDay']."</td>";
                                
                                echo "</tr>";
                            }
                            ?>
                    </table>

                </div>
            </div>

            <hr>

            <!-- Footer -->
            <footer>
                <div class="row">
                    <div class="col-lg-12">
                        <p>Copyright &copy; Your Website 2014</p>
                    </div>
                </div>
            </footer>
        </div>
        <!-- Log In Modal -->
        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

</body>

</html>