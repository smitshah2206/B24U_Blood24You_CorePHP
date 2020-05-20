<?php
	include('connection.php');
	if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$address=$_POST['address'];
		$email=$_POST['email'];
		$contactnumber=$_POST['contactnumber'];
		$pincode=$_POST['pincode'];
		$city=$_POST['city'];
		$state=$_POST['state'];
		$amount=$_POST['amount'];
		$query="INSERT INTO contribution(`name`,`address`,`email`,`contactnumber`,`pincode`,`city`,`state`,`amount`) VALUES ('".$name."','".$address."','".$email."','".$contactnumber."','".$pincode."','".$city."','".$state."','".$amount."')";
		$result=mysqli_query($conn,$query);
		if($result)
		{
			echo "<script> alert('Thank You..!!!');window.location='contribute.php'; </script>";
		}
		else
		{
			echo "<script> alert('Error');window.location='contribute.php'; </script>";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="CSS\stylecontribute.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style type="text/css">
		.nav > ul > li:nth-child(6)
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
			<label>Contribute</label>	
		</div>
		<div class="center">
			<hr>		
			<label>OR</label>
		</div>
		<div class="image">
			<h3>We are also accept BHIM UPI Payment</h3>
			<div class="qr">
				<img src="Image\qr.jpg">				
			</div>
			<div class="apps">
				<img src="Image\apps.png">
			</div>
		</div>
		<div class="card">
			<form action="contribute.php" method="post" id="myform">
				<div class="login">
					<h3>How Much Would you like to Donate ?</h3>
					<div class="circle circle1">
						<i onclick="f1()">$100</i>
					</div>		
					<div class="circle circle2">
						<i onclick="f2()">$500</i>
					</div>
					<div class="circle circle3">
						<i onclick="f3()">$1000</i>
					</div>
					<div class="circle circle4">
						<i onclick="f4()">$2000</i>
					</div>
					<div class="circle circle5">
						<i onclick="f5()">$5000</i>
					</div>
					<h4>OR</h4>
					<input type="number" name="amount1" id="ir" placeholder="Enter Amount" onkeyup="l()" required autocomplete="off">
				</div>
				<div class="contact">
					<h3>Receipt Details</h3>
					<table>
						<tr>
							<td>
								<label>Full Name:-</label>
								<input type="text" name="name" id="fname" required pattern="[A-z ]+$" title="Use only character & whitespace" autocomplete="off">
							</td>
							<td rowspan="2">
								<label>Address(Optional):-</label>
								<textarea name="address" placeholder="---Type---" ></textarea>
							</td>
						</tr>
						<tr>
							<td>
								<label>Email Id:-</label>
								<input type="email" name="email" required pattern="[A-Za-z0-9._%+-]+@[A-z0-9.-]+\.[a-z]{2,}$" title="Email id is not Valid" autocomplete="off">
							</td>
						</tr>
						<tr>
							<td>
								<label>Mobile Number:-</label>
								<input type="text" name="contactnumber" required pattern="^[1-9]{1}[0-9]{9}$" title="Number is not valid" autocomplete="off">
							</td>
							<td>
								<label>Pincode(Optional):-</label>
								<input type="text" name="pincode" pattern="^[0-9]{6}$" title="Pincode is not valid" autocomplete="off">
							</td>	
						</tr>
						<tr>
							<td>
								<label>City(Optional):-</label>
								<input type="text" name="city" pattern="[A-z]+$" title="Use only character" autocomplete="off">
							</td>
							<td>
								<label>State(Optional):-</label>
								<input type="text" name="state"pattern="[A-z]+$" title="Use only character" autocomplete="off">
							</td>
						</tr>
						<tr>
							<td colspan="2" style="background-color:#ecf0f1;">
								<label class="amountlabel">Total Amount</label>
								<input type="text" name="amount" class="amount" id="cr" value="0" readonly>
								<span class="btn"><input type="submit" name="submit" value="Process To Pay"></span>
							</td>
						</tr>
					</table>
				</div>
				</form>
			</div>
				<!--Responsive Table-->
			<div class="rcard">
				<form action="contribute.php" method="post" id="myform">
				<div class="login">
					<h3>How Much Would you like to Donate ?</h3>
					<div class="circle circle1">
						<i onclick="f1()">$100</i>
					</div>		
					<div class="circle circle2">
						<i onclick="f2()">$500</i>
					</div>
					<div class="circle circle3">
						<i onclick="f3()">$1000</i>
					</div>
					<div class="circle circle4">
						<i onclick="f4()">$2000</i>
					</div>
					<div class="circle circle5">
						<i onclick="f5()">$5000</i>
					</div>
					<h4>OR</h4>
					<input type="number" name="amount1" id="ir1" placeholder="Enter Amount" onkeyup="l()" required autocomplete="off">
				</div>
				<div class="rcontact">
					<h3>Receipt Details</h3>
					<table>
						<tr>
							<td>
								<label>Full Name:-</label>
								<input type="text" name="name"pattern="[A-z ]+$" title="Use only character & whitespace" required autocomplete="off">
							</td>
						</tr>
						<tr>
							<td >
								<label>Address(Optional):-</label>
								<textarea name="address" placeholder="---Type---"></textarea>
							</td>
						</tr>
						<tr>
							<td>
								<label>Email Id</label>
								<input type="email" name="email"  required pattern="[A-Za-z0-9._%+-]+@[A-z0-9.-]+\.[a-z]{2,}$" title="Email id is not Valid" autocomplete="off">
							</td>
						</tr>
						<tr>
							<td>
								<label>Mobile Number</label>
								<input type="text" name="contactnumber" required pattern="^[1-9]{1}[0-9]{9}$" title="Number is not valid" autocomplete="off">
							</td>
						</tr>
						<tr>
							<td>
								<label>Pincode(Optional):-</label>
								<input type="text" name="pincode" pattern="^[0-9]{6}$" title="Pincode is not valid" autocomplete="off">
							</td>	
						</tr>
						<tr>
							<td>
								<label>City(Optional):-</label>
								<input type="text" name="city"pattern="[A-z ]+$" title="Use only character" autocomplete="off">
							</td>
						</tr>
						<tr>
							<td>
								<label>State(Optional):-</label>
								<input type="text" name="state"pattern="[A-z ]+$" title="Use only character" autocomplete="off">
							</td>
						</tr>
						<tr>
							<td  class="lasttd">
								<label class="amountlabel">Total Amount</label>
								<input type="number" name="amount" id="cr1" class="amount" value="0" readonly>
								<span class="btn"><input type="submit" name="submit" value="Process To Pay"></span>
							</td>
						</tr>
					</table>
				</div>
				
			</form>
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
               	whitespace:true,
            },
        
        },
        messages:{
        	fname:{
        		required:"firstname is required",
        		lettersonly:"enter letters only",
        	},
        },
    });

});
</script>
s
</body>
<script type="text/javascript">
	function l()
	{
		var x=document.getElementById('ir');
		var y=document.getElementById('ir1');
		document.getElementById('cr').value=x.value;
		document.getElementById('cr1').value=y.value;
	}
	function f1()
	{
		document.getElementById('ir').value=100;
		document.getElementById('cr').value=100;
		document.getElementById('ir1').value=100;
		document.getElementById('cr1').value=100;		
	}
	function f2()
	{
		document.getElementById('ir').value=500;
		document.getElementById('cr').value=500;
		document.getElementById('ir1').value=500;
		document.getElementById('cr1').value=500;
	}
	function f3()
	{
		document.getElementById('ir').value=1000;
		document.getElementById('cr').value=1000;
		document.getElementById('ir1').value=1000;
		document.getElementById('cr1').value=1000;
	}
	function f4()
	{
		document.getElementById('ir').value=2000;
		document.getElementById('cr').value=2000;
		document.getElementById('ir1').value=2000;
		document.getElementById('cr1').value=2000;
	}
	function f5()
	{
		document.getElementById('ir').value=5000;
		document.getElementById('cr').value=5000;
		document.getElementById('ir1').value=5000;
		document.getElementById('cr1').value=5000;
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