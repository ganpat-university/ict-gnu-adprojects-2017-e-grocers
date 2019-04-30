<?php  
$servername = "localhost";
$username = "root";
$password = "";
$db="project";

$conn = mysqli_connect($servername, $username, $password);
mysqli_select_db($conn,$db);

if(isset($_POST['sub']))
{
$us = $_POST['un1'];
$pas = $_POST['pass'];



$sql = "select username, password from registration";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result))
{
	if($row["username"] == $us && $row['password'] == $pas)
	{
		header("Location:main.php");
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
	<script>
			function fun1()
			{
				var v1=document.getElementById("d1");
				var v2=document.getElementById("d2");
				var v3=document.getElementById("d3");
				var v4=document.getElementById("d4");

				if(v1.value=="")
				{
					alert("plz enter a user name");
				}
				/*else{
					v2.style.display="none";
					v1.style.border="1px solid black";
				}*/
				else if(v3.value=="")
				{
					alert("plz enter a password");
				
				}
				/*else{
					v4.style.display="none";
					v3.style.border="1px solid black";
				}*/
			}

		</script>
	</head>
	<body>
	
		<form align="middle" method="POST">
		    <div id ="head">
				<h1 align="center"> login </h1>
			</div>
			<div id="ad">
				<p><label for="us_name">User_name:-</label>
				<input id="d1" type="text" placeholder="Enter a user_name" name="un1"   >
			

				
				<p><label for="pass">  password :- </label>
				<input id="d3" type="password" placeholder="Enter a password" name="pass">
	
				</p>
				<p>

				<input type="submit" value="submit" name="sub" onclick="fun1()" >
				</p>
			</div>
			<p>
				Not yet a member<a href ="sign.php"> Sign up</a>
			</p>
		</form>
	</body>
</html>

