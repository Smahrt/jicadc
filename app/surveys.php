<!doctype html> 
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="../assets/img/favicon.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>JICA Data Collection App - Surveys</title>

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
	    <div class="sidebar" data-color="orange" data-image="../assets/img/sidebar-1.jpg">
			<div class="logo">
				<a href="#" class="simple-text">
					JICA DC
				</a>
			</div>

	    	<div class="sidebar-wrapper">
				<ul class="nav">
	                <li>
	                    <a href="home.php">
	                        <i class="material-icons">dashboard</i>
	                        <p>Dashboard</p>
	                    </a>
	                </li>
	                <li>
	                    <a href="contacts.php">
	                        <i class="material-icons">account_box</i>
	                        <p>Contacts</p>
	                    </a>
	                </li>
	                <li class="active">
                        <a href="surveys.php">
                            <i class="material-icons">content_paste</i>
                            <p>Surveys</p>
                       </a>
	                </li>
					<li class="active-pro">
                        <a href="create-new-survey.php">
	                        <p>CREATE SURVEY</p>
	                    </a>
                    </li>
	            </ul>
	    	</div>
	    </div>

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
						<a class="navbar-brand" href="#">Surveys</a>
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
	                <div class="row">
	                    <div class="col-md-7">
                            <div class="card">
	                            <div class="card-header" data-background-color="orange">
	                                <h4 class="title">Surveys</h4>
	                                <p class="category">Created surveys available for launch.<br/>
                                        <span class="hidden-lg hidden-md hidden-sm"><i class="material-icons">info_outline</i> Swipe left to see full table</span>
                                    </p>
	                            </div>
	                            <div class="card-content table-responsive">
	                                <table class="table">
	                                    <thead class="text-primary">
	                                       <tr>
                                                <th>#</th>
                                                <th>Survey Title</th>
                                                <th>Created On</th>
                                                <th>Times Used</th>
                                                <th>Action</th>
	                                       </tr>
                                        </thead>
	                                    <tbody>
	                                        <tr>
                                                <td>
                                                </td>
	                                        	<td>Dakota Rice</td>
												<td class="text-primary">27 Jan 2017</td>
	                                        	<td class="text-center">4</td>
	                                        	<td class="td-actions text-right">
                                                    <button type="button" rel="tooltip" title="" class="btn btn-primary btn-simple btn-xs" data-original-title="Edit Contact">
                                                        <i class="material-icons">edit</i>
                                                    </button>
                                                    <button type="button" rel="tooltip" title="" class="btn btn-danger btn-simple btn-xs" data-original-title="Remove Contact">
                                                        <i class="material-icons">close</i>
                                                    </button>
                                                </td>
	                                        </tr>
	                                        <tr>
                                                <td>
                                                </td>
	                                        	<td>Sinaai-Waas</td>
												<td class="text-primary">24 Jan 2017</td>
	                                        	<td class="text-center">2</td>
	                                        	<td class="td-actions text-right">
                                                    <button type="button" rel="tooltip" title="" class="btn btn-primary btn-simple btn-xs" data-original-title="Edit Contact">
                                                        <i class="material-icons">edit</i>
                                                    </button>
                                                    <button type="button" rel="tooltip" title="" class="btn btn-danger btn-simple btn-xs" data-original-title="Remove Contact">
                                                        <i class="material-icons">close</i>
                                                    </button>
                                                </td>
	                                        </tr>
	                                        <tr>
                                                <td>
                                                </td>
	                                        	<td>Gloucester</td>
												<td class="text-primary">29 Jan 2017</td>
	                                        	<td class="text-center">5</td>
	                                        	<td class="td-actions text-right">
                                                    <button type="button" rel="tooltip" title="" class="btn btn-primary btn-simple btn-xs" data-original-title="Edit Contact">
                                                        <i class="material-icons">edit</i>
                                                    </button>
                                                    <button type="button" rel="tooltip" title="" class="btn btn-danger btn-simple btn-xs" data-original-title="Remove Contact">
                                                        <i class="material-icons">close</i>
                                                    </button>
                                                </td>
	                                        </tr>
	                                    </tbody>
	                                </table>

	                            </div>
	                        </div>
	                    </div>
						<div class="col-md-5">
    						<div class="card">
                                <div class="card-header" data-background-color="orange">
                                    <h4 class="title">Make a Call</h4>
                                    <p class="category">Start a new survey by calling a contact or selecting a contact group</p>
                                </div>
                                
    							<div class="card-content">
    								<form>
	                                    <div class="row">
	                                        <div class="col-md-5 col-sm-6">
												<div class="form-group label-floating">
													<label class="control-label">Select Contact</label>
                                                    <select id="contacts" class="form-control">
                                                        <option>Select Contact</option>
                                                    </select>
												</div>
	                                        </div>
                                            <div class="col-md-1">
                                                <p>OR</p>
                                            </div>
	                                        <div class="col-md-6 col-sm-6">
												<div class="form-group label-floating">
													<label class="control-label">Select Contact Group</label>
                                                    <select id="contact-group" class="form-control">
                                                        <option>Select Contact Group</option>
                                                    </select>
												</div>
	                                        </div>
	                                    </div>

	                                    <div class="row">
	                                        <div class="col-md-12">
												<div class="form-group label-floating">
													<label class="control-label">Select Survey</label>
                                                    <select class="form-control">
                                                    </select>
												</div>
	                                        </div>
	                                    </div>

	                                    <button type="submit" class="btn btn-warning pull-right">Start Survey</button>
	                                    <div class="clearfix"></div>
	                                </form>
    							</div>
    						</div>
		    			</div>
                        <div class="col-md-5 pull-right">
                            <div class="card">
                                <div class="card-header" data-background-color="orange">
                                    <h4 class="title">Quick Links</h4>
                                </div>
                                <div class="card-body">
                                        <div class="tab-space"></div>
                                    <div class="col-md-12">
                                        <ul>
                                            <li>
                                                <a href="#">Create Contact</a>
                                            </li>
                                            <li>
                                                <a href="#">Create Contact Group</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
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
    
    <script type="text/javascript">
        
    </script>

</html>
