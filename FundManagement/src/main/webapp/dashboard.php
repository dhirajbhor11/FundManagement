<?php
    session_start();
    $user_id = $_SESSION["USER_ID"];    
    $tokan = $_SESSION["TOKAN"];
    $group_name = $_SESSION["GROUP_NAME"];

?>

    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Add Member</title>
            <link href="css/bootstrap.min.css" rel="stylesheet">
            <link href="css/styl.css" rel="stylesheet">
        </head>
        <body>
<!--start header -->
        <div class="container-fluid navbar-inverse" style=" color:white;">
        <!-- get the group name;-->
        <h1 class=" text-center text-white">
<?php
    echo strtoupper($group_name); 
 ?> 
        </h1>         
        </div>
<!--end header -->
        <div>
            <nav class=" navbar-inverse" style="font-size:15px;border-top:0.5px solid white;" id="navbar">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <li class=""><a href="dashboard.php">Home</a></li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Member <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="addmember.php">Add</a></li>
                                        <li><a href="update.php">Update</a></li>
                                        <li><a href="#">Delete</a></li>
                                        <li><a href="#">View</a></li>
                                    </ul>
                            </li>
                            <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Savings <span class="caret"></span></a>
                                    <ul class="dropdown-menu ">
                                        <li><a href="addsavings.php">Add </a></li>
                                        <li><a href="#">View </a></li>
                                    </ul>
                            </li>
                            <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Get Loan<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Add EMI</a></li>
                                        <li><a href="#">View EMI</a></li>
                                        <li><a href="loand.php">New Loan</a></li>
                                    </ul>
                            </li>
                            <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Total Collection<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Total Fund</a></li>
                                        <li><a href="#">Total Loan</a></li>
                                    </ul>
                            </li>
                          </ul>
                          <ul class="nav navbar-nav navbar-right">
                            <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Log out</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

<!--end header -->
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <script src="js/myjs.js"></script>

    </body>
