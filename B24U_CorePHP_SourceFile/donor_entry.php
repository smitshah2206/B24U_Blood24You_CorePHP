<?php
	session_start();
	include('connection.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="CSS\styledonorentry.css">
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
				<li><a href="event_status.php">Event Status</a></li>
				<li class="active"><a href="donor_entry.php" >Donor Entry</a></li>
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
				<label>Donor Entry</label>
			</div>
		<div class="box">
			<h3>Donor Entry</h3>
			<div class="addinfo">
				<i class="fa fa-id-card" aria-hidden="true"></i>
				<form action="donor_entry.php" method="post">
					<input type="number" name="donor_id" placeholder="Enter Donor ID " required autocomplete="off">
					<span class="btn">
						<a><input type="submit" name="submit" value="Add"></a>
					</span>
				</form>
			</div>
				<table border="1">
				<th>Donor ID No.</th>
				<th>Donor Name</th>
				<th>Blood Group</th>
				<th>Contact Number</th>
				<?php
					include('connection.php');
					$email = $_SESSION['user_email'];
					$current_date=date("Y-m-d");
					$queryd  = "SELECT * FROM `$email` ORDER BY id DESC ";
					$resultd= mysqli_query($conn , $queryd);
		 			$count= mysqli_num_rows($resultd);
		 			if($resultd)
					{
						if($count >0)
						{
							while($row = mysqli_fetch_array($resultd))
							{	
								echo "<tr>";
								echo "<td>" . $row['donor_id']."</td>" ;
								echo "<td>" . $row['user_full_name'] . "</td>";
								echo "<td>" . $row['blood_group'] . "</td>";
								echo "<td>" . $row['user_number'] . "</td>";
								echo "</tr>";
							}
						}
					}
				?>
			</table>
		</div>
		<?php 
			if(isset($_POST['submit']))
			{
				if($_POST['submit'] = "Add")
				{
					$id = $_POST['donor_id'];
					$user_email=$_SESSION['user_email'];
					$sql="SELECT donor_id FROM `$user_email` WHERE donor_id='".$id."'  ";
					$result=mysqli_query($conn,$sql);
					$count=mysqli_num_rows($result);
					if ($result)
					{
						if( $count == 1)
						{
							echo '<script> alert("This Donor come before.");
					  			window.location = "donor_entry.php"; </script>';
						}
						else
						{
							$id = $_POST['donor_id'];
							$queryd = "SELECT * FROM donorlogin WHERE id='$id' AND status=0";
							$result = mysqli_query($conn,$queryd);
							$count = mysqli_num_rows($result);
							if ($result)
							{
					 			if( $count == 1 )
								{
									$row = mysqli_fetch_array($result);
									$_SESSION['did'] = $row['id'];
									$dname = $row['user_full_name'];
									$dnumber = $row['user_number'];
									$dblood_group = $row['blood_group'];
									$dweight = $row['weight'];
									$dblood_pressure = $row['blood_pressure'];
									$dpulse = $row['pulse'];
									$dhemoglobin = $row['hemoglobin'];
									echo '<div class="registerdonor">';
										echo '<form action="eventdata_entry.php" method="post">';
											echo '<div class="login">';
														echo'<h3>Event Information</h3>';
														echo'<table>';
														echo'<tr>';
														echo'<td>';
																echo'<label>Donor Id :-</label>';
															echo'</td>';	
															echo'<td>';
																echo'<label class="sinfo">' .$_SESSION['did']. '</label>';
															echo'</td>';
														echo'</tr>';
														echo'<tr>';
															echo'<td>';
																echo'<label>Donor Name:-</label>';
															echo'</td>';	
															echo'<td>';
																echo'<label class="sinfo">' .$dname. '</label>';
															echo'</td>';
														echo'</tr>';
														echo'<tr>';
															echo'<td>';
																echo'<label>Contact Number:-</label>';
															echo'</td>';	
															echo'<td>';
																echo'<label class="sinfo">'.$dnumber.'</label>';
															echo'</td>';
														echo'</tr>';
														echo'<tr>';
															echo'<td>';
																echo'<label>Blood Group:-</label>';
															echo'</td>';	
															echo'<td>';
																echo'<label class="sinfo">'.$dblood_group. '</label>';
															echo'</td>';
														echo'</tr>';
														echo'<tr>';
															echo'<td>';
																echo'<label>Weight:-</label>';
															echo'</td>';	
															echo'<td>';
																echo'<input type="number" required name="weight" value='.$dweight. '>';
															echo'</td>';
														echo'</tr>';
														echo'<tr>';
															echo'<td>';
																echo'<label>Blood Pressure:-</label>';
															echo'</td>';	
															echo'<td>';
																echo'<input type="number" required name="bloodpressure" value='.$dblood_pressure.'> ';
															echo'</td>';
														echo'</tr>';
														echo'<tr>';
															echo'<td>';
																echo'<label>Pulse:-</label>';	
															echo'</td>';	
															echo'<td>';
																echo'<input type="number" required name="pulse" value='.$dpulse.'>';
															echo'</td>';
														echo'</tr>';
														echo'<tr>';
															echo'<td>';
																echo'<label>Hemoglobin:-</label>';
															echo'</td>';	
															echo'<td>';
															echo'<input type="number" required name="hemoglobin" value='.$dhemoglobin.'>';
															echo'</td>';
														echo'</tr>';
														echo'<tr>';
															echo'<td>';
																echo'<label>Donate Type:-</label>';
															echo'</td>';	
															echo'<td>';
															echo'<input type="text" list="need" name="need" placeholder="----Select----" required>';
															echo '<datalist id="need">';
															echo '<option value="Plasama"></option>';
															echo '<option value="Blood"></option>';
															echo '<option value="Pletlets"></option>';	
															echo '</datalist>';
															echo'</td>';
														echo'</tr>';
														
														echo'<tr>';
															echo'<div class="btn2">';
																echo'<input type="submit" name="submit" value="Update">';
															echo'</div>';
														echo'</tr>';
													echo'</table>';
												echo'</div>';
										echo'</form>';
									echo'</div>' ;
								}
								else
								{
									echo '<script> alert("Donor Id not registered");
									window.location="donor_entry.php"; </script>';
								}
							}
						}
					}
					else
					{
						echo '<script> alert("Error");
									window.location="donor_entry.php"; </script>';
					}
				}
			}
			else
			{
				echo "<div class='registerdonor'>
								<form>
									<div class='login'>
									<h3>Event Information</h3>
									<table>
									<tr>
										<td>
											<label>Donor Id :-</label>
										</td>	
										<td>
											<label class='sinfo'></label>					
										</td>
									</tr>
									<tr>
										<td>
											<label>Donor Name:-</label>
										</td>	
										<td>
											<label class='sinfo'></label>
										</td>
									</tr>
									<tr>
										<td>
											<label>Contact Number:-</label>
										</td>	
										<td>
											<label class='sinfo'></label>
										</td>
									</tr>
									<tr>
										<td>
											<label>Blood Group:-</label>
										</td>	
										<td>
											<label class='sinfo'></label>
										</td>
									</tr>
									<tr>
										<td>
											<label>Weight:-</label>
										</td>	
										<td>
											<input type='number' name='weight' >
										</td>
									</tr>
									<tr>
										<td>
											<label>Blood Pressure:-</label>
										</td>	
										<td>
											<input type='number' name='bloodpressure' > 
										</td>
									</tr>
									<tr>
										<td>
											<label>Pulse:-</label>
										</td>	
										<td>
											<input type='number' name='pulse'>
										</td>
									</tr>
									<tr>
										<td>
											<label>Hemoglobin:-</label>
										</td>	
										<td>
											<input type='number' name='hemoglobin'>
										</td>
									</tr>
									<tr>
										<td>
											<label>Donate Type:-</label>
										</td>	
										<td>
										<input type='text' list='need' name='need' placeholder='----Select----'>
										<datalist id='need'>
										<option value='Plasama'></option>
										<option value='Blood'></option>
										<option value='Pletlets'></option>	
										</datalist>
										</td>
									</tr>
									<tr>
										<div class='btn2'>
											<input type='submit' name='submit' value='Update'>
										</div>
									</tr>
								</table>
							</div>
						</form>
					</div>";
			}
		?>
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