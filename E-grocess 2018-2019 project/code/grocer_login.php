<?php  
$servername = "localhost";
$username = "root";
$password = "";
$db="project";

$conn = mysqli_connect($servername, $username, $password);
mysqli_select_db($conn,$db);

if(isset($_POST['log']))
{
$us = $_POST['un2'];
$pas = $_POST['pass'];

$sql = "select username, password from grocer";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result))
{
	if($row["username"] == $us && $row['password'] == $pas)
	{
		header("Location:grocer_homepage.php");
	}
	else
	{
		echo 'hii';
	}
}

}
?>
<html>
	<head>
		<style>
		body{
			background-image: url("blacky.jpg");
							background-size: cover;
							position: relative;
		}
		h1{
			color:white;
		}
		p{
			color:white;
		}
	</style>

	</head>
	<body>
	
		<form align="middle" method="POST">>
		    <div id ="head">
				<h1 align="center"> login </h1>
			</div>
			<div id="ad">
				<p><label for="us_name">User_name:-</label>
				<input id="d1" type="text" placeholder="Enter a user_name" name="un2" onkeyup="fun1()"></p>
				<span style="Display:none" id="d2">plz enter user name</span></p>
				
				<p><label for="pass">  password :- </label>
				<input id="d3" type="password" placeholder="Enter a password" name="pass" onkeyup="fun1()"></p>
				<span style="Display:none" id="d2">plz enter user name</span></p>
				
				<input type="submit" value="submit" name="log">
			</div>
			<p>
				Not yet a member<a href ="grocer_sigup.php"> Sign up</a>
			</p>
		</form>
	</body>
</html>

