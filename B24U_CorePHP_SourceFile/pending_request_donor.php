<?php
	include('connection.php');
	session_start();
	if(isset($_POST['submit']))
	{
		$id=$_POST['id'];
		$status=1;
		$blood_group=$_SESSION['blood_group'];
		$queryo="SELECT * FROM requestblood WHERE id='".$id."' AND blood_group='".$blood_group."' ";
		$resulto=mysqli_query($conn, $queryo);
		$counto= mysqli_num_rows($resulto);
		if($resulto)
		{
			if($counto > 0)
			{
				while($row = mysqli_fetch_array($resulto))
				{	
					$report_date = $row['required_date'];
					$patient_name = $row['patient_name'];
					if($row['status'] == 0 )
					{
						$d_id=$_SESSION['id'];
						$query = "UPDATE  requestblood SET status=1,donor_id='$d_id' WHERE id='$id' ";
						$result=mysqli_query($conn, $query);	
						if($result)
						{
							$queryp= "SELECT * from donorlogin WHERE id='".$_SESSION['id']."' ";
							$resultp = mysqli_query($conn,$queryp);
							$countp = mysqli_num_rows($resultp);
							if ($resultp)
							{
								if($countp == 1)
								{
									while($row = mysqli_fetch_array($resultp))
									{	
										$bl = $row['blood_donation'];
										$pl = $row['plasama_donation'];
										$pa = $row['pletlets_donation'];
									}
								}
							}
							$bl = $bl + 1;
							$tl = $bl + $pl + $pa;
							$type="Blood";
							$uname= $_SESSION['user_name'];
							$querypl = "UPDATE donorlogin SET blood_donation='$bl',total_donation='$tl' WHERE id='".$_SESSION['id']."' ";
							$resultpl=mysqli_query($conn, $querypl);
							$queryt = "INSERT INTO `$uname` (`donation_date`,`donation_type`,`request_blood_status`,`patient_name`) VALUES ('".$report_date."','".$type."',1,'".$patient_name."') ";
							$resultt=mysqli_query($conn,$queryt);
							echo '<script>alert("Patient details send in Your register mobile number...!!!");
							 	window.location = " donor_page.php";</script>';
						}
					}
					else
					{
						echo '<script>alert("Invalid Patient Id...!!");
						window.location = " pending_request_donor.php"; </script>';
					}			
				}
			}
		}
		else
		{
			echo '<script>alert("Invalid Patient Id...!!");window.location = " pending_request_donor.php"; </script>';
		}
	}
	mysqli_close($conn);	
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="CSS\stylependingrequestdonor.css">
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
			<li><a href="donor_page.php" >Donor History</a></li>
			<li><a href="health_report.php">Health Report</a></li>
			<li class="active"><a href="pending_request_donor.php">Pending Request</a></li>
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
		<div id="mySidenav" class="sidenav">
  			<a  class="closebtn" onclick="closeNav()">&times;</a>
			<a href="update_donor.php" class="a"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
			<a href="delete_donor.php" class="b"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
			<i class="fa fa-id-card-o" aria-hidden="true" style="color:white;">
			&nbsp;<?php echo $_SESSION['id']; ?></i>
			<i class="fa fa-user" aria-hidden="true" style="color:white;">
			&nbsp;<?php echo $_SESSION['user_full_name']; ?></i>
			<i class="fa fa-envelope" aria-hidden="true" style="color:white;">
			&nbsp;<?php echo $_SESSION['user_email']; ?></i>
			<i class="fa fa-phone" aria-hidden="true" style="color:white;">
			&nbsp;<?php echo $_SESSION['user_number']; ?></i>
			<i class="fa fa-calendar" aria-hidden="true" style="color:white;">
			&nbsp;<?php echo $_SESSION['date_of_birth'];?></i>
			<i class="fa fa-venus-mars" aria-hidden="true" style="color:white;">
			&nbsp;<?php echo $_SESSION['gender'];?></i>
			<i class="fa fa-tint" aria-hidden="true" style="color:white;">
			&nbsp;<?php echo $_SESSION['blood_group'];?></i>
			<i class="fa fa-location-arrow" aria-hidden="true" style="color:white;">
			&nbsp;<?php echo $_SESSION['city'];?></i>
			<div class="btn1" >
				<a href="login_donor.php"><input type="button" name="Signout" value="Sign Out"></a>
			</div>
		</div>
			<div class="heading fix">	
				<label>Show Pending Request</label>
			</div>
		<div class="box">
			<h3>Pending  Request</h3>
			<div class="addinfo">
				<i class="fa fa-id-card" aria-hidden="true"></i>
				<form action="pending_request_donor.php" method="post">
					<input type="number" name="id"  autocomplete="off" placeholder="Enter a Patient ID NO." required>
					<span class="btn">
						<a><input type="submit" name="submit" value="Submit"></a>
					</span>
				</form>
			</div>
			<table border="1">
				<th>Patient Id.</th>
				<th>Patient Name</th>
				<th>Blood Group</th>
				<th>Required Date</th>
				<th>Hospital Name</th>
				<th>Hospital Address</th>
				<th>Contact Name</th>
				<th>Contact Number</th>
				<th>City</th>
				<?php
					include('connection.php');
					$blood_group=$_SESSION['blood_group']; 
					$current_date=date("Y-m-d");
					$queryd  = "SELECT * FROM requestblood WHERE blood_group='".$blood_group."' ORDER BY required_date";
					$result= mysqli_query($conn , $queryd);
		 			$count= mysqli_num_rows($result);
		 			$a=1;
					if($result)
					{
						if($count > 0)
						{
							while($row = mysqli_fetch_array($result))
							{	
								if($row['required_date'] > $current_date && $row['status'] == 0 )
								{
									echo "<tr>";
									echo "<td>" . $row['id']."</td>" ;
									echo "<td>" . $row['patient_name'] . "</td>";
									echo "<td>" . $row['blood_group'] . "</td>";
									$cal_date=$row['required_date'];
									$dated=date('d',strtotime($cal_date));
									$datem=date('m',strtotime($cal_date));
									$datey=date('Y',strtotime($cal_date));
									$required_date_a=$dated.'-'.$datem.'-'.$datey;
									echo "<td>" . $required_date_a . "</td>";
									echo "<td>" . $row['hospital_name'] . "</td>";
									echo "<td>" . $row['hospital_address'] . "</td>";
									echo "<td>" . $row['contact_name'] . "</td>";
									echo "<td>" . $row['contact_number'] . "</td>";
									echo "<td>" . $row['city'] . "</td>";
									echo "</tr>";
								}
							}
						}
						else
						{
							echo "<script> alert('No data Avaliable.');
								window.location='information.php'; </script>";
						}
					}
					mysqli_close($conn);
				?>
			</table>
   		</div>
   		<?php
	      include 'footer.php';
	    ?>
	</body>
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