<?php
	error_reporting(1);
	include('connection.php');
	session_start();
	if(isset($_POST['submit']))
	{
		if ($_POST['user_email']==$_SESSION['user_email'])
		{
			if($_POST['user_number']==$_SESSION['user_number'])
			{
						$old_email=$_SESSION['old_email'];
						$eid=$_SESSION['id'];
						$user_full_name = $_POST['user_full_name'];
						$password = md5($_POST['password']);
						$confirm_password = $_POST['confirm_password'];
						$user_number = $_POST['user_number'];
						$event_address = $_POST['event_address'];
						$event_date=$_POST['event_date'];
						$start_time=$_POST['start_time'];
						$end_time=$_POST['end_time'];
						$pincode = $_POST['pincode'];
						$city = $_POST['city'];
						$state = $_POST['state'];
						$need = $_POST['need'];
						$other_message = $_POST['other_message'];
						$created_date=date("Y-m-d h:i:sa");
						$queryc = "RENAME TABLE `$old_email` TO `$user_email`";
						$resultc = mysqli_query($conn, $queryc);
						if($resultc)
						{
							$query = "UPDATE eventlogin SET user_full_name='".$user_full_name."',user_email='".$user_email."',password='".$password."',confirm_password='".$confirm_password."',user_number='".$user_number."',event_address='".$event_address."',event_date='".$event_date."',start_time='".$start_time."',end_time='".$end_time."',pincode='".$pincode."',city='".$city."',state='".$state."',need='".$nedd."',other_message='".$other_message."',created_date='".$created_date."',created_by='".$user_full_name."' WHERE id='".$eid."'";
							$result=mysqli_query($conn,$query);
							if($result)
							{	
								echo '<script> alert("Thank you...!!!! Your event details Updated");
								window.location = " login_event.php"; </script>';
							}
							else
							{
								echo '<script> alert("Error.");
									  window.location = " update_event.php"; </script>';
							}
						}
						else
						{
								echo '<script> alert("Error."); 
								window.location = " update_event.php"; </script>';
						}
			}
			else
			{
				$user_number = $_POST['user_number'];
				$sql="SELECT * FROM eventlogin WHERE user_number='".$user_number."' AND status=0";
				$result=mysqli_query($conn,$sql);
				$count=mysqli_num_rows($result);
				if($result)
				{
					if ($count == 1) 
					{
						echo '<script> alert("Contact Number is already registered Please use another Number.");
					  			window.location = " update_event.php"; </script>';		
					}
					else
					{
						$old_email=$_SESSION['old_email'];
						$eid=$_SESSION['id'];
						$user_full_name = $_POST['user_full_name'];
						$password = md5($_POST['password']);
						$confirm_password = $_POST['confirm_password'];
						$user_number = $_POST['user_number'];
						$event_address = $_POST['event_address'];
						$event_date=$_POST['event_date'];
						$start_time=$_POST['start_time'];
						$end_time=$_POST['end_time'];
						$pincode = $_POST['pincode'];
						$city = $_POST['city'];
						$state = $_POST['state'];
						$need = $_POST['need'];
						$other_message = $_POST['other_message'];
						$created_date=date("Y-m-d h:i:sa");
						$queryc = "RENAME TABLE `$old_email` TO `$user_email`";
						$resultc = mysqli_query($conn, $queryc);
						if($resultc)
						{
							$query = "UPDATE eventlogin SET user_full_name='".$user_full_name."',user_email='".$user_email."',password='".$password."',confirm_password='".$confirm_password."',user_number='".$user_number."',event_address='".$event_address."',event_date='".$event_date."',start_time='".$start_time."',end_time='".$end_time."',pincode='".$pincode."',city='".$city."',state='".$state."',need='".$nedd."',other_message='".$other_message."',created_date='".$created_date."',created_by='".$user_full_name."' WHERE id='".$eid."'";
							$result=mysqli_query($conn,$query);
							if($result)
							{	
								echo '<script> alert("Thank you...!!!! Your event details Updated");
								window.location = " login_event.php"; </script>';
							}
							else
							{
								echo '<script> alert("Error.");
									  window.location = " update_event.php"; </script>';
							}
						}
						else
						{
								echo '<script> alert("Error."); 
								window.location = " login_event.php"; </script>';
						}
					}
				}
				else
				{
					echo '<script> alert("Error."); 
						window.location = " update_event.php"; </script>';
				}
			}
		}
		else
		{
						$user_email = $_POST['user_email'];
						$sql="SELECT * FROM eventlogin WHERE user_email='".$user_email."' AND status=0 ";
						$result=mysqli_query($conn,$sql);
						$count=mysqli_num_rows($result);
						if($result)
						{
							if($count == 1)
							{
								echo '<script> alert("Email Id is already registered Please use another Email Id.");
									  window.location = " update_event.php"; </script>';
							}
							else
							{
									
										if($_POST['user_number']==$_SESSION['user_number'])
										{
													$old_email=$_SESSION['old_email'];
													$eid=$_SESSION['id'];
													$user_full_name = $_POST['user_full_name'];
													$password = md5($_POST['password']);
													$confirm_password = $_POST['confirm_password'];
													$user_number = $_POST['user_number'];
													$event_address = $_POST['event_address'];
													$event_date=$_POST['event_date'];
													$start_time=$_POST['start_time'];
													$end_time=$_POST['end_time'];
													$pincode = $_POST['pincode'];
													$city = $_POST['city'];
													$state = $_POST['state'];
													$need = $_POST['need'];
													$other_message = $_POST['other_message'];
													$created_date=date("Y-m-d h:i:sa");
													$queryc = "RENAME TABLE `$old_email` TO `$user_email`";
													$resultc = mysqli_query($conn, $queryc);
													if($resultc)
													{
														$query = "UPDATE eventlogin SET user_full_name='".$user_full_name."',user_email='".$user_email."',password='".$password."',confirm_password='".$confirm_password."',user_number='".$user_number."',event_address='".$event_address."',event_date='".$event_date."',start_time='".$start_time."',end_time='".$end_time."',pincode='".$pincode."',city='".$city."',state='".$state."',need='".$nedd."',other_message='".$other_message."',created_date='".$created_date."',created_by='".$user_full_name."' WHERE id='".$eid."'";
														$result=mysqli_query($conn,$query);
														if($result)
														{	
															echo '<script> alert("Thank you...!!!! Your event details Updated");
															window.location = " login_event.php"; </script>';
														}
														else
														{
															echo '<script> alert("Error.");
																  window.location = " update_event.php"; </script>';
														}
													}
													else
													{
															echo '<script> alert("Error."); 
															window.location = " update_event.php"; </script>';
													}
										}
										else
										{
											$user_number = $_POST['user_number'];
											$sql="SELECT * FROM eventlogin WHERE user_number='".$user_number."' AND status=0";
											$result=mysqli_query($conn,$sql);
											$count=mysqli_num_rows($result);
											if($result)
											{
												if ($count == 1) 
												{
													echo '<script> alert("Contact Number is already registered Please use another Number.");
												  			window.location = " update_event.php"; </script>';		
												}
												else
												{
													$old_email=$_SESSION['old_email'];
													$eid=$_SESSION['id'];
													$user_full_name = $_POST['user_full_name'];
													$password = md5($_POST['password']);
													$confirm_password = $_POST['confirm_password'];
													$user_number = $_POST['user_number'];
													$event_address = $_POST['event_address'];
													$event_date=$_POST['event_date'];
													$start_time=$_POST['start_time'];
													$end_time=$_POST['end_time'];
													$pincode = $_POST['pincode'];
													$city = $_POST['city'];
													$state = $_POST['state'];
													$need = $_POST['need'];
													$other_message = $_POST['other_message'];
													$created_date=date("Y-m-d h:i:sa");
													$queryc = "RENAME TABLE `$old_email` TO `$user_email`";
													$resultc = mysqli_query($conn, $queryc);
													if($resultc)
													{
														$query = "UPDATE eventlogin SET user_full_name='".$user_full_name."',user_email='".$user_email."',password='".$password."',confirm_password='".$confirm_password."',user_number='".$user_number."',event_address='".$event_address."',event_date='".$event_date."',start_time='".$start_time."',end_time='".$end_time."',pincode='".$pincode."',city='".$city."',state='".$state."',need='".$nedd."',other_message='".$other_message."',created_date='".$created_date."',created_by='".$user_full_name."' WHERE id='".$eid."'";
														$result=mysqli_query($conn,$query);
														if($result)
														{	
															echo '<script> alert("Thank you...!!!! Your event details Updated");
															window.location = " login_event.php"; </script>';
														}
														else
														{
															echo '<script> alert("Error.");
																  window.location = " update_event.php"; </script>';
														}
													}
													else
													{
															echo '<script> alert("Error."); 
															window.location = " update_event.php"; </script>';
													}
												}
											}
											else
											{
												echo '<script> alert("Error."); 
													window.location = " update_event.php"; </script>';
											}
										}	
							}
						}
						else
						{
							echo '<script> alert("Error."); 
										window.location = "update_event.php"; </script>';
						}



		}

	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="CSS\styleupdateevent.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>

		<div class="header fix">
			<img src="Image\logo.png">
			<form>
				<div class="navbtn">
					<i class="fa fa-bars fa-2x " aria-hidden="true" onclick="openNav()"></i>
				</div>
			</form>
		</div>
			<div class="nav fix">
			<ul>
				<li><a href="event_status.php">Event Status</a></li>
				<li class="active"><a href="donor_entry.php" >Donor Entry</a></li>
				<li><a href="e_blood_tips.php">Blood Tips</a></li>
				<li><a href="e_contribute.php">Contribute</a></li>
				<li><a href="e_about_us.php">About Us</a></li>
				<li><a href="e_get_in_touch.php">Contact Us</a></li>
			</ul>
		</div>
		<div id="mySidenav" class="sidenav">
  			<a  class="closebtn" onclick="closeNav()"><i class="fa fa-times" aria-hidden="true" style="font-size: 25px;"></i></a>
			<a href="update_event.php" class="a"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
  			<a href="delete_event.php" class="b"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
			<i class="fa fa-id-card-o" aria-hidden="true" style="color:white;">
			&nbsp;<?php echo $_SESSION['id']; ?></i>
			<i class="fa fa-user" aria-hidden="true" style="color:white;">
			&nbsp;<?php echo $_SESSION['user_full_name']; ?></i>
			<i class="fa fa-envelope" aria-hidden="true" style="color:white;">
			&nbsp;<?php echo $_SESSION['user_email']; ?></i>
			<i class="fa fa-phone" aria-hidden="true" style="color:white;">
			&nbsp;<?php echo $_SESSION['user_number']; ?></i>
			<i class="fa fa-calendar" aria-hidden="true" style="color:white;">
			&nbsp;<?php echo $_SESSION['event_date']; ?></i>
			<i class="fa fa-clock-o" aria-hidden="true" style="color:white;">
			&nbsp;<?php echo $_SESSION['start_time']; ?> &nbsp; to &nbsp; <?php echo $_SESSION['end_time']; ?></i>
			<i class="fa fa-location-arrow" aria-hidden="true" style="color:white;">
			&nbsp;<?php echo $_SESSION['city']; ?></i>
			<div class="btn1" >
				<a href="signout_event.php"><input type="button" name="Signout" value="Sign Out"></a>
			</div>
		</div>
			<div class="heading fix">	
				<label>Update Details</label>
			</div>
		<div class="outerbox">
			<div class="fixedbox">
				<span class="content">
					<h4>Important Note..!!</h4>
					<p><i class="fa fa-times" aria-hidden="true"></i>Password can not Change.</p>
					<p><i class="fa fa-times" aria-hidden="true"></i>Confirm Password can not Change.</p>
					<p><i class="fa fa-times" aria-hidden="true"></i>City can not Change.</p>
					<p><i class="fa fa-times" aria-hidden="true"></i>State can not Change.</p>
					
				</span>
			</div>
			<div class="scrollbox">
				<div class="registerdonor">
					<form action="update_event.php" method="post">
						<div class="login">
							<h3>Login Details</h3>
							<table>
								<tr>
									<td>
										<label>Full Name:-</label>
										<input type="text" name="user_full_name" required pattern="[A-z ]+$" title="Use only character & whitespace" value="<?php echo $_SESSION['user_full_name'];?>">
									</td>	
									<td>
										<label>Email Id:-</label>
										<input type="email" name="user_email" required pattern="[A-Za-z0-9._%+-]+@[A-z0-9.-]+\.[a-z]{2,}$" title="Email id is not Valid" value="<?php echo $_SESSION['user_email'];?>">
									</td>
								</tr>
								<tr>
									<td>
										<label>Password:-</label>
										<input type="password"name="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters" value="<?php echo $_SESSION['password'];?>" readonly>
									</td>
									<td>
										<label>Confirm Password:-</label>
										<input type="text" name="confirm_password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters" value="<?php echo $_SESSION['confirm_password'];?>" readonly>
									</td>
								</tr>
							</table>
						</div>
						<div class="event">
							<h3>Event Details</h3>
							<table>
								<tr>
									<td>
										<label>Mobile Number:-</label>
										<input type="text" name="user_number" required pattern="^[1-9]{1}[0-9]{9}$" title="Number is not valid" value="<?php echo $_SESSION['user_number'];?>">
									</td>
									<td rowspan="2">
										<label>Event Address:-</label>
										<textarea name="event_address" placeholder="---Type---" required><?php echo $_SESSION['event_address'];?></textarea>
									</td>
								</tr>
								<tr>
									<td>
										<label>Event Date:-</label>
										<input type="date" name="event_date" required value="<?php echo $_SESSION['event_date_a'];?>">
									</td>
								</tr>
								<tr>
									<td>
										<label>Event Time:-</label>
										<input type="time" name="start_time" class="time" required value="<?php echo $_SESSION['start_time'];?>"><label class="timelabel">To</label>
										<input type="time" name="end_time" class="time" required value="<?php echo $_SESSION['end_time'];?>">
									</td>
									<td>
										<label>Pincode:-</label>
										<input type="text" name="pincode" required pattern="^[0-9]{6}$" title="Pincode is not valid" value="<?php echo $_SESSION['pincode'];?>">
									</td>	
								</tr>
								<tr>
									<td>
										<label>City:-</label>
										<input type="text" name="city" value="Ahmedabad" readonly value="<?php echo $_SESSION['city'];?>">
									</td>
									<td>
										<label>State:-</label>
										<input type="text" name="state" value="Gujarat" readonly value="<?php echo $_SESSION['state'];?>">
									</td>
								</tr>
							</table>
						</div>
							<div class="other">
							<h3>Other Details(Optional)</h3>
							<table>
								<tr>
									<td>
										<label>Which one is more required ?:-</label>
										<input type="text" list="need" name="need" placeholder="----Select----" value="<?php echo $_SESSION['need'];?>">
										<datalist id="need">
											<option value="Plasama"></option>
											<option value="Blood"></option>
											<option value="Platelates"></option>	
										</datalist>
										<td rowspan="2">
											<label>Why are you plan this Event ?:-</label>
												<textarea name="other_message" placeholder="---Type---"><?php echo $_SESSION['other_message'];?></textarea>
										</td>
									</td>	
								</tr>
								<tr>
									<td>
										<label>Event Poster:-</label>
										<input type="file" name="event_poster">
									</td>
								</tr>
							</table>
						</div>
						<span>
							<input type="checkbox" name="terms" id="checkbox" required>
						</span><p>I agree to have my contact details broadcasted to the of B24U.net</p>
						
						<div class="btnn">
							<input type="submit" name="submit" value="Update">
							<input type="reset" name="reset" value="Reset">
						</div>
						</form>
				</div>
			</div>
		</div>
				<!-- Responsive Table-->
			<div class="rregisterdonor">
				<form action="update_event.php" method="post" >
				<div class="rlogin">
					<h3>Login Details</h3>
					<table>
						<tr>
							<td>
								<label>Full Name:-</label>
								<input type="text" name="user_full_name" required pattern="[A-z ]+$" title="Use only character & whitespace" value="<?php echo $_SESSION['user_full_name'];?>">
							</td>	
						</tr>
						<tr>
							<td>
								<label>Email Id:-</label>
								<input type="email" name="user_email" required pattern="[A-Za-z0-9._%+-]+@[A-z0-9.-]+\.[a-z]{2,}$" title="Email id is not Valid" value="<?php echo $_SESSION['user_email'];?>">
							</td>
						</tr>
						<tr>
							<td>
								<label>Password:-</label>
								<input type="password"name="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters" value="<?php echo $_SESSION['password'];?>" readonly>
							</td>
						</tr>
						<tr>	
							<td>
								<label>Confirm Password:-</label>
								<input type="text" name="confirm_password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters" value="<?php echo $_SESSION['confirm_password'];?>" readonly>
							</td>
						</tr>
					</table>
				</div>
				<div class="revent">
					<h3>Event Details</h3>
					<table>
						<tr>
							<td>
								<label>Mobile Number:-</label>
								<input type="text" name="user_number" required pattern="^[1-9]{1}[0-9]{9}$" title="Number is not valid" value="<?php echo $_SESSION['user_number'];?>">
							</td>
						</tr>
						<tr>
							<td>
								<label>Event Address:-</label>
								<textarea name="event_address" placeholder="---Type---" required>
									<?php echo $_SESSION['event_address'];?>
								</textarea>
							</td>
						</tr>
						<tr>
							<td>
								<label>Event Date:-</label>
								<input type="date" name="event_date" required value="<?php echo $_SESSION['event_date_a'];?>">
							</td>
						</tr>
						<tr>
							<td>
								<label>Event Time:-</label>
								<input type="time" name="start_time" class="time" required><label class="timelabel" value="<?php echo $_SESSION['start_time'];?>">To</label>
								<input type="time" name="end_time" class="time" required value="<?php echo $_SESSION['end_time'];?>">
							</td>
						</tr>
						<tr>
							<td>
								<label>Pincode:-</label>
								<input type="text" name="pincode" required pattern="^[0-9]{6}$" title="Pincode is not valid" value="<?php echo $_SESSION['pincode'];?>">
							</td>	
						</tr>
						<tr>
							<td>
								<label>City:-</label>
								<input type="text" name="city" value="Ahmedabad" readonly value="<?php echo $_SESSION['city'];?>">
							</td>
						</tr>
						<tr>
							<td>
								<label>State:-</label>
								<input type="text" name="state" value="Gujarat" readonly value="<?php echo $_SESSION['state'];?>">
							</td>
						</tr>
					</table>
				</div>
					<div class="rother">
					<h3>Other Details(Optional)</h3>
					<table>
						<tr>
							<td>
								<label>Which one is more required ?:-</label>
								<input type="text" list="need" name="need" placeholder="----Select----" value="<?php echo $_SESSION['need'];?>">
								<datalist id="need">
									<option value="Plasama"></option>
									<option value="Blood"></option>
									<option value="Platelates"></option>	
								</datalist>
							</td>
						</tr>
						<tr>
							<td >
								<label>Why are you plan this Event ?:-</label>
								<textarea name="other_message" placeholder="---Type---"><?php echo $_SESSION['other_message'];?></textarea>
							</td>	
						</tr>
						<tr>
							<td>
								<label>Event Poster:-</label>
								<input type="file" name="event_poster">
							</td>
						</tr>
					</table>
				</div>
				<span>
					<input type="checkbox" name="terms" id="checkbox" required>
				</span><p>I agree to have my contact details broadcasted to the B24U.net</p>
				
				<div class="btnn">
					<input type="submit" name="submit" value="Update">
					<input type="reset" name="reset" value="Reset">
				</div>
				</form>
		</div>
		<?php
	      include 'footer.php';
	    ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/additional-methods.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script>
jQuery.validator.addMethod("checkemail", function(value, element) {
  // allow any non-whitespace characters as the host part
  return this.optional( element ) || /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i.test( value );
}, 'Please enter a valid email address.');






$(document).ready(function () {

    $('#myform').validate({ 
        rules: {
            fname: {
                required: true,
             	lettersonly:true,
               
            },
            lname:{
            	  required: true,
            	  lettersonly:true,

            },
            email:{
            	required:true,
            	email:true,
            	checkemail:true,
            },
            password:{
            	required:true,
            	minlength:7,
            	maxlength:15,

            },
            confirm_password:{
            	required:true,
            	minlength:7,
            	maxlength:15,
            	equalTo: "#password",


            },
            contect_no:{
            	required:true,
            	minlength:10,
            	maxlength:10,
            	digits:true,
            },
            img:{
            	required:true,
            	// uploadfile:true,
            	accept: "jpg,png,jpeg,gif",
            },
        
        },
        messages:{
        	fname:{
        		required:"firstname is required",
        		lettersonly:"enter letters only",
        	},
        	
        	lname:{
        		required:"last name is required",
        		lettersonly:"enter letters only",
        	},
        	email:{
        		required:"email required",
        		email:"enter valid email",
        		checkemail:"enter proper email",

        	},
			password:{
				required:"password is required",
				minlength:"enter password between 7-15",
				maxlength:"enter password between 7-15",
			},
			confirm_password:{
				required:"password is required",
				minlength:"enter password between 7-15",
				maxlength:"enter password between 7-15",
				equalTo:"password must be same",


			},
			contect_no:{
				required:"contect no is required",
				minlength:"enter contect number 10digits",
				maxlength:"enter contect number 10digits",
				digits:"enter 10 digits",


			},
        	img:{
        		required:"upload image",
        		// uploadfile:"upload image",
        		accept:"upload image only jpg,jpeg,png ",


        	},
        },
    });

});
</script>
</body>
<script type="text/javascript">
	function share()
	{
		var a =document.getElementById("f");
		var b=document.getElementById("g");
		var c=document.getElementById("i");
		var d=document.getElementById("y");
		if (a.style.display === "none")
		{
			a.style.display="block";
			b.style.display="block";
			c.style.display="block";
			d.style.display="block";
		}
		else
		{
			a.style.display="none";
			b.style.display="none";
			c.style.display="none";
			d.style.display="none";
		}
	}
	function openNav()
		{
  			document.getElementById("mySidenav").style.display = "block";
		}
		function closeNav()
		{
  			document.getElementById("mySidenav").style.display = "none";
		}
</script>
</html>
		