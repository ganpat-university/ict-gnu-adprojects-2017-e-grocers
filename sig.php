<?php
	session_start();
	$servername="localhost";
	$username="root";
	$passwords="";
	$dbname="project";
	$db = mysqli_connect($servername,$username,$passwords);
	$password='';
	$conf_password='';
	$user_name='';
	mysqli_select_db($db,$dbname);
	if($db)
	{
		echo"connection successful";
	
	}
	else{
		echo"no connection";
	}
	if(isset($_GET['usname']))
	{
	$user_name = $_GET['usname'];
	}
	if(isset($_GET['fname']))
	{
	$first_name = $_GET['fname'];
	}
	if(isset($_GET['lname']))
	{
	$last_name = $_GET['lname'];
	}
	if(isset($_GET['ph']))
	{
	$phone = $_GET['ph'];
	}
	if(isset($_GET['pass']))
	{
    $password =$_GET['pass'];
	}
	if(isset($_GET['cpass']))
	{
	$conf_password =$_GET['cpass'];
	}
	
	//$q = "select * from registration where username='$user_name', password='$password'";
	
	if($password==$conf_password && $user_name!=null && $first_name!=null && $last_name!=null && $phone!=null)
	{
		$query="Insert into registration(username,first_name,last_name,phone,password,conf_password) values ('$user_name','$first_name','$last_name','$phone','$password','$conf_password')";
		mysqli_query($db,$query);
			header("Location:login.php");
			
	}
?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
						<title>SignUp</title>
				<style>
			      body{
			      	background-image: url("");
							background-size: cover;
							position: relative;
			      }

						.signup{
							width:360px;
							margin:50px auto ;
							font-family:Cambria,"Hoefler Text","Liberation Serif",Times,"Times New Roman",serif;
							border-radius: 80px;
							border: 2px solid #ccc;
							padding: 10px,40px,25px;
							margin-top: 140px;
						}

							input[type=text],input[type=password],input[type=Number]{
								width: 90%;
				        padding: 10px;
				        margin-top: 8px;
				        border: 1px solid #ccc;
				        padding-left: 5px;
				        font-size: 16px;
				        font-family: :Cambria,"Hoefler Text","Liberation Serif",Times,"Times New Roman",serif;
							}

							input[type=submit]
							{
								width:20%;
							}

							p{
								color: white;
							}
							h1{
								color: white;
								align-items: center;
							}



				</style>
	</head>

	<body>
			<h1>E-Groccers</h1>
			<div class="signup">
				<br>
				<br>
				<br>
				 <h1 align="center"> sign up </h1>
			<form  method="GET" style="text-align:center">
				<input type="text" placeholder="Enter a user_name" name="usname"><br><br>
				<input type="text" placeholder="Enter a first name" name="fname"><br><br>
				<input type="text" placeholder="Enter a last name" name="lname"><br><br>
				<input type="Number" placeholder="Enter a phone_number" name="ph"><br><br>
				<input type="password" placeholder="Enter a password" name="pass"><br><br>
				<input type="password" placeholder="Enter a confirm password" name="cpass"><br><br>
				<input type="submit" value="submit" name="sign">
			<p>
				Already a member<a href ="loginn.php">Login</a>
			</p>
		</form>
		</div>

	</body>
</html>

