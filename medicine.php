<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Paper Dashboard by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />

    <!--  Fonts and icons     -->
    
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/themify-icons.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.0/css/all.css">


	
</head>
<body>

<div class="wrapper">
	<div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                    YOUR NAME <br> Medical Record
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="#">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="ti-user"></i>
                        <p>Patient</p>
                    </a>
                </li>
                <li>
                    <a href="medical-record.php">
                        <i class="ti-view-list-alt"></i>
                        <p>Medical Record</p>
                    </a>
                </li>
                <li>
                    <a href="doctors-list.php">
                        <i class="fas fa-user-md"></i>
                        <p>Doctor List</p>
                    </a>
                </li>				
                <li>
                    <a href="#">
                        <i class="far fa-heart"></i>
                        <p>Fitness Data</p>
                    </a>
                </li>
                <li class="active">
                    <a href="#">
                        <i class="fas fa-pills"></i>
                        <p>Medicine</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-syringe"></i>
                        <p>Vaccinations</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-bed"></i>
                        <p>Sleep Data</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
		<nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">Medicine</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="ti-panel"></i>
								<p>Statistics</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="ti-bell"></i>
                                    <p class="notification">5</p>
									<p>Notifications</p>
									<b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>
						<li>
                            <a href="#">
								<i class="ti-settings"></i>
								<p>Settings</p>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>


		
        <div class="content">
		
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">New Entry</h4>
                                <p class="category">Here a new entry for the medicine is written</p>
                            </div>
                                <table class="table table-hover">
                                    <thead>
                                        <th>Medication Name</th>
                                    	<th>Dosis</th>
                                    	<th>How long to take</th>
                                    	<th>Period</th>
										<th>Link to database</th>
										<th>Warnings</th>
                                    </thead>
                                    <tbody>							
										<tr>
										<form action="insert-medicine.php" method="post">
											<td><input type="text" class="form-control" name="medication_name" placeholder="Medication Name"></td>
											<td><textarea id="note" class="form-control" name="medication_dosis" placeholder="Dosis of your medication"></textarea></td>
											<td><textarea id="note" class="form-control" name="medication_time" placeholder="how long to take"></textarea></td>
											<td><textarea id="note" class="form-control" name="medication_period" placeholder="in which period to take it"></textarea></td>
											<td><input type="text" class="form-control" name="medication_link" placeholder="Own link to medication"></td>
											<td><textarea id="note" class="form-control" name="medication_warnings" placeholder="Warnings by the doctor"></textarea></td>
											<td><button type="submit" class="btn btn-primary">Save entry</button></td>
										</form>
										</tr>
									</tbody>
								</table>
                        </div>
                    </div>

                </div>
            </div>		
		
		
		
		
		
		
		
		
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Medicine List</h4>
                                <p class="category">Here is a list of all your medicine pills you took</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover">
                                    <thead>
										<th>Datum</th>
                                        <th>Medication Name</th>
                                    	<th>Dosis</th>
                                    	<th>How long to take</th>
                                    	<th>Period</th>
										<th>Link to database</th>
										<th>Warnings</th>
                                    </thead>
                                    <tbody>
<?php
require "dbconnection.php";

$query = "SELECT * FROM medicine"; //You don't need a ; like you do in SQL
$result = mysqli_query($connection, $query);					
while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
										echo "<tr>";
										echo "<td>" . $row['date'] . "</td>";
                                        echo "<td>" . $row['medication_name'] . "</td>";
										echo "<td>" . $row['medication_dosis'] . "</td>";
										echo "<td>" . $row['medication_time'] . "</td>";
										echo "<td>" . $row['medication_period'] . "</td>";
										echo "<td><a href=" . $row['medication_link'] . ">" . $row['medication_link'] . "</a></td>";
										echo "<td>" . $row['medication_warnings'] . "</td>";
}										echo "</tr>";
mysqli_close ($connection); //Make sure to close out the database connection
?>										
    

                                        
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <footer class="footer">
		<!--
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>

                        <li>
                            <a href="http://www.creative-tim.com">
                                Creative Tim
                            </a>
                        </li>
                        <li>
                            <a href="http://blog.creative-tim.com">
                               Blog
                            </a>
                        </li>
                        <li>
                            <a href="http://www.creative-tim.com/license">
                                Licenses
                            </a>
                        </li>
                    </ul>
                </nav>
				<div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">Creative Tim</a>
                </div>
            </div>
			-->
        </footer>


    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="assets/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

	<script src="https://rawgit.com/jackmoore/autosize/master/dist/autosize.min.js"></script>

	
	<script>
	autosize(document.getElementById("note"));

	
	</script>
</html>
