<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="CSS\styleregisterdonor.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	<style type="text/css">
		.error
		{
			color: red;
		}
	</style>
</head>
<body>
		<?php 
			include 'header.php';
		?>
			<div class="heading fix">	
				<label>Ragister as a Donor</label>
			</div>
		<div class="outerbox">
			<div class="fixedbox">
				<span class="content">
					<h4>Hello, Friend!</h4>
					<p>Enter your personal details and start journey with us</p>
				</span>
			</div>
			<div class="scrollbox">
				<div class="registerdonor">
					<form action="process.php" method="POST" id="myform">
						<div class="login">
							<h3>Login Details</h3>
							<table>
								<tr>
									<td colspan="2">
										<label class="username">User Name:-</label>
										<input type="text" name="user_name" required pattern="^[A-Za-z0-9._%+-@]{5,10}$" title="Enter a username between 5 to 10 letter"  autocomplete="off">
									</td>
								</tr>
								<tr>
									<td>
										<label>Full Name:-</label>
										<input type="text" name="user_full_name" required pattern="[A-z ]+$" title="Use only character & whitespace"  autocomplete="off">
									</td>	
									<td>
										<label>Email Id:-</label>
										<input type="email" name="user_email" required pattern="[A-Za-z0-9._%+-]+@[A-z0-9.-]+\.[a-z]{2,}$" title="Email id is not Valid"  autocomplete="off">
									</td>
								</tr>
								<tr>
									<td>
										<label>Password:-</label>
										<input type="password"name="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters" id="password"  autocomplete="off">
									</td>
									<td>
										<label>Confirm Password:-</label>
										<input type="text" name="confirm_password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters" id="confirm_password"  autocomplete="off">
									</td>
								</tr>
							</table>
						</div>
						<div class="contact">
							<h3>Contact Details</h3>
							<table>
								<tr>
									<td>
										<label>Mobile Number:-</label>
										<input type="text" name="user_number" required pattern="^[1-9]{1}[0-9]{9}$" title="Number is not valid"  autocomplete="off">
									</td>
									<td rowspan="2">
										<label>Address:-</label>
										<textarea name="Address" placeholder="---Type---" required></textarea>
									</td>
								</tr>
								<tr>
									<td>
										<label>Pincode</label>
										<input type="text" name="pincode" required pattern="^[0-9]{6}$" title="Pincode is not valid"  autocomplete="off">
									</td>	
								</tr>
								<tr>
									<td>
										<label>City:-</label>
										<input type="text" name="city" value="Ahmedabad"   autocomplete="off" readonly>
									</td>
									<td>
										<label>State:-</label>
										<input type="text" name="state" value="Gujarat"   autocomplete="off" readonly>
									</td>
								</tr>
							</table>
						</div>
							<div class="personal">
							<h3>Personal Details</h3>
							<table>
								<tr>
									<td>
										<label>Date Of Birth:-</label>
										<input type="date" name="date_of_birth" required  autocomplete="off">
									</td>
									<td>
										<label>Gender:-</label>
										<div class="radio">
											<input type="radio" name="gender" class="radio1" value="Male"><span class="radioname" required  autocomplete="off">Male</span>
											<input type="radio" class="radio2" name="gender" value="Female"><span class="radioname" required  autocomplete="off">Female</span>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<label>Blood Group</label>
										<input type="text" list="bloodgroup" name="blood_group" placeholder="----Select----" required  autocomplete="off">
										<datalist id="bloodgroup">
											<option value="A+"></option>
											<option value="A-"></option>
											<option value="AB+"></option>
											<option value="B+"></option>
											<option value="B-"></option>
											<option value="O+"></option>
											<option value="O-"></option>
										</datalist>
									</td>
									<td>
										<label>Weight In Kg [Approx]:-</label>
										<input type="number" name="weight" required  autocomplete="off">
									</td>	
								</tr>
							</table>
						</div>
						<span>
							<input type="checkbox" name="terms" id="checkbox" required  autocomplete="off">
						</span><p>I agree to have my contact details broadcasted to the registered donors of B24U.net</p>
						
						<div class="btn">
							<input type="submit" name="submit" value="Submit">
							<input type="reset" name="submit" value="Reset">
						</div>
						</form>
				</div>

			</div>
		</div>
			
			<!-- Responsive Table -->
			<div class="rregisterdonor">
			<form action="process.php" method="POST" id="myform">
			
				<div class="rlogin">
					<h3>Login Details</h3>
					<table>
						<tr>
							<td >
								<label class="username">User Name:-</label>
								<input type="text" name="user_name" required pattern="^[A-Za-z0-9._%+-@]{5,10}$" title="Enter a username between 5 to 10 letter"  autocomplete="off">
							</td>
						</tr>
						<tr>
							<td>
								<label>Full Name:-</label>
								<input type="text" name="user_full_name" required pattern="[A-z ]+$" title="Use only character & whitespace"  autocomplete="off">
							</td>
						</tr>
						<tr>	
							<td>
								<label>Email Id:-</label>
								<input type="email" name="user_email" required pattern="[A-Za-z0-9._%+-]+@[A-z0-9.-]+\.[a-z]{2,}$" title="Email id is not Valid"  autocomplete="off">
							</td>
						</tr>
						<tr>
							<td>
								<label>Password:-</label>
								<input type="password"name="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters"  autocomplete="off">
							</td>
						</tr>
						<tr>
							<td>
								<label>Confirm Password:-</label>
								<input type="text" name="confirm_password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters"  autocomplete="off">
							</td>
						</tr>
					</table>
				</div>
				<div class="rcontact">
					<h3>Contact Details</h3>
					<table>
						<tr>
							<td>
								<label>Mobile Number:-</label>
								<input type="text" name="user_number" required pattern="^[1-9]{1}[0-9]{9}$" title="Number is not valid"  autocomplete="off">
							</td>
						</tr>
						<tr>
							<td>
								<label>Address:-</label>
								<textarea name="Address" placeholder="---Type---" required ></textarea>
							</td>
						</tr>
						<tr>
							<td>
								<label>Pincode</label>
								<input type="text" name="pincode" required pattern="^[0-9]{6}$" title="Pincode is not valid"  autocomplete="off">
							</td>	
						</tr>
						<tr>
							<td>
								<label>City:-</label>
								<input type="text" name="city" value="Ahmedabad" readonly>
							</td>
						</tr>
						<tr>
							<td>
								<label>State:-</label>
								<input type="text" name="state" value="Gujarat" readonly>
							</td>
						</tr>
					</table>
				</div>
					<div class="rpersonal">
					<h3>Personal Details</h3>
					<table>
						<tr>
							<td>
								<label>Date Of Birth:-</label>
								<input type="date" name="date_of_birth" required autocomplete="off">
							</td>
						</tr>
						<tr>
							<td>
								<label>Gender:-</label>
								<div class="radio">
									<input type="radio" name="gender" class="radio1" required ><span class="radioname">Male</span>
									<input type="radio" class="radio2" name="gender" required ><span class="radioname">Female</span>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<label>Blood Group</label>
								<input type="text" list="bloodgroup" name="blood_group" placeholder="----Select----" required autocomplete="off">
								<datalist id="bloodgroup">
									<option value="A+"></option>
									<option value="A-"></option>
									<option value="AB+"></option>
									<option value="B+"></option>
									<option value="B-"></option>
									<option value="O+"></option>
									<option value="O-"></option>
								</datalist>
							</td>
						</tr>
						<tr>
							<td>
								<label>Weight In Kg [Approx]:-</label>
								<input type="number" name="weight" required autocomplete="off">
							</td>	
						</tr>
					</table>
				</div>


				<span>
					<input type="checkbox" name="terms" id="checkbox" required >
				</span><p>I agree to have my contact details broadcasted to the registered donors of B24U.net</p>
				<div class="btn">
					<input type="submit" name="submit" value="Submit">
					<input type="reset" name="submit" value="Reset">
				</div>
				</form>
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
            password:{
            	required:true,
            	minlength:6,
            	maxlength:15,

            },
            confirm_password:{
            	required:true,
            	minlength:6,
            	maxlength:15,
            	equalTo: "#password",


            },  
        },
        messages:{
        	
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
			
        },
    });

});
</script>

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
</script>
</html>