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
		$target='picture/'.$image;
		
		$insert="Insert into tblproduct values ('$id','$pro_name','$code','$image',$price)";
		if(mysqli_query($conn,$insert))
		{
			move_uploaded_file($_FILES['img']['name'],$target);
			echo "done";
		}
		else
		{
			echo "error";
		}
	
	}
?>


<html>
	<head>
		<title>home_page</title>
	</head>
	<body>
		<form action="grocer_homepage.php" method="POST" enctype="multipart/form-data">
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
			
		</form>
	</body>
</html>