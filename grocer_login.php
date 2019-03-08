<?php  
$servername = "localhost";
$username = "root";
$password = "";
$db="project";

$conn = mysqli_connect($servername, $username, $password);
mysqli_select_db($conn,$db);

if(isset($_GET['un']))
{
$us = $_GET['un'];
}
if(isset($_GET['pass']))
{
$pas = $_GET['pass'];
}


$sql = "select username, password from grocer";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result))
{
	if($row["username"] == $us && $row['password'] == $pas)
	{
		header("Location:home.php");
	}
	else
	{
		echo 'hii';
	}
}

?>
<html>
	<head>
	
	</head>
	<body>
	
		<form align="middle">
		    <div id ="head">
				<h1 align="center"> login </h1>
			</div>
			<div id="ad">
				<p><label for="us_name">User_name:-</label>
				<input type="text" placeholder="Enter a user_name" name="un"></p>
				
				<p><label for="pass">  password :- </label>
				<input type="password" placeholder="Enter a password" name="pass"></p>
				
				<input type="submit" value="submit">
			</div>
			<p>
				Not yet a member<a href ="sig.php"> Sign up</a>
			</p>
		</form>
	</body>
</html>

