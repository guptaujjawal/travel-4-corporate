<!---
<form action="hotel_requistion.php" method="POST" enctype="multipart/form-data">
	Name of Hotel : <br><input type="text" name="name" value="<?php if(isset($name)){echo $name;}?>" maxlength="100" required><br>
	Address : <br><input type="text" name="address" value="<?php if(isset($address)){echo $address;}?>" maxlength="200" required><br>
	City : <br><input type="text" name="city" value="<?php if(isset($city)){echo $city;}?>" maxlength ="100" required><br>
	Pincode : <br><input type="text" name="pin" value="<?php if(isset($pin)){echo $pin;}?>" maxlength="10" required><br>
	State : <br><input type="text" name="state" value="<?php if(isset($state)){echo $state;}?>" maxlength ="100" required><br>
	Country : <br><input type="text" name="country" value="<?php if(isset($country)){echo $country;}?>" maxlength ="100" required><br>
	Website : <br><input type="text" name="website" value="<?php if(isset($website)){echo $website;}?>" maxlength="100"><br>
	Telephone No. :<br><input type="text" name="telephone" value="<?php if(isset($telephone)){echo $telephone;}?>" maxlength="11" required><br>
	Check-in/Check-out Time : <br><input type="text" name="time" value="<?php if(isset($time)){echo $time;}?>" maxlength="20" required><br>
	Star Category : <br><input type="text" name="star" value="<?php if(isset($star)){echo $star;}?>" maxlength="50" required><br>
	Nearest Airport : <br><input type="text" name="airport" value="<?php if(isset($airport)){echo $airport;}?>" maxlength="100" required><br>
	Nearest Railway Station : <br><input type="text" name="railway" value="<?php if(isset($railway)){echo $railway;}?>" maxlength="100" required><br>
	Hotel Description : <br><textarea name="description" rows="5" cols="25">Please enter here</textarea><br>
	Your Name: <br><input type="text" name="uname" value="<?php if(isset($uname)){echo $uname;}?>" maxlength="100" required><br>
	Designation : <br><input type="text" name="designation" value="<?php if(isset($designation)){echo $designation;}?>" maxlength="100" required><br>
	Email : <br><input type="email" name="uemail" value="<?php if(isset($uemail)){echo $uemail;}?>" required><br>
	Mobile No. : <br><input type="text" name="umobile" value="<?php if(isset($umobile)){echo $umobile;}?>" maxlength="11" required><br>
	Image(Image Name must be of Hotel Name) : <input type="file" name="file"><br>
	<input type="submit" value="Submit">
</form>
---->

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
						<li><a href="http://localhost/minor/index.htm">Home</a></li>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown">Social Media<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="https://twitter.com/">Twitter</a></li>
								<li><a href="https://www.facebook.com/">Facebook</a></li>
								<li><a href="https://accounts.google.com/ServiceLogin?service=oz&passive=1209600&continue=https://plus.google.com/photos?hl%3DEN%26gpsrc%3Dgplp0&hl=EN">Google+</a></li>
							</ul>
						</li>
						<li><a href="#about" data-toggle="modal">About</a></li>
						<li class="active"><a href="http://localhost/minor/hotel_requistion.php">Hotel Connect</a></li>
					</ul>
				</div>
			</div>
		</div> 
		
		<!-------------Hotel Registration Form------>
		<div class="container">
			<ul class="breadcrumb">
					<li><a href="index.htm">Home</a> <span class="divider"></span></li>
					<li class="active">Hotel Registration Form</li>
				</ul>
			<form action="http://localhost/minor/hotel_requistion.php" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data">
				  <div class="form-group" >
					<label for="name" class="col-sm-2 control-label">Name of Hotel</label>
					<div class="col-sm-5">
					  <input type="text" class="form-control" id="name" name="name" placeholder="hotel name">
					</div>
				  </div>
				  <div class="form-group">
					<label for="address" class="col-sm-2 control-label">Address</label>
					<div class="col-sm-5">
					  <input type="text" class="form-control" id="address" name="address" placeholder="address">
					</div>
				  </div>
				  <div class="form-group">
					<label for="city" class="col-sm-2 control-label">City</label>
					<div class="col-sm-5">
					  <input type="text" class="form-control" id="city" name="city" placeholder="city">
					</div>
				  </div>
				  <div class="form-group">
					<label for="pin" class="col-sm-2 control-label">Pincode</label>
					<div class="col-sm-5">
					  <input type="text" class="form-control" id="pin" name="pin" placeholder="pincode" maxlength="10">
					</div>
				  </div>
				  <div class="form-group">
					<label for="state" class="col-sm-2 control-label">State</label>
					<div class="col-sm-5">
					  <input type="text" class="form-control" id="state" name="state" placeholder="state">
					</div>
				  </div>
				  <div class="form-group">
					<label for="country" class="col-sm-2 control-label">Country</label>
					<div class="col-sm-5">
					  <input type="text" class="form-control" id="country" name="country" placeholder="country">
					</div>
				  </div>
				  <div class="form-group">
					<label for="website" class="col-sm-2 control-label">Website</label>
					<div class="col-sm-5">
					  <input type="text" class="form-control" id="website" name="website" placeholder="website">
					</div>
				  </div>
				  <div class="form-group">
					<label for="telephone" class="col-sm-2 control-label">Telephone no.</label>
					<div class="col-sm-5">
					  <input type="text" class="form-control" id="telephone" name="telephone" placeholder="telephone" maxlength="11">
					</div>
				  </div>
				  <div class="form-group">
					<label for="time" class="col-sm-2 control-label">Check-in/Check-out Time</label>
					<div class="col-sm-5">
					  <input type="text" class="form-control" id="time" name="time" placeholder="time">
					</div>
				  </div>
				  <div class="form-group">
					<label for="star" class="col-sm-2 control-label">Star Category</label>
					<div class="col-sm-5">
					  <input type="text" class="form-control" id="star" name="star" placeholder="star">
					</div>
				  </div>
				  <div class="form-group">
					<label for="airport" class="col-sm-2 control-label">Nearest Airport</label>
					<div class="col-sm-5">
					  <input type="text" class="form-control" id="airport" name="airport" placeholder="airport">
					</div>
				  </div>
				  <div class="form-group">
					<label for="railway" class="col-sm-2 control-label">Nearest Railway Station</label>
					<div class="col-sm-5">
					  <input type="text" class="form-control" id="railway" name="railway" placeholder="railway">
					</div>
				  </div>
				  <div class="form-group">
					<label for="description" class="col-sm-2 control-label">Hotel Description</label>
					<div class="col-sm-5">
					  <textarea class="form-control" rows="3" name="description"></textarea>
					</div>
				  </div>
				  <div class="form-group">
					<label for="uname" class="col-sm-2 control-label">Your Name</label>
					<div class="col-sm-5">
					  <input type="text" class="form-control" id="uname" name="uname" placeholder="your name">
					</div>
				  </div>
				  <div class="form-group">
					<label for="designation" class="col-sm-2 control-label">Designation</label>
					<div class="col-sm-5">
					  <input type="text" class="form-control" id="designation" name="designation" placeholder="designation">
					</div>
				  </div>
				  <div class="form-group">
					<label for="uemail" class="col-sm-2 control-label">Email</label>
					<div class="col-sm-5">
					  <input type="text" class="form-control" id="uemail" name="uemail" placeholder="your email">
					</div>
				  </div>
				  <div class="form-group">
					<label for="umobile" class="col-sm-2 control-label">Mobile No.</label>
					<div class="col-sm-5">
					  <input type="text" class="form-control" id="umobile" name="umobile" placeholder="your mobile" maxlength="11">
					</div>
				  </div>
				  <div class="form-group">
					<label for="file" class="col-sm-2 control-label">JPG Image(To be named 
					on your Hotel's name)</label>
					<div class="col-sm-5">
					  <input type="file" class="form-control" id="file" name="file">
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
					  <button type="submit" class="btn btn-primary">Submit</button>
					</div>
				  </div>
			</form>
			<?php
			require 'connect.inc.php';
			//echo '<br>Hotel Registration Form ';
			if(isset($_POST['name']) && isset($_POST['address']) && isset($_POST['city'])&& isset($_POST['pin']) && isset($_POST['state']) && isset($_POST['country'])&& isset($_POST['website']) && isset($_POST['telephone'])&& isset($_POST['time'])&& isset($_POST['star'])&& isset($_POST['airport'])&& isset($_POST['railway'])&& isset($_POST['description'])&& isset($_POST['uname'])&& isset($_POST['designation'])&& isset($_POST['uemail'])&& isset($_POST['umobile']) &&isset($_FILES['file']['name']))
			{
				$name=$_POST['name'];
				$address=$_POST['address'];
				$city=$_POST['city'];
				$pin=$_POST['pin'];
				$state=$_POST['state'];
				$country=$_POST['country'];
				$website=$_POST['website'];
				$telephone=$_POST['telephone'];
				$time=$_POST['time'];
				$star=$_POST['star'];
				$airport=$_POST['airport'];
				$railway=$_POST['railway'];
				$description=$_POST['description'];
				$uname=$_POST['uname'];
				$designation=$_POST['designation'];
				$uemail=$_POST['uemail'];
				$umobile=$_POST['umobile'];
				
				$filename=$_FILES['file']['name'];
				$extension=strtolower(substr($filename,strpos($filename,'.')+1));
				$type=$_FILES['file']['type'];
				$size=$_FILES['file']['size'];
				$maxsize=2097152;//2 mb
				$temp_name=$_FILES['file']['tmp_name'];
				
				if(!empty($name) && !empty($address) && !empty($city)&& !empty($pin) && !empty($state) && !empty($country)&& !empty($website) && !empty($telephone)&& !empty($time)&& !empty($star)&& !empty($airport)&& !empty($railway)&& !empty($description)&& !empty($uname)&& !empty($designation)&& !empty($uemail)&& !empty($umobile) &&isset($filename)&&!empty($filename))
				{
					$query="INSERT INTO `hotel` VALUES(DEFAULT,'".mysql_real_escape_string($name)."','".mysql_real_escape_string($address)."','".mysql_real_escape_string($city)."','".mysql_real_escape_string($pin)."','".mysql_real_escape_string($state)."','".mysql_real_escape_string($country)."','".mysql_real_escape_string($website)."','".mysql_real_escape_string($telephone)."','".mysql_real_escape_string($time)."','".mysql_real_escape_string($star)."','".mysql_real_escape_string($airport)."','".mysql_real_escape_string($railway)."','".mysql_real_escape_string($description)."','".mysql_real_escape_string($uname)."','".mysql_real_escape_string($designation)."','".mysql_real_escape_string($uemail)."','".mysql_real_escape_string($umobile)."')";
					if(@$query_run=mysql_query($query))
					{
						if(($extension=='jpg'||$extension=='jpeg')&& $type=='image/jpeg' && $size<=$maxsize)
						{
							$location='uploads/';
							if(move_uploaded_file($temp_name,$location.$filename))
							{
								echo'<br>We have received your details and will get in touch with you as soon as possible.';
							}
							else
							{
								echo 'Please try after some time';
							}
						}
						else
						{
							echo 'File specification mismatch';
						}
					}
					else
					{
						echo'<br>Sorry, we couldn\'t process your information at this time. Try again later.';
					}
					
				}
				else
				{
					echo '<br>All Fields are required';
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
				<p class="navbar-text pull-left">Site Built By Ujjawal</p>
				<a href="#" class="navbar-btn btn-danger btn pull-right">Subscribe to our News letter</a>
			</div>
		</div>
		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="js/bootstrap.js"></script>
		
	</body>
</html>
