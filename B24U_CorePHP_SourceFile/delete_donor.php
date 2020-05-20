<?php
	session_start();
	include('connection.php');
	if(isset($_POST['submit']))
	{
		if($_POST['submit']=="Yes")
		{
			$user_name=$_SESSION['user_name'];
			$sqla="UPDATE donorlogin SET status=1 WHERE user_name='".$user_name."' ";
			$resulta=mysqli_query($conn,$sqla);
			if($resulta)
			{
				$sqlb="DROP TABLE `$user_name` ";
				$resultb=mysqli_query($conn,$sqlb);
				echo "<script> alert('Your acount sucessfully deleted '); window.location='login_donor.php' </script>";
			}
			else
			{
				echo "<script> alert('Error'); window.location='delete_donor.php' </script>";
			}
		}
		else
		{
			echo "<script> window.location='donor_page.php' </script>";
		}
	}	
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="CSS\styledeletedonor.css">
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
			<li class="active"><a href="donor_page.php" >Donor History</a></li>
			<li><a href="health_report.php">Health Report</a></li>
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
					<form action="delete_donor.php" method="post">
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