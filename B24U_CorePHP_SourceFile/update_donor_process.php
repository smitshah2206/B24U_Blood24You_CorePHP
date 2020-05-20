<?php
session_start();
include('connection.php');
include('sendemail.php');
if (isset($_POST['submit'])) 
{ 
	if ($_POST['submit'] =="Update") 
	{
		if($_POST['user_name']==$_SESSION['user_name'])
		{
			if($_POST['user_email']==$_SESSION['user_email'])
			{
				if($_POST['user_number']==$_SESSION['user_number'])
				{
					$otp=rand(1000, 9999);
					$mailsubject="One Time Password";
					$mailbody="OTP :" .$otp; 
					$mail_status=sendOTP($_POST['user_email'],$mailsubject,$mailbody);
								$phone=$_POST['user_number'];
								if ($mail_status == 1) 
								{
									$_SESSION['otp']=$otp;
									$_SESSION['user_name'] = $_POST['user_name'];
									$_SESSION['user_full_name'] = $_POST['user_full_name'];
									$_SESSION['user_email'] = $_POST['user_email'];
									$_SESSION['password'] = md5($_POST['password']);
									$_SESSION['confirm_password'] = $_POST['confirm_password'];
									$_SESSION['user_number'] = $_POST['user_number'];
									$_SESSION['Address'] = $_POST['Address'];
									$_SESSION['pincode'] = $_POST['pincode'];
									$_SESSION['city'] = $_POST['city'];
									$_SESSION['state'] = $_POST['state'];					
									$_SESSION['date_of_birth'] = $_POST['date_of_birth'];
									$_SESSION['gender'] = $_POST['gender'];
									$_SESSION['blood_group'] = $_POST['blood_group'];
									$_SESSION['weight'] = $_POST['weight'];
									$_SESSION['created_date']=date("Y-m-d h:i:sa");
									echo '<script> alert("OTP send To Your register mail id & contact number");
												window.location= "otp_form_donor.php";</script>';	
								}
								else
								{
									echo '<script> alert("Error."); 
									window.location = " update_donor.php"; </script>';
								}
				}
				else
				{
					$sql="SELECT user_number FROM donorlogin WHERE user_number='".$_POST['user_number']."' AND status=0";
						$result=mysqli_query($conn,$sql);
						$count=mysqli_num_rows($result);
						if($result)
						{
							if($count == 1)
							{
								echo '<script> alert("Contact Number is already registered Please use another Number.");
					  			window.location = " update_donor.php"; </script>';
							}
							else
							{
								$otp=rand(1000, 9999);
								$mailsubject="One Time Password";
								$mailbody="OTP :" .$otp; 
								$mail_status=sendOTP($_POST['user_email'],$mailsubject,$mailbody);
								$phone=$_POST['user_number'];
								if ($mail_status == 1) 
								{
									$_SESSION['otp']=$otp;
									$_SESSION['user_name'] = $_POST['user_name'];
									$_SESSION['user_full_name'] = $_POST['user_full_name'];
									$_SESSION['user_email'] = $_POST['user_email'];
									$_SESSION['password'] = md5($_POST['password']);
									$_SESSION['confirm_password'] = $_POST['confirm_password'];
									$_SESSION['user_number'] = $_POST['user_number'];
									$_SESSION['Address'] = $_POST['Address'];
									$_SESSION['pincode'] = $_POST['pincode'];
									$_SESSION['city'] = $_POST['city'];
									$_SESSION['state'] = $_POST['state'];
									$_SESSION['date_of_birth'] = $_POST['date_of_birth'];
									$_SESSION['gender'] = $_POST['gender'];
									$_SESSION['blood_group'] = $_POST['blood_group'];
									$_SESSION['weight'] = $_POST['weight'];
									$_SESSION['created_date']=date("Y-m-d h:i:sa");
									echo '<script> alert("OTP send To Your register mail id & contact number");
												window.location= "otp_form_donor.php";</script>';	
								}
								else
								{
									echo '<script> alert("Error."); 
									window.location = " update_donor.php"; </script>';
								}
							}
						}
						else
						{
							echo '<script> alert("Error."); 
									window.location = " update_donor.php"; </script>';
						}
				}
			}
			else
			{
					$sql="SELECT user_email FROM donorlogin WHERE user_email='".$_POST['user_email']."' AND status=0 ";
							$result=mysqli_query($conn,$sql);
							$count=mysqli_num_rows($result);
							if($result)
							{
								if($count == 1 )
								{
									echo '<script> alert("Email Id is already registered Please use another Email Id.");
								  window.location = " update_donor.php"; </script>';
								}
								else
								{
									if($_POST['user_number']==$_SESSION['user_number'])
									{
										$otp=rand(1000, 9999);
										$mailsubject="One Time Password";
										$mailbody="OTP :" .$otp; 
										$mail_status=sendOTP($_POST['user_email'],$mailsubject,$mailbody);
													$phone=$_POST['user_number'];
													if ($mail_status == 1) 
													{
														$_SESSION['otp']=$otp;
														$_SESSION['user_name'] = $_POST['user_name'];
														$_SESSION['user_full_name'] = $_POST['user_full_name'];
														$_SESSION['user_email'] = $_POST['user_email'];
														$_SESSION['password'] = md5($_POST['password']);
														$_SESSION['confirm_password'] = $_POST['confirm_password'];
														$_SESSION['user_number'] = $_POST['user_number'];
														$_SESSION['Address'] = $_POST['Address'];
														$_SESSION['pincode'] = $_POST['pincode'];
														$_SESSION['city'] = $_POST['city'];
														$_SESSION['state'] = $_POST['state'];
														$_SESSION['date_of_birth'] = $_POST['date_of_birth'];
														$_SESSION['gender'] = $_POST['gender'];
														$_SESSION['blood_group'] = $_POST['blood_group'];
														$_SESSION['weight'] = $_POST['weight'];
														$_SESSION['created_date']=date("Y-m-d h:i:sa");
														echo '<script> alert("OTP send To Your register mail id & contact number");
																	window.location= "otp_form_donor.php";</script>';	
													}
													else
													{
														echo '<script> alert("Error."); 
														window.location = " update_donor.php"; </script>';
													}
									}
									else
									{
										$sql="SELECT user_number FROM donorlogin WHERE user_number='".$_POST['user_number']."' AND status=0 ";
											$result=mysqli_query($conn,$sql);
											$count=mysqli_num_rows($result);
											if($result)
											{
												if($count == 1)
												{
													echo '<script> alert("Contact Number is already registered Please use another Number.");
										  			window.location = " update_donor.php"; </script>';
												}
												else
												{
													$otp=rand(1000, 9999);
													$mailsubject="One Time Password";
													$mailbody="OTP :" .$otp; 
													$mail_status=sendOTP($_POST['user_email'],$mailsubject,$mailbody);
													$phone=$_POST['user_number'];
													if ($mail_status == 1) 
													{
														$_SESSION['otp']=$otp;
														$_SESSION['user_name'] = $_POST['user_name'];
														$_SESSION['user_full_name'] = $_POST['user_full_name'];
														$_SESSION['user_email'] = $_POST['user_email'];
														$_SESSION['password'] = md5($_POST['password']);
														$_SESSION['confirm_password'] = $_POST['confirm_password'];
														$_SESSION['user_number'] = $_POST['user_number'];
														$_SESSION['Address'] = $_POST['Address'];
														$_SESSION['pincode'] = $_POST['pincode'];
														$_SESSION['city'] = $_POST['city'];
														$_SESSION['state'] = $_POST['state'];
														$_SESSION['date_of_birth'] =$_POST['date_of_birth']; 
														$_SESSION['gender'] = $_POST['gender'];
														$_SESSION['blood_group'] = $_POST['blood_group'];
														$_SESSION['weight'] = $_POST['weight'];
														$_SESSION['created_date']=date("Y-m-d h:i:sa");
														echo '<script> alert("OTP send To Your register mail id & contact number");
																	window.location= "otp_form_donor.php";</script>';	
													}
													else
													{
														echo '<script> alert("Error."); 
														window.location = " update_donor.php"; </script>';
													}
												}
											}
											else
											{
												echo '<script> alert("Error."); 
														window.location = " update_donor.php"; </script>';
											}
									}
								}
							}
							else
							{
								echo '<script> alert("Error."); 
												window.location = "update_donor.php"; </script>';
							}
			}
		}
		else
		{
					
			$sql="SELECT user_name FROM donorlogin WHERE user_name='".$_POST['user_name']."' AND status=0";
					$result=mysqli_query($conn,$sql);
					$count=mysqli_num_rows($result);
					if ($result) 
					{
						if ( $count == 1)
						{
							echo '<script> alert("User Name is already registered Please use another User name.");
								  			window.location = " update_donor.php"; </script>';
						}
						else
						{
							if($_POST['user_email']==$_SESSION['user_email'])
							{
								if($_POST['user_number']==$_SESSION['user_number'])
								{
									$otp=rand(1000, 9999);
									$mailsubject="One Time Password";
										$mailbody="OTP :" .$otp; 
										$mail_status=sendOTP($_POST['user_email'],$mailsubject,$mailbody);
												$phone=$_POST['user_number'];
												if ($mail_status == 1) 
												{
													$_SESSION['otp']=$otp;
													$_SESSION['user_name'] = $_POST['user_name'];
													$_SESSION['user_full_name'] = $_POST['user_full_name'];
													$_SESSION['user_email'] = $_POST['user_email'];
													$_SESSION['password'] = md5($_POST['password']);
													$_SESSION['confirm_password'] = $_POST['confirm_password'];
													$_SESSION['user_number'] = $_POST['user_number'];
													$_SESSION['Address'] = $_POST['Address'];
													$_SESSION['pincode'] = $_POST['pincode'];
													$_SESSION['city'] = $_POST['city'];
													$_SESSION['state'] = $_POST['state'];
													$_SESSION['date_of_birth'] = $_POST['date_of_birth'];
													$_SESSION['gender'] = $_POST['gender'];
													$_SESSION['blood_group'] = $_POST['blood_group'];
													$_SESSION['weight'] = $_POST['weight'];
													$_SESSION['created_date']=date("Y-m-d h:i:sa");
													echo '<script> alert("OTP send To Your register mail id & contact number");
																window.location= "otp_form_donor.php";</script>';	
												}
												else
												{
													echo '<script> alert("Error."); 
													window.location = " update_donor.php"; </script>';
												}
								}
								else
								{
									$sql="SELECT user_number FROM donorlogin WHERE user_number='".$_POST['user_number']."' AND status=0 ";
										$result=mysqli_query($conn,$sql);
										$count=mysqli_num_rows($result);
										if($result)
										{
											if($count == 1)
											{
												echo '<script> alert("Contact Number is already registered Please use another Number.");
									  			window.location = " update_donor.php"; </script>';
											}
											else
											{
												$otp=rand(1000, 9999);
												$mailsubject="One Time Password";
												$mailbody="OTP :" .$otp; 
												$mail_status=sendOTP($_POST['user_email'],$mailsubject,$mailbody);
												$phone=$_POST['user_number'];
												if ($mail_status == 1) 
												{
													$_SESSION['otp']=$otp;
													$_SESSION['user_name'] = $_POST['user_name'];
													$_SESSION['user_full_name'] = $_POST['user_full_name'];
													$_SESSION['user_email'] = $_POST['user_email'];
													$_SESSION['password'] = md5($_POST['password']);
													$_SESSION['confirm_password'] = $_POST['confirm_password'];
													$_SESSION['user_number'] = $_POST['user_number'];
													$_SESSION['Address'] = $_POST['Address'];
													$_SESSION['pincode'] = $_POST['pincode'];
													$_SESSION['city'] = $_POST['city'];
													$_SESSION['state'] = $_POST['state'];
													$_SESSION['date_of_birth'] = $_POST['date_of_birth'];
													$_SESSION['gender'] = $_POST['gender'];
													$_SESSION['blood_group'] = $_POST['blood_group'];
													$_SESSION['weight'] = $_POST['weight'];
													$_SESSION['created_date']=date("Y-m-d h:i:sa");
													echo '<script> alert("OTP send To Your register mail id & contact number");
																window.location= "otp_form_donor.php";</script>';	
												}
												else
												{
													echo '<script> alert("Error."); 
													window.location = " update_donor.php"; </script>';
												}
											}
										}
										else
										{
											echo '<script> alert("Error."); 
													window.location = " update_donor.php"; </script>';
										}
								}
							}
							else
							{
									$sql="SELECT user_email FROM donorlogin WHERE user_email='".$_POST['user_email']."' AND status=0 ";
											$result=mysqli_query($conn,$sql);
											$count=mysqli_num_rows($result);
											if($result)
											{
												if($count == 1 )
												{
													echo '<script> alert("Email Id is already registered Please use another Email Id.");
												  window.location = " update_donor.php"; </script>';
												}
												else
												{
													if($_POST['user_number']==$_SESSION['user_number'])
													{
														$otp=rand(1000, 9999);
														$mailsubject="One Time Password";
														$mailbody="OTP :" .$otp; 
														$mail_status=sendOTP($_POST['user_email'],$mailsubject,$mailbody);
																	$phone=$_POST['user_number'];
																	if ($mail_status == 1) 
																	{
																		$_SESSION['otp']=$otp;
																		$_SESSION['user_name'] = $_POST['user_name'];
																		$_SESSION['user_full_name'] = $_POST['user_full_name'];
																		$_SESSION['user_email'] = $_POST['user_email'];
																		$_SESSION['password'] = md5($_POST['password']);
																		$_SESSION['confirm_password'] = $_POST['confirm_password'];
																		$_SESSION['user_number'] = $_POST['user_number'];
																		$_SESSION['Address'] = $_POST['Address'];
																		$_SESSION['pincode'] = $_POST['pincode'];
																		$_SESSION['city'] = $_POST['city'];
																		$_SESSION['state'] = $_POST['state'];
																		$_SESSION['date_of_birth'] =$_POST['date_of_birth'];
																		$_SESSION['gender'] = $_POST['gender'];
																		$_SESSION['blood_group'] = $_POST['blood_group'];
																		$_SESSION['weight'] = $_POST['weight'];
																		$_SESSION['created_date']=date("Y-m-d h:i:sa");
																		echo '<script> alert("OTP send To Your register mail id & contact number");
																					window.location= "otp_form_donor.php";</script>';	
																	}
																	else
																	{
																		echo '<script> alert("Error."); 
																		window.location = " update_donor.php"; </script>';
																	}
													}
													else
													{
														$sql="SELECT user_number FROM donorlogin WHERE user_number='".$_POST['user_number']."' AND status=0 ";
															$result=mysqli_query($conn,$sql);
															$count=mysqli_num_rows($result);
															if($result)
															{
																if($count == 1)
																{
																	echo '<script> alert("Contact Number is already registered Please use another Number.");
														  			window.location = " update_donor.php"; </script>';
																}
																else
																{
																	$otp=rand(1000, 9999);
														$mailsubject="One Time Password";
														$mailbody="OTP :" .$otp; 
														$mail_status=sendOTP($_POST['user_email'],$mailsubject,$mailbody);
																	$phone=$_POST['user_number'];
																	if ($mail_status == 1) 
																	{
																		$_SESSION['otp']=$otp;
																		$_SESSION['user_name'] = $_POST['user_name'];
																		$_SESSION['user_full_name'] = $_POST['user_full_name'];
																		$_SESSION['user_email'] = $_POST['user_email'];
																		$_SESSION['password'] = md5($_POST['password']);
																		$_SESSION['confirm_password'] = $_POST['confirm_password'];
																		$_SESSION['user_number'] = $_POST['user_number'];
																		$_SESSION['Address'] = $_POST['Address'];
																		$_SESSION['pincode'] = $_POST['pincode'];
																		$_SESSION['city'] = $_POST['city'];
																		$_SESSION['state'] = $_POST['state'];
																		$_SESSION['date_of_birth'] = $_POST['date_of_birth'];
																		$_SESSION['gender'] = $_POST['gender'];
																		$_SESSION['blood_group'] = $_POST['blood_group'];
																		$_SESSION['weight'] = $_POST['weight'];
																		$_SESSION['created_date']=date("Y-m-d h:i:sa");
																		echo '<script> alert("OTP send To Your register mail id & contact number");
																					window.location= "otp_form_donor.php";</script>';	
																	}
																	else
																	{
																		echo '<script> alert("Error."); 
																		window.location = " update_donor.php"; </script>';
																	}
																}
															}
															else
															{
																echo '<script> alert("Error."); 
																		window.location = " update_donor.php"; </script>';
															}
													}
												}
											}
											else
											{
												echo '<script> alert("Error."); 
																window.location = "update_donor.php"; </script>';
											}
							}
						}
					}
					else
					{
						echo '<script> alert("Error."); 
												window.location = " update_donor.php"; </script>';
					}
		}
		
	}
	else if($_POST['submit'] == "Sucess")
	{
		$otp=$_SESSION['otp'];
		$otpno=$_POST['otpno'];
		if(!strcmp($otp,$otpno))
		{
			$otp=$_SESSION['otp'];
			$did=$_SESSION['id'];
			$user_name=$_SESSION['user_name'];
			$user_full_name=$_SESSION['user_full_name'];
			$user_email=$_SESSION['user_email'];
			$password=$_SESSION['password'];
			$confirm_password=$_SESSION['confirm_password']; 
			$user_number=$_SESSION['user_number'];
			$Address=$_SESSION['Address'];
			$pincode=$_SESSION['pincode'];
			$city=$_SESSION['city'];
			$state=$_SESSION['state'];	
			$date_of_birth=$_SESSION['date_of_birth'];
			$gender=$_SESSION['gender'];
			$blood_group=$_SESSION['blood_group'];
			$weight=$_SESSION['weight'];
			$created_date=$_SESSION['created_date'];
			$old_name=$_SESSION['old_user_name'];
			$query = "UPDATE donorlogin SET user_name='".$user_name."',user_full_name='".$user_full_name."',user_email='".$user_email."',password='".$password."',confirm_password='".$confirm_password."',user_number='".$user_number."',Address='".$Address."',pincode='".$pincode."',city='".$city."',state='".$state."',date_of_birth='".$date_of_birth."',gender='".$gender."',blood_group='".$blood_group."',weight='".$weight."',created_date='".$created_date."',created_by='".$user_full_name."' WHERE id='".$did."' ";
			$result = mysqli_query($conn, $query);
			if($result)
			{
				$query ="SELECT id FROM donorlogin WHERE user_name='".$user_name."' AND status=0 ";
				$result=mysqli_query($conn,$query);
				if($result)
				{
					$row = mysqli_fetch_array($result);
					$id=$row['id'];
				}
					$queryc = "RENAME TABLE `$old_name` TO `$user_name`";
					$resultc = mysqli_query($conn, $queryc);
					$attachmailsubject="Account is created..!!!";
	    			$attachmailbody= "<!DOCTYPE html>
										<html>
											<head>
												<style>
													table
													{
														position: absolute;
														top: 0%;
														height: 34%;
														left: 0%;
														width: 100%;
														background-color: #ecf0f1;
														border:5px solid black;
														font-size: 18px;
														font-weight: bold;
														font-family: 'popins',sans-serif;
														
													}
													td
													{
														border-bottom: 1px solid black;
														border-right: 1px solid black;
													}
													td:nth-child(odd)
													{
														position: relative;
														text-align: center;
														color: #e74c3c;
													}
													td:nth-child(even)
													{
														position: relative;
														text-align: center;
														color: #c44569;
													}
													th
													{
														position: relative;
														margin: 0px;
														text-align: center;
														background-color: #3498db;
														background-color: #1D2671;
														color: white;
														font-weight: bold;
														font-size: 20px;
													}
													a
													{
														text-decoration: underline;
														color: black;

													}
												</style>
											</head>
											<body>
												<table>
													<tr>
														<th colspan='2'>
															Login Details..!!
														</th>
													</tr>
													<tr>
														<td>
															Donor ID :
														</td>
														<td>"
															.$id.
														"</td>
													</tr>
													<tr>
														<td>
															User Name :
														</td>
														<td>"
															.$user_name.
														"</td>
													</tr>
													<tr>
														<td>
															Name:
														</td>
														<td>"
															.$user_full_name.
														"</td>	
													</tr>
													<tr>
														<td>
															Email:
														</td>
														<td>"
															.$user_email.
														"</td>
													</tr>
													<tr>
														<td>
															Contact Number:
														</td>
														<td>"
															.$user_number.
														"</td>
													</tr>
													<tr>
														<td>
															Blood Group:
														</td>
														<td>"
															.$blood_group.
														"</td>
													</tr>
													<tr>
														<th colspan='2'>
															Copyrights 2019	
															<br>
															Powered By <a href='https://www.linkedin.com/in/smit-shah-60823514a'>Smit Shah</a>
														</th>
													</tr>
												</table>
											</body>
										</html>";
					$mail_status=sendOTP($user_email,$attachmailsubject,$attachmailbody);
					echo '<script> alert("Thank you...!!!! Your Details is Updated. ");
					window.location = " login_donor.php"; </script>';
					session_destroy();

			}
			else
			{
				echo '<script> alert("Error.");
								window.location="update_donor.php"; </script>';
			}
		}
		else
		{
			echo '<script> alert("Invalid OTP");
					window.location="otp_form_donor.php";</script>';	
		}
	}
	else if ($_POST['submit'] == "Resend") 
	{
		$email=$_SESSION['user_email'];
		$otp=$_SESSION['otp'];
		$resendmailsubject="Resend Otp Successful";
		$resendmailbody="OTP" . $otp;
		$mail_status=sendOTP($email,$resendmailsubject,$resendmailbody);
		if ($mail_status == 1) 
		{
			echo '<script> alert("OTP Resend Successfulyy To your register Email id and contact number");
						window.location="otp_form_donor.php";</script>';	
		}
		else
		{
			echo '<script> alert("Error");
					window.location="otp_form_donor.php";</script>';
		}
	}
}
 
?>