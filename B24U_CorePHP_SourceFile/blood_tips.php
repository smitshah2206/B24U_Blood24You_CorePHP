<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="CSS\stylebloodtips.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style type="text/css">
		.nav > ul > li:nth-child(3)
		{
			color: white;
			background-color: black;
		}
	</style>
</head>
<body>
		<?php 
			include 'header.php';
		?>
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