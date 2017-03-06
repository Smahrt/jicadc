<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="../assets/img/favicon.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>JICA Data Collection App - Create Survey</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Material Dashboard CSS    -->
    <link href="../assets/css/material-dashboard.css" rel="stylesheet"/>
    <link href="../assets/css/select2.min.css" rel="stylesheet"/>

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
						<a class="navbar-brand" href="#">Create Survey</a>
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
	                                <h4 class="title">Create New Survey</h4>
	                                <p class="category">Create a new survey form by adding questions and forms of answers</p>
	                            </div>
	                            <div class="card-content">
                                    <form>
	                                    <div class="row">
	                                        <div class="col-md-12">
												<div class="form-group label-floating">
													<label class="control-label">Survey Title</label>
                                                    <input type="text" class="form-control" name="surveyTitle" >
												</div>
	                                        </div>
	                                    </div>
                                        <div id="thequestion">
                                            <div class="title">
                                                <h4>Survey Questions</h4>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">1. Question</label>
                                                        <textarea class="form-control" name="question" ></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Response Type</label>
                                                        <select type="text" class="form-control" name="question">
                                                            <option disabled selected>Select Response Type</option>
                                                            <option value="free-response">Free Response</option>
                                                            <option value="yes-no">Yes/No</option>
                                                            <option value="numeric">Numeric</option>
                                                        </select>
                                                    </div>
                                                    <button type="button" class="btn btn-success pull-right add-question">
                                                        Add Question
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-warning">Create Survey</button>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </form>
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
    <script src="../assets/js/select2.min.js"></script>

	<!-- Material Dashboard DEMO methods, don't include it in your project! -->
	<script src="../assets/js/demo.js"></script>
    
    <script type="text/javascript">
        $(document).ready(function(){
            var country = ["Australia", "Bangladesh", "Denmark", "Hong Kong", "Indonesia", "Netherlands", "New Zealand", "South Africa"];
            $("#contacts").select2({
              data: country
            });
            $("#contact-group").select2({
              data: country
            });
            
            /** Survey Questions Add **/
            var id = 2;
            $('#thequestion').on("click", '.add-question', function(){
                        $('#thequestion').append(`
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">`+ id +`. Question</label>
                                        <textarea class="form-control" name="question" ></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Response Type</label>
                                        <select type="text" class="form-control" name="question">
                                            <option disabled selected>Select Response Type</option>
                                            <option value="free-response">Free Response</option>
                                            <option value="yes-no">Yes/No</option>
                                            <option value="numeric">Numeric</option>
                                        </select>
                                    </div>
                                    <button type="button" class="btn btn-success pull-right add-question">
                                        Add Question
                                    </button>
                                </div>
                            </div>
                        `);
                        
                    $(this).removeClass("add-question").hide();
                    id++;
            });
        });
    </script>

</html>
