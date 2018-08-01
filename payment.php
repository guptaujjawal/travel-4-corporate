<?php ?>
<html>
<head>
		<title>Travel4Corporate</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
	</head>
<body>
<!----------Navigation Bar-------->
		
		<div class="navbar navbar-inverse navbar-static-top">
			<div class="container">
				<a href="http://localhost/minor/index1.php" class="navbar-brand">Travel4Corporate</a>
				<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<div class="collapse navbar-collapse navHeaderCollapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="http://localhost/minor/index1.php">Home</a></li>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown">Social Media<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="https://twitter.com/">Twitter</a></li>
								<li><a href="https://www.facebook.com/">Facebook</a></li>
								<li><a href="https://accounts.google.com/ServiceLogin?service=oz&passive=1209600&continue=https://plus.google.com/photos?hl%3DEN%26gpsrc%3Dgplp0&hl=EN">Google+</a></li>
							</ul>
						</li>
						<li><a href="#about" data-toggle="modal">About</a></li>
						<li><a href="http://localhost/minor/requistion_form.php">Requistion Form </a></li>
						<li class="active"><a href="http://localhost/minor/payment.php">Payment Gateway</a></li>
						
					</ul>
				</div>
			</div>
		</div> 
		<div class="container">
		<ul class="breadcrumb">
				<li class="active">Payment Gateway</li>
			</ul>
			<div class="row">
				<div class="col-md-12">
					<h3>Payment Gateway</h3>
					<p>Make your payment here with secure & trusted gateway.
					We will be in touch with you after receiveing payment.
					Feel free to contact if you face any problem.</p>
					<!-----<a href="#signin" data-toggle="modal" class="btn btn-primary">Sign to avail</a>---->
				</div>
			</div>
		</div>
		<!-----About-------->
		
		<div class="modal fade" id="about" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h4>Travel4Corporate</h4>
					</div>
					<div class="modal-body">
						<p>	We are a Company Oriented towards Tour and Travel Business.
							We don't have any assets as such rather operate through our website.
							For any inquiry you can mail us at : admin@admin.com.
							We would be very please to hear your experience with our website.
						</p>
					</div>
					<div class="modal-footer">
						<a class="btn btn-danger" data-dismiss="modal">Close</a>
					</div>
				</div>
			</div>
		</div>
		
		<!------Footer------>
		<div class="navbar navbar-default navbar-fixed-bottom">
			<div class="container">
				<p class="navbar-text pull-left">Site Buit By Ujjawal</p>
				<a href="http://localhost/minor/logout.php" class="navbar-btn btn-danger btn pull-right">Log out</a>
			</div>
		</div>
		<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>-->
		<script src="jquery.min.js"></script>
		<script src="js/bootstrap.js"></script>
</body>
</html>

