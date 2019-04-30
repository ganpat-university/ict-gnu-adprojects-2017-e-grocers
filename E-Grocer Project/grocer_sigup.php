<?php
	
	$servername="localhost";
	$username="root";
	$passwords="";
	$dbname="project";
	$db = mysqli_connect($servername,$username,$passwords);
	$password='';
	$conf_password='';
	$user_name='';
	mysqli_select_db($db,$dbname);
	
	if(isset($_POST['sign']))
	{
		 $name=$_POST['usname'];
		 $fname=$_POST['fname'];
		 $lname=$_POST['lname'];
		 $add=$_POST['add'];
		 $ph=$_POST['ph'];
		 $pass=$_POST['pass'];
		 $cpass=$_POST['cpass'];
		 $length=strlen($ph);

		if(empty($name))
		{
			$error="username is required";
		}

		if(empty($fname))
		{
			$error1="firstname is required";
		}

		if(empty($lname))
		{
			$error2="lastname is required";
		}

		if(empty($ph))
		{
			$error3="phone number is required";
		}
		else if($length==10)
		{
			$error3="phone number is not validate";
			
		}
		if(empty($add))
		{
			$error6="address is required";
		}

		if(empty($pass))
		{
			$error4="password is required";
		}

		if(empty($cpass))
		{
			$error5="confirm passsword is required";
		}

	}
	
	if($pass==$cpass && $name!=null && $fname!=null && $lname!=null && $ph!=null && $add!=null && $pass!=null)
	{	
	$query="Insert into grocer values ('$name','$fname','$lname','$add','$ph','$pass','$cpass')";
	mysqli_query($db,$query);
	header("Location:grocer_login.php");
	}
?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
						<title>SignUp</title>
				<style>
			      body{
			      	background-image: url("blacky.jpg");
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

							input[type=text],input[type=password],input[type=Number],
							input[type=textarea]{
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
			<h1 align="center">E-Groccers</h1>
			<div class="signup">
				<br>
				<br>
				<br>
				 <h1 align="center"> grocer_sign up</h1>
			<form  method="POST" style="text-align:center">
				<input type="text" placeholder="Enter a user_name" name="usname"><br><br>
				<p style="color:red">
				<?php
		if(isset($error))
		{
			echo $error;
		}
		?></p>
				<input type="text" placeholder="Enter a first name" name="fname"><br><br>
				<p style="color:red">
				<?php
		if(isset($error1))
		{
			echo $error1;
		}
		?></p>
				<input type="text" placeholder="Enter a last name" name="lname"><br><br>
				<p style="color:red">
				<?php
		if(isset($error2))
		{
			echo $error2;
		}
		?></p>
				<input type="textarea" placeholder="Enter a address" name="add"><br><br>
				<p style="color:red">
				<?php
		if(isset($error6))
		{
			echo $error6;
		}
		?></p>
				<input type="Number" placeholder="Enter a phone_number" name="ph"><br><br>
				<p style="color:red">
				<?php
		if(isset($error3))
		{
			echo $error3;
		}
		?></p>
				<input type="password" placeholder="Enter a password" name="pass"><br><br>
				<p style="color:red">
				<?php
		if(isset($error4))
		{
			echo $error4;
		}
		?></p>
				<input type="password" placeholder="Enter a confirm password" name="cpass"><br><br>
				<p style="color:red">
				<?php
		if(isset($error5))
		{
			echo $error5;
		}
		?></p>
				<input type="submit" value="submit" name="sign">
			<p>
				Already a member<a href ="grocer_login.php">Login</a>
			</p>
			</form>
			</div>

	</body>
</html>