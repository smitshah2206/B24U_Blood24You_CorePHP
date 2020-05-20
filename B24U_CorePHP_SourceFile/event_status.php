<?php
	session_start();
	
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="CSS\styleeventstatus.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
				<li class="active"><a href="event_status.php">Event Status</a></li>
				<li><a href="donor_entry.php" >Donor Entry</a></li>
				<li><a href="e_blood_tips.php">Blood Tips</a></li>
				<li><a href="e_contribute.php">Contribute</a></li>
				<li><a href="e_about_us.php">About Us</a></li>
				<li><a href="e_get_in_touch.php">Contact Us</a></li>
			</ul>
		</div>
		<div id="mySidenav" class="sidenav">
  			<a  class="closebtn" onclick="closeNav()">&times;</a>
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
				<label>Event Status</label>
			</div>
		<div class="registerdonor">
			<form>
				<div class="login">
					<h3>Event Information</h3>
					<table>
						<tr>
							<td>
								<label>Event Id :-</label>
							</td>	
							<td>
								<label class="sinfo"><?php echo $_SESSION['id']; ?></label>	
							</td>
						</tr>
						<tr>
							<td>
								<label>Full Name:-</label>
							</td>	
							<td>
								<label class="sinfo"><?php echo $_SESSION['user_full_name']; ?></label>
							</td>
						</tr>
						<tr>
							<td>
								<label>Event Date:-</label>
							</td>	
							<td>
								<label class="sinfo"><?php echo $_SESSION['event_date']; ?></label>
							</td>
						</tr>
						<tr>
							<td>
								<label>Event Time:-</label>
							</td>	
							<td>
								<label class="sinfo"><?php echo $_SESSION['start_time']; ?>&nbsp; to &nbsp; <?php echo $_SESSION['end_time']; ?></label>
							</td>
						</tr>
					</table>
				</div>
			</form>
	</div>
	<div class="registerdonor eventinfo">
			<form>
				<div class="login">
					<h3>Donate Information</h3>
					<table>
						<tr>
							<td>
								<label>Blood Donation:-</label>
							</td>	
							<td>
								<label class="sinfo">
									<?php 
										include('connection.php');
										$e = $_SESSION['user_email'];
										$queryi= "SELECT donation_type from `$e` ";
										$resulti = mysqli_query($conn,$queryi);
										$counti = mysqli_num_rows($resulti);
										$a=0;
										if ($resulti)
										{
											if($counti > 0)
											{
												while($row = mysqli_fetch_array($resulti))
												{	
													if ($row['donation_type'] == "Blood") 
													{
														$a=$a+1;	
													}
												}
											}
										}
										echo $a;
										mysqli_close($conn);
									?>
								</label>
							</td>
						</tr>
						<tr>
							<td>
								<label>Pletlets Donation:-</label>
							</td>	
							<td>
								<label class="sinfo">
									<?php 
										include('connection.php');
										$e = $_SESSION['user_email'];
										$queryi= "SELECT donation_type from `$e` ";
										$resulti = mysqli_query($conn,$queryi);
										$counti = mysqli_num_rows($resulti);
										$b=0;
										if ($resulti)
										{
											if($counti > 0)
											{
												while($row = mysqli_fetch_array($resulti))
												{	
													if ($row['donation_type'] == "Pletlets") 
													{
														$b=$b+1;	
													}
												}
											}
										}
										echo $b;
										mysqli_close($conn);
									?>	
								</label>
							</td>
						</tr>
						<tr>
							<td>
								<label>Plasama Donation:-</label>
							</td>	
							<td>
								<label class="sinfo">
									<?php 
										include('connection.php');
										$e = $_SESSION['user_email'];
										$queryi= "SELECT donation_type from `$e` ";
										$resulti = mysqli_query($conn,$queryi);
										$counti = mysqli_num_rows($resulti);
										$c=0;
										if ($resulti)
										{
											if($counti > 0)
											{
												while($row = mysqli_fetch_array($resulti))
												{	
													if ($row['donation_type'] == "Plasama") 
													{
														$c=$c+1;	
													}
												}
											}
										}
										echo $c;
										mysqli_close($conn);
									?>
								</label>
							</td>
						</tr>
						<tr>
							<td>
								<label>Total Donation:-</label>
							</td>	
							<td>
								<label class="sinfo">
									<?php 
										include('connection.php');
										$d=$a+$b+$c;
										echo $d;
										$queryj = "UPDATE eventlogin SET blood_donation='$a',pletlets_donation='$b',plasama_donation='$c',total_donation='$d' WHERE user_email='".$e."'  ";
										$resultj=mysqli_query($conn,$queryj);
									?>	
								</label>
							</td>
						</tr>
					</table>
				</div>
			</form>
	</div>
		<div class="box1">
			<h3>Blood Status</h3>
			<div class="circle">
				<div class="circle1">
					<label class="cinfo">
						<?php 
 							include('connection.php');
							$e = $_SESSION['user_email'];
							$queryk= "SELECT blood_group,donation_type from `$e` ";
							$resultk = mysqli_query($conn,$queryk);
							$countk = mysqli_num_rows($resulti);
							$f=0;
							if ($resultk)
							{
								if($countk > 0)
								{
									while($row = mysqli_fetch_array($resultk))
									{	
										if($row['donation_type'] == "Blood")
										{
											if ($row['blood_group'] == "A+") 
											{
												$f=$f+1;	
											}
										}
									}
								}
							}
							$queryl = "UPDATE eventlogin SET a_negative='$f' WHERE user_email='".$e."'";
							$resultl=mysqli_query($conn,$queryl);
							echo $f;
							mysqli_close($conn);
						?>	
					</label>
				</div>
				<div class="label1">
					<h4>A+</h4>
				</div>
				<div class="circle2">
					<label class="cinfo">
						<?php 
 							include('connection.php');
							$e = $_SESSION['user_email'];
							$queryk= "SELECT blood_group,donation_type from `$e` ";
							$resultk = mysqli_query($conn,$queryk);
							$countk = mysqli_num_rows($resulti);
							$f=0;
							if ($resultk)
							{
								if($countk > 0)
								{
									while($row = mysqli_fetch_array($resultk))
									{	
										if($row['donation_type'] == "Blood")
										{
											if ($row['blood_group'] == "A-") 
											{
												$f=$f+1;	
											}
										}
									}
								}
							}
							$queryl = "UPDATE eventlogin SET a_negative='$f' WHERE user_email='".$e."'";
							$resultl=mysqli_query($conn,$queryl);
							echo $f;
							mysqli_close($conn);
						?>		
					</label>
				</div>
				<div class="label2">
					<h4>A-</h4>
				</div>
				<div class="circle3">
					<label class="cinfo">
						<?php 
 							include('connection.php');
							$f = $_SESSION['user_email'];
							$queryk= "SELECT blood_group,donation_type from `$e` ";
							$resultk = mysqli_query($conn,$queryk);
							$countk = mysqli_num_rows($resultk);
							$f=0;
							if ($resultk)
							{
								if($countk > 0)
								{
									while($row = mysqli_fetch_array($resultk))
									{	
										if($row['donation_type'] == "Blood")
										{
											if ($row['blood_group'] == "B+") 
											{
												$f=$f+1;	
											}
										}
									}
								}
							}
							$queryl = "UPDATE eventlogin SET b_positive='$f' WHERE user_email='".$e."'";
							$resultl=mysqli_query($conn,$queryl);
							echo $f;
							mysqli_close($conn);
						?>		
					</label>
				</div>
				<div class="label3">
					<h4>B+</h4>
				</div>
				<div class="circle4">
					<label class="cinfo">
						<?php 
 							include('connection.php');
							$e = $_SESSION['user_email'];
							$queryk= "SELECT blood_group,donation_type from `$e` ";
							$resultk = mysqli_query($conn,$queryk);
							$countk = mysqli_num_rows($resultk);
							$f=0;
							if ($resultk)
							{
								if($counti > 0)
								{
									while($row = mysqli_fetch_array($resultk))
									{	
										if($row['donation_type'] == "Blood")
										{
											if ($row['blood_group'] == "B-") 
											{
												$f=$f+1;	
											}
										}
									}
								}
							}
							$queryl = "UPDATE eventlogin SET b_negative='$f' WHERE user_email='".$e."'";
							$resultl=mysqli_query($conn,$queryl);
							echo $f;
							mysqli_close($conn);
						?>		
					</label>
				</div>
				<div class="label4">
					<h4>B-</h4>
				</div>
				<div class="circle5">
					<label class="cinfo">
						<?php 
 							include('connection.php');
							$e = $_SESSION['user_email'];
							$queryk= "SELECT blood_group,donation_type from `$e` ";
							$resultk = mysqli_query($conn,$queryk);
							$countk = mysqli_num_rows($resultk);
							$f=0;
							if ($resultk)
							{
								if($countk > 0)
								{
									while($row = mysqli_fetch_array($resultk))
									{	
										if($row['donation_type'] == "Blood")
										{
											if ($row['blood_group'] == "O+") 
											{
												$f=$f+1;	
											}
										}
									}
								}
							}
							$queryl = "UPDATE eventlogin SET o_positive='$f' WHERE user_email='".$e."'";
							$resultl=mysqli_query($conn,$queryl);
							echo $f;
							mysqli_close($conn);
						?>		
					</label>
				</div>
				<div class="label5">
					<h4>O+</h4>
				</div>
				<div class="circle6">
					<label class="cinfo">
						<?php 
 							include('connection.php');
							$e = $_SESSION['user_email'];
							$queryk= "SELECT blood_group,donation_type from `$e` ";
							$resultk = mysqli_query($conn,$queryk);
							$countk = mysqli_num_rows($resultk);
							$f=0;
							if ($resultk)
							{
								if($countk > 0)
								{
									while($row = mysqli_fetch_array($resultk))
									{	
										if($row['donation_type'] == "Blood")
										{
											if ($row['blood_group'] == "O-") 
											{
												$f=$f+1;	
											}
										}
									}
								}
							}
							$queryl = "UPDATE eventlogin SET o_negative='$f' WHERE user_email='".$e."'";
							$resultl=mysqli_query($conn,$queryl);
							echo $f;
							mysqli_close($conn);
						?>		
					</label>
				</div>
				<div class="label6">
					<h4>O-</h4>
				</div>
			</div>
		</div>
		<?php
	      include 'footer.php';
	    ?>

	</body>
	<script type="text/javascript">
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