<!----
<form action="register.php" method="POST">
	Username : <br><input type="text" name="username" value="<?php if(isset($username)){echo $username;}?>" maxlength="30" required><br>
	Password : <br><input type="password" name="password" maxlength="30" required><br>
	Re-enter Password : <br><input type="password" name="password_again" maxlength="30" required><br>
	Email : <br><input type="email" name="email" value="<?php if(isset($email)){echo $email;}?>" maxlength="50" required><br>
	Firstname : <br><input type="text" name="fname" value="<?php if(isset($fname)){echo $fname;}?>" maxlength="40" required><br>
	Lastname : <br><input type="text" name="lname" value="<?php if(isset($lname)){echo $lname;}?>" maxlength="40" required><br><br>
	<input type="submit" value="Register">
</form>
--------->
<?php
			require 'connect.inc.php';
			require 'core.inc.php';
?>

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
				<a href="index.htm" class="navbar-brand">Travel4Corporate</a>
				<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<div class="collapse navbar-collapse navHeaderCollapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="active"><a href="index.htm">Home</a></li>
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
		
		<!-------------Sign Up------>
		<div class="container">
		<ul class="breadcrumb">
				<li><a href="index1.php">Home</a> <span class="divider"></span></li>
				<li class="active">Registration Form</li>
			</ul>
			<form action="register.php" method="POST" class="form-horizontal" role="form">
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
					<label for="Password_Again" class="col-sm-2 control-label">Re-enter Password</label>
					<div class="col-sm-5">
					  <input type="password" class="form-control" id="Password_Again" name="password_again" placeholder="Re-enter Password">
					</div>
				  </div>
				  <div class="form-group">
					<label for="Email" class="col-sm-2 control-label">Email</label>
					<div class="col-sm-5">
					  <input type="email" class="form-control" id="Email" name="email" placeholder="email">
					</div>
				  </div>
				  <div class="form-group">
					<label for="Firstname" class="col-sm-2 control-label">Firstname</label>
					<div class="col-sm-5">
					  <input type="text" class="form-control" id="Firstname" name="fname" placeholder="firstname">
					</div>
				  </div>
				  <div class="form-group">
					<label for="Lastname" class="col-sm-2 control-label">Lastname</label>
					<div class="col-sm-5">
					  <input type="text" class="form-control" id="Lastname" name="lname" placeholder="lastname">
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
					  <button type="submit" class="btn btn-primary">Sign Up</button>
					</div>
				  </div>
			</form>
			<?
			if(!loggedin())
			{
				if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['password_again']) && isset($_POST['email'])&& isset($_POST['fname']) && isset($_POST['lname']))
				{
					$username=$_POST['username'];
					$password=$_POST['password'];
					$password_again=$_POST['password_again'];
					$password_hash=md5($password);
					$email=$_POST['email'];
					$fname=$_POST['fname'];
					$lname=$_POST['lname'];
					if(!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['password_again']) && !empty($_POST['email']) && !empty($_POST['fname']) && !empty($_POST['lname']))
					{
						if($password!=$password_again)
						{
							echo 'Password do not match';
						}
						else
						{
							$query="SELECT `username` FROM `logindetail` WHERE `username`='".mysql_real_escape_string($username)."'";
							$query_run=mysql_query($query);
							if(mysql_num_rows($query_run)==1)
							{
								echo 'The username '.$username.' already exists.';
							}
							else
							{
								$query="INSERT INTO `logindetail` VALUES('','".mysql_real_escape_string($username)."','".mysql_real_escape_string($password_hash)."','".mysql_real_escape_string($email)."','".mysql_real_escape_string($fname)."','".mysql_real_escape_string($lname)."')";
								if($query_run=mysql_query($query))
								{
									header('Location:http://localhost/minor/register_success.php');
								}
								else
								{
									echo 'Sorry, we couldn\'t register you at this time. Try agian later.';
								}
							}
						}
					}
					else
					{
						echo 'All fields are required.';
					}
				}
				
			}
			else
			{
				echo 'You are already registered';
			}	
			?>
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
				<p class="navbar-text pull-left">Site Built By Ujjawal</p>
				<a href="#" class="navbar-btn btn-danger btn pull-right">Subscribe to our News letter</a>
			</div>
		</div>
		
		<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>-->
		<script src="jquery.min.js"></script>
		<script src="js/bootstrap.js"></script>
		
	</body>
</html>
