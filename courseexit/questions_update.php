<html>
<head>
<?php
	session_start();
	$s_id=$_SESSION['user_id'];
	$q1 = $_POST['q1'];
	$q2 = $_POST['q2'];
	$q3 = $_POST['q3'];
	$q4 = $_POST['q4'];
	$q5 = $_POST['q5'];
	$c_id = $_POST['c_id'];
	$conn=mysqli_connect("localhost","root","","feedback_system");
	if(mysqli_connect_error())
	{
		echo "Error in connecting to database: ".mysqli_connect_error();
	}
	$sql="Update `questions` set `q1`='$q1',`q2`='$q2',`q3`='$q3',`q4`='$q4',`q5`='$q5' where `c_id`=$c_id";
	$result = mysqli_query($conn, $sql);
	if($result)
	{
		header("Location: teacherdashboard.php");
	}
	else
	{
		echo "Cannot update questions";
	}
	
?>
</head>
</html>