<?php
	session_start();
	include ('connection.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="CSS\styleaboutus.css">
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
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
			<label>About Us</label>
		</div>
		<div class="contentbox">
			<div class="box">
				<h4>What We do ?</h4>
				<p>We connect blood donors with recipients, without any intermediary such as blood banks, for an efficient and seamless process.</p>			
			</div>
			<div class="box">
				<h4>Get Notified..!!!</h4>
				<p>B24U Connect works with network partners to connect blood donors and recipients through an automated SMS service and a web app.</p>			
			</div>
			<div class="box">
				<h4>Tottaly Free</h4>
				<p>B24U Connect's ultimate goal is to provide an easy-to-use, easy-to-access, fast, efficient, and reliable way to get life-saving blood, totally Free of cost.</p>
			</div>
			<div class="box">
				<h4>Save Life</h4>
				<p>We are a non profit foundation and our main objective is to make sure that everything is done to protect vulnerable persons. Help us by making a gift !!!</p>
			</div>
		</div>
		<div class="counterbox">
			<div class="counter">
				<span class="meter">
					<?php
						$sql="SELECT * FROM donorlogin";
						$result=mysqli_query($conn,$sql);
						$a=0;
						while($row=mysqli_fetch_array($result))
						{
							$a++;
						}
						if($a<10)
						{
							$fi=0;
							$se=0;
							$th=0;
							$fo=$a;
						}
						else if($a<100)
						{
							$fi=0;
							$se=0;
							$th=substr($a, 0,1);
							$fo=substr($a, 1,2);
						}
						else if($a<1000)
						{
							$fi=0;
							$se=substr($a, 0,1);
							$th=substr($a, 1,1);
							$fo=substr($a, 2,2);
						}
						else
						{
							$fi=substr($a, 0,1);
							$se=substr($a, 1,1);
							$th=substr($a, 2,1);
							$fo=substr($a, 3,3);
						}
						echo "<span class='block'>
							<p>".$fi."</p>
						</span>";
						echo "<span class='block'>
							<p>".$se."</p>
						</span>";
						echo "<span class='block'>
							<p>".$th."</p>
						</span>";
						echo "<span class='block'>
							<p>".$fo."</p>
						</span>";
					?>
					<i class="fa fa-plus" aria-hidden="true"></i>
				</span>
				<span class="label">
					<p>Blood Donors</p>
				</span>
			</div>
			<div class="counter">
				<span class="meter">
					<?php
						$sql="SELECT * FROM requestblood";
						$result=mysqli_query($conn,$sql);
						$a=0;
						while($row=mysqli_fetch_array($result))
						{
							$a++;
						}
						if($a<10)
						{
							$fi=0;
							$se=0;
							$th=0;
							$fo=$a;
						}
						else if($a<100)
						{
							$fi=0;
							$se=0;
							$th=substr($a, 0,1);
							$fo=substr($a, 1,2);
						}
						else if($a<1000)
						{
							$fi=0;
							$se=substr($a, 0,1);
							$th=substr($a, 1,1);
							$fo=substr($a, 2,2);
						}
						else
						{
							$fi=substr($a, 0,1);
							$se=substr($a, 1,1);
							$th=substr($a, 2,1);
							$fo=substr($a, 3,3);
						}
						echo "<span class='block'>
							<p>".$fi."</p>
						</span>";
						echo "<span class='block'>
							<p>".$se."</p>
						</span>";
						echo "<span class='block'>
							<p>".$th."</p>
						</span>";
						echo "<span class='block'>
							<p>".$fo."</p>
						</span>";
					?>
					<i class="fa fa-plus" aria-hidden="true"></i>
				</span>
				<span class="label">
					<p>Blood Requests</p>
				</span>
			</div>
			<div class="counter">
				<span class="meter">
					<?php
						$sql="SELECT * FROM eventlogin";
						$result=mysqli_query($conn,$sql);
						$a=0;
						while($row=mysqli_fetch_array($result))
						{
							$a++;
						}
						if($a<10)
						{
							$fi=0;
							$se=0;
							$th=0;
							$fo=$a;
						}
						else if($a<100)
						{
							$fi=0;
							$se=0;
							$th=substr($a, 0,1);
							$fo=substr($a, 1,2);
						}
						else if($a<1000)
						{
							$fi=0;
							$se=substr($a, 0,1);
							$th=substr($a, 1,1);
							$fo=substr($a, 2,2);
						}
						else
						{
							$fi=substr($a, 0,1);
							$se=substr($a, 1,1);
							$th=substr($a, 2,1);
							$fo=substr($a, 3,3);
						}
						echo "<span class='block'>
							<p>".$fi."</p>
						</span>";
						echo "<span class='block'>
							<p>".$se."</p>
						</span>";
						echo "<span class='block'>
							<p>".$th."</p>
						</span>";
						echo "<span class='block'>
							<p>".$fo."</p>
						</span>";
					?>
					<i class="fa fa-plus" aria-hidden="true"></i>
				</span>
				<span class="label">
					<p>Event Organize</p>
				</span>
			</div>
		</div>





		<?php
	      include 'footer.php';
	    ?>
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