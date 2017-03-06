<?php
    
    include('config.php');
    include('models.php');
    
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="../assets/img/favicon.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>JICA Data Collection App - Home</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Material Dashboard CSS    -->
    <link href="../assets/css/material-dashboard.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap-select.min.css">

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../assets/css/demo.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'> -->
    <link rel="stylesheet" type="text/css" href="../assets/css/material-icons.css">
</head>

<body>

	<div class="wrapper">
	    <?php 
            include('sidebar.php');
        ?>

	    <div class="main-panel">
			<nav class="navbar navbar-transparent navbar-absolute">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">Dashboard</a>
					</div>
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right">
                            <!-- Notifications
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="material-icons">notifications</i>
									<span class="notification">5</span>
									<p class="hidden-lg hidden-md">Notifications</p>
								</a>
								<ul class="dropdown-menu">
									<li><a href="#">Mike John responded to your email</a></li>
									<li><a href="#">You have 5 new tasks</a></li>
									<li><a href="#">You're now friend with Andrew</a></li>
									<li><a href="#">Another Notification</a></li>
									<li><a href="#">Another One</a></li>
								</ul>
							</li>
                            -->
							<li class="dropdown">
								<a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
	 							   <i class="material-icons">person</i>
	 							   <p class="hidden-lg hidden-md">Profile</p>
	 						   </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">Logout</a>
                                    </li>
                                </ul>
							</li>
						</ul>

					</div>
				</div>
			</nav>

	        <div class="content">
	            <div class="container-fluid">
                    <?php 
                    if(isset($sucess)){
                        echo '<div class="alert alert-success">
                                    <button type="button" aria-hidden="true" class="close">×</button>
                                    <span>'.$sucess.'</span>
                                </div>';
                    }else if(isset($error)){
                        echo '<div class="alert alert-danger">
                                    <button type="button" aria-hidden="true" class="close">×</button>
                                    <span>'.$error.'</span>
                                </div>';
                    
                    }
                    ?>
	                <div class="row">
	                    <div class="col-md-7">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="card card-stats">
                                        <div class="card-header" data-background-color="purple">
                                            <i class="material-icons">content_paste</i>
                                        </div>
                                        <div class="card-content">
                                            <p class="category">All Surveys</p>
                                            <h3 class="title">
                                                <?php
                                                    showNumRows("surveys");
                                                ?>
                                            </h3>
                                        </div>
                                        <div class="card-footer">
                                            <div class="stats">
                                                <i class="material-icons">local_offer</i>
                                                Updated
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="card card-stats">
                                        <div class="card-header" data-background-color="green">
                                            <i class="material-icons">call</i>
                                        </div>
                                        <div class="card-content">
                                            <p class="category">All Calls</p>
                                            <h3 class="title">305</h3>
                                        </div>
                                        <div class="card-footer">
                                            <div class="stats">
                                                <i class="material-icons">access_time</i>
                                                Last call 2 minutes ago
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="card card-stats">
                                        <div class="card-header" data-background-color="red">
                                            <i class="material-icons">group</i>
                                        </div>
                                        <div class="card-content">
                                            <p class="category">Contact Groups</p>
                                            <h3 class="title">
                                                <?php
                                                    showNumRows("contact_type");
                                                ?>
                                            </h3>
                                        </div>
                                        <div class="card-footer">
                                            <div class="stats">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="card card-stats">
                                        <div class="card-header" data-background-color="blue">
                                            <i class="material-icons">account_box</i>
                                        </div>
                                        <div class="card-content">
                                            <p class="category">All Contacts</p>
                                            <h3 class="title">
                                                <?php
                                                    showNumRows("contacts");
                                                ?>
                                            </h3>
                                        </div>
                                        <div class="card-footer">
                                            <div class="stats">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
	                    </div>
						<div class="col-md-5">
                            <?php
                                include('make-call.php');
                            ?>
		    			</div>
	                </div>
	            </div>
	        </div>

	        <footer class="footer">
	            <div class="container-fluid">
	                <p class="copyright pull-right">
	                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.cedarviewng.com">Cedarview</a>
	                </p>
	            </div>
	        </footer>
	    </div>
	</div>

</body>

	<!--   Core JS Files   -->
	<script src="../assets/js/jquery-3.1.0.min.js" type="text/javascript"></script>
	<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="../assets/js/material.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="../assets/js/chartist.min.js"></script>

	<!--  Notifications Plugin    -->
	<script src="../assets/js/bootstrap-notify.js"></script>

	<!--  Google Maps Plugin    -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

	<!-- Material Dashboard javascript methods -->
	<script src="../assets/js/material-dashboard.js"></script>
    
    <!-- My Plugins -->
    <script src="../assets/js/bootstrap-select.min.js"></script>
    <script src="../assets/js/myscript.js"></script>

	<!-- Material Dashboard DEMO methods, don't include it in your project! -->
	<script src="../assets/js/demo.js"></script>

</html>
