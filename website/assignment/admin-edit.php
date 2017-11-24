<?php 

    session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <title>Edit User Page</title>
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
    <!-- Step 1: use PHP to read database -->

    <?php

    /* a. get is from URL */
    $uid = $_GET['id'];
    // b. connect to database 
    include("./php/connection.php");
    //c. write the sql query
    $sql = "SELECT * FROM users WHERE id = $uid";
    //d. execute the sql query
    $result = mysqli_query($conn, $sql);
    //e. get the data from the database into array
    if($rows=mysqli_fetch_array($result))
    {
?>
        <!-- Step 2: use HTML Form and PHP to display the resut -->
        <form method="POST" action="update.php">
            <table style="text-align: left;">
                <tr>
                    <th width="200px">ID</th>
                    <td>
                        <input type="text" value="<?php echo $uid;?>" name="uid" readonly>
                    </td>
                </tr>
                <tr>
                    <th>Name:</th>
                    <td width "300px">
                        <input type="text" name="name" value="<?php echo $rows['username']?>" require>
                    </td>
                </tr>
                <tr>
                    <th>Email:</th>
                    <td>
                        <input type="text" name="email" value="<?php echo $rows['email']?>" require>
                    </td>
                </tr>
                <!-- add a update button for this page -->
                <tr>
                    <td colspan="2">
                        <br>
                        <input type="submit" value="Update" />&nbsp;&nbsp;
                        <input type="submit" value="Back to Previous Page" formaction="view.php">
                    </td>
                </tr>
            </table>
        </form>
</body>
<?php 
    }
    else
    {
        die("<script>alert('No such user'); window.location.href='admin.php'</script>");
    }
?>

</html>