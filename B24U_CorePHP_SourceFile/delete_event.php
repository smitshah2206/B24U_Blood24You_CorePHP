<?php
	session_start();
	include('connection.php');
	if(isset($_POST['submit']))
	{
		if($_POST['submit']=="Yes")
		{
			$user_email=$_SESSION['user_email'];
			$sqla="UPDATE eventlogin SET status=1 WHERE user_email='".$user_email."' AND status='0' ";
			$resulta=mysqli_query($conn,$sqla);
			if($resulta)
			{
				$sqlb="DROP TABLE `$user_email` ";
				$resultb=mysqli_query($conn,$sqlb);
				echo "<script> alert('Your acount sucessfully deleted '); window.location='login_event.php' </script>";
			}
			else
			{
				echo "<script> alert('Error'); window.location='delete_event.php' </script>";
			}
		}
		else
		{
			echo "<script> window.location='event_status.php' </script>";
		}
	}	
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="CSS\styledeleteevent.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body >
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
			<div class="btn1 btn" >
				<a href="signout_event.php"><input type="button" name="Signout" value="Sign Out"></a>
			</div>
		</div>
	<div class="heading fix">	
		<label>Delete Account</label>
	</div>
		<div class="outerbox">
			<div class="image">
				<i class="fa fa-frown-o" aria-hidden="true"></i>
			</div>
			<div class="content">
				<h2>Are you sure you want to delete this account ?</h2><br>
			</div>
			<div class="button">
				<span class="btn2">
					<form action="delete_event.php" method="post">
						<input type="submit" name="submit" value="Yes">
						<input type="submit" name="submit" value="No">
					</form>
				</span>
			</div>
		</div>
		<div id="mySidenav" class="sidenav">
  		<a  class="closebtn" onclick="closeNav()">&times;</a>
  		<a href="update_donor.php" class="a"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
  		<a href="delete_donor.php" class="b"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
		<i class="fa fa-id-card-o" aria-hidden="true" style="color:white;">
			&nbsp;<?php echo $_SESSION['id']; ?>
		</i>
		<i class="fa fa-user" aria-hidden="true" style="color:white;">
			&nbsp;<?php echo $_SESSION['user_full_name']; ?>
		</i>
		<i class="fa fa-envelope" aria-hidden="true" style="color:white;">
			&nbsp;<?php echo $_SESSION['user_email']; ?>
		</i>
		<i class="fa fa-phone" aria-hidden="true" style="color:white;">
			&nbsp;<?php echo $_SESSION['user_number']; ?>
		</i>
		<i class="fa fa-calendar" aria-hidden="true" style="color:white;">
			&nbsp;<?php echo $_SESSION['date_of_birth']; ?>
		</i>
		<i class="fa fa-venus-mars" aria-hidden="true" style="color:white;">
			&nbsp;<?php echo $_SESSION['gender']; ?>
		</i>
		<i class="fa fa-tint" aria-hidden="true" style="color:white;">
			&nbsp;<?php echo $_SESSION['blood_group']; ?>
		</i>
		<i class="fa fa-location-arrow" aria-hidden="true" style="color:white;">
			&nbsp;<?php echo $_SESSION['city']; ?>
		</i>
		<div class="btn btn1" >
			<a href="login_donor.php"><input type="button" name="Signout" value="Sign Out"></a>
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