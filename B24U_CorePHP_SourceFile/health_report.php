<?php
	session_start();
	
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="CSS\stylehealthreport.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="header fix">
			<img src="Image\logo.png">
				<div class="navbtn">
					<i class="fa fa-bars fa-2x " aria-hidden="true" onclick="openNav()"></i>
				</div>
	</div>
	<div class="nav fix">
		<ul>
			<li><a href="donor_page.php" >Donor History</a></li>
			<li class="active"><a href="health_report.php">Health Report</a></li>
			<li><a href="pending_request_donor.php">Pending Request</a></li>
			<li><a href="d_blood_tips.php">Blood Tips</a></li>
			<li><a href="d_contribute.php">Contribute</a></li>
			<li><a href="">More &nabla;</a>
					<ul>
						<li><a href="d_about_us.php">About Us</a></li>
						<li><a href="d_get_in_touch.php">Contact Us</a></li>
					</ul>
			</li>
		</ul>
	</div>
	<div class="heading fix">	
		<label>Health Report</label>
	</div>
 	<div class="registerdonor">
			<form>
				<div class="login">
					<h3>Short Information</h3>
					<table>
						<tr>
							<td>
								<label>Donor Id:-</label>
							</td>	
							<td>
								<label class="sinfo"><?php echo $_SESSION['id']; ?></label>
							</td>
						</tr>
						<tr>
							<td>
								<label>Donor Name:-</label>
							</td>	
							<td>
								<label class="sinfo"><?php echo $_SESSION['user_full_name']; ?></label>
							</td>
						</tr>
						<tr>
							<td>
								<label>Contact Number:-</label>
							</td>	
							<td>
								<label class="sinfo"><?php echo $_SESSION['user_number']; ?></label>
							</td>
						</tr>
						<tr>
							<td>
								<label>Report Date:-</label>
							</td>	
							<td>
								<label class="sinfo"><?php echo $_SESSION['health_report']; ?></label>
							</td>
						</tr>
						<tr>
							<td>
								<label>Last Place Donation:-</label>
							</td>	
							<td>
								<label class="sinfo"><?php echo $_SESSION['last_place_donation']; ?></label>
							</td>
						</tr>
					</table>
				</div>
				<div class="report">
					<h3>Health Report</h3>
					<h4>Safe Range For Blood Donation</h4>
					<table>
						<tr>
							<td>
								<label>Age:-</label>
							</td>	
							<td>
								<label class="sinfo"><?php echo $_SESSION['age']; ?></label>
							</td>
							<td>
								<h5>18 to 65 years</h5>
							</td>
						</tr>
						<tr>
							<td>
								<label>Weight:-</label>
							</td>	
							<td>
								<label class="sinfo"><?php echo $_SESSION['weight']; ?></label>
							</td>
							<td>
								<h5>&gt; 50 kg</h5>
							</td>
						</tr>
						<tr>
							<td>
								<label>Blood Pressure:-</label>
							</td>	
							<td>
								<label class="sinfo"><?php echo $_SESSION['blood_pressure']; ?></label>
							</td>
							<td>
								<h5>100/60 to 140/90 mm of HG</h5>
							</td>
						</tr>
						<tr>
							<td>
								<label>Pulse:-</label>
							</td>	
							<td>
								<label class="sinfo"><?php echo $_SESSION['pulse']; ?></label>
							</td>
							<td>
								<h5>60 to 100 / Minute</h5>
							</td>
						</tr>
						<tr>
							<td>
								<label>Hemoglobin:-</label>
							</td>	
							<td>
								<label class="sinfo"><?php echo $_SESSION['hemoglobin']; ?></label>
							</td>
							<td>
								<h5>&gt; 12.5 g/dl</h5>
							</td>
						</tr>
						<tr>
							<td>
								<label>Blood Group:-</label>
							</td>	
							<td>
								<label class="sinfo"><?php echo $_SESSION['blood_group']; ?></label>
							</td>
							<td>
								<h5>--------------</h5>
							</td>
						</tr>
					</table>
				</div>
			</form>
	</div>
	<div id="mySidenav" class="sidenav">
  		<a  class="closebtn" onclick="closeNav()">&times;</a>
		<a href="update_donor.php" class="a"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
		<a href="delete_donor.php" class="b"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
		<i class="fa fa-id-card-o" aria-hidden="true" style="color:white;">
			<?php echo $_SESSION['id']; ?>
		</i>
		<i class="fa fa-user" aria-hidden="true" style="color:white;">
			<?php echo $_SESSION['user_full_name']; ?>
		</i>
		<i class="fa fa-envelope" aria-hidden="true" style="color:white;">
			<?php echo $_SESSION['user_email']; ?>
		</i>
		<i class="fa fa-phone" aria-hidden="true" style="color:white;">
			<?php echo $_SESSION['user_number']; ?>
		</i>
		<i class="fa fa-calendar" aria-hidden="true" style="color:white;">
			<?php echo $_SESSION['date_of_birth']; ?>
		</i>
		<i class="fa fa-venus-mars" aria-hidden="true" style="color:white;">
			<?php echo $_SESSION['gender']; ?>
		</i>
		<i class="fa fa-tint" aria-hidden="true" style="color:white;">
			<?php echo $_SESSION['blood_group']; ?>
		</i>
		<i class="fa fa-location-arrow" aria-hidden="true" style="color:white;">
			<?php echo $_SESSION['city']; ?>
		</i>
		<div class="btn btn1" >
			<a href="signout_donor.php"><input type="button" name="Signout" value="Sign Out"></a>
		</div>
	</div>
		<?php
	      include 'footer.php';
	    ?>
</body>
<script>
		function openNav()
		{
  			document.getElementById("mySidenav").style.display = "block";
		}
		function closeNav()
		{
  			document.getElementById("mySidenav").style.display = "none";
		}
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
	</script>
</html>