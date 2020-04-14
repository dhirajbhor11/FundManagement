
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
            <title>View Savings</title>
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

                <!---end navbar--->


        
                <!--Page Header-->
                    <div class="container">
                    <div class="page-header text-center">
                        <h1>Savings </h1>                
                    </div>
                <!---end page header--->

                <!--start month dropdown-->
                <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12">
                </div>
                    <div class="col-lg-10 col-md-10 col-sm-4 col-xs-4">
                                    <label for="month">Select Month</label>
                                    <select class="form-control" id="month" name="month">
                                        <option value="1">January</option>      
                                        <option value="2">February</option>      
                                        <option value="3">March</option>      
                                        <option value="4">April</option>      
                                        <option value="5">May</option>      
                                        <option value="6">June</option>      
                                        <option value="7">July</option>      
                                        <option value="8">August</option>      
                                        <option value="9">September</option>      
                                        <option value="10">October</option>      
                                        <option value="11">November</option>      
                                        <option value="12">December</option>
                                    </select>
                                </div><br>
                                <div class="col-lg-1 col-md-1 col-sm-4 col-xs-4"></div><br>
                                <br>
                                <br>
                <!--end month dropdown-->

                <!--start data table-->

                            <div class="table-responsive">          
                              <table class="table table-hover">
                                <thead>
                                   <tr>
                                    <th>Member Name</th>
                                    <th>Share</th>
                                    <th>New Loan</th>
                                    <th>Old Loan</th>
                                    <th>Interest</th>
                                    <th>Loan Paid</th>
                                    <th>Total Loan</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>a</td>
                                    <td> t</td>
                                    <td>rtfcg  </td>
                                    <td> fg </td>
                                    <td>  f</td>
                                    <td> g </td>
                                    <td>  </td>
                                  </tr>
                                  <tr>
                                   <td>a</td>
                                    <td> t</td>
                                    <td>rtfcg  </td>
                                    <td> fg </td>
                                    <td>  f</td>
                                    <td> g </td>
                                    <td>  </td>
                                  </tr>
                                  <tr>
                                    <td>a</td>
                                    <td> t</td>
                                    <td>rtfcg  </td>
                                    <td> fg </td>
                                    <td>  f</td>
                                    <td> g </td>
                                    <td>  </td>
                                  </tr>
                                </tbody>
                              </table>
                              </div>
                            </div>
                <!--end data table-->

                     </form>
                </div>
            </body>
            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <!-- Include all compiled plugins (below), or include individual files as needed -->
            <script src="js/bootstrap.min.js"></script>
            <script src="js/myjs.js"></script>
        
        <!---end body--->
</html>