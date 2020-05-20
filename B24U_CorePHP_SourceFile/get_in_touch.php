<?php
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
		.nav > ul > li:nth-child(7)
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
				<label>Contact Us</label>
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
			<input type="text" name="name" placeholder="Name" required pattern="[A-z ]+$" title="Use only character & whitespace"  autocomplete="off"><br>
			<span><i class="fa fa-envelope" aria-hidden="true"></i></span>
			<input type="text" name="email" placeholder="Email" required pattern="[A-Za-z0-9._%+-]+@[A-z0-9.-]+\.[a-z]{2,}$" title="Email id is not Valid"  autocomplete="off"><br>
			<span><i class="fa fa-phone" aria-hidden="true"></i></span>
			<input type="text" name="contactnumber" placeholder="Contact number" required pattern="^[1-9]{1}[0-9]{9}$" title="Number is not valid"  autocomplete="off"><br>
			<span><i class="fa fa-comments" aria-hidden="true"></i></span>
			<input type="textarea" name="message" placeholder="Message" required  autocomplete="off">
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