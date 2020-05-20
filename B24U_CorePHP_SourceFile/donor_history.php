<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="CSS\styledonorhistory.css">
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
				<a href="signout_donor.php"><input type="button" name="Signout" value="Sign Out"></a>
			</div>
		</div>
			<div class="heading fix">	
				<label>Donor History</label>
			</div>
		<div class="box">
			<h3>Donor History</h3>
			<div class="addinfo">
						<form action="donor_history.php" method="post">
						<span><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span>
						<input type='text' autocomplete="off" list='select' name='select' required placeholder='----Select----' value='<?php  
								$select=$_POST['select'];
								echo $select; ?>' >
						<datalist id='select'>
							<option value='All'></option>
							<option value='Event'></option>
							<option value='Patient'></option>	
					</datalist><br>
			<div class="btn">
				<input type="submit" name="submit" value="Show Details">
			</div>
						</form>
			</div>
			<table border="1">
				<?php
					include('connection.php');
					$select=$_POST['select'];
					$user_name=$_SESSION['user_name'];
					if($select == "All")
					{
						echo "<th>Serial No.</th>";
						echo "<th>Event Name</th>";
						echo "<th>Event Date</th>";
						echo "<th>Donation Type</th>";
						echo "<th>Patient Name</th>";
						echo "<th>Donation Date</th>";
						$queryo="SELECT * FROM `$user_name` ";
						$result= mysqli_query($conn , $queryo);
		 				$count= mysqli_num_rows($result);
		 				$a=1;
						if($result)
						{
							if($count > 0)
							{
								while($row = mysqli_fetch_array($result))
								{	
									echo "<tr>";
									echo "<td>" . $a++."</td>" ;
									echo "<td>" . $row['event_name'] . "</td>";
									if($row['event_name'])
									{
										echo "<td>" . $row['donation_date'] . "</td>";
									}
									else
									{
										echo "<td></td>";	
									}
									echo "<td>" . $row['donation_type'] . "</td>";
									echo "<td>" . $row['patient_name'] . "</td>";
									if($row['patient_name'])
									{
										echo "<td>" . $row['donation_date'] . "</td>";	
									}
									else
									{
										echo "<td></td>";
									}
									echo "</tr>";
								}
							}
						}
					}
					else if($select == "Event")
					{
						echo "<th>Serial No.</th>";
						echo "<th>Event Name</th>";
						echo "<th>Event Date</th>";
						echo "<th>Donation Type</th>";
						echo "<th>Donation Date</th>";
						$queryo="SELECT * FROM `$user_name` WHERE event_status=1";
						$result= mysqli_query($conn , $queryo);
		 				$count= mysqli_num_rows($result);
		 				$a=1;
						if($result)
						{
							if($count > 0)
							{
								while($row = mysqli_fetch_array($result))
								{	
									echo "<tr>";
									echo "<td>" . $a++."</td>" ;
									echo "<td>" . $row['event_name'] . "</td>";
									echo "<td>" . $row['donation_date'] . "</td>";
									echo "<td>" . $row['donation_type'] . "</td>";
									echo "<td>" . $row['donation_date'] . "</td>";
									echo "</tr>";
								}
							}
						}
					}
					else if($select=="Patient")
					{
						echo "<th>Serial No.</th>";
						echo "<th>Patient Name</th>";
						echo "<th>Donation Type</th>";
						echo "<th>Donation Date</th>";
						$queryo="SELECT * FROM `$user_name` WHERE request_blood_status=1 ";
						$result= mysqli_query($conn , $queryo);
		 				$count= mysqli_num_rows($result);
		 				$a=1;
						if($result)
						{
							if($count > 0)
							{
								while($row = mysqli_fetch_array($result))
								{	
									echo "<tr>";
									echo "<td>" . $a++."</td>" ;
									echo "<td>" . $row['patient_name'] . "</td>";
									echo "<td>" . $row['donation_type'] . "</td>";
									echo "<td>" . $row['donation_date'] . "</td>";
									echo "</tr>";
								}
							}
						}
					}					
					mysqli_close($conn);
				?>
			</table>
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
	function openNav()
	{
  		document.getElementById("mySidenav").style.left = "78%";
  		document.getElementById("mySidenav").style.width = "300px";
	}
	function closeNav()
	{
  		document.getElementById("mySidenav").style.left = "100%";
  		document.getElementById("mySidenav").style.width = "0";	
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