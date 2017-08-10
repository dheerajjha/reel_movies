<html>
<head>
<?php
	session_start();
	$s_id=$_SESSION['user_id'];
	$c_name=$_GET['c_name'];
	$conn=mysqli_connect("localhost","root","","feedback_system");
	if(mysqli_connect_error())
	{
		echo "Error in connecting to database: ".mysqli_connect_error();
	}
	$sql1="Select * from `course` where c_name='$c_name'";
	$result1 = mysqli_query($conn, $sql1);
	$row1 = mysqli_fetch_assoc($result1);
	$c_id = $row1['c_id'];
	$sql2 = "Select * from `course_exit_status` where s_id=$s_id and c_id=$c_id";
	$result2 = mysqli_query($conn, $sql2);
	if(mysqli_num_rows($result2)>0)
	{
		header("Location: received.html");
	}
	else
	{
		header("Location: course_exit.php?c_name=$c_name");
	}
		

	
?>
</head>
</html>