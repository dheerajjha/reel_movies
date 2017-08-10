<?php
@extract($_REQUEST);
$first=$_POST['form_firstname'];
$last=$_POST['form_lastname'];
$username=$_POST['username'];
$password=$_POST['userpassword'];
$conn=mysqli_connect("localhost","root","","online_movies");
	if(mysqli_connect_error())
	{
		echo "Error in connecting to database: ".mysqli_connect_error();
	}
  $sql="INSERT INTO `users`(`form_firstname`,`form_lastname`,`username`,`userpassword`)VALUES('$first','$last','$username','$password')";
  if(mysqli_query($conn,$sql))
	{
				header("Location:signup3.php");
				exit();
				
	}
	else
	{
		echo "<h1 align='center'>Failure!!!Sorry,Retry</h1><br/>";
	}
?>