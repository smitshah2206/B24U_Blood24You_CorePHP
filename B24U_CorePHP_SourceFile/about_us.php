<?php
	include('connection.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="CSS\styleaboutus.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style type="text/css">
		.nav > ul > li:nth-child(7)
		{
			color: white;
			background-color: black;
		}
	</style>
</head>
<body >
		<?php 
			include 'header.php';
		?>
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

</html>