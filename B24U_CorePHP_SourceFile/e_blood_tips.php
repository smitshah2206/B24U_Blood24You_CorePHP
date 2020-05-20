<?php
	session_start();
	include('connection.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="CSS\stylebloodtips.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
.sidenav 
{
  height: 48%;
  width: 0;
  position: fixed;
  z-index:2;
  top: 0;
  left: 100%;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
  left: 78%;
  	width: 300px;
	animation-name:animate;
	animation-duration: 2s; 
	display: none;
}
@keyframes animate
{
	0%
	{
		width: 0px;
		left: 100%;
	}
	100%
	{
		width: 300px;
		left: 78%;
	}
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
	display: block;
	font-size: 40px;
	margin: 9px;
	margin-left:30px;
	margin-bottom: 24px;
	margin-top: 30px;
	position: absolute;	
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
	left: 18%;
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
				<li><a href="event_status.php">Event Status</a></li>
				<li><a href="donor_entry.php" >Donor Entry</a></li>
				<li class="active"><a href="e_blood_tips.php">Blood Tips</a></li>
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
			<label>Blood Tips</label>
		</div>
		<div class="outerbox">
			<div class="box">
				<div class="labelbox" id="l1">
					<label>Who can give blood ?</label>
					<i class="fa fa-plus" aria-hidden="true" id="plus1" onclick="show1()"></i>
					<i class="fa fa-times" aria-hidden="true" id="cross1" onclick="hide1()"></i>
				</div>
				<div class="contantbox" id="contactbox1">
					<p>  Most people can give blood. You can give blood if you:<br><br>
						<span><i class="fa fa-circle" aria-hidden="true"></i></span> Are fit and healthy.<br><br>
						<span><i class="fa fa-circle" aria-hidden="true"></i></span> Weigh over 7 stone 12 lbs or 50kg.<br><br>
						<span><i class="fa fa-circle" aria-hidden="true"></i></span> Are aged between 17 to 66 (or 70 if you have given blood before).<br><br>
						<span><i class="fa fa-circle" aria-hidden="true"></i></span>  Are over 70 and have given blood in the last two years.
					</p>
				</div>
			</div>
			<div class="box">
				<div class="labelbox">
					<label>How often can I give blood ?</label>
					<i class="fa fa-plus" aria-hidden="true" id="plus2" onclick="show2()"></i>
					<i class="fa fa-times" aria-hidden="true" id="cross2" onclick="hide2()"></i>
				</div>
				<div class="contantbox" id="contactbox2">
					<p>
						<span><i class="fa fa-circle" aria-hidden="true"></i></span>Men can give blood every 12 weeks.<br><br>
						<span><i class="fa fa-circle" aria-hidden="true"></i></span>Women can give blood every 16 weeks.
					</p>
				</div>
			</div>
			<div class="box">
				<div class="labelbox">
					<label>DO donate blood, only if you satisfy all of the following conditions</label>
					<i class="fa fa-plus" aria-hidden="true" id="plus3" onclick="show3()"></i>
					<i class="fa fa-times" aria-hidden="true" id="cross3" onclick="hide3()"></i>
				</div>
				<div class="contantbox" id="contactbox3">
					<p>
						<span><i class="fa fa-check" aria-hidden="true" id="check"></i></span>You are between age group of 18-60 years.<br><br>
						<span><i class="fa fa-check" aria-hidden="true"></i></span>Your weight is 45 kgs or more.<br><br>
						<span><i class="fa fa-check" aria-hidden="true"></i></span>Your hemoglobin is 12.5 gm% minimum.<br><br>
						<span><i class="fa fa-check" aria-hidden="true"></i></span>Your last blood donation was 3 or more months earlier.<br><br>
						<span><i class="fa fa-check" aria-hidden="true"></i></span>You are healthy and have not suffered from malaria, typhoid or other transmissible disease <br>in the recent past.
					</p>
				</div>
			</div>
			<div class="box">
				<div class="labelbox">
					<label>DO NOT donate blood, if you have any of the following conditions</label>
					<i class="fa fa-plus" aria-hidden="true" id="plus4" onclick="show4()"></i>
					<i class="fa fa-times" aria-hidden="true" id="cross4" onclick="hide4()"></i>
				</div>
				<div class="contantbox" id="contactbox4">
					<p>
						<span><i class="fa fa-times" aria-hidden="true"></i></span>Cold / fever in the past 1 week.<br><br>
						<span><i class="fa fa-times" aria-hidden="true"></i></span>Under treatment with antibiotics or any other medication.<br><br>
						<span><i class="fa fa-times" aria-hidden="true"></i></span>Cardiac problems, hypertension, epilepsy, diabetes (on insulin therapy), history of cancer, 
						<br>chronic kidney or liver disease, bleeding tendencies, venereal disease etc.<br><br>
						<span><i class="fa fa-times" aria-hidden="true"></i></span>Major surgery in the last 6 months.<br><br>
						<span><i class="fa fa-times" aria-hidden="true"></i></span>Vaccination in the last 24 hours.<br><br>
						<span><i class="fa fa-times" aria-hidden="true"></i></span>Had a miscarriage in the last 6 months or have been pregnant / lactating in the last one year.<br><br>
						<span><i class="fa fa-times" aria-hidden="true"></i></span>Had fainting attacks during last donation.<br><br>
						<span><i class="fa fa-times" aria-hidden="true"></i></span>Have regularly received treatment with blood products.<br><br>
						<span><i class="fa fa-times" aria-hidden="true"></i></span>Shared a needle to inject drugs/ have history of drug addiction.<br><br>
						<span><i class="fa fa-times" aria-hidden="true"></i></span>Had sexual relations with different partners or with a high risk individual.<br><br>
						<span><i class="fa fa-times" aria-hidden="true"></i></span>Been tested positive for antibodies to HIV.
					</p>
				</div>
			</div>
			<div class="box">
				<div class="labelbox">
					<label>A Healthy Donor</label>
					<i class="fa fa-plus" aria-hidden="true" id="plus5" onclick="show5()"></i>
					<i class="fa fa-times" aria-hidden="true" id="cross5" onclick="hide5()"></i>
				</div>
				<div class="contantbox" id="contactbox5">
					<p> 
						A healthy diet helps ensure a successful blood donation, and also makes you feel better!<br>Check out the following recommended foods to eat prior to your donation.<br><br>
						<span><i class="fa fa-circle" aria-hidden="true"></i></span>Low fat foods<br><br>
						<span><i class="fa fa-circle" aria-hidden="true"></i></span>Iron rich foods
					</p>
				</div>
			</div>
			<div class="box box6">
				<div class="labelbox" >
					<label>About Blood Donation</label>
					<i class="fa fa-plus" aria-hidden="true" id="plus6" onclick="show6()"></i>
					<i class="fa fa-times" aria-hidden="true" id="cross6" onclick="hide6()"></i>
				</div>
				<div class="contantbox" id="contactbox6">
					<p> 
						<span><i class="fa fa-circle" aria-hidden="true"></i></span>Donating blood is a life saving measure especially when you have a rare blood type.<br><br>
						<span><i class="fa fa-circle" aria-hidden="true"></i></span>Blood donation is safe and simple.<br><br>
						<span><i class="fa fa-circle" aria-hidden="true"></i></span>We can save upto 3 to 4 precious lives by donating blood.<br><br>
						<span><i class="fa fa-circle" aria-hidden="true"></i></span>It takes only about 10 minutes to donate blood - less than the time of an average telephone<br>call.
					</p>
				</div>
			</div>
			<?php
		      include 'footer.php';
		    ?>
		</div >
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
		function show1()
		{
			document.getElementById("plus1").style.display="none";
			document.getElementById("cross1").style.display="inline-block";
			document.getElementById("contactbox1").style.display="inline-block";
		}	
		function hide1()
		{
			document.getElementById("plus1").style.display="inline-block";
			document.getElementById("cross1").style.display="none";
			document.getElementById("contactbox1").style.display="none";
		}


		function show2()
		{
			document.getElementById("plus2").style.display="none";
			document.getElementById("cross2").style.display="inline-block";
			document.getElementById("contactbox2").style.display="inline-block";
		}	
		function hide2()
		{
			document.getElementById("plus2").style.display="inline-block";
			document.getElementById("cross2").style.display="none";
			document.getElementById("contactbox2").style.display="none";
		}


		function show3()
		{
			document.getElementById("plus3").style.display="none";
			document.getElementById("cross3").style.display="inline-block";
			document.getElementById("contactbox3").style.display="inline-block";
		}	
		function hide3()
		{
			document.getElementById("plus3").style.display="inline-block";
			document.getElementById("cross3").style.display="none";
			document.getElementById("contactbox3").style.display="none";
		}


		function show4()
		{
			document.getElementById("plus4").style.display="none";
			document.getElementById("cross4").style.display="inline-block";
			document.getElementById("contactbox4").style.display="inline-block";
		}	
		function hide4()
		{
			document.getElementById("plus4").style.display="inline-block";
			document.getElementById("cross4").style.display="none";
			document.getElementById("contactbox4").style.display="none";
		}

		function show5()
		{
			document.getElementById("plus5").style.display="none";
			document.getElementById("cross5").style.display="inline-block";
			document.getElementById("contactbox5").style.display="inline-block";
		}	
		function hide5()
		{
			document.getElementById("plus5").style.display="inline-block";
			document.getElementById("cross5").style.display="none";
			document.getElementById("contactbox5").style.display="none";
		}

		function show6()
		{
			document.getElementById("plus6").style.display="none";
			document.getElementById("cross6").style.display="inline-block";
			document.getElementById("contactbox6").style.display="inline-block";
		}	
		function hide6()
		{
			document.getElementById("plus6").style.display="inline-block";
			document.getElementById("cross6").style.display="none";
			document.getElementById("contactbox6").style.display="none";
		}
	</script>
</html>