		<div class="header fix">
			<img src="Image\logo.png">
			<form>
				<div class="navbtn">
					<a href="login_donor.php"><input type="button" name="submit" value="Login"></a>
					<a href="registar_donor.php"><input type="button" name="reset" value="Become Donor"></a>
					<i class="fa fa-bars fa-2x " aria-hidden="true" onclick="responcenav()"></i>
				</div>
			</form>
		</div>
		<div class='nav fix' id="responcenav">
				<ul>
				<li id="responcebutton"><a href="login_donor.php">LogIn Donor</a><a href="registar_donor.php">Become Donor</a></li>
				<li><a href='index.php'>Home</a></li>
				<li><a href='blood_tips.php'>Blood Tips</a></li>
				<li><a>Request Portal &nabla;</a>
					<ul>
						<li><a href='request_blood.php'>Request Blood</a></li>
						<li><a href='pending_request.php'>Show Pending Request</a></li>
					</ul>
				</li>
				<li><a>Event Portal &nabla;</a>
					<ul>
						<li><a href='registar_event.php'>Register as a Event</a></li>
						<li><a href='login_event.ph'>Login as a Event</a></li>
					</ul>
				</li>
				<li><a href='contribute.php'>Contribute</a></li>
				<li><a>More &nabla;</a>
					<ul>
						<li><a href='about_us.php'>About Us</a></li>
						<li><a href='get_in_touch.php'>Contact Us</a></li>
					</ul>
				</li>
				</ul>
		</div>
		<script type="text/javascript">
			function responcenav() 
			{
				var temp=document.getElementById('responcenav');
				if(temp.style.display=='block')
				{
					temp.style.display='none';
				}
				else
				{
					temp.style.display='block';	
				}
			}
		</script>