<?php
	session_start();
	include('connection.php');
	if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$contactnumber=$_POST['contactnumber'];
		$message=$_POST['message'];
		$query="INSERT INTO feedback(`name`,`email`,`contactnumber`,`message`) VALUES ('".$name."','".$email."','".$contactnumber."','".$message."')";
		$result=mysqli_query($conn,$query);
		if($result)
		{
			echo "<script> alert('Thank you....!!! Your valuable feedback is stored...'); </script>";
		}
		else
		{
			echo "<script> alert('Error');
			window.location = 'get_in_touch.php'; </script>";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="CSS\stylecontactus.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<style type="text/css">
		.header
{
	width : 100%;
	position: fixed;
	top: 0;
	background-color: whitesmoke;
	box-sizing: border-box;
	height: 15%;
	z-index: 1;
}
.header > img
{
	height: 75px;
}
.header > form
{
	display: inline;
}
.navbtn
{
	padding-top:0px; 
	position: absolute; 
	display: inline;
	left: 90%;
	
}
.navbtn > i 
{
	font-size: 40px;
	margin: 9px;
	margin-left:30px;
	margin-bottom: 24px;
	margin-top: 30px;
	position: absolute;	
	display: block;
}
.navbtn > i:hover
{
	cursor: pointer;
	transition: 0.5s;
	opacity: 1;
}
.nav
{
	position: fixed;
	top: 10%;
	left: 13%;
	background-color: #ed1b24;
    border-color: transparent;
    border: none;
    z-index: 2;
    font-size: 15px;
   	box-sizing: border-box;
	box-shadow: 2px 2px 4px black;
}
.heading
{
	width : 100%;
	position: fixed;
	top: 15%;
	box-sizing: border-box;
	background-color: #ed1b24;
	height: 120px;
	box-shadow: 0 10px 10px grey;
	z-index: 1;	
}
.heading > label
{
	font-size: 25px;
	color: white;
	font-weight: bold;
	top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 300px;
    margin-left: 0px;
    text-align: center;
    position: absolute;
}
.nav ul
{
	display: flex;
	justify-content:flex-end;
	max-width:1200px;
	margin: 0 auto;
	padding:15px 15px;
}
.nav ul li
{
		list-style:none;
		letter-spacing: 1px;
		position:relative;
		padding: 10px 10px;
		margin-right: 2px;
		//transition:0.5s;
		box-sizing:border-box;
}
.nav ul li:hover
{
	background-color: black;
	color: white;
}
.nav ul li a:hover
{
	color: white;
}
.nav ul li a 
{
	text-decoration:none;
	padding:0 20px;
	color:#95afc0;	
	color: #ecf0f1;
}
.nav ul li ul
{
	position :absolute;
	top:40px;
	left:0;
	padding:0 0px;
	background:#000;
	display:block;
	width:230px;
	opacity:0;
	visibility:hidden;
}
.nav ul li:hover ul
{
	opacity:1;
	visibility:visible;
}
.nav ul li ul li
{
	border:1px solid rgba(255,255,255,.2);
	border-right:none;
	border-left:none;
	margin-right: 0px;
	padding: 10px 0px;
}
.nav ul li ul li:hover
{
	//background-color: #ff7979;
	background-color: #c23616;
}
.nav ul li ul li a
{
	color: #dcdde1;
}

.nav ul li ul li a:hover
{
	color: #dcdde1;
}
.active
{
	color: white;
	background-color: black;
}
.sidenav 
{
  height: 50%;
  width: 0;
  position: fixed;
  z-index:2;
  top: 0;
  left: 100%;
  background-color: #111;
  overflow-x: hidden;
  transition: 1.5s;
  padding-top: 60px;
}
.sidenav > a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
  z-index: 3;
}
.sidenav > a:hover {
  color: #f1f1f1;
  cursor: pointer;
}
.sidenav > i 
{
  padding: 8px 8px 8px 10px;
  text-decoration: none;
  font-size: 18px;
  color: #818181;
  display: block;
  transition: 0.3s;
  z-index: 3;
}
.sidenav >.closebtn {
  position: absolute;
  top: 0;
  font-size: 36px;
}
.a
{
	position: absolute;
	left: 50%;
    top: 10px;
    font-size: 30px;
}
.b
{
	position: absolute;
	left: 70%;
	top: 10px;
    font-size: 30px;
}
.btn1
{
	padding-top:10px; 
	margin-bottom:12px;
}
.btn1 >a
{
	position: absolute;
	top: 90%;
	left: 50%;
	transform: translate(-50%,-50%);
}
.btn1 >a> input
{
	display: inline-block;
	//border: 1px solid #0984e3;
	width:140px;
	background:#1b00ff;
	text-align:center;
	padding:5px;
	border-radius:25px;
	color:white;
	cursor:pointer;
	border-radius: 25px;
	text-transform:uppercase;
	transition: 0.5s;
}
.btn1 >a>input:hover
{
	background-color: white;
	color: black;
	width:170px;
	transition: 0.5s;
	font-weight: bold;
}
	</style>
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
			<li><a href="pending_request_donor.php">Pending Request</a></li>
			<li><a href="d_blood_tips.php">Blood Tips</a></li>
			<li><a href="d_contribute.php">Contribute</a></li>
			<li class="active"><a href="">More &nabla;</a>
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
				<label>Contact US</label>
			</div>
		<div class="icon1">
			<div class="box">
			<i class="fa fa-map-marker fa-3x" aria-hidden="true"> </i>
			</div>
			<label>Location <span class="details"><br>Vasna,Ahmedabad<br>Gujarat-07</span></label>
		</div>
		<div class="icon2">
			<div class="box">
				<i class="fa fa-phone fa-3x" aria-hidden="true"></i>
			</div>	
			<label>Call Us (24*7) <span class="details"><br>(+91) 8849364239<br>(+91) 9409324362</span></label>
		</div>
		<div class="icon3">
			<span class="box">
			<i class="fa  fa-envelope-o fa-2x" aria-hidden="true"> </i>
			</span>
			<label>MAIL US<span class="details"><br>smitshah22050602@gmail.com</span></label>
		</div>
		<div class="contactbox">
		<h3> Get In Touch </h3>
		<form id="myform" action="get_in_touch.php" method="post">
			<span><i class="fa fa-user" aria-hidden="true"></i></span>
			<input type="text" name="name" placeholder="Name" required pattern="[A-z ]+$" title="Use only character & whitespace" autocomplete="off"><br>
			<span><i class="fa fa-envelope" aria-hidden="true"></i></span>
			<input type="text" name="email" placeholder="Email" required pattern="[A-Za-z0-9._%+-]+@[A-z0-9.-]+\.[a-z]{2,}$" title="Email id is not Valid"><br>
			<span><i class="fa fa-phone" aria-hidden="true" autocomplete="off"></i></span>
			<input type="text" name="contactnumber" placeholder="Contact number" required pattern="^[1-9]{1}[0-9]{9}$" title="Number is not valid" autocomplete="off"><br>
			<span><i class="fa fa-comments" aria-hidden="true"></i></span>
			<input type="textarea" name="message" placeholder="Message" required autocomplete="off">
			<div class="btn">
				<input type="submit" name="submit" value="Send">
			</div>
		</form>
    	</div>
		<div class="map" id="googleMap">
			
		</div>
		<?php
	      include 'footer.php';
	    ?>
	</body>

	<script>
		function myMap() 
		{
			var mapProp={
  				center:new google.maps.LatLng( 23.003992, 72.546074),
  				zoom:17,
  			};
			var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
			var marker = new google.maps.Marker({position: myCenter});
			marker.setMap(map);
		}

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

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/additional-methods.min.js"></script>
	<script>
	jQuery.validator.addMethod("checkemail", function(value, element) {
  	return this.optional( element ) || /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i.test( value );
	}, 'Please enter a valid email address.');
	$(document).ready(function () {
    $('#myform').validate({ 
        rules: {
            name: {
                required: true,
                whitespace:true,
             	lettersonly:true,
            },
           email:{
            	required:true,
            	checkemail:true,
            },
            contactnumber:{
            	required:true,
            	minlength:10,
            	maxlength:10,
            	digits:true,
            },
            message: {
				required: true,
        	},   
        },
        messages:{
        	name:{
        		required:"Name is required",
        		lettersonly:"Enter Letters Only",
        	},
        	email:{
        		required:"Email is required",
        		checkemail:"Enter Proper Email",

        	},
        	contactnumber:{
				required:"Phone Number is required",
				minlength:"Enter Contect-Number 10digits",
				maxlength:"Enter Contect-Number 10digits",
				digits:"Enter 10 digits",
			},
        	message: {

        		required: "Message is required",
        	},
        },
			
        });
    });
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZK0uJbBBwV5Py86MYBuH7w6ScyHoekto&callback=myMap">
	</script>
</html>