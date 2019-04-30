<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="project";

$conn = mysqli_connect($servername, $username, $password);
mysqli_select_db($conn,$db);
	if(isset($_POST['pro_add']))
	{
		$image=$_FILES['img']['name'];
		$pro_name=$_POST['pn'];
		$code=$_POST['cd'];
		$price=$_POST['pr'];
		$id=$_POST['i'];
		$image1=$_FILES['img']['name'];
		$dir='/product_images';
			
		$insert="Insert into tblproduct values ('$id','$pro_name','$code','$image',$price)";
		if(mysqli_query($conn,$insert))
		{
			move_uploaded_file($_FILES['img']['tmp_name'],"pr/$image1");
			echo "done";
		}
		else
		{
			echo "error";
		}
	
	}
	if(isset($_POST['log']))
	{
		
		
		header("Location:grocer_login.php");
	}
	
?>


<html>
	<head>
		<title>home_page</title>
		<style>
		body{
			background-image: url("blacky.jpg");
			background-size: cover;
			position: relative;
			color:white;
			}
		.h2{
			  padding: 10px,40px,25px;
		}
		
		</style>
	</head>
	<body>
	<h1 align="center">ADD Grocery </h1>
	 <div class="h2">
		<form action="grocer_homepage.php" 	method="POST" enctype="multipart/form-data" align="center">
			
			<input type="file" name="img">
			</br>
			</br>
			id:-
			<input type="text" name="i">
			</br>
			</br>
			Name:-
			<input type="text" name="pn">
			</br>
			</br>
			Code:-
			<input type="text" name="cd">
			</br>
			</br>
			price:-
			<input type="text" name="pr">
			</br>
			</br>
			<input type="submit" name="pro_add" value="Add product">
			
			<input type="submit" name="log" value="logout">
			
		</form>
	</div>
	</body>
</html>