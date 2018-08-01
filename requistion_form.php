<?php
require 'connect.inc.php';
require 'core.inc.php';
//echo '<br>Requisition Form';
?>
<!----
<form action="requistion_form.php" method="POST">
	Destination : <br><input type="text" name="destination" value="<?php //if(isset($destination)){echo $destination;}?>" maxlength="100"><br>
	Duration of Tour : <br><input type="text" name="duration" value="<?php //if(isset($duration)){echo $duration;}?>" maxlength="100"><br>
	Starting Date of Tour : <br><input type="date" name="startdate"><br>
	No of Individuals : <br><input type="text" name="noindiv" value="<?php //if(isset($noindiv)){echo $noindiv;}?>" maxlength="50"><br>
	Hotel(Standard/Deluxe/Luxury/Superior): <br><input type="text" name="hoteltype" value="<?php //if(isset($hoteltype)){echo $hoteltype;}?>" maxlength="100"><br><br>
	Travel Mode : <br><input type="text" name="travelmode" value="<?php //if(isset($travelmode)){echo $travelmode;}?>" maxlength="100"><br>
	Budget : <br><input type="text" name="budget" value="<?php //if(isset($budget)){echo $budget;}?>" maxlength="100"><br>
	<input type="submit" value="Submit">
</form>
-------->

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
						<li class="active"><a href="http://localhost/minor/requistion_form.php">Requistion Form </a></li>
					</ul>
				</div>
			</div>
		</div> 
		
		<!-------------Requistion Form------>
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="index1.php">Home</a> <span class="divider"></span></li>
				<li class="active">Requisition Form</li>
			</ul>
			<form action="http://localhost/minor/requistion_form.php" method="POST" class="form-horizontal" role="form">
				  <div class="form-group" >
					<label for="Destination" class="col-sm-2 control-label">Destination</label>
					<div class="col-sm-5">
					  <input type="text" class="form-control" id="Destination" name="destination" placeholder="destination">
					</div>
				  </div>
				  <div class="form-group">
					<label for="Duration" class="col-sm-2 control-label">Duration</label>
					<div class="col-sm-5">
					  <input type="text" class="form-control" id="Duration" name="duration" placeholder="duration">
					</div>
				  </div>
				  <div class="form-group">
					<label for="startdate" class="col-sm-2 control-label">Starting Date of Tour</label>
					<div class="col-sm-5">
					  <input type="date" class="form-control" id="startdate" name="startdate" placeholder="start date">
					</div>
				  </div>
				  <div class="form-group">
					<label for="Noindiv" class="col-sm-2 control-label">No of Individual</label>
					<div class="col-sm-5">
					  <input type="text" class="form-control" id="Noindiv" name="noindiv" placeholder="no of indiv">
					</div>
				  </div>
				  <div class="form-group">
					<label for="hoteltype" class="col-sm-2 control-label">Hotel
					(Standard/Deluxe/
					Luxury/Superior)</label>
					<div class="col-sm-5">
					  <input type="text" class="form-control" id="hoteltype" name="hoteltype" placeholder="hotel type">
					</div>
				  </div>
				  <div class="form-group">
					<label for="travelmode" class="col-sm-2 control-label">Travel Mode</label>
					<div class="col-sm-5">
					  <input type="text" class="form-control" id="travelmode" name="travelmode" placeholder="travel mode">
					</div>
				  </div>
				  <div class="form-group">
					<label for="budget" class="col-sm-2 control-label">Budget</label>
					<div class="col-sm-5">
					  <input type="text" class="form-control" id="budget" name="budget" placeholder="budget">
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
					  <button type="submit" class="btn btn-primary">Submit</button>
					</div>
				  </div>
			</form>
			<?
			if(isset($_POST['destination']) && isset($_POST['duration']) && isset($_POST['startdate'])&& isset($_POST['noindiv']) && isset($_POST['hoteltype']) && isset($_POST['travelmode'])&& isset($_POST['budget']))
			{
				$destination=$_POST['destination'];
				$duration=$_POST['duration'];
				$startdate=$_POST['startdate'];
				$noindiv=$_POST['noindiv'];
				$hoteltype=$_POST['hoteltype'];
				$travelmode=$_POST['travelmode'];
				$budget=$_POST['budget'];
				$custid=$_SESSION['user_id'];
				if(!empty($destination) && !empty($duration) && !empty($startdate)&& !empty($noindiv) && !empty($hoteltype)&& !empty($travelmode) && !empty($budget))
				{
					$query="INSERT INTO `package` VALUES(DEFAULT,'".mysql_real_escape_string($destination)."','".mysql_real_escape_string($duration)."','".mysql_real_escape_string($startdate)."','".mysql_real_escape_string($noindiv)."','".mysql_real_escape_string($hoteltype)."','".mysql_real_escape_string($travelmode)."','".mysql_real_escape_string($budget)."','".mysql_real_escape_string($custid)."')";
								if(@$query_run=mysql_query($query))
								{	
									$query1="SELECT `email` FROM `logindetail` WHERE `id`='$custid'";
									if(@$query1_run=mysql_query($query1))
									{
										$header=mysql_result($query1_run,0,'email');
									}
									
									$to='admin@admin.com';
									$subject='Requisition Form Submission';
									$body='Destination : '.$destination.'<br> Duration : '.$duration.'<br> Start Date : '.$startdate.'<br> No of Individual : '.$noindiv.'<br> Hotel Type : '.$hoteltype.'<br> Travel Mode : '.$travelmode.'<br> Budget : '.$budget;
									
									if(@mail($to,$subject,$body,$header))
									{
										echo'<br>We have received your requirement and will get in touch with you as soon as possible. ';
									}
									else
									{
										echo'Please Re-Submit the requisition form';
									}
								}
								else
								{
									echo'<br>Sorry, we couldn\'t process your information at this time. Try again later.';
								}
					
				}
				else
				{
					echo'All fields are required';
				}
				
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
				<p class="navbar-text pull-left">Site Buit By Ujjawal</p>
				<a href="http://localhost/minor/logout.php" class="navbar-btn btn-danger btn pull-right">Log out</a>
			</div>
		</div>
		
		<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>-->
		<script src="jquery.min.js"></script>
		<script src="js/bootstrap.js"></script>
		
	</body>
</html>