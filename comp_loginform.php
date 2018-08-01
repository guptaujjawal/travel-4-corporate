<!-----
<form action="<?//php echo $current_file;?>" method="POST">
	USERNAME : <input type ="text" name="username">
	PASSWORD : <input type ="text" name="password">
	<input type ="submit" value="Log In">
</form>
----->

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
				<a href="http://localhost/minor/index.htm" class="navbar-brand">Travel4Corporate</a>
				<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<div class="collapse navbar-collapse navHeaderCollapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="active"><a href="http://localhost/minor/index.htm">Home</a></li>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown">Social Media<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="https://twitter.com/">Twitter</a></li>
								<li><a href="https://www.facebook.com/">Facebook</a></li>
								<li><a href="https://accounts.google.com/ServiceLogin?service=oz&passive=1209600&continue=https://plus.google.com/photos?hl%3DEN%26gpsrc%3Dgplp0&hl=EN">Google+</a></li>
							</ul>
						</li>
						<li><a href="#about" data-toggle="modal">About</a></li>
						<li><a href="http://localhost/minor/hotel_requistion.php">Hotel Connect</a></li>
					</ul>
				</div>
			</div>
		</div> 
		
		<!-------------Sign In------>
		<div class="container ">
			<form action="<?php echo $current_file;?>" method="POST" class="form-horizontal" role="form">
				  <div class="form-group" >
					<label for="username" class="col-sm-2 control-label">Username</label>
					<div class="col-sm-5">
					  <input type="text" class="form-control" id="username" name="username" placeholder="Username">
					</div>
				  </div>
				  <div class="form-group">
					<label for="Password" class="col-sm-2 control-label">Password</label>
					<div class="col-sm-5">
					  <input type="password" class="form-control" id="Password" name="password" placeholder="Password">
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
					  <button type="submit" class="btn btn-primary">Sign in</button>
					</div>
				  </div>
			</form>
		</div>
				<?php
					if(isset($_POST['username']) && isset($_POST['password']))
					{
						$username=$_POST['username'];
						$password=$_POST['password'];
						$password_hash=md5($password);
						if(!empty($username)&&!empty($password))
						{	
							$query="SELECT `cid` FROM `companylogin` WHERE `username` ='".mysql_real_escape_string($username)."' AND `password` ='".mysql_real_escape_string($password_hash)."'";
							if($query_run=mysql_query($query))
							{
								$query_num_rows=mysql_num_rows($query_run);
								
								if($query_num_rows==0)
								{
									echo 'Invalid Username/Password';
								}
								else if($query_num_rows==1)
								{
									$user_id=mysql_result($query_run,0,'cid');
									$_SESSION['user_id']=$user_id;
									header('Location:http://localhost/minor/index2.php');
								}
							}
						}
						else
						{
							echo 'You must supply a username and password';
						}
					}
				?>
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
		
		<!---Registration Form Link---->
		<div="container" align="center">
		<div class="row">
			<div class="col-md-10">
			<h3>Don't have a account? Register with us to explore new oppurtunities!</h3> 
				<a href="http://localhost/minor/comp_register.php" data-toggle="modal" class="btn btn-success">Register</a>
			</div>
		</div>
		</div>
		
		<!------Footer------>
		<div class="navbar navbar-default navbar-fixed-bottom">
			<div class="container">
				<p class="navbar-text pull-left">Site Built By Ujjawal</p>
				<a href="#" class="navbar-btn btn-danger btn pull-right">Subscribe to our News letter</a>
			</div>
		</div>
		
		<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>-->
		<script src="jquery.min.js"></script>
		<script src="js/bootstrap.js"></script>
		
	</body>
</html>